<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/e75ed7a55e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Home (2).css">
    <link rel="stylesheet" href="top_pet_patients1.css">
    <title>Home</title>
</head>
<body>
<div class="title">
<h3> <i class="fa-solid fa-user-doctor"></i> Welcome <?php echo $_SESSION["loggedinuser"]; ?></h3>
</div>
<div>
        <nav class="" align="center" >
        <!-- <img src="img/veterinarian.png" alt="" height="50" width="50">  -->
            
                <a href="Home.php" id="home">Home</a> 
                <a href="about.php">About Me</a> 
                <a href="top_pet_doctors.php">Top pet doctors</a>
                <!-- <a href="top_pet_patients.php">Top pet patient</a>  -->
                <a id="load">Top pet patients</a>
	        <div id="main" align="center">
	        </div>
	        <script src="jquery.js"></script>
	        <script>
		$(document).ready(function(){
			$("#load").on("click",function(e){
				$.ajax({
					url:"top_pet_patients.php",
					type:"post",
					success:function(data){
						$("#main").html(data);
					}
				});
			});
		});
	        </script>
                <a href="schedule.php">Fix Schedule</a>
                <a href="inbox.php">Inbox</a>
                <a href="contact.php">Contact</a>
                <a href="login.php">Log Out</a>
                

                <img src="img/Home4.jpg" alt="" height="860">
        </div>

        <div id="demo">
        <h2> Few Basic Pet Medicine Treatment</h2>
        <button type="button" onclick="loadDoc()">Change Content</button>
        </div>

        <script>
        function loadDoc() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
         document.getElementById("demo").innerHTML =
        this.responseText;
        }
        xhttp.open("GET", "medicine_suggesion.txt");
        xhttp.send();
        }
</script>


                <div class="footer">
                        <div class="col-1">
                                <h3>USEFUL LINKS</h3>
                                <a href="#">About</a>
                                <a href="#">Services</a>
                                <a href="#">Contact</a>
                                <a href="#">Shop</a>
                                <a href="#">Blog</a>



                        </div>
                        <div class="col-2">
                                <h3>NEWSLETTER</h3>
                                <form action="#">
                                        <input type="email" placeholder="Your Email Address" required><br>
                                        <button type="submit">SUBSCRIBE NOW</button>
                                </form>
                        </div>
                        <div class="col-3">
                                <h3>Contact</h3>
                                <p>123, XYZ Road <br>Uttara, Dhaka, Bangladesh </p>
                                <div class="social-icons">
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-behance"></i>

                                </div>
                        </div>

                </div>
         
        </nav>
</body>
</html>