<?php
 
 
# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'new Gallery Folder', 	//Plugin name
	'1.1', 		//Plugin version
	'Mateusz Skrzypczak',  //Plugin author
	' ', //author website
	'This plugin generate photo gallery from your folder on easy way', //Plugin description
	'theme', //page type - on which admin tab to display
	'newGalleryFolder'  //main function (administration)
);
 
# activate filter 

add_action('theme-header','showNewGalleryFolder');
 
 
 
# add a link in the admin tab 'theme'
add_action('theme-sidebar','createSideMenu',array($thisfile,'how use newGalleryFolder?'));
 

function newGalleryFolder() {

	include('newGalleryFolder/help.php');

};


function showNewGalleryFolder() {
 
    include('newGalleryFolder/showGalleryFolder.php');

};

 

register_script('glightboxjs', $SITEURL.'plugins/newGalleryFolder/js/glightbox.min.js', GSVERSION, TRUE);
queue_script('glightboxjs',GSFRONT); 
register_script('glightboxjs2', $SITEURL.'plugins/newGalleryFolder/js/script.js', GSVERSION, TRUE);
queue_script('glightboxjs2',GSFRONT); 
register_style('glightboxcss', $SITEURL.'plugins/newGalleryFolder/css/glightbox.min.css', GSVERSION, 'screen');
queue_style('glightboxcss',GSFRONT); 

register_style('customcss', $SITEURL.'plugins/newGalleryFolder/css/style.css', GSVERSION, 'screen');
queue_style('customcss',GSFRONT); 
?>