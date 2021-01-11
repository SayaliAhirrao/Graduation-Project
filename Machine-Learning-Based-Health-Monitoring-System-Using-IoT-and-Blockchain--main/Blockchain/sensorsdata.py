from bs4 import BeautifulSoup
import requests
import re
from bs2json import bs2json

import csv

URL = 'http://localhost/frontendapp/getblock.php'
content = requests.get(URL)

soup = BeautifulSoup(content.text, 'html.parser')
converter = bs2json()

row0 = soup.find('td1') # Extract and return first occurrence of tr

print("=========Sensors Data==========")
print(row0.get_text()) # Print row as text

row1 = soup.find('td2') # Extract and return first occurrence of tr


print(row1.get_text()) # Print row as text


row2 = soup.find('td3') # Extract and return first occurrence of tr


print(row2.get_text()) # Print row as text


row3 = soup.find('td4') # Extract and return first occurrence of tr


print(row3.get_text()) # Print row as text



with open('sensorsdata.csv', 'w', newline='') as file:
    writer = csv.writer(file)
    writer.writerow([row0,row1,row2,row3])

