<?php
session_start();
session_destroy();
?>

<script>
    alert("Thank you for Using the Application!\nYou have been Logout!");
    window.location.href="index.php";
    </script>