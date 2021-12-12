<?php

include_once 'PHP/realData.php';
include_once "Include/head.php";
include_once "Include/menu.php";

?>

<div class="forms">
<h3> Se deseja trabalhar conosco nos envie seu currículo. </h3>
<form enctype="multipart/form-data" action="acion.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Currículo: <input type="file" name="curriculo" placeholder="Escolher Arquivo" /><br>
    <input type="submit" value="Enviar" />
</form>

</body>
</html>