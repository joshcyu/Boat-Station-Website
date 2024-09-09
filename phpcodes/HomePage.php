<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binangonan Boat Station</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #F0FFF0;
        }
        .navbar {
            background-color: #00BFFF;
        }
        .navbar-brand {
            color: white;
        }
        .navbar-nav .nav-link {
            color: #0000CD;
        }
        .container {
            padding: 2rem;
        }
        .card {
            margin-top: 2rem;
        }
        .intro {
            text-align: center;
            color:beige;
            font-size: 80px;
            position:relative;
        }
        .intro-text {
            margin-top:20px;
            position: relative;
            margin-left: 30px;
            margin-right: 30px;
            font-size: 20px;
            color:black;
            text-align:justify;
        }
        .text-center{
            color:white;
            margin=bottom: 50px;
        }
    </style>
</head>
<body>
<?php include'header.php'; ?> 
    <nav class="navbar navbar-expand-sm">
        <a class="navbar-brand" href="#">University of Rizal System</a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="About.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Contact.php">Contact</a>
            </li>
        </ul>
    </nav>
    <div>
        <h1 class="intro"> Passenger Access Scan System </h1></div>
        <p class="intro-text">Welcome to the future of seamless boat travel! A dedicated team of Electronics Engineering students from the University of Rizal System Morong-Rizal has meticulously designed and constructed an innovative system. Explore the Web-based Passenger Tracker and Monitoring System, a testament to the evolution of maritime technology, powered by RFID technology. Experience the future of boat travel with us—where efficiency meets safety and convenience. </p>
    <div class="container">
        <div class="card">
            <h2 class="card-header">Safety When Riding a Boat</h2>
            <div class="card-body">
                <p class="card-text">
                Discover the unmatched efficiency of our web-based platform, providing real-time tracking of passengers and precise monitoring of boat capacities.
                <br> <br> With our RFID-Enabled Card System, we prioritize safety through accurate passenger tracking and monitoring, ensuring visibility throughout the entire journey and preventing overloading.
                <br> <br> The RFID technology employed allows for real-time visibility, ensuring that every passenger is accounted for during the boarding process and throughout the voyage. 
            </p>
            </div>
        </div>
        <div class="card">
            <h2 class="card-header">RFID Card Technology</h2>
            <div class="card-body">
                <p class="card-text">
                Embark on the future of boat travel with our RFID-Enabled Card System, powered by Radio-Frequency Identification (RFID) technology, ensuring a seamless journey.
                <br> <br> Each smart card, housing an RFID chip, facilitates swift cashless fare payments, reducing waiting times as passengers effortlessly tap their cards on RFID readers at terminals.
                <br> <br> This streamlined process not only boosts efficiency but also prioritizes passenger safety through precise tracking and monitoring.
                </p>
            </div>
        </div>
    </div>
    <footer class="text-center">
        University of Rizal System(2024)
    </footer>
</body>
</html>