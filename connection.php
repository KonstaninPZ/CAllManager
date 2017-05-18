<?php
    define(host,'localhost');
    define(user,'root');
    define(password,'prosto2plus2');
//        $db_name='CallManager';
//     $dbc = mysqli_connect(host, user,password ,$db_name )
//            or die("Not coonect");
    $db_name='CallManager';
class Connection{
   
  public static function dbc( $db_name='CallManager'){
     // $db_name='CallManager';
        $dbc = mysqli_connect(host, user,password ,$db_name )
            or die("Not coonect");
        return $dbc;
    }
    public static function link(){
        $link=mysqli_connect(host, user, password  )
            or die("Not coonect dbc1");
        return $link;
    }
}