<?php
namespace App\models;
trait TCalcRows
{
    public $test = 'asd';

    public function calc(array $rows): int
    {
        return count($rows);
    }
}