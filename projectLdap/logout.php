<?php
declare(strict_types=1);

session_start();



try{
    if(ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(),'',time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']    
        );
    }
}
finally{
    $_SESSION = [];
    session_destroy();
    header('location: ../projectLdap/');
}