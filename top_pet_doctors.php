<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="top_pet_doctors1.css">
    <title>Top Pet Doctors</title>
    
</head>
<body>
<a href="Home.php">Go Back</a>

    <div align="center">
            <?php
            
                $servername="localhost";
				$username="root";
				$password="";
				$dbname="project_doctor";
				
				$conn=new mysqli($servername,$username,$password,$dbname);
				
				if($conn->connect_error)
					die( "Connection failed:".$conn->connect_error);
				else{
					$q="select ID,FirstName,LastName from reg_user";
					$result=$conn->query($q);
					if($result->num_rows>0)
					
					{
						//echo "Successful login";
						
						echo "<table>
										<tr>
											<th>ID</th>
											<th>First Name</th>
											<th>Last Name</th>
										</tr>";
						while($row=$result->fetch_assoc())
						{
							echo "<tr>
										<td>".$row["ID"]."</td>
										<td>".$row["FirstName"]."</td>
										<td>".$row["LastName"]."</td>
								   </tr>";
						}
						echo "</table>";

					}
					
                }
				          
        ?>
    </div>
</body>
</html>