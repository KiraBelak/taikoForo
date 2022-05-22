<?php
try {
   $mbd = new PDO('mysql:host=iweek5.c2pcmpd8lqm8.us-west-1.rds.amazonaws.com;dbname=iweek5', 'masterUsername', 'tec2.kaleb');
  
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

