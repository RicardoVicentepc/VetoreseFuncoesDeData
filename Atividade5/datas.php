<?php
date_default_timezone_set('America/Sao_Paulo');
$data = new DateTime($_POST['data']);
echo 'Data inserida: '.$data->format('d/m/Y.'). '<br>';
for($i=1; $i<=3; $i++){
    $data->add(new DateInterval('P90D'));
    echo 'Após '.$i*90 .' dias: '.$data->format('d/m/Y.'). '<br>';
}
//$data = date('d/m/Y', time() + (60*60*24));


echo '<br><br><br><a href="../index.html"> <button type="button">Voltar home</a>';
echo '<a href="../Atividade5/index.php"> <button type="button">Voltar home</a>';

?>