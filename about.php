
<?php
    $isPost=false;
    $about="";
    if(isset($_POST["btn_click"]))
                {
                    $isPost=true;

                    if(isset($_POST["about"]))
                    {
                        $about=$_POST["about"];
                    }
                }
?>

<?php
    if(isset($_POST['btn_click']))
    {
        $about=$_POST['about'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="about.css">
    <title>Welcome Doctor</title>
</head>
<body>
    
    <form action="#" method="POST" align="center">
    <h3>About Me:</h3>
        <table align="center">  
            <tr>
                <td>
                    <textarea rows="6" cols="60" name="about" placeholder="Write Here"></textarea>
                    <?php
                
                    if($about=="" && $isPost==true)
                    echo "<span style='color:red'>Required</span>"
                    ?>
                    <br><br>
                    <input type="submit" value="Submit" name="btn_click" class="btn_click"><br><br>
                    <h4>About: <?php if(isset($about))echo $about?></h4>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>