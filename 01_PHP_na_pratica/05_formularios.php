<?php 
if(isset($_POST['acao'])){
    echo $_FILES['arquivo']['name'];
}



?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <input type="text" name="nome">
        <input type="hidden" name="chave" value="12345">
        <input type="file" name="arquivo" id="">
        <textarea name="conteudo" id="cont" cols="30" rows="10"></textarea>
        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>