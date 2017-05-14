<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CallManager2</title>
        <?php include "header.php";?>
        <script type="text/javascript" src="js/create_form.js"></script>
        <link href="css/tab.css" rel="stylesheet" type="text/css">
        <link href="css/menu.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">              
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
       
        <div class="container-fluid">
         
                <div class="btn-toolbar">
                  <div class="btn-group">
                      <a  class="btn" name="open" href="?open=2"><i class="glyphicon glyphicon-folder-open"> </i></a>
                    <a class="btn" href="#"><i class="glyphicon glyphicon-book"></i></a>
                    <button class="btn" name="openteg" type="submit" >Кнопка</button>
                  </div>
                </div>
                </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-xs-3" id="xs3">Left Block
                <?php 
                    include './leftBlock.php';
                ?>
            </div>
            <div class="col-xs-9" id="xs9" >
                 Content
                 <div class="korpus"> 
                     <input type="radio" name="odin" checked="checked" id="vkl1"/>
                     <label for="vkl1">Main</label>
                     <input type="radio" name="odin" id="vkl2"/>
                     <label for="vkl2">Content</label>
                     <input type="radio" name="odin" id="vkl3"/>
                     <label for="vkl3">Создание анкеты</label> 
                     <input type="radio" name="odin" id="vkl4"/>
                     <label for="vkl4">Заполнение анкеты</label> 
                     <div>первая вкладка<br>
                         <?php 
                            include './main.php';
                         ?>
                         
                     </div> 
                     <div>вторая вкладка<br>
                          <?php 
                            include './content.php';
                          ?>
                     </div> 
                     <div>третья вкладка<br>
                         <?php 
                            include './create_tb.php';
                          ?>
                     </div>
                    <div>Четвертая вкладка<br>
                        <form  method="post" action="Table.php">
                        <input type="text" id="member" name="member" value="">Количество вопросов в анкете: (max. 10)<br />
                        <a href="#" id="filldetails" onclick="addFields()">Генерировать поля</a>
                        <div id="container"/>
                        <?php 
                            if(isset($_POST['submit'])){
                                Table::ChangeTab();
                            }
                        ?>
                        </form>
                     </div>
                     
                 </div>

            </div>
        </div>
        </div>
        <?php 
//        // put your code here
//        ?>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </body>
</html>
