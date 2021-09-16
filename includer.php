<?php
spl_autoload_register(function($class)
{
require_once(str_replace("\\","/",$class).".php");
});

function writeOut($objects)
{
    foreach($objects as $body){
        echo (explode('\\',get_class($body))[1])."<br>";
        echo "Volume: ".$body->volume()."cm<br>";
        echo "Surface: ".$body->surface()."cm<br>";
    }
}
?>