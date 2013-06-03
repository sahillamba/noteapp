
<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Noteapp</title>
   
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/jquery-ui.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <script src="js/jquery.ui.touch-punch.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css" />
  
 
  <script>
  
  var idCount = 1;
  var dragCount = 1;
   var closeCount = 1;
  $(function() {

$('#id1').draggable({stack: "div",handle: '.drag_handle'});
$('#id1').resizable({});
$( "#id1" ).resizable({
  resize: function( event, ui ) {}
});
$( "#id1" ).on( "resize", function( event, ui ) {
x=$("#id1").width();
x=x+26;
$( "#drag1").css( "width", x );
} );

})


  function newnote(){
  var div = document.createElement('div');
  div.innerHTML = "Drag me around";  
  div.setAttribute('class', 'note');
  div.setAttribute('contenteditable', 'true');
  
  idCount=idCount+1;
  var id;
  id = "id" + idCount;
  div.setAttribute('id', id);

  document.body.appendChild(div);
  
  
  var div = document.createElement('div');
  div.setAttribute('class', 'drag_handle');
  dragCount=dragCount+1;
  var drag;
  drag = "drag" + idCount;
  div.setAttribute('id', drag);
  document.getElementById(id).appendChild(div);
 

  var div = document.createElement('div');
 div.setAttribute('class', 'closebutton');
 div.setAttribute('onClick', 'closenote()');
 div.setAttribute("left", "0");
 div.setAttribute("top", "0");
   closeCount=closeCount+1;
  var clos;
  clos = "close" + closeCount;
  div.setAttribute('id',clos);
  


 document.getElementById(id).appendChild(div);
 
 
 $('#' + clos).click(function(){
    {$("#" + id ).remove();}
});
 
  function noteclose()
{$("#id1" ).remove();}
  
$(function() {

$('#' + id).draggable({stack: "div",handle: '.drag_handle'});
$('#' + id).resizable({});
$('#' + id).resizable({
  resize: function( event, ui ) {}
});
$('#' + id).on( "resize", function( event, ui ) {
x=$('#' + id).width();
x=x+26;

$('#' + drag).css( "width", x );
} );
  })
	}
	
	
function noteclose()
{$("#id1").remove();}
	
	
</script>
  
</head>
<body>
 <a href="https://github.com/sahillamba/noteapp"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
<div contenteditable="true" class="note" id="id1" >
<div class="drag_handle" id="drag1"></div>
<div class="closebutton" onClick="noteclose()" id="close1"></div>
<p>Drag me around</p>
</div>

<div>
<button onClick="newnote()">New Note</button>

</div> 

</body>
</html>
