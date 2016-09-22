<?php


if( isset($_GET['newUrl'])  &&  $_GET['newUrl']!="" )
{


    if( @file_get_contents( $_GET['newUrl']  )){

        echo file_get_contents($_GET['newUrl']);
    }else{
        echo "error";
    }

}
else
{
    echo "FAIL!";

}