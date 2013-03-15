<?php


for ($i = 0; $i < count($_FILES['file']['name']); ++$i) {

      if ($_FILES["file"]["error"][$i] > 0)
        {
        echo "Return Code: " . $_FILES["file"]["error"][$i] . "<br />";
        }
      else
        {
        echo "Upload: " . $_FILES["file"]["name"][$i] . "<br />";
        echo "Type: " . $_FILES["file"]["type"][$i] . "<br />";
        echo "Size: " . ($_FILES["file"]["size"][$i] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["file"]["tmp_name"][$i] . "<br />";


       $moved = move_uploaded_file($_FILES["file"]["tmp_name"][$i], "./" . $_FILES["file"]["name"][$i]);
        
        if ($moved) {
            echo "Move: Success <br/>";
        }
        else {
            echo "Move Failed <br/>";
        }


          echo "Stored in: " . "public://" . $_FILES["file"]["name"][$i] . "<br/> <br/>";
          }
       // }

  //  else
    //  {
   //   echo "Invalid file";
   //   }
}
?>
