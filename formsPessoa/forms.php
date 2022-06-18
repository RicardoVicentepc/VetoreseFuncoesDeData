<?php

$name = $_POST['name'];
$cpf = $_POST['cpf'];
$nasc = $_POST['nasc'];

$vetor = array(
    "nome" => $name,
    "cpf" => $cpf,
    "nasc" => $nasc
 );
foreach($vetor as $i => $exibir){
    echo($i." = ".$exibir."<br>");
}

echo '<br><br><br><a href="../index.html"> <button type="button">Voltar home</a>';
echo '<a href="../formsPessoa/index.php"> <button type="button">Testar denovo</a>';


?>