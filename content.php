<?php
        if (isset($_GET['id_table'])) { // если нажали на ссылку (название таблицы)
            $headTable=mysqli_query(Connection::dbc(), "SELECT COLUMN_NAME FROM "
                    . "INFORMATION_SCHEMA.COLUMNS WHERE "
                    . "table_name = '".$_GET['id_table']."' AND "
                    . "table_schema ='". $db_name."'")
                    or die("head table error");
         $rs = mysqli_query(Connection::dbc(), "SELECT * FROM ".$_GET['id_table']."")
                 or die("rs error"); //запрос на выборку данных и выбраной таблицы
    ?>
     <table class="table table-bordered
            
          <?php
    while($row_rs = mysqli_fetch_assoc($headTable)) // массив с данными
    {
    ?>
          <?php
        foreach($row_rs as $val) //перебор массива в цикле
        {
 
            echo "<td>".$val."</td>"; //вывод данных
               
        }
    ?>
         
    <?php }?>
    <?php
    while($row_rs = mysqli_fetch_assoc($rs)) // массив с данными
    {
    ?>
        <tr>
    <?php
        foreach($row_rs as $val) //перебор массива в цикле
        {
 
            echo "<td>".$val."</td>"; //вывод данных
               
        }
    ?>
        </tr>
 
    <?php }}?>
 
        </table>
