<?php

class Model
{

    protected $con;

    public function get_dbconection($host, $user, $password, $db_name)
    {


        $this->con = new mysqli($host, $user, $password);

        if($this->con->connect_error) {
            die("Connection failed: " . $this->con->connect_error);
        }

            mysqli_select_db($this->con, $db_name);

    }

    public function get_data()
    {

    }
}