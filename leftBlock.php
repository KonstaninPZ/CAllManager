<?php

include './connection.php';
include './Table.php';
if(isset($_GET['id_db'])){ 
    echo $_GET['id_db'];
//$res = mysqli_query(Connection::dbc($_GET['id_db']), 'SHOW TABLES ');
// echo '<br>Таблицы:<br>';
//    while ($row = mysqli_fetch_array($res)) { // массив с данными
//        echo "<p> <a href='?id_table={$row[0]}'>{$row[0]}"
//        . "</a><br></p>"; //вывод данных
   // }
   Table::ShowTab();
 }
    if($_GET['open']==2){
        echo'open working';
        $queryDB=mysqli_query(Connection::link(), 'SHOW DATABASES ');
        echo 'Проекты:';
        while ($row_db = mysqli_fetch_array($queryDB)) { // массив с данными
            //if($row_db)
            echo "<p> <a href='?id_db={$row_db[0]}'>{$row_db[0]}"
             . "</a><br></p>"; //вывод данных
    }
    }
    

?>

