<html>
<body>
<h1> Aula 1 </h1>
<?php
/**
 * Created by PhpStorm.
 * User: fernandobachur
 * Date: 07/07/18
 * Time: 11:24
 */
$var_1 = 1;
$var_2 = 3;
echo "$var_1+$var_2=" . ($var_1 + $var_2);

$meses = [
    1 => "Janeiro",
    "Fevereiro",
    "Março",
];

// print_r($meses);

$cores = [
    "azul" => "#0000FF",
    "vermelho" => "#FF0000",
    "verde" => "#00FF00",
];
?>
<hr>
<?php

foreach ($cores as $cor => $hexa) {
    echo "<span style='color: $hexa'>$cor</span><br>";
}

echo $cores['verde'];
?>

<button onclick="redirecionar()">
    Ir para o Google
</button>
<script>

    // alert('Cheguei');
    function redirecionar() {
        if(confirm('Deseja assessar o site google?')){
            document.location='http://www.google.com';
        }else {
            alert('voce ficou no site');
        }
    }


</script>

</body>
</html>
