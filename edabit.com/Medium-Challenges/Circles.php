<?php
// https://edabit.com/challenge/CNubhddXNa4j5X49H
class Circles
{

    public $radius;
    public $circumfrence;
    public $area;

    public function __construct($radius) {
        $this->radius = $radius;
        $this->circumfrence = $this->getCircumfrence();
        $this->area = $this->getArea();
    }

    public function getArea(): float {
        $area = pi() * $this->radius * $this->radius;
        return $area;
    }

    public function getCircumfrence(): float {
        $area = pi() * $this->radius * 2;
        return $area;
    }

    public function getRadius(): int {
        return $this->radius;
    }

    public function __toString(): string {
        return "This circles radius is $this->radius. The circumference is: $this->circumfrence. The Area is: $this->area\n";
    }
}

$circle = new Circles(11);
echo $circle;