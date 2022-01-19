<?php
//https://edabit.com/challenge/ibTitkqmzeuz52NxG
class SpecialArray
{
    public function splitArray($numbers) {
        if (empty($numbers)) {
            return -1;
        }

        for ($i = 0; $i < count($numbers); $i++) {
            if ($numbers[$i] % 2 === 1) {
                $odd[] = $numbers[$i];
            } else {
                $even[] = $numbers[$i];
            }
        }

        $this->printArray($even, "Even");
        $this->printArray($odd, "Odd");
        //print_r($odd);
        //print_r($even);
    }

    public function printArray($numbers, $message) {
        $result = "[";
        $count = count($numbers) -1;

        foreach ($numbers as $number) {
            if ($count === 0) {
                $result .= $number . "]";
                break;
            }
                $result .= $number . ", ";
                $count--;
        }

        echo "This array is $message: $result \n";
    }

    public function special($numbers) {
        $count = 0;

        for ($i = 0; $i < count($numbers); $i++) {
            if ($i % 2 === 1 && $numbers[$i] % 2 === 1) {
                $count++;
            } elseif ($i % 2 === 0 && $numbers[$i] % 2 === 0) {
                $count++;
            }
        }

        if ($count === count($numbers)) {
            $this->printArray($numbers, "Special");
            $this->splitArray($numbers);
        } else {
            $this->printArray($numbers, "Not Special");
            $this->splitArray($numbers);
        }

    }

}

$special = new SpecialArray();
//echo $special->isSpecialArray([2, 7, 4, 9, 6, 1, 6, 3]);
echo $special->special([2, 7, 4, 9, 6, 1, 6, 3]); // Special
echo $special->special([2, 7, 8, 8, 6, 1, 6, 3]); // Not Special
