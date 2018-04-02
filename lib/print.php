<?php
  function print_title(){
    if(isset($_GET['id'])){
      echo htmlspecialchars($_GET['id']);
    }else {
      echo "Welcome";
    }
  }

  function print_description(){
    if(isset($_GET['id'])){
      $basename = basename($_GET['id']);
      echo htmlspecialchars(file_get_contents("data/".$basename));
    } else {
      echo "Welcome";
    }
  }

  function print_list(){
    $List = scandir('./data');
    $i = 0;

    while($i < count($List)){
      $title = htmlspecialchars($List[$i]);
        if($List[$i] != '.'  ){
          if($List[$i] != '..'  ){
        echo "<li><a href=\"index.php?id=$title\">$title</a></li>\n";

      }
    }
      $i = $i + 1;
    }

  }
?>
