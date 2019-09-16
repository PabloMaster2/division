<?php
try {
    echo 1/0;
}
catch(ErrorException $e){
    echo "got $e";
}
?>