<?php
    include "conn.php";
    session_start();

   $e=$_SESSION['email'];

   $getname=mysqli_query($conn, "SELECT * FROM users WHERE email='$e'");
   while ($row=mysqli_fetch_object($getname)){

    $name=$row ->name;

   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name;?></title>
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
        padding: 20px;
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
        text-align: center;
      justify-content: center;
      font-size:  15px;
      font-family: sans-serif;
      width: 90%;
      padding: 5px 5px;
      margin: 5px;
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
    <h1>Create Post </h1>
    <form action="process.php" method="POST">

    <label> Title of the post</label></br>
    <input type="text"name="title" required placeholder="Add title here.."></p>

    <label> Select Date</label></br>
    <input type="date"name="mydate" required ></p>

    <label> Add description </label></br>
    <textarea cols="50" rows="10" name="desc"> </textarea></p>

    <input type="hidden" name="posted_by" value="<?php echo $name; ?>">

    <input type="submit" name="create_post" value="POST">

</form>
</div>
    
</body>
</html>