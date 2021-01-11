import os
import pickle
import numpy as np
from sklearn.preprocessing import StandardScaler
from flask import Flask, request, jsonify, render_template
from flask_cors import CORS

app = Flask(__name__, template_folder = os.path.join(os.getcwd(), "frontend"))
#cors = CORS(app, resources={r"/predict": {"origins": "http://localhost:10000"}})

CORS(app)
def predict_test():
    
    age = int(request.json["Age"]);
    sex = request.json["Sex"];
    temp = float(request.json["Temp"]);
    spo2 = int(request.json["SPO2"]);
    heartrate = int(request.json["heartrate"]);
    respiration = int(request.json["Respiration"]);

    sex = 0 if sex == "M" else 1

    features = np.array([age, sex, temp, spo2, heartrate, respiration])
    print(features)
    prediction = model.predict([features])
    output = round(prediction[0], 2)
    
    output = str(output) 
    if output >= '1':
        pred = 'Patient is healthy'

    else:
        pred = 'Patient is not healthy'
    return pred;
        
@app.route("/hello",methods=['POST'])

def helloWorld():

    return "Prediction:"+ predict_test();

model = pickle.load(open(os.path.join(os.path.join(os.getcwd(), "model"), 'model.pkl'), 'rb'))
@app.route('/')

def home():
    return render_template('index.html')

@app.route('/predict',methods=['POST'])
def predict():
    
    age = int(request.form["Age"])
    sex = request.form["Sex"]
    temp = float(request.form["Temp"])
    spo2 = int(request.form["SPO2"])
    heartrate = int(request.form["heartrate"])
    respiration = int(request.form["Respiration"])

    sex = 0 if sex == "M" else 1

    features = np.array([age, sex, temp, spo2, heartrate, respiration])
    print(features)
    prediction = model.predict([features])
    output = round(prediction[0], 2)
    
    output = str(output)    
    if output >= '1':
        pred = 'Patient is healthy'

    else:
        pred = 'Patient is not healthy'
    return render_template('index.html', prediction_text='Model Prediction:{}'.format(pred))

if __name__ == "__main__":
    app.run(debug=True, port=10000)