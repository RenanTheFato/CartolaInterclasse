<?php

$pdo = new PDO('mysql:host=localhost;dbname=cartola','root','');

$sql = $pdo -> prepare("SELECT * FROM `tb_scouts` ORDER BY valor DESC");

$sql -> execute();
$sqlScout = $sql-> fetchAll();

$scout = $pdo -> prepare("SELECT id, valor FROM `tb_scouts` WHERE id IN (:id1, :id2, :id3, :id4, :id5, 
:id6, :id7, :id8, :id9, :id10, :id11, :id12, :id13, :id14, :id15)");

$gol = $FT = $assist = $FF = $FD = $DS = $FS = $FC = $CA = $PP = $CV = $GS = $SG = $DF = $PD = null;

$scout -> bindParam(':id1', $id1, PDO::PARAM_INT);
$scout -> bindParam(':id2', $id2, PDO::PARAM_INT);
$scout -> bindParam(':id3', $id3, PDO::PARAM_INT);
$scout -> bindParam(':id4', $id4, PDO::PARAM_INT);
$scout -> bindParam(':id5', $id5, PDO::PARAM_INT);
$scout -> bindParam(':id6', $id6, PDO::PARAM_INT);
$scout -> bindParam(':id7', $id7, PDO::PARAM_INT);
$scout -> bindParam(':id8', $id8, PDO::PARAM_INT);
$scout -> bindParam(':id9', $id9, PDO::PARAM_INT);
$scout -> bindParam(':id10', $id10, PDO::PARAM_INT);
$scout -> bindParam(':id11', $id11, PDO::PARAM_INT);
$scout -> bindParam(':id12', $id12, PDO::PARAM_INT);
$scout -> bindParam(':id13', $id3, PDO::PARAM_INT);
$scout -> bindParam(':id14', $id14, PDO::PARAM_INT);
$scout -> bindParam(':id15', $id15, PDO::PARAM_INT);

$id1 = 1; $id2 = 2; $id3 = 3; $id4 = 4; $id5 = 5; $id6 = 6; $id7 = 7; $id8 = 8; $id9 = 9; $id10 = 10; 
$id11 = 11; $id12 = 12; $id13 = 13; $id14 = 14; $id15 = 15;

$scout -> execute();

$valorScout = $scout->fetchAll(PDO::FETCH_ASSOC);
foreach ($valorScout as $row) {
    switch ($row['id']) {
        case '1':
            $gol = $row['valor'];
            break;
        case '2':
            $FT = $row['valor'];
            break;    
        case '3':
            $assist = $row['valor'];
            break;
        case '4':
            $FF = $row['valor'];
            break;
        case '5':
            $FD = $row['valor'];
            break;
        case '6':
            $DS = $row['valor'];
            break;    
        case '7':
            $FS = $row['valor'];
            break;
        case '8':
            $FC = $row['valor'];
            break;
        case '9':
            $CA = $row['valor'];
            break;
        case '10':
            $PP = $row['valor'];
            break;    
        case '11':
            $CV = $row['valor'];
            break;
        case '12':
            $GS = $row['valor'];
            break;
        case '13':
            $SG = $row['valor'];
            break;
        case '14':
            $DF = $row['valor'];
            break;    
        case '15':
            $PD = $row['valor'];
            break;
}
}
?>