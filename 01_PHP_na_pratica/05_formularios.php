<?php 
if(isset($_POST['nome'])){
    echo $_POST['nome'];
}else if(isset($_GET['nome'])){
    echo $_GET['nome'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>