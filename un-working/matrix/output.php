<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AAAAAAAAAA</title>
</head>
<body>
<table>
    <? foreach ($matrix1 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>
-----------
<table>
    <? foreach ($matrix2 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>
<a href="switched.php"> Жмякс! </a>
<?//
//echo '<pre>';
//var_dump($oldmatrix1);
//?>
<!--////////-->
<?//
//echo '<pre>';
//var_dump($oldmatrix2);
//?>
<?
echo '<pre>';
var_dump($matrix1);
?>
////////
<?
echo '<pre>';
var_dump($matrix2);
//?>
</body>
</html>
