<?php


$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="game";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$query = "SELECT * FROM game.alumno";




if ($stmt = $con->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($idAlumno, $name_alum,$first_name, $age_alumno);
    while ($stmt->fetch()) {
       echo ""
        . "<table>"
               ."<td>$idAlumno</td>"
               ."<td>$name_alum</td>"
               ."<td>$first_name</td>"
               ."<td>$age_alumno</td>"
        ."</table>";
               
    }
    $stmt->close();
}








?>