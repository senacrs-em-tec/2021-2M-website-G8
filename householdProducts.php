<?php

include_once 'PHP/realData.php';
include_once "Include/productsHead.php";
include_once "Include/menu.php";

?>

<div class="main-banner">
        <img src="Images/householdBanner.png" alt="" width="350" height="500"></img>
        <div id="punchline">
          <h2>Paz na casa e consciência</h2>
        </div>
        <!--Precisei de um monte de tag "p" pra conseguir separar o texto, tem que ter um jeito mais fácil de fazer oq eu quero-->
        <div id="text">
          <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o </p>
          <p>ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para</p>
          <p>tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham</p>
          <p>as passagens com Lorem Ipsum, e mais  recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</p>
        </div>
    </div>
<!--Aqui eu abro o foreach, o foreach vai passar por todos os elementos do meu array e cumprir a ordem. Nesse caso a ordem foi echo 
$value ['name']-->
<?php

foreach ($productsColection as $key => $value) {
 
?>

<div id = "productsDisplay">
  <img src= "testImage1.jpg" width= "400px">
    <h1><?php echo $value['name']?></h1>
      <p><?php echo $value['price']?></p>
</div>

<!--Aqui eu fecho o foreach, assim ele age sob os comandos das partes entre o fim e o começo-->
<?php

};

?>
</body>

</html>