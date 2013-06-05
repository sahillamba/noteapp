    var noteElements = document.querySelectorAll("div.note");
for (var i=0, max=noteElements.length; i < max; i++) {
   var number = noteElements[i].id;
   number=number.replace("id","");
   document.write(number);
   number=Number(number);
}
 var newid=number+1;
   
  var idCount = newid;
  var dragCount = newid;
   var closeCount = newid;
  $(function() {

$('#id1').draggable({stack: "div",handle: '.drag_handle'});
$('#id1').resizable({});
$( "#id1" ).resizable({resize: function( event, ui ) {}});
$( "#id1" ).on( "resize", function( event, ui ) {
x=$("#id1").width();
x=x+26;
$( "#drag1").css( "width", x );
});
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