<?php 
include './connection.php';
unset($_COOKIE['userID']);
unset($_COOKIE['email']);
setcookie('userID', '', -1, '/');
setcookie('email', '', -1, '/');
if(!isset($_COOKIE['userID'])){
   
   
    if(isset($_POST['submit'])) {
     
        $userEmail = mysqli_real_escape_string(Connection::dbc(), trim($_POST['userEmail']));

        $userPassword = mysqli_real_escape_string(Connection::dbc($db_name), trim($_POST['userPassword']));
        if(!empty($userEmail) && !empty($userPassword)){
            $query = "SELECT * FROM `userManager`   WHERE email='$userEmail' "
                    . "AND password='$userPassword'";
            $data = mysqli_query(Connection::dbc(), $query);
        
            if (mysqli_num_rows($data)==1 ){
                $row = mysqli_fetch_assoc($data);
                setcookie('userID', $row['userID'], time() + (60*60*24*30));
		setcookie('email', $row['email'], time() + (60*60*24*30));

                $work_Page_url='http://'.$_SERVER['HTTP_HOST'].'/CallManager2/workPage.php';

                header('Location: '. $work_Page_url);
                
            } else {
                echo 'Avtorization faild';
            }
        }
    }
}else{
   // include './exit.php';
   echo 'hrt';
}
?>
<!DOCTYPE html>

<html>
    <head>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="UTF-8">
        <title>CallManager</title>
        <link href="css/signup.css" rel="stylesheet" type="text/css">              
        <link href="css/bootstrap.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" class="form-horizontal" role="form" id="form_author">
      <div class="form-group">
<!--        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>-->
        <div class="col-sm-10">
            <input name="userEmail" type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
<!--        <label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>-->
        <div class="col-sm-10">
            <input name="userPassword" type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label>
              <input type="checkbox"> Запомнить меня
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button name="submit" type="submit" class="btn btn-default">Войти</button>
        </div>
      </div>
</form>
        <?php
        // put your code here
        ?>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
