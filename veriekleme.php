<?php

$dataAdd = $db -> prepare("INSERT INTO tablename SET
    _one=?,
    _two=?,
    _three=?
");
$dataAdd -> execute([
    $,
    $,
    $
]);

if ( $dataAdd ) {
    echo '<p class="alert alert-success">Successfully added. :)</p>';
    
    header("REFRESH:1;URL=index.php");
} else {
    echo '<p class="alert alert-danger">Oops, you encountered an error while adding it. Please try again. :/</p>';
    
    header("REFRESH:1;URL=index.php");
}
