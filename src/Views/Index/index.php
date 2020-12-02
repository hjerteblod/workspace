<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>

<body id="index">
    <form id="app" @submit="checkForm" action="/bankbalance/total" method="post" novalidate="true">
        <!-- soll erst laden, wenn keine Fehler mehr sind-->

        <h1>Geldautomat</h1><br><br>


        <p v-if="errors.length">
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </p>

        <div class="container">
            <div class="transbox">
                <p>
                    <label for="username">Username:</label>
                    <input id="username" v-model="username" type="text" name="username"><br>

                    <label for="password">Password:</label>
                    <input id="password" v-model="password" type="password" name="password"><br><br>

                    <input type="submit" value="Login">
                </p>
            </div>
        </div>
        <script src="/index.js"></script>

    </form>
</body>

</html>