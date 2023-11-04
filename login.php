<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        /* Set the background of the whole page */
        body {
            background-color: #f7f7f7; /* Light grey background */
            font-family: Arial, sans-serif; /* Set a nice font */
        }

        /* Center the form on the page */
        .login-container {
            background-color: #ffffff; /* White background */
            width: 300px; /* Fixed width */
            margin: 100px auto; /* Center the form on the page */
            padding: 20px; /* Some padding around the form */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* A subtle shadow to float the form */
            border-radius: 8px; /* Rounded corners */
        }

        /* Style the input fields and submit button */
        input[type=text], input[type=password] {
            width: calc(100% - 20px); /* Full width minus padding */
            padding: 10px; /* Some padding */
            margin: 10px 0; /* Some margin */
            border: 1px solid #ddd; /* A subtle border */
            border-radius: 4px; /* Rounded borders */
        }

        input[type=submit] {
            width: 100%; /* Full width */
            padding: 10px; /* Some padding */
            margin: 10px 0; /* Some margin */
            background-color: #5c85d6; /* A blue background */
            color: white; /* White text color */
            border: none; /* No border */
            border-radius: 4px; /* Rounded borders */
            cursor: pointer; /* Pointer cursor on hover */
        }

        input[type=submit]:hover {
            background-color: #3a5ba0; /* A darker blue on hover */
        }

        /* Additional styling for the labels */
        label {
            display: block; /* Each label on a new line */
            margin: 3px 0; /* Some spacing */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form action="authenticate.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
