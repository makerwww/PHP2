<?php
namespace App\Model;
trait TCalcRows
{
    public $test = 'asd';

    public function calc(array $rows): int
    {
        return count($rows);
    }
}