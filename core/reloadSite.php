<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['value']) && $_POST['value'] === 'true')
{
    session_destroy();
    header("Location: ../index.php");
}

