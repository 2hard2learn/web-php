<!DOCTYPE html>
<html>
<body>
<?php
      $fruits = array (
        array(1,"XL2546",16900,"xl2546.jpg"),
        array(2,"XL2546k",18900,"xl2546.jpg"),
        array(3,"RL2460",7690,"rl2460.jpg"),
        array(4,"EC-A",2790,"EC1.jpg"),
        array(5,"FK1",2490,"fk1.jpg"),
        array(6,"ZA13",2490,"za13.jpg"),
        array(7,"S1",1490,"S1.jpg"),
        array(8,"GSR",1390,"gsr.jpg"),
        array(9,"Camade II",1290,"camade.jpg"),
        array(10,"Vital 2.1",7590,"vital.jpg")
      );
      echo '<h1 style="font-weight:bold; color:yellowgreen; text-align:center; font-size:50px;">Zowie Shop</h1>';
      echo '<h2 style="font-weight:bold; color:red; text-align:center; font-size:40px;">Shop list</h2>';
      echo "<table border='1'
      style='text-align:auto;
      font-weight:bold;
      margin-left:auto;
      margin-right:auto'>";
      echo "<tr><td>ID</td><td>Name</td><td>Price</td><td>Picture</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
        echo "<tr  style='text-align:center; font-weight:bold;'>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$fruits[$i][2]. "</p></td>
        <td><img src=".$fruits[$i][3]." width=100 height=100></td>
        </tr>";
      }
      
?>

</body>
</html>