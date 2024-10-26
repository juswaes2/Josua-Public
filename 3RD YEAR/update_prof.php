<?php
  include "conn.php";
  session_start();

  $e=$_SESSION['email'];

  $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
  while($rows=mysqli_fetch_object($getname)){
    
    $id = $rows -> id;
    $name= $rows -> name;
    $email= $rows -> email;
    $password= $rows -> password;
    $pn= $rows -> phone_number;
  }

    
  
  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
    <link rel="stylesheet" href="home.css">
</head>
<style>
 body{
    background: url('img/green.jpg')no-repeat;
        background-size: cover;
        
        
    
  }
  .weblink{
    text-align: right;
    padding:  15px;
    font-weight: bold;
    font-size:20px;
   
    font-family: sans-serif;

  }
  
  
  .weblink a{
    text-decoration: none;
    color: black;
   text-shadow: 1px 1px;
   margin: 15px;
   
  }
  a:hover{
    color: yellowgreen;
    background-color: green;
    color: white;
    padding: 5px;
    border-radius: 10px;
    transition: 0.5s ease;
    
  }
  .weblink a:active{
    color: red;
    
  }
  .center h1{
    text-align: center;
    font-family: Sans-serif;
    font-size: 25px;
    color: black;
  }
  .center{
        justify-content: center;
        padding: 40px;
        background-color: rgb(203, 204, 198);
        opacity: 0.8;
        border-radius: 25px;
        width: 30%;
        top: 50%;
        left: 50%;
        transform:translate(-50%,-50%);
        position: absolute;
        box-shadow: 5px 10px 8px rgb(118, 119, 118);
       
    }
    .center input{
      font-size:  15px;
      width: 90%;
      padding: 5px 5px;
      margin: 10px;
      border-radius: 5px;
      
    }
    .center label{
        font-family: fantasy;
    }

    
    
   
  
  
  </style>
<body>
  

  
    <div class="weblink">
      <a href="userhome.php">HOME</a>
      <a href="gallery.php">GALLERY</a>
      <a href="group_proj.php">GROUP PROJECT</a>
      <a href="createpost.php">CREATE POST</a>
      <a href="update_prof.php">UPDATE PROFILE</a>
    </div>
  


 

  <div class="center">
  <h1>UPDATE PROFILE</h1>
    <form action="process.php?id=<?php echo $id;?>" method="POST">
    
    <label>New Name</label>
    <input type="text" name="up_name" value="<?php echo $name;?>" required>

    <label>New Email</label>
    <input type="email" name="up_email" value="<?php echo $email;?>" required>

    <label> New Password</label>
    <input type="password" name="up_pass" value="<?php echo $password;?>" required>

    <label>New Phone Number</label>
    <input type="text" name="up_pn" value="<?php echo $pn;?>" required>

     
    <input type="submit" name="update_account" value="UPDATE">
 
    </form>
  </div>

  
</body>
</html>