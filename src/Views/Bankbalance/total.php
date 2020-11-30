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
        <h2>Kontostand</h2>

        <table style="width:100%">

            <tr>
                <th>Datum</th>
                <th>Zahlung</th>

            </tr>
            <tr>
                <td>24.11.2020</td>
                <td>300 €</td>
            </tr>
            <tr>
                <td>25.11.2020</td>
                <td>50 €</td>
            </tr>
        </table>
        <br><br>

        <input placeholder="Einzahlung" required type="number" name="Payment" />
        <span class="error"><?= $payment_error ?></span>
        <p><input type="submit" value="Speichern" name="submit" /><br>
            <a href="/">Startseite</a><br>

</body>

</html>