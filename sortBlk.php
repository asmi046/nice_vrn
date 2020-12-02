<?php

global $query_string;
parse_str($query_string, $args);	

$metaquery = array(
	'relation' => 'OR',
	'orderCatM' => array (
		'key'     => 'tovar_order',
		'compare' => 'EXIST',
		'type'    => 'NUMERIC',
	),
	
	'priceM' => array (
		'key'     => 'as_product_price',
		'value' => '0',
		'compare' => '>',
		'type'    => 'NUMERIC',
	),
);

//$metavalue = empty($_REQUEST["hp"])?"":$_REQUEST["hp"];  
$orderby = ($_REQUEST["sortparam"] === "price")?"priceM":"orderCatM";  
$metakey = empty($_REQUEST["sortparam"])?"tovar_order":$_REQUEST["sortparam"];  
$order = empty($_REQUEST["ordn"])?"ASC":$_REQUEST["ordn"];  


	
	
	

if (!empty($_REQUEST["hp"]))
{


$args['meta_key'] = $_REQUEST["hp"];


$orderby = 'as_product_price';  
$order = "DESC";  

}

	$args['meta_query'] = $metaquery;
	$args['orderby'] = $orderby;
	$args['order'] = $order;	
	
	//echo "<pre>";
	//print_r($args);
	//echo "</pre>";
	query_posts( $args );
?>