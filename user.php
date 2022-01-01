<?php
$id=$_GET['id'];
$db = mysqli_connect('localhost', 'root', '', 'workpath');
$qu="SELECT * FROM user WHERE id='$id'"
$result = mysqli_query($db,$qu);
$data=array();
while($show = mysqli_fetch_assoc($result)){
    $data[]=$show;
}
echo $user=json_encode($data);

?>
