<?php
if(isset($_GET["newUrl"]))
{ include "../core/controller.php";
    include "../core/model.php";
    include "../core/view.php";
    include "../controllers/controller_main.php";
    include "../models/model_main.php";
    $contr = new Controller_Main();
    $contr->model = new Model_Main();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db_name = "browser_task";
    $contr->model->get_dbconection($host, $user, $password, $db_name);
    if( @file_get_contents( $_GET['newUrl']  ))

    {

        $contr->model->add_url($_GET['newUrl']);


    }   $data = $contr->model->get_data();
}
?>
<select name = "sites" onchange="optionChoosed(this.value)">
<?php
$count = 0;
echo "<option value=".$count++.">"."Choose site</option>";
foreach($data as $row)
{

    echo "<option value=".$row['name'].">".$row['name']."</option>";
}
?>
</select>
