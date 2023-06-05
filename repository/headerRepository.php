<?php 
    require_once('createConnection.php');


    function getConfigByConfigCode($code){
        $query = "select * from config where code like '".$code."'";
        //Tien hanh chay query
        //Day chi la vi du cho viec lay ra tai database
        return "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMtlFoYajHq1AuRRChUQ4oQISSvqn1j5lGVw&usqp=CAU";

    }
