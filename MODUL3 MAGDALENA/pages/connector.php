<?php
  $conn = mysqli_connect("localhost","root","", "modul3");    

  if(!$conn) {  
      echo "<script>
              alert('Failed Connect into Database')
            </script>";
  }

?>