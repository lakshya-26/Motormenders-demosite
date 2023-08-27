<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
			background-color:#ded9ee;
        }
        .login-container {
            position: absolute;
            top: 50%;
            left: 50%;
			right: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .login-container label, .login-container input {
            display: block;
            margin-bottom: 10px;
        }
        .login-container input {
            width: 100%;
			padding:5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-container button {
            padding: 10px 20px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
