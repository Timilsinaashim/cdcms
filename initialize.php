<?php
$dev_data = array('id'=>'-1','firstname'=>'Developer','lastname'=>'','username'=>'dev_oretnom','password'=>'5da283a2d990e8d8512cf967df5bc0d0','last_login'=>'','date_updated'=>'','date_added'=>'');
if(!defined('base_url')) define('base_url','./');
if(!defined('base_app')) define('base_app', str_replace('\\','/',__DIR__).'/' );
if(!defined('dev_data')) define('dev_data',$dev_data);


if(!defined('DB_SERVER')) define('DB_SERVER',"project-babysitter.ca6crwpmxkgt.us-east-1.rds.amazonaws.com");
 if(!defined('DB_USERNAME')) define('DB_USERNAME',"admin");
 if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"adminadmin");
if(!defined('DB_NAME')) define('DB_NAME',"cdcms");

// if(!defined('DB_SERVER')) define('DB_SERVER',"cdms.c1is2ie0o2yw.us-east-1.rds.amazonaws.com");
// if(!defined('DB_USERNAME')) define('DB_USERNAME',"admin");
// if(!defined('DB_PASSWORD')) define('DB_PASSWORD',"adminadmin");
// if(!defined('DB_NAME')) define('DB_NAME',"cdms");
?>

<script>
// Printing base_url to the browser console
console.log("connection part here");
console.log("<?php echo defined('base_url') ? base_url : ''; ?>");
</script>