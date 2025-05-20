<?php
require_once 'functions.php';
$db = mysqli_connect('localhost', 'root', '', 'uni');

$sql_build = "SELECT * FROM build";
$build = $db->query($sql_build)->fetch_all();
$sql_room = "SELECT * FROM room";
$room = $db->query($sql_room)->fetch_all();

$bn = count($build);
$rn = count($room);

for ($i = 0; $i != $bn; $i++) {
    $bid = $i + 1;
    for ($j = 0; $j != $rn; $j++) {
        
        $sql_room_id = "SELECT id FROM room WHERE build_id ='$bid'";
        $id_room = $db->query($sql_room_id)->fetch_assoc();

        $id_rm = (int) $id_room ["id"];

        $sql_h_id = "SELECT w_side_id FROM room_location WHERE room_id ='$id_rm'";
        $h_id_sql = $db->query($sql_h_id)->fetch_assoc();

        $wside_id = (int) $h_id_sql ["w_side_id"];


        $sql_h = "SELECT height FROM world_sides WHERE id ='$wside_id'";
        $height = $db->query($sql_h)->fetch_assoc();


        $h = (int) $height["height"];

        echo $h;
        echo '-';
    }
//     echo $bid;
    // $result[$i][0] = implode(',', $build[$i]);



//    echo '<pre>';
//    var_dump($id_room);

//    echo $id_rm;


//    echo '<pre>';
//    var_dump($h_id_sql);


    // echo $w;
    // echo '-';
    // echo $l;

    // echo '-';
//    echo '<pre>';
//    var_dump($h);

    // echo $v;
    // echo '-';
    // echo $s;
//    $result[$i][0] = implode(',', $build[$i]) . 'Площадь помещения:' . $s . 'Объём помещения:' . $v;
    // for ($j = 0; $j != $rn; $j++) {
    //     $bindxr = $room[$j][6];
    //     // echo $bindxr;
    //     // if ($bindxr == $bindx) {
    //     //     $id = $bindxr;
    //     // unset($room[$j][6]);
    //     // $rtemp[$i][$j] = implode(',', $room[$j]);
    //     // unset($tempr[$j]);

    //     // $sql_w = "SELECT width FROM room WHERE build_id ='$bid'";
    //     // $w = $db->query($sql_w)->fetch_assoc();

    //     // echo '<pre>';
    //     // var_dump($w);


    //     // }


    // }
    // for ($k = 0; $k != $fn; $k++) {
    //     $bindxf = $faculty[$k][2];

    //     if ($bindxf == $bindx) {
    //         unset($faculty[$k][2]);
    //         $ftemp[$i][$k] = implode(',', $faculty[$k]);

    //     }


    //     // $sql_faculty_b = "SELECT * FROM faculty WHERE build_id = '$bid'";
    //     // $faculty_b = $db->query($sql_faculty_b)->fetch_all();
    //     // echo '<pre>';
    //     // var_dump($faculty_b);


    // }

}


// for ($i = 0; $i != $sn; $i++){
//     $findxs = $school[$i][2];
//     foreach ($ftemp as $bkey=>$bk){
//         foreach ($bk as $key=>$el){
//             if ($findxs == $key){
//                 unset ($school[$i][2]);
//                 $stemp[$key][$i] = implode(',', $school[$i]);

//             }
//         }
//     }
// }
// foreach ($school as $sk=>$ss){
//     $findxs = $school[$sk][2];
//     foreach ($ftemp as $bkey=>$bk){
//         foreach ($bk as $key=>$el){
//             if ($findxs == $key){
//                 unset ($school[$sk][2]);
//                 $stemp[$key][$sk] = implode(',', $school[$sk]);

//             }
//         }
//     }
// }
// foreach ($ftemp as $k1=>$el){
//     foreach ($el as $fid=>$elem){

//         $fid++;
//         $sql_school_faculty = "SELECT * FROM school WHERE faculty_id = '$fid' ";
//         $school_faculty = $db->query($sql_school_faculty)->fetch_assoc();
//         echo $fid;

//         echo '<pre>';
//         var_dump($school_faculty);


//     }
// }

// $result = [];

// for ($i =0; $i != $bn; $i++){
//     $sql_build = "SELECT * FROM build WHERE id = '$i'";
//     $build = $db->query($sql_build)->fetch_assoc();
//     echo '<pre>';
//     var_dump($build);
//     $result[$i][0] = implode(',', $build[$i]);
//     // $sql_faculty = "SELECT * FROM faculty WHERE build_id = '$i'";
//     // $faculty = $db->query($sql_faculty)->fetch_all();



// }


// echo '<pre>';
// var_dump($rtemp);
// echo '<pre>';
// var_dump($stemp);
// echo '<pre>';
// var_dump($ftemp);
//echo '<pre>';
//var_dump($result);
//echo '<pre>';
//var_dump($build);
// echo '<pre>';
// var_dump($room);
// echo '<pre>';
// var_dump($school);
// echo '<pre>';
// var_dump($faculty);
// echo '<pre>';
// var_dump($sch_room);
//require_once 'review_output.php';