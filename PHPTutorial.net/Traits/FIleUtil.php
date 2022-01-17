<?php

trait FIleUtil
{
    use Copier;

    public function copyFile($source, $destination) {
        $this->copy($source, $destination);
    }
}