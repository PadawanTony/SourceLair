<?php

$me = "Antony";
function sayHelloToAntony(){
    global $me;
    if ($me == "Antony"){
        return "Hello, Antony! <br>";
    } else {
        return "Could not find Antony <br>";
    }
}
$func = "sayHelloToAntony";
echo $func();

$hellovar = function() use ($me){
    if ($me == "Antony"){
        echo "Hello, $me from \$hellovar! <br>";
    } else {
        echo "Could not find Antony <br>";
    }
};
echo $hellovar();


function sayHiTo($name, $title = Null){
    if (isset($title)){
        return "Hi $name! You are a $title! <br>";
    } else {
        return "Hi $name! <br>";
    }
}
echo sayHiTo("Gin");
echo sayHiTo("Gin", "PornStar");


?>