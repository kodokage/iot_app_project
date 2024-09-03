<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soil Data Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            padding: 10px 20px;
            text-align: right; /* Align navigation to the right */
        }
        .navbar a {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
        }
        .navbar a:hover {
            background-color: #45a049;
        }
        .button-container {
            text-align: right; /* Align button to the right */
            margin: 20px;
        }
        .button-container button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            border-radius: 4px;
            cursor: pointer;
        }
        .button-container button:hover {
            background-color: #45a049;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"], 
        input[type="email"], 
        input[type="tel"], 
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#login">Login</a>
        <a href="#register">Register</a>
        <a href="#locations">Locations</a>
    </div>
    
   
    <h1> Form</h1>
    <form action="/form_post" method="post">
        @csrf()
        <label for="time">Time:</label>
        <input type="text" id="time" name="time" required><br><br>

        <label for="soil_moisture">Soil Moisture:</label>
        <input type="text" id="soil_moisture" name="soil_moisture" required><br><br>

        <label for="soil_temperature">Soil Temperature:</label>
        <input type="text" id="soil_temperature" name="soil_temperature"><br><br>

        <label for="soil_ph">Soil Ph</label>
        <input type="text" id="soil_ph" name="soil_ph"><br><br>

        <label for="pump_status">Pump Status</label>
        <input type="text" id="pump_status" name="pump_status"><br><br>
    
        
        <button type="submit">Submit</button>
    </form>

    <script>
        function downloadCSV() {
            const rows = [
                ["Timestamp", "Soil pH", "Soil Moisture (%)", "Soil Temperature (°C)", "Pump State"],
                ["2024-08-28 08:00", "6.5", "23", "18", "Off"],
                ["2024-08-28 12:00", "7.2", "30", "20", "On"],
                ["2024-08-28 16:00", "5.8", "18", "22", "Off"],
                ["2024-08-28 20:00", "6.9", "25", "19", "On"],
                ["2024-08-29 00:00", "7.0", "28", "21", "Off"]
            ];

            let csvContent = "data:text/csv;charset=utf-8,"
                + rows.map(row => row.join(",")).join("\n");

            const encodedUri = encodeURI(csvContent);
            const link = document.createElement("a");
            link.setAttribute("href", encodedUri);
            link.setAttribute("download", "soil_data.csv");
            document.body.appendChild(link); // Required for Firefox

            link.click(); // This will download the CSV file
        }
    </script>
</body>
</html>
