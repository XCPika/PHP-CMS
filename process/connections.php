<?php
$sName = '127.0.0.1';
$sUser = 'root';
$sPass = '';

function gamesConnect() {
    global $sName, $sUser, $sPass;
    $dbName = 'game_data';
    $conn = mysqli_connect($sName, $sUser, $sPass, $dbName);
    if (!$conn) {
        die("[Error Connection failed]: " . mysqli_connect_error());
    }
    return $conn;
}

function loginConnect() {
    global $sName, $sUser, $sPass;
    $dbName = 'login';
    $conn = mysqli_connect($sName, $sUser, $sPass, $dbName);
    if (!$conn) {
        die("[Error Connection failed]: " . mysqli_connect_error());
    }
    return $conn;
}

?>