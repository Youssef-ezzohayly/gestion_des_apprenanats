<?php

require 'connect.php';                                      
$id=$_GET['id2'];                                           
$sql="DELETE FROM etudiant where id2='$id'";                 
$query=mysqli_query($con,$sql);                              
    if(isset($query)){                                       
    header("location:aff.php");                              
}

?>