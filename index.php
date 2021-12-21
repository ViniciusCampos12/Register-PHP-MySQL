<?php session_start(); ?>
<html>
    <body>
        <head>
            <link href="style.css" rel="stylesheet" type="text/css">
            <meta charset="UTF_8">
            <title>Register Screen</title>
        </head>
            <div class="Register">
                <form action="register.php" method="post">
                <h1>Enter your information</h1>
                <?php if(isset($_SESSION['register_successful'])):?>
                <div id="success">Register Successful</div>
                <?php endif;
                unset($_SESSION['register_successful']);
                ?>
                <?php if(isset($_SESSION['user_already'])):?>
                <div id="fail">Register Failed: User already
                </div>
                <?php endif;
                unset($_SESSION['user_already']);
                ?>
                <?php if(isset($_SESSION['insert_data'])):?>
                <div id="insert">Register Failed: insert your data
                </div>
                <?php endif;
                unset($_SESSION['insert_data']);
                ?>
                <p>User</p><input type="text" name="user" placeholder="Username...">
                <p>Password</p><input type="password" name="password" placeholder="Password..." >
                <p>Email</p><input type="email" name="email" placeholder="Email...">
                <p>Phone</p><input type="tel" name="phone" placeholder="Phone...">
                <br><br>
                <input type="submit" name="logar" value="Register" id="button">
            </div>
            </form>
    </body>
</html>