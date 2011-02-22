<?php
require_once"../../../wp-config.php";
global $wpdb;


$macme_table_statistics_data = $wpdb->prefix . "macme_stat_data";
$macme_table_statistics_location = $wpdb->prefix . "macme_stat_location";
$macme_table_content_assets = $wpdb->prefix . "macme_content_assets";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>view asset</title>
<link rel='stylesheet' id='macmestylesheet-css'  href='http://localhost/macme2/wp-content/plugins/macme/macme.css?ver=3.0.5' type='text/css' media='all' />
<script type='text/javascript' src='http://localhost/macme2/wp-includes/js/jquery/jquery.js?ver=1.4.2'></script>
<script type='text/javascript' src='http://localhost/macme2/wp-content/plugins/macme/js/macme.js?ver=3.0.5'></script>
<script type='text/javascript' src='http://localhost/macme2/wp-content/plugins/macme/js/macmejquery.js?ver=3.0.5'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&#038;ver=3.0.5'></script>
<script type='text/javascript' src='http://localhost/macme2/wp-content/plugins/macme/js/macmegooglemaps.js?ver=3.0.5'></script>
</head>
<body>
<?php
if(isset($_GET["id"])){
	echo( do_shortcode("[macme title='ciao' id='" . $_GET["id"] . "']") );
}
?>
</body>
</html>
