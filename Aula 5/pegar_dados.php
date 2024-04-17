<?php 

include('../Connections/conection.php');


$codigo_sql = "SELECT * FROM pessoas";
$resultado = $mysqli->query($codigo_sql);

if ($resultado->num_rows > 0)
{
    
    while($row = $resultado->fetch_assoc())
    {
        $nome = $row['nome'];
        $sobrenome = $row['sobrenome'];
        $data_nascimento = $row['data_nasci'];
        
        echo '<tr class="table-primary">
                <td>' . $nome . '</td> 
                <td>' . $sobrenome . '</td>
                <td>' . $data_nascimento . '</td>
            </tr>';
    }
}
$mysqli->close();

?>