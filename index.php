<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .textbox {
            margin-bottom: 15px;
        }
        .textbox input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .btn {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: none;
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="login-box">
    <img src="logo.png" alt="Logo" style="width: 250px; margin: 20px auto; display: block;">

        <h2>Iniciar sesión</h2>
        <form action="menu.php" method="post">
            <div class="textbox">
                <input type="text" placeholder="Usuario" name="username" value="admin">
            </div>
            <div class="textbox">
                <input type="password" placeholder="Contraseña" name="password" value="admin">
            </div>
            <input type="submit" class="btn" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>
