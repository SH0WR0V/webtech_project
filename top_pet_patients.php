<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="top_pet_patients1.css">
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="project_doctor";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
	die( "Connection failed:".$conn->connect_error);
else{
	$q="select * from patient_user";
	$result=$conn->query($q);
	$output='<table> <tr><th>ID</th> <th>FirstName</th><th>LastName</th><th>UserName</th><th>Email</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.='<tr><td>'.$row["ID"].'</td><td>'.$row["FirstName"].'</td><td>'.$row["LastName"].'</td><td>'.$row["UserName"].'</td><td>'.$row["Email"].'</td></tr>';
		}
		$output.='</table>';
		echo $output;
	}
	else
		echo "No data";
}

?>
