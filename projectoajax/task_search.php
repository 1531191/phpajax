<?php

require_once 'database.php';


$search = $_POST['search']; // obtiene el valor del buscador search

if (!empty($search)) {
    //% todos los elementos que se le paresca
    $query = "SELECT * FROM task WHERE name LIKE '$search%'";
    $result = mysqli_query($con, $query); // entra la conexion y la consulta

    if (!$result) {

        die('Query error' . mysqli_errno($con));
    }

    $json = array();
    while ($row = mysqli_fetch_array($result)) {

        $json[] = array('name' => $row['name'],
                        'decription' => $row['decription'],
                        'id' => $row['id']);
    }
    
    $jsonstring = json_encode($json);
    echo $jsonstring;
    
    // HOLA TUTORIALsad
}
?>
