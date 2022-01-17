<?php

require "Robot.php";

class Android extends Robot
{

    public function greet()
    {
        $greetings = parent::greet();

        return $greetings . " From Android";
    }

}

$android = new Android();
echo $android->greet();