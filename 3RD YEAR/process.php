<?php
include "conn.php";
session_start();
// This is For Registration 

if(isset($_POST ['register'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $pn= $_POST['pn'];

    $insert_students = mysqli_query($conn,"INSERT INTO lloyd VALUES('0','$name','$email','$pass','$pn') ");

    if($insert_students == true){
        ?>
            <script>
                alert("Your Registration is Successful!");
                window.location.href="reg.php";
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("Data is not Inserted\nPlease try Again!");
                window.location.href="reg.php";
            </script>
        <?php
    }
} 
// this is for Login

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $check= mysqli_query($conn,"SELECT * FROM lloyd WHERE email='$email' AND password='$pass'");
    $num=mysqli_num_rows($check);

    if($num >=1 ){
        
        $_SESSION['email']= $email;

        ?>
        <script>
            alert("Account Accepted! Welcome Users");
            window.location.href="userhome.php";
        </script>
    <?php
}else{
    ?>
        <script>
            alert("Data is not Inserted\nPlease try Again!");
            window.location.href="index.php";
        </script>
    <?php
}
}




?>