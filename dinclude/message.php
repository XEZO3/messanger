<?php
class message{
    public static $touser;
    public static $fromuser;
    public $message;
    static function loadmessage($con){
        $query =database::query("select * from message where fromuser = ? and touser = ? or fromuser = ? and touser = ? ",array($_SESSION['name'],message::$touser,message::$touser,$_SESSION['name']));
        
        if($query->rowCount() > 0){
            $rows=$query->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    $message = new self;
                    $message = $row['message'];
                    
                    $fromuser = $row['fromuser'];
                    message::messagebody($message,$fromuser,message::$touser);
                }
        }else{
            echo"start a chat with some one";
        }
    }
     static function messagebody($message,$fromuser,$touser){
        $msgbox ='';
        if($fromuser == $_SESSION['name']){
        $msgbox.="
<br>
        <div class=\"going\">$message</div>
            <br>
                ";
        }else{
            $msgbox.="
            <br>
            <div class=\"comming\">$message</div>
            <br>
            ";
        }
        echo $msgbox;
    }

    static function sendmessage($message){
        $query =database::query("INSERT INTO `message` (`fromuser`, `touser`, `message`) VALUES (?,?,?)",array([$_SESSION['name'],message::$touser,$message]));
        
    }
}
?>