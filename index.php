<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Login Form with Database</title>
</head>

<body>
    <div class="Container" id="SignUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form action="formhandler.php" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lname" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="E-mail" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="text" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="Submit" class="btn" value="Sign Up" name="signup">
        </form>
        <p class="or">----------or----------</p>
        <div class="icon-link">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
        </div>
        <div class="Already">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="Container" id="SignIn">
        <h1 class="form-title">Sign In</h1>
        <form action="formhandler.php" method="post">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="E-mail" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="Submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">----------or----------</p>
        <div class="icon-link">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
        </div>
        <div class="Already">
            <p>Don't Have Account ?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div> required
    <script src="Js/script.js"></script>
</body>
</html>