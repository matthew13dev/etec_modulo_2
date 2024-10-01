<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login-container">
        <form action="./login-action.php" method="post">
            <div class="title">
                <div class="bar"></div>
                <h2>Hello,</br><span>Welcome!</span></h2>
            </div>
            <p>
                <label for="email">
                    <input type="email" placeholder="The email that connects you" name="email" id="email" required>
                </label>
            </p>
            <p>
                <label for="pass">
                    <input type="password" placeholder="Type the key to your world" name="password" id="pass" required>
                </label>
            </p>

            <p><button>Enter</button></p>

            <div class="link">
                <p>Don't have an account? <a href="./singup.php">Sign up here.</a></p>
            </div>

        </form>
    </div>
</body>

</html>