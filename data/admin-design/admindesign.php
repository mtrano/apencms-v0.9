<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo NANO_CHARSET; ?>" /> 
<title>APENCMS (v0.9) -  <?php _lt("Admin Panel") ?></title>
<link rel="stylesheet" href="admin-design/stuff/admin.css" />
<script src="admin-design/stuff/jquery.js" type="text/javascript"></script>
<script src="admin-design/stuff/admin.js" type="text/javascript"></script>
<style type="text/css"></style>
<?php runTweak( 'admin-head-content' ); ?>
</head>
<body>
<div id="pagewrapper">
  <div id="page">
  	<div id="headertop">
    <div class="floatright">
    	V0.9 |
    	<a href="http://apencms.com" target="_blank"><?php _lt('APENCMS'); ?></a> |
    </div>
	<div class="viewsitelink"><a href="<?php echo NANO_CMS_PAGE; ?>" target="_blank"><?php _lt('View Site') ?></a> | <a href="?logout" ><?php _lt('Logout') ?></a></div>
    </div>
    <div id="header">
      <div id="topnav">
        <ul id="nav">
          <li class="top"><a href="?" class="top_link"><span><?php _lt('Admin Home'); ?></span></a></li>
          <li class="top"><a href="?action=addpage" class="top_link"><?php _lt('New Page'); ?></a></li>
          <li class="top"><a href="?action=showpages" class="top_link"><?php _lt('Pages & Options'); ?></a></li>
          <li class="top"><a href="?action=showareas" class="top_link"><?php _lt('Content Areas'); ?></a></li>
          <li class="top"><a href="?action=settings" class="top_link"><?php _lt('Settings'); ?></a></li>
        </ul>
      </div>
      <h1><?php _lt('APENCMS - Admin Panel'); ?></h1>
    </div>
    <div id="main">
      <div id="body">
        <?php runTweak( 'admin-body' ); ?>
      </div>
    </div>
    <!-- END OF MAIN DIV TAG -->
    <div class="break">&nbsp;</div>
    <div id="footer"> &copy; <a href="https://www.micheletrancossi.com">Michele Trancossi</a> | <a href='https://apencms.com/'>APENCMS</a></div>
  </div>
</div>
<script language="javascript">
</script>
<?php runTweak('admin-body-end'); ?>
</body>
</html>
