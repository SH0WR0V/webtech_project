<?php
    if(isset($_POST["submitNewAccount"]))
    {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="project_doctor";
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $user_name=$_POST["user_name"];
        $date_of_birth=$_POST["date_of_birth"];
        $gender1=$_POST["gender"];
        $email=$_POST["email"];
        $phone_number=$_POST["phone_number"];
        $pass_word=$_POST["password"];
        
        $con= new mysqli($servername,$username,$password,$dbname);
        if($con->connect_error)
            die("Connection failed:".$con->connect_error);
        else
            {
                //$q="INSERT INTO Reg_user (Name, Email, Password) VALUES ('Shahriar','sm.shahriar1230@gmail.com','123')";
                if($first_name != null &&$last_name != null &&$user_name != null &&$date_of_birth != null &&$gender1 != null &&$email != null && $phone_number != null && $pass_word != null){
                $q="INSERT INTO reg_user (FirstName, LastName, UserName, DateOfBirth, Gender, Email, PhoneNumber, Password) VALUES ('".$first_name."','".$last_name."','".$user_name."','".$date_of_birth."','".$gender1."','".$email."','".$phone_number."','".$pass_word."')";
                
                $res=$con->query($q);
                header('location: login.php');
                echo"account create success";
                }
                
            }
    }

?>

<!--
<?php
       
    if(isset($_REQUEST['submitNewAccount'])){
	
        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $username = $_REQUEST['username'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $email = $_REQUEST['email'];
        $phonenumber = $_REQUEST['phonenumber'];
        $password = $_REQUEST['password'];
    
    
        if($first_name != null &&$last_name != null &&$username != null &&$dob != null &&$gender != null &&$email != null && $phonenumber != null && $password != null){
            
            //$user = ['username'=> $username, 'password'=>$password, 'email'=>$email];
            //$_SESSION['user'] = $user;
    
            $user = "\n".$first_name."|".$last_name."|".$username."|".$dob."|".$gender."|".$email."|".$phonenumber."|".$password;
            $file = fopen('reg.txt', 'a');
            fwrite($file, $user,);
            
            header('location: login.php');
            echo"account create success";
    
        }else{
            echo "null submission ....";
        }
    }
?>
-->