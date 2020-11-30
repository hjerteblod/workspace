<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <style>
        body {
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 30px;
            color: #777;

        }

        table,
        th,
        td {
            border: 3px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="POST" action="/bankbalance/total">
        <h1>Geldautomat</h1>

        <p>
            <h3>Login</h3>
        </p>

        <fieldset>
            <input placeholder="Username" required type="text" name="Username" />
        </fieldset><span class="error"><?= $username_error ?></span>

        <fieldset>
            <input placeholder="Password" required type="password" name="Password" min="0000" max="9999" />
        </fieldset><span class="error"><?= $password_error ?></span>

        <p><input type="submit" value="Login" name="submit" />
            <!-- TODO hier muss ich noch die Fehler abfangen // Error für number allgemein?-->


</body>

</html>