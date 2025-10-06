<?php
function sair(){
    echo "<br><a href='index.html'>Voltar</a>";
}   
if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'] ?? '';

//Verifica se o campo está vazio
    if(empty($nome)){
        echo "O Campo nome está vazio.<br>";
        echo "<br><a href='index.html'>Voltar</a>";
    }else{
        echo "Bem vindo(a) Nome:" . htmlspecialchars($nome);
        //echo "<br><a href='index.html'>Voltar</a>"; chamando a função voltar
        sair(); // chamando a função sair


}
}
?>