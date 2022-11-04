<?php 

$servername = "localhost";
$database = "escola";
$username = $_POST['user'];
$password = $_POST['password'];
session_start();
session_destroy();

try {
    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_close($conn);
    session_start();
    $_SESSION['usuario'] = $username;
    $_SESSION['passwd'] = $password;
    if(isset($_SESSION['usuario']) && isset($_SESSION["passwd"])){
        header("location: index.php");
    }else{
        echo $_SESSION['usuario'];
    }
}catch(Exception $e) {
    echo $_SESSION['usuario'];
    session_destroy();
    header("location: index.php");
}

?>