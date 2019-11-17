<?php

$WeatherType = $_GET['weather'];
echo("$WeatherType <br>");


$CurrentDate = date("Y-m-d H:i:s");
$CurrentDate = (string)$CurrentDate;
echo $CurrentDate;

$db = new SQLite3('LogDB.db');

$result = $db -> exec("INSERT INTO Log (DateTime, Weather) VALUES ('$CurrentDate', '$WeatherType');");
echo $result;


/*
    PHP : $time = date("Y-m-d H:i:s"); // 현재시간 저장
    DB : mysql_query("UPDATE 테이블명 SET 필드명='$time'");
    */
?>

