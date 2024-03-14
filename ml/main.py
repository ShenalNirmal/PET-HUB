from flask import Flask, request, jsonify
from flask_cors import CORS
import joblib
import pandas as pd
import random

app = Flask(__name__)
CORS(app)  # Enable CORS for all routes

# Load the trained SVM model
model_filename = 'svm_model.pkl'
svm_model = joblib.load(model_filename)

# Load the dataset
df = pd.read_csv('pet breeds data.csv')

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Get input values from the request
        input_values = request.json['input_values']

        # Make a single prediction using the loaded model
        prediction = svm_model.predict([input_values])[0]

        # Display details for each unique breed in the dataset
        unique_breeds = df['breed_name'].unique()
        random.shuffle(unique_breeds)

        results = []
        count = 0
        for breed in unique_breeds:
            # Display the custom predictions along with additional details
            predicted_breed_details = df[df['breed_name'] == breed].iloc[0]
            results.append({
                'prediction': prediction,
                'details': predicted_breed_details.drop(['adaptability_value', 'friendliness_value', 'trainability_value', 'health_and_grooming_needs_value', 'physical_needs_value']).to_dict()
            })

            count += 1
            if count >= 3:  # Change this to the desired limit (2 or 3)
                break

        return jsonify({'predictions': results})
    except Exception as e:
        return jsonify({'error': str(e)})

if __name__ == '__main__':
    app.run(port=3000)
