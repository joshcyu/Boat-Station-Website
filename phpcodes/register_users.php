<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        .header {
            position: relative;
            text-align: center;
            margin-bottom: 40px; /* Added margin */
        }
        h1, h2, h3 {
            position: relative;
            width: 100%;
            top: 0;
            left: 0;
            right: 50px;
            opacity: 0; /* Initially hidden */
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }
        h1 {
            font-family: serif, Georgia;
            color: white;
            font-size: 50px;
            margin-top: 20px; /* Adjusted margin */
            animation-name: slideFromLeft;

        }
        h2 {
            font-family: serif, Georgia;
            color: black;
            font-size: 30px;
            margin-right: 20px;
            margin-top: 70px; /* Adjusted margin */
            animation-name: slideFromRight;
        }
        h3 {
            font-family: sans-serif, Arial;
            color: black;
            font-size: 15px;
            margin-right: 20px;
            radius:30px; /* Adjusted margin */
            animation-name: slideFromRight;
        }
        p {
            font-family: serif, Georgia;
            color: white;
            font-size: 30px;
            margin-right: 20px; /* Adjusted margin */
            animation-name: slideFromRight;
        }
        body {
            font-family: Arial, sans-serif;
            background-image: url("port.jpg");
            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 80px;
             background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            
        }
        form {
            margin-top:150  px;
            background-color: #3498db;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.3);
            width: 300px;
            height: 650px;
            margin-left:20px;
            opacity: 0; /* Initially hidden */
            animation-duration: 1s;
            animation-fill-mode: forwards;
            animation-name: slideFromBottom;    
        }
        button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            }
        label {
            display: block;
            margin-bottom: 10px;
            color: white;
        }
        input[type="text"],
        input[type="number"],
        input[type="radio"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 30px;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 30px;
            background-color: #2980b9;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #1c6fa0;
        }
        @keyframes slideFromLeft {
            0% { left: -100px; opacity: 0; }
            100% { left: 0; opacity: 1; }
        }

        @keyframes slideFromRight {
            0% { right: -50px; opacity: 0; }
            100% { right: 0; opacity: 1; }
        }

        @keyframes slideFromBottom {
            0% { bottom: -20px; opacity: 0; }
            100% { bottom: 0; opacity: 1; }
        }
        .registration-success {
            display: none;
            text-align: center;
            margin-top: 60px;
        }
        .registration-success h1 {
            margin-top:80px;
            margin-right:10px;
            font-family: Arial, sans-serif;
            color: white;
            font-size: 80px;
        }
        .back-button {
            margin-bottom: 20px;
            position: absolute;
            top: 10px;
            left: 10px;
            display: none;
            font-size: 20px;
            cursor: pointer;
            color: blue;
            padding: 15px 32px;
            font-size:16px;
            font-family: serif, TaHoma;
        }
        .print-button {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 20px 38px;
            }

            /* Hover effect for all buttons */
        button:hover {
            background-color: #555;
            }
        .back-button {
            background-color: #f44336; /* Red */
            color: white;
            margin-bottom: 20px;
            position: absolute;
            top: 10px;
            left: 10px;
            display: none;
            font-size: 20px;
            cursor: pointer;
            color: white;
            padding: 25px 42px;
            font-size:16px;
            font-family: serif, TaHoma;
        }
        .contact-us {
            position: fixed;
            bottom: 20px; /* Adjusted distance from the bottom */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Center horizontally */
            text-align: center;
            color: white;
            font-size: 14px;
            text-decoration: underline;
        }

    
    </style>
