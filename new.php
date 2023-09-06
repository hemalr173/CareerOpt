<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<?php
require_once 'connect.php';

if(isset($_POST['register'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $issign = $crud->insert($fname,$lname,$email,$passw);
    if($issign){
    echo '<a href="index.php"></a>';
   
    }
    else{
        
    }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    $issign1 = $crud->insert1($email,$passw);
    if($issign1){
        
        echo '<a href="taketest.php"><input type="submit" value="Submit" class="large-button"></a>';
        }
        else{
            
        }
}
?>