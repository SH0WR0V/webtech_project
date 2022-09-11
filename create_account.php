<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="create_account1.css">
    <title>Create Account</title>
</head>
<body>
<?php 
        require 'reg_check.php';
    ?>
    <?php
        $isPost=false;
        $firstName="";
        $lastName="";
        $userName="";
        $dateOfBirth="";
        $Gender="";
        $Email="";
        $phoneNumber="";
        $Password="";

        if(isset($_POST["submitNewAccount"]))
            {
                $isPost=true;
                if(isset($_POST["first_name"]))
                {
                    $firstName=$_POST["first_name"];
                }
                if(isset($_POST["last_name"]))
                {
                    $lastName=$_POST["last_name"];
                }
                if(isset($_POST["user_name"]))
                {
                    $userName=$_POST["user_name"];
                }
                if(isset($_POST["date_of_birth"]))
                {
                    $dateOfBirth=$_POST["date_of_birth"];
                }
                if(isset($_POST["gender"]))
                {
                    $Gender=$_POST["gender"];
                }
                if(isset($_POST["email"]))
                {
                    $Email=$_POST["email"];
                }
                if(isset($_POST["phone_number"]))
                {
                    $phoneNumber=$_POST["phone_number"];
                }
                if(isset($_POST["password"]))
                {
                    $Password=$_POST["password"];
                }
            }
    ?>
    <div class="container">
    <div class="upper">
			<h3>Create Account</h3>
        </div>
    <form class="form" id="form" action="" method="POST">
        <div class="pic">
        <img src="img/follow.png" alt="" height="60" width="60">
        </div>

        <div class="form-control" id="form-control"> 
            <input type="text" name="first_name" id="first_name" placeholder="First name" value="<?php echo $firstName; ?>">
            <?php
            
                if($firstName=="" && $isPost==true)
                    echo "<span style='color:red'>Required</span>";
            ?>
            
        </div>
        <div class="form-control1" id="form-control1">
                <input type="text" name="last_name" id="last_name" placeholder="Last name" value="<?php echo $lastName; ?>">
             <?php         
            if($lastName=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
             ?>
</div>

<div class="form-control2" id="form-control2">
                <input type="text" name="user_name" id="user_name" placeholder="Create Username" value="<?php echo $userName; ?>">
                <?php
                if($userName=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
<div class="form-control3" id="form-control3">
                <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $dateOfBirth; ?>">
                <?php
                if($dateOfBirth=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
<div class="form-control4" id="form-control4" >
                <input type="radio" name="gender" id="gender" 
                value="female"> Female
                <input type="radio" name="gender" id="gender"
                value="male"> Male
                <input type="radio" name="gender" id="gender"
                value="other"> Other
                <?php
                if($Gender=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
<div class="form-control5" id="form-control5">
                <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $Email; ?>">
                <?php
                if($Email=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
<div class="form-control6" id="form-control6">
                <input type="number" name="phone_number" id="phone_number" placeholder="Phone Number" value="<?php echo $phoneNumber; ?>">
                <?php
                if($phoneNumber=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
<div class="form-control7" id="form-control7">
                <input type="password" name="password" id="password" placeholder="Create Password" value="<?php echo $Password; ?>">
                <?php
                if($Password=="" && $isPost==true)
                echo "<span style='color:red'>Required</span>";
                ?>
</div>
                <input type="submit" name="submitNewAccount" id="submitNewAccount"><br>
                <h4 style="color:green;">Already have an account?</h4>
                <a href="login.php">back to login</a><br><br>
                

    </form>
    </div>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>