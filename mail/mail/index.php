<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nom : <input type="text" name="Nom">
        <br><br>
        Prenom : <input type="text" name="Prenom">
        <br><br>
        email : <input type="text" name="email">
        <br><br>
        password : <input type="password" name="pass">
        <br><br>
        date : <input type="date" name="date">
        <br><br>
        <input type="button" value="send" name="send">
    </form>


    <?php 
    require_once('controler/connexion.php');
     if(isset($_POST['send'])){
        $iv = "1234567812345678";
        $key = '1234567812345678';
        $method = 'aes-128-cbc';
        $nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $fl = filter_input(INPUT_POST,$_POST['email'],FILTER_VALIDATE_EMAIL);
        $vilt = ($fl === true) ? true : false; 

        $ps = openssl_encrypt($_POST['pass'],$method,$key,0,$iv);

     }
    
    
    
    ?>
    
</body>
</html>