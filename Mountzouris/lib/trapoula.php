<?php
function show_trapoula(){
    global $mysqli;

    $sql = 'select * from trapoula_start';
    $st = $mysqli ->prepare($sql);

    $st->execute();
    $res = $st->get_result();

    header('Content-type: application/json');
    print json_encode($res->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);


    
}
?>