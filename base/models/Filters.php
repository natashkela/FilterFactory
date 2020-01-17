<?php
require_once('dbh.inc.php');


class Filters{
    function GetAllFilters(){
        global $conn;
        $sql = $conn->prepare("SELECT * FROM filters");
        $sql->execute();
        $result = $sql->get_result();

    }
}
