<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('data');
     $xcrud->unset_add();
    $xcrud->unset_edit();
    $xcrud->unset_remove();
    $xcrud->unset_view();
    $xcrud->unset_csv();
    $xcrud->unset_limitlist();
    $xcrud->unset_numbers();
    //$xcrud->unset_pagination();
    $xcrud->unset_print();
    $xcrud->unset_search();
    $xcrud->unset_title();
    $xcrud->unset_sortable();

    $xcrud->column_class('id,name,Last_name,Unique_identifier','align-center');
    $xcrud->unset_numbers();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some page title</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://localhost:8080/Training2/base.js"></script> 
</script>
</head>
 
<body>
<?php

    echo $xcrud->render();
?>

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

  console.log(arrayb);
  replace(arrayb);
}, "text");
}
}
catch{ console.log('something wrong')};
function replace(arrayb)

{


$.ajax({
	data:{ar:arrayb},

    url: 'data.php',
    success:function(data){
	//alert("data save"+ data);
}
});
},5000);
</script>'

</body>
</html>
