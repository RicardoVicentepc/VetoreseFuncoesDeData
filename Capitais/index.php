<?php

$vetor = array(
    "AC" => "Rio Branco",
    "AL" => "Maceió",
    "AP" => "Macapá",
    "AM" => "Manaus",
    "BH" => "Salvador",
    "CE" => "Fortaleza",
    "DF" => "Brasília",
    "ES" => "Vitoria",
    "GO" => "Goiânia",
    "SP" => "São Paulo",
    "RJ" => "Rio de Janeiro"
);
foreach($vetor as $i => $exibir){
    echo "Sigla: ".$i."  -  Capital : ". $exibir.".<br>";
}

echo '<br><br><br><a href="../index.html"> <button type="button">Voltar home</a>';

?>
