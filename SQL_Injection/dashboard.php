<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Challenge - Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p {
            text-align: center;
        }
        .logout-btn {
            display: block;
            width: 100px;
            padding: 8px;
            background-color: #0077CC;
            color: #ffffff;
            font-weight: bold;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-align: center;
            margin: 20px auto;
        }
        .logout-btn:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome elite Hax0r</h1>
        <p>
            Congratulations! You've successfully bypassed the login form.<br>
            Your flag is: <strong>CTF{SQL_Inj3ct10n_1s_Fun}</strong>
        </p>
        <form action="index.php" method="POST">
            <input type="submit" value="Logout" class="logout-btn">
        </form>
    </div>
</body>
</html>
