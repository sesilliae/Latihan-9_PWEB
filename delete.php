<?php    
   include("koneksi.php");

   $id = $_GET['id'];

   $query = "delete from calon_pengurus where id = $id";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: index.php");
   }else{
       header("Location: edit.php?id=$id");
   }

?>