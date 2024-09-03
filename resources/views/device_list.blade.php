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
        table {
            width: 80%;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px auto; /* Center the table */
            border-radius: 8px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 15px 20px; /* Enhanced padding */
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e0f7fa;
        }
        caption {
            padding: 10px;
            caption-side: top;
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
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
    <div class="button-container">
        <button onclick="downloadCSV()">Download CSV</button>
    </div>
    <table>
        <caption>Soil Data Overview</caption>
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Soil pH</th>
                <th>Soil Moisture (%)</th>
                <th>Soil Temperature (°C)</th>
                <th>Pump State</th>
            </tr>
        </thead>
        <tbody>
            @forelse($readings as $reading)
            <tr>
                <td>{{$reading->time}}</td>
                <td>{{$reading->soil_ph}}</td>
                <td>{{$reading->soil_temperature}}</td>
                <td>{{$reading->soil_moisture}}</td>
                <td>{{$reading->pump_status}}</td>
            </tr>
                    
                        
                    @empty
                        <p>No readings  available</p>
        @endforelse
        </tbody>
    </table>
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
