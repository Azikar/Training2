<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head> 


<script>
setInterval (function getdata(){
	try{
$.get("Readfrom.php", null, function(data) {
  var arrayb = $("<ul>") //selecting <ul>
    .html(data)
    .find('ul') //finds all ul
    .toArray()
   .slice(2) // starting at index 2 becouse first up 
   .map(function (i) {
      var elements = $(i).children('li'); //goes through each ul and creates object
		
      return {
        id: elements[0].firstChild.nodeValue,
        name: elements[1].firstChild.nodeValue,
        lastN: elements[2].firstChild.nodeValue,
        identyfier: elements[3].firstChild.nodeValue
     };
    });

  //console.log(arrayb);
  replace(arrayb);
}, "text");
}

catch{ console.log('something wrong')};},10000)
function replace(arrayb)

{


$.ajax({
	data:{ar:arrayb},
    url: 'data.php',
    success:function(data){
	//alert("data save"+ data);
}

});
}
</script>'

