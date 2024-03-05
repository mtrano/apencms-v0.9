<?php
/*
	APENCMS (APENCMS.com) v0.9 stable © 2023 Michele Trancossi is a fork and updateof NanoCMS by Kalyan Chakravarthy ( www.KalyanChakravarthy.net )
	This software is released under GNU/GPL License ( read "gnu-license-mini.txt" )

	Developed by Michele Trancossi
	Email :mich.trancossi@gmail.com

	If you are using this, please support me by linking back :)...not a must though.
	https://apencms.com
*/

/* ---------------------------------------- */
/*         Optional Configurations          */
/* ---------------------------------------- */

/* In which directory are your main NanoCMS Files present?	*/
$NanoCMS['nanocms_files_dir'] = 'data/';

/* NanoCMS charset */
$NanoCMS['charset'] = 'UTF-8';

/*
 NanoCMS page slug word .... 
 For index.php?page=something -> use $NanoCMS['slug_word'] = "page";
 For index.php?slug=something -> use $NanoCMS['slug_word'] = "slug";
*/
$NanoCMS['slug_word'] = "page";

/* Other stuff for more customization  */
$NanoCMS['file_extension'] = 'php'; //php,html,htm,txt

/* Your Main Index filename ( the filename which will launch your nanoCMS )	*/
$NanoCMS['index_filename'] = 'index.php';

/* Your admin page filename	*/
$NanoCMS['admin_filename'] = 'nanoadmin.php';

$NanoCMS['index_location'] = '';
?>
