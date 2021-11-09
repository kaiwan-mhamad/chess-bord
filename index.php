<!DOCTYPE html>
<html>
<head>
	<title>php</title>
</head>
<style type="text/css">

.body1{
    background-color: skyblue;
}	

.sad{
	background-color: black;
    margin: 5px;
    
    width: 20vh;
    height:20vh;
}
.sam{
	background-color: white;
	margin: 5px;
	
	width: 20vh;
	height:20vh;
}

</style>
<body class="body1">
   
<table class="div1" style="width: 1200px;height: 500px; " >
	
  <?php

      for($i=1;$i<9;$i++)
      {
        $pitakan = array("A", "B", "C","D","E", "F", "G","H");
          echo "<tr>";
          for($j=0;$j<8;$j++)
          {
          $gshty=$i+$j;
          if($gshty%2==0)
          {
          echo "<td class='sad' style='color:white;'>".$i.$pitakan[$j]."</td>";
          }
          else
          {
          echo "<td class='sam' style='color:black;'>".$i.$pitakan[$j]."</td>";
          }
          }
          echo "</tr>";
    }
          ?>

</table>
</body>
</html>


