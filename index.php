<?php
include("dinclude/header.php");

message::$touser= $_GET['touser'];
//if(isset($_POST['send'])&&(!empty($_GET['touser'])||isset($_GET['touser']))){
 //   $message = $_POST['message'] ;
  //message::sendmessage($con,$message);
 // }
?>
<!DOCTYPE html>
<html>
<head>


<style>
a{
list-style-type: none;
text-decoration: none;
color: black;
}
.container{
    margin-top: 3%;
    margin-left: 18%;
    width: 1200px;
    height: 800px;
    background: white;
    border: 1px solid;
    border-radius: 11px;
}
.users{
    width: 450px;
    background: lightgray;
    height:800px ;
    float: left;
    border-radius: 11px;
    overflow-y: scroll;
    overflow-x: hidden;
}
.chat{
    width: 750px;
    background: white;
    height:800px ;
    float: left;
    border-radius: 9px;

}
.history{
    width: 750px;
    height: 744px;
    background: white;
    overflow-y: scroll;
    border-radius: 9px;
}
.inputs{
    width: 750px;
    height: 56px;
    background: white;
    float: left;
    border-radius: 11px;
}
.input{
    width:690px;
    height:50px;
    float: left;
    border-radius: 11px;
}

.button{
    float: left;
    width: 52px;
    height:55px ;
    border-radius: 11px;
}
.search{
    width: 400px;
    height: 50px;
    border-radius: 11px;

}
.search-input{
    margin-top: 20px;
    float: right;
    border-radius: 11px;
}
.frinds{
   width: 430px;
    height: 730px;
    
    background: lightgray;
    border-radius: 11px;
    
    
}

.chat_list{
background: white;
height: 70px;
border-radius: 8px;
}
.username{
    font-size: 20px;
    margin-left: 40px;
    float: left;
    
}
.date{
    float: right;
}
.img{
    height: 70px;
    width: 70px;
    float: left;
    margin-left: -5px;
}
.comming{
    justify-content: start;
   justify-items: start;
    width: 250px;
    background: lightgrey;
    margin-left: 30px;
    min-height: 25;
    font-size: 22px;
    padding-left: 10px;
    border-radius: 8px;
    

}
.going{
   
   float: right;
    width: 250px;
    background: grey;
    margin-right: 30px;
    min-height: 25;
    font-size: 22px;
    padding-left: 10px;
    border-radius: 8px;
    
}
</style>
</head>
<body>
<div class="container">
<div class="users">
<div class="search" >
<h5 style="float: left;">find your frind</h5>
<form method="POST" style="float: right;">
<input class="search-input" type="search" name="search" id="">
</form>
</div>
<div class="frinds">

 <?php
 $active =  new active;
$active->getuser("select * from users",array());

 ?>
</div>
</div>
<div class="chat" >
<div class="history">
<br>
<?php
message::loadmessage($con);
?>
<br>


</div>
<div class="inputs" >
<form method="post" id="send" style="float: left;"  >
<input class="input" type="text" id='message' name="message">
<input class="button" type="submit" name="send" value="send" >
</form>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
    $("#send").submit(function(event){
    event.preventDefault()
    var message = document.getElementById("message").value;
    var touser = "<?php echo message::$touser ?>";
     $.post("send.php",{message:message,touser:touser},function(data){
      
       $('#message').val('');
     })
    })
})
</script>
</body>
</html>
