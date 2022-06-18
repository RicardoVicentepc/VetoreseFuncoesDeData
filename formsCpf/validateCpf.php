<?php
    $cpf = $_POST['cpf'];
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    $primeiroDig = 0;
    $segundoDig = 0;

    for($i = 0, $menos =10; $i<=8; $i++, $menos--){
        $primeiroDig += $cpf[$i] * $menos;
    //   echo $cpf[$i].' x '.$menos. ' = '. $cpf[$i] * $menos;
    }
    // echo $primeiroDig;
    //echo '<br>';
    $restodig1 = $primeiroDig%11;
    if($restodig1 < 2){
        $restodig1 = 0;
    }else{
        $restodig1 = 11 - $restodig1;
    }
   // echo 'resto = '.$restodig1;

    for($i = 0,$menos=11; $i<=9; $i++, $menos--){
        $segundoDig += $cpf[$i] * $menos;
    }
    //echo '<br>';
    //echo $segundoDig;
    $restodig2 = $segundoDig%11;
    if($restodig2 < 2){
        $restodig2 = 0;
    }else{
        $restodig2 = 11 - $restodig2;
    }
    // echo '<br>';
    // echo 'resto = '. $restodig2;
    //echo '<br>';
    if($restodig1 != $cpf[9] || $restodig2 != $cpf[10]){
        echo 'cpf invalido';
    }else if($cpf == "11111111111" || $cpf == "00000000000" || $cpf == "99999999999" ||
    $cpf == "22222222222" || $cpf == "33333333333" || $cpf == "44444444444" || $cpf == "55555555555"
    || $cpf == "66666666666" || $cpf == "77777777777" || $cpf == "88888888888"){
        echo 'QUE COISA FEIA, não burle o sistema ;-;';
    }
    else{
        echo 'cpf valido: ';
        echo $cpf;
    }


    echo '<br><br><br><a href="../index.html"> <button type="button">Voltar home</a>';
    echo '<a href="../formsCpf/index.php"> <button type="button">Testar denovo</a>';

?>