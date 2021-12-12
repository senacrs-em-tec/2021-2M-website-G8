<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title> Trabalhe Conosco </title>
</head>
<body>

<div class="forms">
<h3> Se deseja trabalhar conosco nos envie seu currículo. </h3>
<!-- O tipo de encoding de dados, enctype, DEVE ser especificado abaixo -->
<form enctype="multipart/form-data" action="acion.php" method="POST">
    <!-- MAX_FILE_SIZE deve preceder o campo input -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- O Nome do elemento input determina o nome da array $_FILES -->
    Currículo: <input type="file" name="curriculo" placeholder="Escolher Arquivo" /><br>
    <input type="submit" value="Enviar" />
</form>

</body>
</html>
