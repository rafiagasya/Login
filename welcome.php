<?php
// welcome.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        .container {
            padding: 2rem;
        }
        .hotel-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
            background-color: white;
        }
        .hotel-card h2 {
            margin: 0;
            font-size: 1.5rem;
        }
        .hotel-card p {
            margin: 0.5rem 0;
        }
        .hotel-card button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            cursor: pointer;
        }
        .hotel-card button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to Hotel Booking</h1>
    </header>
    <div class="container">
        <div class="hotel-card">
            <h2>Hotel Sunrise</h2>
            <p>Location: Bali, Indonesia</p>
            <p>Price: $100 per night</p>
            <button>Book Now</button>
        </div>
        <div class="hotel-card">
            <h2>Hotel Sunset</h2>
            <p>Location: Jakarta, Indonesia</p>
            <p>Price: $80 per night</p>
            <button>Book Now</button>
        </div>
        <div class="hotel-card">
            <h2>Hotel Paradise</h2>
            <p>Location: Yogyakarta, Indonesia</p>
            <p>Price: $120 per night</p>
            <button>Book Now</button>
        </div>
    </div>
</body>
</html>
