<?php
session_start();
echo "Hello ".$_SESSION["username"];
$target_path = "uploads/"; 
$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 
 
if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
    echo "Fisierul ". basename( $_FILES['uploadedfile']['name']). " a fost uploadat"; 
} 
else { 
    echo "Eroare la uploadarea fisierului!"; 
}
?>
