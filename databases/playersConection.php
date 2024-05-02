<?php

$pdoPlayers = new PDO('mysql:host=localhost;dbname=cartola','root','');

$sqlPlayers = $pdoPlayers -> prepare("SELECT * FROM `tb_jogadores` ORDER BY id DESC");

$sqlPlayers -> execute();
$sqlPlayerId = $sqlPlayers-> fetchAll();
?>