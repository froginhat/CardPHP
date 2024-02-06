
<html>
    <head>
    <title>Веб-сайт</title>
    </head>
    <body>
    
    <?php    
    $tetr=2;
    $oblosh=0.5;
    $col= 5;
    echo "<p> Стоимость".($col*($oblosh+$tetr))."</p>";


    $FN ="Преловский Максим";
    $n=15;
    for ($i = 0; $i < $n+5; $i++) {
        echo "<p>$FN</p>";
    }


    $Styd=[
        "Иванов"=> 200,
        "Петров"=> 340,
        "Сидоров"=> 800,
    ];
    $step=0;
    foreach ($Styd as $k=>$v) { 
        echo "".$k." ".$v." ";
        $step+=$v;
    }
    echo"<br>Сумарная стипендия: $step";


    $s1="Я люблю Беларусь";
    $s2= "Я учусь в Политехническом колледже";
    $pos = strpos($s1, "Гродно");

    echo "<p>Длина строки s2 ".(strlen($s2))."</p>";

    if ($pos === false) {
        echo "<p>Гродно не найдена в строке '$s1'</p>";
    } else {
        echo "<p>Гродно найдена в строке '$s1'</p>";
        echo "<p>в позиции $pos</p>";
    }

    echo"<p>15 символ в строке s2 ".("$s2[15]")." Код символа ".(ord($s2[15]))."</p>";

    $a=1;
    $b=2;
    $c=3;
    $x=4;
    echo "".(prim($a,$b,$c,$x));
    function prim($a,$b,$c,$x) 
{
    $res=1/(sqrt($a*pow(2,$x)+$b*$x+$c));
    return $res;
}
    ?>
    </body>
    </html>
    