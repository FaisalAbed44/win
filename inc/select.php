<?php
$sql = 'SELECT * FROM users ORDER BY RAND() LIMIT 1';
$RESULT =mysqli_query($conn,$sql);
$users=mysqli_fetch_all($RESULT,MYSQLI_ASSOC);
?>

