<?php
require 'dbh.inc.php';

$ip = $_SERVER['REMOTE_ADDR'];

$sql = "SELECT 1 FROM users WHERE ip = '$ip'";
$result = mysqli_query($conn, $sql);

if(mysqli_fetch_assoc($result) >= 1) {
    header('Location: ../main.php?error=alreadyVoted');
    exit();
}else{
    if(!empty($_POST["ui"])) {
        $vote = $_POST["ui"];
        echo("$ip ' ' $vote");
        $sql = "INSERT INTO users (ip, vote) VALUES ('$ip', '$vote')";
        mysqli_query($conn, $sql);
        header('Location:../main.php');
        exit();
    }else{
        echo("
        <div class='alert alert-danger m-0 text-center fade show' role='alert'>
        Please make a valid selection!
        </div>
        <script>setTimeout(function() {
            $('.alert').alert('close');	
        }, 4000);
        </script>");
    }
}

?>