<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>IntTestNum</title>
        
        <style>
            h1, h3 {
                padding: 10px;
                text-decoration: underline;
            }
            
        </style>
        
    </head>
    <body>
        
        <h1>Integer Testing</h1>
    
    <?php
        
        class AnthonyMyInteger {
            
            private int $number;
            
            public function setNumber(int $num): void {//setter
                $this->number = $num;
            }
            
            public function getNumber(): int {//getter
                return $this->number;
            }
            
            public function isEven(): bool {//divisible by 2
                return $this->number % 2 === 0;
            }
            
            public function isOdd(): bool {//if even, cannot be odd
                return $this->number % 2 !== 0;
            }
            
            public function isPrime(): bool {
                if ($this->number < 2) return false;
                
                for ($i = 2; $i <= sqrt($this->number); $i++) {
                    //each iteration, the target number will be squared
                    //and then modulo'd against the current iteration
                    //if the module is 0, then it is not prime
                    if ($this->number % $i === 0) {
                        return false;
                    }
                }
                //if it can't be modulo'd, then it is prime
                return true;
            }
        }
        
        $testNum1 = new AnthonyMyInteger();
        $testNum1->setNumber(73);
        $testNum2 = new AnthonyMyInteger();
        $testNum2->setNumber(175);
        $testNum3 = new AnthonyMyInteger();
        $testNum3->setNumber(17591);//how far can we stretch this?
    ?>
        
        <h3>The First Test</h3>
        
        <?php
        
        echo "What is " . $testNum1->getNumber() . "?<br>";
        echo "Is it even? " . ($testNum1->isEven() ? 'Yes' : 'No') . "<br>";
        echo "Is it odd? " . ($testNum1->isOdd() ? 'Yes' : 'No') . "<br>";
        echo "Is it prime? " . ($testNum1->isPrime() ? 'Yes' : 'No') . "<br>";
        
        ?>
        
        <h3>The Second Test</h3>
        
        <?php
        
        echo "What is " . $testNum2->getNumber() . "?<br>";
        echo "Is it even? " . ($testNum2->isEven() ? 'Yes' : 'No') . "<br>";
        echo "Is it odd? " . ($testNum2->isOdd() ? 'Yes' : 'No') . "<br>";
        echo "Is it prime? " . ($testNum2->isPrime() ? 'Yes' : 'No') . "<br>";
        
        ?>
        
        <h3>The Third Test</h3>
        
        <?php
            
            echo "What is " . $testNum3->getNumber() . "?<br>";
            echo "Is it even? " . ($testNum3->isEven() ? 'Yes' : 'No') . "<br>";
            echo "Is it odd? " . ($testNum3->isOdd() ? 'Yes' : 'No') . "<br>";
            echo "Is it prime? " . ($testNum3->isPrime() ? 'Yes' : 'No') . "<br>";
            
        ?>
        
        
    </body>
</html>