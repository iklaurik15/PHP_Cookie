<?php
if(isset($_POST['chkRecordar'])&&($_POST['chkRecordar']) == true ){
    setcookie("cook_user", $_POST['nombre'], time()+60);
    setcookie("cook_pass", $_POST['pass'], time()+60);
    
    header("Location:pagina.html");
}else{
    header("Location:pagina.html");
}

//if(isset($_COOKIE("cook_user"))){
//        setcookie("cook_user", '',0);
//        setcookie("cook_pass", '',0);
// }