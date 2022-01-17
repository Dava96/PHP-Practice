<?php

trait Writer
{
    public function write($destination) {
        echo sprintf("Write to %s <br>", $destination);
    }
}