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
<table >
    <? foreach ($oldmatrix1 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>

<br>

<table >
    <? foreach ($oldmatrix2 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>
<br>
<table >
    <? foreach ($matrix1 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>
</table>

<br>

<table >
    <? foreach ($matrix2 as $row): ?>
        <tr>
            <? foreach ($row as $element): ?>
                <td> <? echo $element ?> </td>
            <? endforeach;?>
        </tr>
    <? endforeach; ?>

</table>
<br>
<button type="submit" formaction="<?$k++;?>" id="k" formmethod="post">тык?</button>
</body>
</html>
