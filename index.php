<?php
/**
 * Created by PhpStorm.
 * User: Rifky_Rep
 * Date: 09/02/2017
 * Time: 09.52
 */
require_once './Tools/Heading_Generator/Heading_Generator.php';
use Tools\Heading_Generator\Heading_Generator;

//Setting heading disini
$judul = 'Judul';
$style = '1';//Ukuran heading harus kurang sama dengan 4

$teks = array(
    'style'=>$style,
    'data'=>$judul
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heading Generator</title>
</head>
<body>

<?php
$a = new Heading_Generator($teks,'yellow');
echo $a->generate();
?>
</body>
</html>

