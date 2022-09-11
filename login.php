<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="login.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title>Log In</title>
</head>
<body>
    <?php 
        require 'login_check.php';
    ?>
    <div class="container">
        <div class="upper">
			<h3>Login</h3>
        </div>
         <form class="form" id="form" action="" method="POST">
             <div class="pic">
            <img src="img/LoginAvater.png" alt="" height="80" width="80"><br><br>
            </div> 
            <div class="form-control" id="form-control">   
            <input type="text" id="username" name="username" placeholder="Enter Username or Email">
                    <i id="success" class="fas fa-check-circle"></i>
				    <i id="error" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
            </div>
            <div class="form-control1" id="form-control1">
					<input type="password" id="password" name="password" placeholder="Enter Password">
					<i id="success1" class="fas fa-check-circle"></i>
					<i id="error1" class="fas fa-exclamation-circle"></i>
					<small>Error message</small>
				</div>
                <input type="submit" id="btnlogin" name="btnlogin"><br><br>
                <h4 style="color:red;">Not a member?</h4>
                <a href="create_account.php">Sign Up</a>
        </form>
    </div>
    <script src="login_check.js"></script>
</body>
</html>

