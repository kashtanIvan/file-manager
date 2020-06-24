<?php


class Model
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DataBaseConnection();
    }

    public function getDbConnect()
    {
        return $this->dbConnect;
    }

    public function getFirst()
    {

    }
}
