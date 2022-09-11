<?php
if(isset($_POST["btnlogin"]))
{
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="project_doctor";
	$uname=$_POST["username"];
	$userpass=$_POST["password"];
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error)
		die( "Connection failed:".$conn->connect_error);
	else{
		//$sql="INSERT INTO reg_user (Name,Email,Password) VALUES ('".$uname."','".$useremail."','".$userpass."')";
		$q="select UserName,Password from reg_user where UserName='".$uname."' and password='".$userpass."'";
		//$q="select Name,Password from reg_user where Name='Kazi Sadia' and password='1234'";
		$result=$conn->query($q);
		if($result->num_rows>0)
		{
			//echo "Successful login";
			while($row=$result->fetch_assoc())
			{
				$_SESSION["loggedinuser"]=$row["UserName"];
				header("location:Home.php");
				
			}
		}
		else
		?>


		<?php
		//echo "Successful connection";
	}
}
?>



