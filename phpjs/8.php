<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>안녕하세요</title>
  </head>
  <body>
    <h1>javascript</h1>
    <ul>
    <script type="text/javascript">
    name=new Array("a","b","c");
    n=name.length;
    i=0;
    while(i<n){
      document.write("<li>"+"안녕하세요"+name[i]+"</li>");
      i=i+1;
    }
    </script>
  </ul>
    <h1>php</h1>
    <ul>
    <?php
    $name=array("서희","승리","탑");
    $n=count($name);
    $i=0;
    while($i<$n){
    echo "<li>"."안녕하세요".$name[$i]."</li>";
    $i=$i+1;
  }
     ?>
   </ul>
  </body>
</html>
