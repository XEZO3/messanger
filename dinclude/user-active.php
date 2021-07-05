<?php

class active{
    
    
     static function getuser($sql,$parm){
       $query= database::query($sql,$parm);
        if($query->rowCount() > 0){
            $rows=$query->fetchAll(PDO::FETCH_ASSOC);
                foreach($rows as $row){
                    $username = $row['username'];
                    $password = $row['password'];
                    if($_SESSION['name'] !=$username){
                      
                   active::body($username,$password);
                    }
                }
                
            }
    }
     static function body($username,$password){
        
        echo"
        <a href='index.php?touser=$username' >
        <div class=\"chat_list\">
             
              
                <div class=\"chat_ib\">
                <img class=\"img\" src=\"https://ptetutorials.com/images/user-profile.png\" >
                  <h3><span>$username</span><span style=\"float: right;\" class=\"chat_date\">$password</span></h3>
                </div>
                
                
              
 </div>
 </a>
        ";
    }
    static public function getfrinds($con){
        $query =$con->prepare("select * from users");
        $query->execute();
        $rows=$query->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
        

    }
}



?>