<?php

//fetchsearch.php

include '../app/call.php';

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM producttable 
 WHERE product_name REGEXP '".$search."' 
 OR category_name '".$search."' 
 OR subcategory_name REGEXP '".$search."' 
 OR product_price REGEXP '".$search."'
 ";
}
else
{
 $query = "
 SELECT * FROM producttable ORDER BY product_id
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>