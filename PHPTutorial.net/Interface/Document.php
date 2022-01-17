<?php

class Document implements Readable
{

    public $contents;

    public function __construct($contents) {
        $this->contents = $contents;
    }

    public function read()
    {
        return $this->contents;
    }
}