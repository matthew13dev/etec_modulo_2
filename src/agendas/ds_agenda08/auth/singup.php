<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingUp</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="singup-container">
        <form action="./singup-action.php" method="post">
            <div class="title">
                <div class="bar"></div>
                <h2><span>Join us </br>and explore!</span></h2>
            </div>
            <p>
                <label for="username">
                    <input type="text" placeholder="Your full name goes here" name="username" id="username" required>
                </label>
            </p>
            <p>
                <label for="email">
                    <input type="email" placeholder="We'll never share your email" name="email" id="email" required>
                </label>
            </p>
            <p>
                <label for="pass">
                    <input type="password" placeholder="Create a strong password" name="password" id="pass" required>
                </label>
            </p>
            <p>
                <label for="confirm--pass">
                    <input type="password" placeholder="Make sure both passwords match" name="confirm--password" id="confirm--pass" required>
                </label>
            </p>

            <button class="btn-register">Register</button>

            <div class="link">
                <p>Already have an account? <a href="./login.php">Log in here</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>