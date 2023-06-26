<?php 
    function createConnection(){
        $host = "localhost";
        $database = "Project_1";
        $username = "root";
        $password = "your_password";

        $connection = new mysqli($host,$username,$password,$database);
        if($connection -> error){
            echo "Error connect!";
        }
        else{
            return $connection;
        }
    }

    function executeQuery($query)
{
    $connection = createConnection();
    $result = $connection->query($query);
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
    }
    return $data;
}
?>