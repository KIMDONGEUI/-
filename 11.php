<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <h1>javascript</h1>
    <ul>
    <script>
    list = new Array("김동의","한성현","김소용");
    i=0;
    while(i<list.length){
      document.write("<li>"+list[i]+"</li>");
      i=i+1;
    }
    </script>
  </ul>
<h2>php</h2>
<ul>
<?php
$list = array("김동의","한성현","김소용","윤지혜");
$i=0;
while($i<count($list)){
  echo "<li>."$list[$i]."</li>";
  $i=$i+1;
}
?>
</ul>
  </body>

</html>
