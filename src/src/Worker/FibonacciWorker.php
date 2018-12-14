<?php
namespace App\Worker; // for symfony 2/3, the namespace would typically be AppBundle\Worker

class FibonacciWorker
    extends \Dtc\QueueBundle\Model\Worker
{
    private $filename;
    public function __construct() {
        $this->filename = '/tmp/fib-result.txt';
    }

    public function fibonacciFile($n) {
        $feb = $this->fibonacci($n);
        file_put_contents($this->filename, "{$n}: {$feb}");
    }


    public function fibonacci($n)
    {
        if($n == 0)
            return 0; //F0
        elseif ($n == 1)
            return 1; //F1
        else
            return $this->fibonacci($n - 1) + $this->fibonacci($n - 2);
    }

    public function getName() {
        return 'fibonacci';
    }

    public function getFilename()
    {
        return $this->filename;
    }
}

