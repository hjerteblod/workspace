<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>

<body>
    <form id="app" @submit="checkForm" action="/bankbalance/total" method="post" novalidate="true">
        <!-- soll erst laden, wenn keine Fehler mehr sind-->
        
        <h1>Geldautomat</h1>

        <p>
            <h2>Login</h2>
        </p>

        <p v-if="errors.length">
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </p>

        <p>
            <label for="username">Username</label>
            <input id="username" v-model="username" type="text" name="username">
        </p>

        <p>
            <label for="password">Password</label>
            <input id="password" v-model="password" type="password" name="password">
        </p>

        <p>
            <input type="submit" value="Login">
        </p>

        <script src="/index.js"></script>

    </form>
</body>

</html>