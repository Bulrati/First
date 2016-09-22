<?php
/**
 * Created by PhpStorm.
 * User: Свет
 * Date: 10.08.2016
 * Time: 15:57
 */

class Model_Main extends Model
{

    function get_data()
    {
        $result = $this->con->query("SELECT * FROM urls");
        if (!$result) {
            printf("Error: %s\n", mysqli_error($this->con));
            exit();
        }

        $rows = [];
        while(  $row = mysqli_fetch_array($result)  ){
            $rows[] = $row;
        }
        return $rows;
    }

    function add_url($newUrl)
    {
        $newUrl = explode("//", $newUrl)[1];
        if(isset(explode("www.", $newUrl)[1]))
        {
            $newUrl = explode("www.", $newUrl)[1];
        }
        $newUrl = $this->con->real_escape_string($newUrl);
        if ($this->con->query("INSERT INTO urls (name) VALUES ('$newUrl')") === TRUE) {

        } else {

        }
    }

}