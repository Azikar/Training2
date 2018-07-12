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

</script>'

</body>
</html>
