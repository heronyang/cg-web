<?php
$handle = opendir(dirname(realpath(__FILE__)).'/cgs/');
while($file = readdir($handle)){
    if($file !== '.' && $file !== '..'){
        echo '<img src="cgs/'.$file.'" border="0" />';
    }
}
?>
