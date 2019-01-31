
<?php
session_start();

    $login = $_GET['login'];
    $password = $_GET['password'];

    if($login == 'admin'){
        $dn = 'cn=admin,dc=bla,dc=com';
        $ldaptree  = "OU=people,DC=bla,DC=com";
    }else{
       $dn = 'uid='. $login . ',ou=people,dc=bla,dc=com';
       $ldaptree  = "OU=people,DC=bla,DC=com";
       $ldapfilter = "(|sn=$login)(uid=$login))";
    }

ini_set('display_errors','On');
//phpinfo();
// Eléments d'authentification LDAP
$ldaprdn  = $dn;  // DN ou RDN LDAP
$ldappass = $password;  // Mot de passe associé

// Connexion au serveur LDAP
$ldapconn = ldap_connect("localhost")
    or die("Impossible de se connecter au serveur LDAP.");
    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
if ($ldapconn) {

    // Connexion au serveur LDAP
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    if($login == 'admin'){
        $result = ldap_search($ldapconn,$ldaptree, "(cn=*)") or die ("Error in search query: ".ldap_error($ldapconn));
    }else{
        $result =ldap_search($ldapconn, "ou=people, dc=bla, dc=com", "uid=".$login); 
    }
    
    $data = ldap_get_entries($ldapconn, $result);

    // Vérification de l'authentification
    if ($ldapbind) {

        // iterate over array and print data for each entry
        $_SESSION['userData'] = $data;
        $_SESSION['uid'] = $login;
        
        if($login == 'admin'){
            header('location:userlist.php');
        }else{
            header('location:user.php');
        }
    } else {
        echo "Connexion LDAP échouée...";
    }

}

?>
