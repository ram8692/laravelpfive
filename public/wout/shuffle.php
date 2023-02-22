<?php
$data = json_decode(stripslashes($_POST['data']));
shuffle($data);

echo json_encode($data);

?>