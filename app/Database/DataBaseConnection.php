<?php


class DataBaseConnection
{
    public $dbConnect;
    public function __construct()
    {
        if (env('DB_CONNECTION') == 'mysql') {
            $t = new PDO(
                'mysql:host=' . env('DB_HOST') . ';port=' . env('DB_PORT') . ';dbname=' . env('DB_DATABASE'),
                env('DB_USERNAME'),
                env('DB_PASSWORD')
            );
            $this->dbConnect = $t;
        } else {
            print "Error!: with DB Connection";
            die();
        }
    }

    public function getDBConnect()
    {
        return $this->dbConnect;
    }

}
