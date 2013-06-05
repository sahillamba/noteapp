<?php
$result = mysqli_query($con,"SELECT * FROM notes");
if (mysqli_num_rows($result) == 0) { 

}
else{
while($row = mysqli_fetch_array($result))
  {
 echo  '<div contenteditable="true" class="note" id=id'. $row['sid'] . ' style=" position:absolute; top:'. $row['top'] . 'px; left:'. $row['left'] . 'px;height:'. $row['height'] . 'px; width:'. $row['length'] . 'px;" >';  

 echo  '<div class="drag_handle" id="drag'. $row['sid'] . '" style="width:'. ($row['length']+26) .'px;"></div>';
 echo  '<div class="closebutton" onClick="noteclose()" id="close'. $row['sid'] . '"></div>';
 echo  '<p>'. $row['content'] . '</p></div>';
 
 echo '<script>';
 echo "$('#id". $row['sid'] . "').draggable({stack: 'div',handle: '.drag_handle'});";
 echo "$('#id". $row['sid'] . "').resizable({});";
 echo '$( "#id'. $row['sid'] .'" ).resizable({resize: function( event, ui ) {}});';
 echo '$( "#id'. $row['sid'] .'" ).on( "resize", function( event, ui ) {';
 echo 'x=$("#id'. $row['sid'] .'").width();';
 echo 'x=x+26;';
 echo '$( "#drag'. $row['sid'] .'").css( "width", x );});';
 
 echo '</script>';
 
  }
}
  ?>