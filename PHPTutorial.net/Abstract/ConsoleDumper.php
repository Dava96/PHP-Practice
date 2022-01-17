<?php

require "Dumper.php";

class ConsoleDumper
{
    public function dump($data) {
        var_dump($data);
    }

}

$console = new ConsoleDumper();

$console->dump("sdsdds)");