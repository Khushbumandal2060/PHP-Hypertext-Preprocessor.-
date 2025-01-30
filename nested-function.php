<?php 

//functions will be called serially only.
function test(){
    echo "Test <br/>";

    function apple(){
        echo "apple is a function";
    }
}

test();
apple();
?>