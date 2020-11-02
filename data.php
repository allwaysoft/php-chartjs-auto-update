<?php

$return = [];
for ($i = 1; $i <= 7; $i++) {
    $return['Dataset_1'][] = rand(1, 10);
    $return['Dataset_2'][] = rand(1, 10);
    $return['Dataset_3'][] = rand(1, 10);
}
header('Content-type: application/json');
echo json_encode($return);

?>