</head>
<body>
     <div class="header">
        <h1>Binangonan Boat <br> Port</h1>
        <h2>Registration Form</h2>
        <h3>After you register, you can <br>click print receipt and show the receipt <br>
        ID number to pay and claim the card at <br> the window.</h3>
    </div>
    <div class="contact-us">Questions?<br> For more Information. Contact us @thesisforbinangonan@gmail.com</div>
    <form method="post" action="register_users.php" class="registration-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Input Name...." required><br><br>
        
        <label for="contact">Contact Number:</label>
        <input type="text" id="contact" name="contact" placeholder="Input Contact..." required><br><br>

        <label for="emergency">Emergency Contact:</label>
        <input type="text" id="emergency" name="emergency" placeholder="Input Emergency Contact..." required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" placeholder="Input Age..." required><br><br>
        
        <label for="location">Address:</label>
        <input type="text" id="location" name="location" placeholder="Input Address..." required><br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
       <input type="radio" id="male" name="gender" value="male" required>
        <label for="female">Female</label><br><br>
        
        <<input type="submit" name="submit" value="Register">
    </form>
    </div>
    <div class="registration-success" id="registrationSuccess">
        <!-- Registration success message -->
        <h1>Registration Successful</h1>
        <img src="check.png" alt="Check Logo" style= "width:100px; height: auto">
        <p>Show the receipt ID number to the window to pay and claim the card.</p>
        <button onclick= "window.location.href='receipt.php'" target="_blank">Print Receipt</a>
        <!-- Receipt preview section -->
        <div id="receiptPreview" style="display: none;">
            <h2>Binangonan BOAT Station</h2>
            <p>Name: <span id="printedName"></span></p>
            <p>Contact Number: <span id="printedContact"></span></p>
            <p>Emergency Contact: <span id="printedEmergency"></span></p>
            <p>Age: <span id="printedAge"></span></p>
            <p>Location: <span id="printedLocation"></span></p>
            <p>Gender: <span id="printedGender"></span></p>
            <p>Show your receipt ID number to pay and claim the card.</p>
        </div>
        <button class="back-button" onclick="showRegistrationForm()">Back to Registration</button>
    </div>

    <?php
// Include the file that contains the database connection details
include("connectDB.php");

// Handle user registration
if(isset($_POST['submit'])){
    // Get form data
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $emergency = $_POST['emergency'];
    $age = $_POST['age'];
    $location = $_POST['location'];
    $gender = $_POST['gender'];

    // Insert data into the database
    $sql = "INSERT INTO display_user (name, contact, emergency, age, location, gender) VALUES ('$name', '$contact', '$emergency', '$age', '$location', '$gender')";
    
    if ($conn->query($sql) === TRUE) {
        // Get the ID of the last inserted user
        $last_id = $conn->insert_id;

        // Retrieve the user details of the last inserted user
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

    <script>
          function showReceipt() {
        printReceipt(); // Calls the function to update receipt details
        
        // Show the receipt content
        document.getElementById('receiptPreview').style.display = 'block';

        // Open receipt content in a new tab
        const receiptContent = document.getElementById('receiptPreview').innerHTML;
        const newTab = window.open('');
        newTab.document.write(receiptContent);
    }
    function showRegistrationSuccess() {
        document.querySelector('.header').style.opacity = '0';
        document.querySelector('.registration-form').style.opacity = '0';
        document.getElementById('registrationSuccess').style.display = 'block';

        setTimeout(function () {
            document.querySelector('.header').style.display = 'none';
            document.querySelector('.registration-form').style.display = 'none';
            document.querySelector('.registration-success').style.opacity = '1';
            document.querySelector('.registration-success').style.transform = 'translateY(0)';
            document.querySelector('.back-button').style.display = 'block';
        }, 100); // Adjust the timing (milliseconds) as needed
    }

    function showRegistrationForm() {
        document.getElementById('registrationSuccess').style.display = 'none';
        document.querySelector('.header').style.display = 'block';
        document.querySelector('.registration-form').style.display = 'block';

        setTimeout(function () {
            document.querySelector('.header').style.opacity = '1';
            document.querySelector('.registration-form').style.opacity = '1';
        }, 100); // Adjust the timing (milliseconds) as needed

    }

    function printReceipt() {
        const name = document.getElementById('name').value;
        const contact    = document.getElementById('contact').value;
        const emergency    = document.getElementById('emergency').value;
        const age = document.getElementById('age').value;
        const location = document.getElementById('location').value;
        const gender = document.querySelector('input[name="gender"]:checked').value;

        // Update the receipt preview with the user's input
        document.getElementById('printedName').textContent = name;
        document.getElementById('printedContact').textContent = contact;
        document.getElementById('printedEmergency').textContent = emergency;
        document.getElementById('printedAge').textContent = age;
        document.getElementById('printedLocation').textContent = location;
        document.getElementById('printedGender').textContent = gender;
        // Show the receipt preview
        document.getElementById('receiptPreview').style.display = 'block';
    }

    // Automatically show the receipt if the registration is successful
    <?php
    if (isset($_POST['submit'])) {
        echo 'window.onload = function() { showRegistrationSuccess(); };'; // Show the success message
    }
    ?>
        </script>
        
</body>
</html>