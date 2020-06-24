<?php

class Timezone extends Model
{
    public $id;
    public $timezone;

    public function getFirst()
    {
//        $this->getDbConnect()->getDBConnect()
            foreach($this->getDbConnect()->getDBConnect()->query('SELECT * from test limit 1') as $row) {
                $this->id = $row['id'] ?? null;
                $this->timezone = $row['test'] ?? null;
            }
    }
    public function save()
    {
        $this->getDbConnect()->getDBConnect()->query('UPDATE test SET `test` = "' . $this->timezone
            . '" WHERE (`id` = '. $this->id .');');
    }
}
