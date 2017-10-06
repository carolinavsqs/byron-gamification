<?php
/**
 * Created by PhpStorm.
 * User: Will Saymon
 * Date: 06/10/2017
 * Time: 09:29
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['byron_gamification']['user'])){
    echo "<script>alert('Alto lá, como ousa passar pelos portões sem se identificar?');</script>";
    echo ("<script>location.href='../index.php';</script>");
}

?>