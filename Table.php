<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author tech
 */
class Table {
    //put your code here
    public static function CreateTab($name_tb) {
        echo $name_tb,'<br>';
        $query_create_tb="CREATE TABLE $name_tb(id_question INT NOT NULL"
                . " AUTO_INCREMENT "
                . ", question VARCHAR(120) CHARACTER SET utf8 COLLATE"
                . " utf8_general_ci NOT NULL , PRIMARY KEY (id_question), "
                . "UNIQUE (question))";
      //  $query = "create table car (model VARCHAR(20), price INT)";
        $create_tb= mysqli_query(Connection::dbc(), $query_create_tb)
                or die("error create table");
        
    }
    public static function ShowTab() {
        $res = mysqli_query(Connection::dbc($_GET['id_db']), 'SHOW TABLES ');
            echo '<br>Таблицы:<br>';
         while ($row = mysqli_fetch_array($res)) { // массив с данными
            echo "<p> <a href='?id_table={$row[0]}'>{$row[0]}"
             . "</a><br></p>";
           if(!isset($_GET['id_db']))  Table::ShowTab();
    }
    }
    public static function DeleteTab($param) {
        
    }
    public static function ChangeTab() {
//        echo $_POST['submit'],'<br>';
//        print_r($_POST['submit']);
    }
}
