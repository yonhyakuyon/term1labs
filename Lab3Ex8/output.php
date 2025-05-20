<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3> Изначальная матрица </h3>
<table>
    <? foreach ($oldmatrix as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>

<h3> Минимальный по модулю элемент </h3>
<? echo $min;?>

<h3> Измененная матрица </h3>
<table>
    <? foreach ($matrix as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>

</body>
</html>
