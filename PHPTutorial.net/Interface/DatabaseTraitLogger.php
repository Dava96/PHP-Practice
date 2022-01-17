<?php


class DatabaseTraitLogger implements Logger
{
    public function log($message) {
    echo sprintf("Log %s to the database\n", $message);
    }
}