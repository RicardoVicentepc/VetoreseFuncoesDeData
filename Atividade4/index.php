<?php

//Variaveis
$dia =date('d',strtotime('2020-02-27'));
$dia2 =date('N',strtotime('2020-02-27'));//Array da semana;
$mes = date('m', strtotime('2020-02-27'));
$ano = date('Y', strtotime('2020-02-27 15:48'));
$horas = date('H:i', strtotime('14:48'));


//Teste



//Vetores
$day = array("Segunda-Feira", "Terça-Feira", "Quarta-Feira", "Quinta-Feira", "Sexta-Feira", "Sábado", "Domingo");
$meses= array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
$mesesResumido= array("Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez");


//Exibir
echo 'a = São Paulo, '.$dia. " de ".$meses[$mes-1]. " de ". $ano. '<br>'; //PERGUNTAR PRA PROF COMO LOCALIZAR O USER PELO IP OU SLA AAAAAAAAAAAA.
echo 'b = '.$dia.'/'.$mes.'/'.$ano. '<br>';
echo 'c = '.$dia.' '.$mesesResumido[$mes-1].' '.$ano.'<br>';
echo 'd = '.$day[$dia2-1].', '.$dia.' de '.$meses[$mes-1].' de '.$ano. '<br>';
echo 'e = '.$dia.'/'.$mes.'/'.$ano.' '.$horas;

echo '<br><br><br><a href="../index.html"> <button type="button">Voltar home</a>';

?>