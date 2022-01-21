<?php
session_start();
require 'Databasepro.php';

$Lerror=$Perror="";

if(!empty($_GET))
{
$L = $_GET['login'];
$P = $_GET['pass'];

    $db=Database::connect();
    $statement=$db->query('select email from connexion');
    $statement1=$db->query('select password from connexion');
    while (($item=$statement->fetch()) &&  ($item1=$statement1->fetch()))
    {
if($L == $item['email'] && $P == $item1['password'])
   { $_SESSION['auth'] = $L;
    echo $_SESSION['auth'] ;
    header('location:index.php');  
    $isSuccess=true;
    }
 /* else
    $Lerror="Votre email est incorrect";
    $_SESSION['error'] = 'Login ou mot de passe sont incorrect';
    echo $_SESSION['error']; */
   } 
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Autentification </title>
</head>
<body>
    <?php
    /* session_start();
    if(!isset($_SESSION['error']))
    echo "<h2>".$_SESSION['error']."</h2>"; */
    ?>
    <form action="">
        <table>
            <tr>
                <td> login: </td>
                <td> <input type="text" name="login">  </td>
                
            </tr>  
            <tr>
                <td > <?php  echo $Lerror ?></td>
            </tr>
            <tr> 
                <td> password: </td>
                <td> <input type="password" name="pass"> </td>
               
            </tr> 
        </table>
        <button type=submit> Envoyer </button>
    </form>
    <form action="logout.php">
        <a href=""></a>
    </form>
</body>
</html>