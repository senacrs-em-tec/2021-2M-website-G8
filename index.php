<?php

include_once 'PHP/realData.php';
include_once "Include/head.php";
include_once "Include/menu.php";

?>

<!--Aqui é o banner-->
<div class="main-banner">
    <img src="Images/trueBanner.png" alt="" width="350" height="500"></img>
    <div id="punchline">
       <h2>Um futuro movido à estrelas</h2>
    </div>
    <!--Precisei de um monte de tag "p" pra conseguir separar o texto, tem que ter um jeito mais fácil de fazer oq eu quero-->
    <div id="text">
    <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o </p>
    <p>ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para</p>
    <p>tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham</p>
    <p>as passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</p>
    </div>
</div>

<!--Aqui é a entrada principal para a página dos produtos-->
<div class="household-product">
    <a href="householdProducts.php">
    <img src="Images/householdBanner.jpg" width="700" height="450"></img> 
    <div id="household-product-link">
    <span >Para uso doméstico<span>
    </div>  
      <div id="mini-link">  
      <span>Saiba mais ></span>
      </div>
    </a>
    </div>
    <div class="business-product">
    <a href="businessProducts.php">
     <img src="Images/businessBanner.jpg" width="700" height="450"></img> 
     <div id="business-product-link">
     <span >Para uso empresarial<span>
     </div>  
     <div id="mini-link2">  
     <span>Saiba mais ></span>
     </div>
    </a>
    </div>
</div>

</body>
</html>