<<<<<<< HEAD
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TruequeFacil</title>
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
  </head>
  <body>
    <?php
        $adServer = "ldap://10.2.72.21";

        $ldap = ldap_connect($adServer);
        $username = $_POST['username'];
        $password = $_POST['password'];

        $ldaprdn = 'SERGIO' . "\\" . $username;
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
        $bind = @ldap_bind($ldap, $ldaprdn, $password);
        if ($bind) {
        	$msg = "Estás logueado como correctamente como $username";

      header('Location: borrarUsuario.html');

        } else {
              $msg = "Usuario o contraseña incorrectos";
                  echo $msg;
          }

          ?>




            </body>
          </html>




  </body>
</html>
=======
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TruequeFacil</title>
    <link href="../css/form.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../Imagenes/favicon.ico">
  </head>
  <body>
    <?php
        $adServer = "ldap://10.2.72.21";

        $ldap = ldap_connect($adServer);
        $username = $_POST['username'];
        $password = $_POST['password'];

        $ldaprdn = 'SERGIO' . "\\" . $username;
        ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
        ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
        $bind = @ldap_bind($ldap, $ldaprdn, $password);
        if ($bind) {
        	$msg = "Estás logueado como correctamente como $username";

      header('Location: borrarUsuario.html');

        } else {
              $msg = "Usuario o contraseña incorrectos";
                  echo $msg;
          }

          ?>




            </body>
          </html>




  </body>
</html>
>>>>>>> 96abb9edbd6a21c2af0506aee5e8dc092ec446fa
