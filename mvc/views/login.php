<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/public/js/function/index.js"></script>
    <title>Document</title>
</head>
<body>
    <section>
        <div class="login-form" id="loginForm">
            <div class="input-wrp">
                <label for="User">User Name</label>
                <input type="text" id="User" placeholder="user name">
            </div>
            <div class="input-wrp">
                <label for="Password">User Password</label>
                <input type="password" id="Password" placeholder="user password">
            </div>
            <div class="button-wrp">
                <button id="Login">Login</button>
            </div>
        </div>
    </section>

    <script>
        fetch('/login-auth', {
            method: 'POST',
            body: JSON.stringify({
                user: select('#User').value(),
                password: select('#Password').value(),
            })
        }) 
            .then(res => res.json())
            .then(data => {
                console.log(data)
            })

    </script>
</body>
</html>