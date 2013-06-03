
<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jnotes </title>
   
  <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/jquery-ui.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
  
  
  <style>
  body{background-color:#666666;}
  *:focus {
    outline: 0;
}
  .note { width: 150px; height: 150px; padding: 0.5em; background-color:#FFFF99;font-family: 'Reenie Beanie', cursive; font-weight:400; font-size:26px; }
.drag_handle {
	background-color: #630;
    position:absolute;
    top:-8px; left:0px;
    cursor:move;
    width:176px; height:14px;
    font-size:14px; line-height:14px;
    font-weight:bold;
    text-align:center;
    border:0px solid #000;
}
  </style>
  <script>
  
  var idCount = 1;
  var dragCount = 1;
  
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

 
 // $("body").append('<div contenteditable="true" class="note"  ><div class="drag_handle"></div><p>Drag me around</p></div>')
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
	
	
	
	
	
	
  </script>
  
</head>
<body>
 
<div contenteditable="true" class="note" id="id1" >
<div class="drag_handle" id="drag1"></div>
  <p>Drag me around</p>
</div>

<div>
<button onClick="newnote()">New Note</button>
</div> 
 
</body>
</html>
