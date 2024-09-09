<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFID Card Value Lookup</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1e1e1e;
            color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1s ease;
        }

        h2 {
            color: #00c853;
            text-align: center;
            margin-bottom: 20px;
            animation: slideInLeft 1s ease;
        }

        form {
            text-align: center;
            animation: slideInRight 1s ease;
        }

        label {
            color: #00bfa5;
        }

        input[type="text"], input[type="submit"], .num-pad {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            background-color: #303030;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            color: #ffffff;
        }

        input[type="text"]:focus, input[type="submit"]:hover, .num-pad:hover {
            outline: none;
            background-color: #00bfa5;
            color: #ffffff;
        }

        .num-pad {
            width: 50px;
            cursor: pointer;
        }

        .keypad {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 5px;
            margin-bottom: 10px;
        }

        .value {
            font-size: 24px;
            color: #00c853;
            font-weight: bold;
            margin-top: 20px;
            animation: slideInUp 1s ease;
            background-color: #00bfa5;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @keyframes slideInLeft {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInUp {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <h2>Enter Card UID to Check Balance</h2>
    <form action="check_value.php" method="POST">
        <div class="keypad">
            <button class="num-pad" type="button" onclick="addNum('1')">1</button>
            <button class="num-pad" type="button" onclick="addNum('2')">2</button>
            <button class="num-pad" type="button" onclick="addNum('3')">3</button>
            <button class="num-pad" type="button" onclick="addNum('4')">4</button>
            <button class="num-pad" type="button" onclick="addNum('5')">5</button>
            <button class="num-pad" type="button" onclick="addNum('6')">6</button>
            <button class="num-pad" type="button" onclick="addNum('7')">7</button>
            <button class="num-pad" type="button" onclick="addNum('8')">8</button>
            <button class="num-pad" type="button" onclick="addNum('9')">9</button>
            <button class="num-pad" type="button" onclick="addNum('0')">0</button>
            <button class="num-pad" type="button" onclick="clearNum()">C</button>
        </div>
        <label for="uid">Enter UID:</label><br>
        <input type="text" id="uid" name="uid" required readonly><br><br>
        <input type="submit" value="Check Value">
    </form>

    <!-- Value display area -->
    <div class="value">
        <!-- Value will be displayed here -->
    </div>

    <script>
        function addNum(num) {
            var uidField = document.getElementById('uid');
            uidField.value += num;
        }

        function clearNum() {
            var uidField = document.getElementById('uid');
            uidField.value = '';
        }
    </script>
</body>
</html>