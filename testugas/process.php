<?php

session_start();
$answer= $_SESSION["answer"];
$user_answer = $_POST["answer"];

if ($answer == $user_answer){
    echo "<h1>MANTAP BOSSQUE</h1>";
} else {
    echo "<h1>HEUHEUHEU....... SORRY BOSSQUE !!!</h1>";
}
?>
