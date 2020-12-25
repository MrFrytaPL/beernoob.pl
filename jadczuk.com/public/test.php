<?
$a = 5;
$b = 10;
$c = $a + $b;

echo $c;

echo "<br>";
echo "<hr>";
echo "<br>";

$tekst = '<b>Hello world</b>';

echo $tekst;

echo "<hr>";
echo "<br>";
echo 'To jest tekst (stały)';

echo "<hr>";
echo "<br>";

$imie = 'Asia';
echo 'Moje imię to: '.$imie;

echo "<hr>";
echo "<br>";

$a = 2;
$b = 3;
$suma = $a + $b;
$roznica = $a - $b;
$iloczyn = $a * $b;

echo "Suma A i B =".$suma."<br>";
echo "Różnica A i B =".$roznica."<br>";
echo "Iloczyn A i B =".$iloczyn."<br>";

// if()

if($suma > 5)
{
    echo 'Suma jest większa niż 5';
}
elseif ($suma == 5)
{
    echo 'Suma jest równa 5';
}
else
{
    echo 'Suma jest mniejsza 5';
}
echo "<hr>";
for ($i=0; $i<170; $i+=2)
{
echo "zmienna I jest równa: ".$i."<br>";
}

?>