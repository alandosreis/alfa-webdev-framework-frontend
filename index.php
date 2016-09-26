<?php 
$page='home.php';
if (isset($_GET["p"])){
    //SE FOR PASSAR SO O NOME
    $page = trim($_GET["p"]);
}

//se for mais de 1 variavel separado por /

$page = trim($_GET["p"]);
//$page = explode('/'),$page);
//produto/123/x-bacon-com-ovo
//0 - pagina (produto) / 1 - codigo (123)
//3 - nome do produto (x-bacon-com-ovo)
/*$codigo = $page[1];
$produto = $page[2];
$page = $page[0];
*/
?>
<?php include 'header.php';?>
<?php 
//home -> home/php 
//verifica se o arquivo existe


 
        //validar o loop
        if ($page == "index") $page = "home";
        
        // home -> home.php
        $page = "$page.php";
        //verificar se o arquivo existe
        if (file_exists($page))
            include $page;
        else
            include "erro.php";

    
?>
<?php include 'footer.php'; ?>

