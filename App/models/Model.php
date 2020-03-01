<?php

namespace App\models;
use App\models\TCalcRows;
use App\services\IDB;
/**
 * Class Model
 */
abstract class Model
{
    use TCalcRows;

    /**
     * @var DB
     */
    protected $db;

    abstract protected function getTableName():string ;

    /**
     * Good constructor.
     * @param IDB $db
     */
    public function __construct(IDB $db)
    {
        $this->db = $db;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM {$this->getTableName()} WHERE id = $id";
        return $this->db->find($sql);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->getTableName()}";
        return $this->db->findAll($sql);
    }

    public function getEmails()
    {
        $sql = "SELECT email FROM {$this->getTableName()}";
        return $this->db->findAll($sql);
    }

    public function getPhoneNumber()
    {
        $sql = "SELECT tel FROM {$this->getTableName()}";
        return $this->db->findAll($sql);
    }
}