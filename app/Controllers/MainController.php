<?php


class MainController
{
    public static function index()
    {
        if (!empty($_REQUEST)) {
            $model = new Timezone();
            $model->id = $_REQUEST['id'] ?? null;
            $model->timezone = $_REQUEST['timezone'] ?? null;
            $model->save();
        }
        $model = new Timezone();
        $model->getFirst();
        $render = new RenderView('app/views/timezone.html');
        echo $render->render(['timezone' => $model->timezone, 'tm_id' => $model->id]);
//        var_dump($model);
//        echo 2323;
        exit;
    }
    public static function test()
    {
        $render = new RenderView('app/views/index.html');
        echo $render->render(['test' => 55555]);
        return;
        try {
            $dbh = new DataBaseConnection();
            foreach($dbh->getDBConnect()->query('SELECT * from test') as $row) {
                var_dump($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        exit;
    }
}
