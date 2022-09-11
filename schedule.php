<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="schedule1.css">

    <title>Make Schedule</title>
</head>
<body>
    <?php require_once 'schedule_check.php'; ?>
    
    
    

    <?php
        $mysqli = new mysqli('localhost', 'root', '', 'project_doctor') or die(mysqli_error($mysqli));
        $result = $mysqli->query("SELECT * FROM schedule") or die($mysqli->error);
        
    ?>

    <div class="table">
        <table><h3>Schedules</h3>
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>

                </tr>
            </thead>

        <?php
            while ($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['UserName'] ?></td>
                <td><?php echo $row['Date'] ?></td>
                <td><?php echo $row['Time'] ?></td>
                <td>
                    <a href="schedule.php?edit=<?php echo $row['ID']; ?>">Update</a>
                    <a href="schedule_check.php?delete=<?php echo $row['ID']; ?>">Delete</a>
                </td>
                <?php endwhile; ?>

            </tr>
        </table>
    </div>

    <div class="container">
    <form action="schedule_check.php" method="POST" class="form">
    <div class="upper">
			<h3>Fix/Update Schedule</h3>
        </div>
        <input type="hidden" name="id" value="<?php echo $id;?>">
        <div class="form-control">
        <label>Name </label>
        <input type="text" name="username" value="<?php echo $uname; ?>" placeholder="Enter patient name"> 
        </div>
        <div class="form-control">
        <label>Date</label>
        <input type="date" name="date" value="<?php echo $date1; ?>"> 
        </div>
        <div class="form-control">
        <label>Time</label>
        <input type="time" name="time" value="<?php echo $time1; ?>"> 
        </div>
        <div>
        <?php
            if($update == true):
            ?>
        
        <input type="submit" id="btnupdate" name="btnupdate" value="Update">
        <?php else: ?>
        <input type="submit" id="btnsave" name="btnsave" value="Save">
            
        <?php endif; ?>
        <br><br>
        <?php  
        if(isset($_SESSION['message']))
        {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    ?>
        </div>

    </form>
    </div>
    
</body>
</html>