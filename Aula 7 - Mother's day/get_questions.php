<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $data_base = "questions";

    $conn = new mysqli($server, $user, $password, $data_base);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql_code = "SELECT * FROM questions ORDER BY rand() LIMIT 10";
    $result = $conn->query($sql_code);

    if ($result->num_rows > 0)
    {
        $questions = array();
        while($row = $result->fetch_assoc())
        {
            array_push($questions, $row);
        }
        echo json_encode($questions);
    }
    else
    {
        echo "0 results";
    }
    $conn->close();

?>