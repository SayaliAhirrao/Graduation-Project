# -*- coding: utf-8 -*-
"""
Created on Fri Jun  1 22:14:01 2018

@author: Yassmin Emam
"""

# Import the libraries
import datetime
import hashlib
import json
from bs4 import BeautifulSoup
import requests
import re
from bs2json import bs2json

import csv
from flask import Flask, jsonify


# Part 1 - Building a Blockchain





class Blockchain:


    def __init__(self):
        self.chain = []
        self.create_block(proof=1, previous_hash='0')

    def create_block(self, proof, previous_hash):
        block = {'index': len(self.chain) + 1,
                 'timestamp': str(datetime.datetime.now()),
                 'proof': proof,
                 'previous_hash': previous_hash}
        self.chain.append(block)
        return block

    def get_previous_block(self):
        return self.chain[-1]

    def proof_of_work(self, previous_proof):
        new_proof = 1
        check_proof = False
        while check_proof is False:
            hash_operation = hashlib.sha256(str(new_proof ** 2 - previous_proof ** 2).encode()).hexdigest()
            if hash_operation[:4] == '0000':
                check_proof = True
            else:
                new_proof += 1
        return new_proof

    def hash(self, block):
        encoded_block = json.dumps(block, sort_keys=True).encode()
        return hashlib.sha256(encoded_block).hexdigest()

    def is_chain_valid(self, chain):
        previous_block = chain[0]
        block_index = 1
        while block_index < len(chain):
            block = chain[block_index]
            if block['previous_hash'] != self.hash(previous_block):
                return False
            previous_proof = previous_block['proof']
            proof = block['proof']
            hash_operation = hashlib.sha256(str(proof ** 2 - previous_proof ** 2).encode()).hexdigest()
            if hash_operation[:4] != '0000':
                return False
            previous_block = block
            block_index += 1
        return True


# Part 2 - Mining our Blockchain

# Creating a Web App
app = Flask(__name__)

# Creating a Blockchain
blockchain = Blockchain()



# Mining a new block
@app.route('/mine_healthdata', methods=['GET'])
def mine_block():
    previous_block = blockchain.get_previous_block()
    previous_proof = previous_block['proof']
    proof = blockchain.proof_of_work(previous_proof)
    previous_hash = blockchain.hash(previous_block)
    block = blockchain.create_block(proof, previous_hash)

    URL = 'http://localhost/frontendapp/getblock.php'
    content = requests.get(URL)

    soup = BeautifulSoup(content.text, 'html.parser')
    converter = bs2json()

    row0 = soup.find('td1')  # Extract and return first occurrence of tr

    print("=========Sensors Data==========")
    print(row0.get_text())  # Print row as text

    row1 = soup.find('td2')  # Extract and return first occurrence of tr

    print(row1.get_text())  # Print row as text

    row2 = soup.find('td3')  # Extract and return first occurrence of tr

    print(row2.get_text())  # Print row as text

    row3 = soup.find('td4')  # Extract and return first occurrence of tr

    print(row3.get_text())  # Print row as text

    response = {'Heartrate': row0.get_text(),
                'Respiration':  row1.get_text(),
                'Spo2': row2.get_text(),
                'Temperature': row3.get_text(),
                'block': block['index'],
                'timestamp': block['timestamp'],
                'proof': block['proof'],
                'previous_hash': block['previous_hash']}
    return jsonify(response), 200


# Getting the full Blockchain
@app.route('/get_Blockchain', methods=['GET'])
def get_chain():
    response = {'chain': blockchain.chain,
                'length': len(blockchain.chain)}
    return jsonify(response), 200


# Checking if the Blockchain is valid
@app.route('/is_valid', methods=['GET'])
def is_valid():
    valid = blockchain.is_chain_valid(blockchain.chain)
    if valid:
        response = {'message': 'All good. The Blockchain is valid.'}
    else:
        response = {'message': 'We have a problem. The Blockchain is not valid.'}
    return jsonify(response), 200


# Running the app
app.run(host="localhost", port=8000, debug=True)