 
<?php

session_start();

$user = "test";
$passwd = '0000';

$connect = mysqli_connect("localhost", $user, $passwd);
if(!$connect) die('Nepodarilo sa pripojit'.mysqli_connect_error());

mysqli_select_db($connect, "WWW") or die("Nepodarilo sa vybrat databazu");


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {

    $nickname = $_SESSION["username"];
    $post = $_POST["post_text"];
    
    
    if(!empty($post)){
        $sql = "INSERT INTO post_admin (name, post) VALUES('$nickname', '$post')";
        mysqli_query($connect, $sql);
        mysqli_close($connect);
        header("location:../index.php"); 
    }
    
}




?> 
