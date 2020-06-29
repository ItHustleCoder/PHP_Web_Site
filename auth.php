<?php
    if($_COOKIE['user'] == 'true')
        setcookie('user','true', time() - 3600, '/'); // if cookie installed removed cookie
    else 
    
        setcookie('user','true', time() + 3600, '/');
        //install cookie 
        header('Location: /project/');
   


?>