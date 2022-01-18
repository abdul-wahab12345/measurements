<?php

get_header();


if(isset($_GET['type'])){

	$type = $_GET['type'];
	$cat = $_GET['cat'];

	include plugin_dir_path( __FILE__ ) . "{$cat}/{$type}.php";

}


?>

<?php get_footer();?>