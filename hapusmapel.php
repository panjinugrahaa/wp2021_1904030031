<?php
  require 'function.php';

  //agar tidak bisa masuk ke pengetikan manual pada url
  if(!isset($_GET['id'])){
    header('location: index.php');
    exit;
  }



  $id = $_GET['id'];
  if(hapusmapel($id)){
    echo "
            <script>
            alert('data berhasil dihapus..!');
            document.location.href= 'matpel.php'
            </script>
            ";

  }else{
    echo "
            <script>
            alert('data gagal dihapus ');
            </script>
            ";


  }
    
?>