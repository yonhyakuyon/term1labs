<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Обзор</title>
</head>
<body>
<div>
    <table>
        <? foreach ($build as $row): ?>
            <tr>
                <? foreach ($row as $element): ?>
                    <td> <? echo $element ?> </td>
                <? endforeach;?>
            </tr>
        <? endforeach; ?>
    </table>
    <div>
        <table>
            <?
            foreach ($build as $raw){
            $build_id[] = $raw[0];}
            for ($i = 0; $i<count($build_id); $i++):

            $sql_room = "SELECT * FROM room WHERE build_id = $build_id[$i]";
            $room =$db->query($sql_room)->fetch_all();
                foreach ($room as $row2):


                ?>
                <tr>
                    <?foreach ($row2 as $element1):?>
                        <td> <? echo $element1 ?> </td>
                    <? endforeach;?>
                </tr>
            <? endforeach; ?>
            <? endfor;?>
        </table>
    </div>
</div>
</body>
</html>
