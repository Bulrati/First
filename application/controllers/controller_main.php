<?php

class Controller_Main extends Controller
{

    function __construct()
    {

        $this->model = new Model_Main();
        $this->view = new View();

    }

    function action_index()
    {

        $host = "localhost";
        $user = "root";
        $password = "";
        $db_name = "browser_task";
        $this->model->get_dbconection($host, $user, $password, $db_name);
        $data = $this->model->get_data();
        $this->view->generate('main_view.php', 'template_view.php', $data);

    }


}