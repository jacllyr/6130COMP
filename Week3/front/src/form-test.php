<?php
$contents = file_get_contents('http://172.17.0.1:81/test.php?make=' . $_GET["cars"] );
echo "page returned by container 1 <hr>";
echo $contents;
?>
