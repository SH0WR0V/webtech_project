<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'project_doctor') or die(mysqli_error($mysqli));

$id=0;
$update = false;
$uname='';
$date1='';
$time1='';

if(isset($_POST["btnsave"]))
{
	$uname=$_POST["username"];
	$date1=$_POST["date"];
	$time1=$_POST["time"];


    $mysqli->query("INSERT INTO schedule (UserName, Date, Time) VALUES('$uname', '$date1', '$time1')") or die($conn->error);

    $_SESSION['message'] = "Record has been saved!";
    

    header("location: schedule.php");

}	

if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $mysqli->query("DELETE FROM schedule WHERE ID=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
   

    header("location: schedule.php");

}

if(isset($_GET['edit']))
{
    $id=$_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM schedule WHERE ID=$id") or die($mysqli->error());
    
        $row = $result->fetch_array();
        $uname = $row['UserName'];
        $date1 = $row['Date'];
        $time1 = $row['Time'];

    
}

if(isset($_POST['btnupdate']))
{
    $id=$_POST['id'];
    $uname=$_POST['username'];
    $date1=$_POST['date'];
    $time1=$_POST['time'];

    $mysqli->query("UPDATE schedule SET UserName='$uname', Date='$date1', Time='$time1' WHERE ID=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been updated!";
    header('location: schedule.php');
}