<?php /* Smarty version 2.6.26, created on 2022-10-13 21:30:50
         compiled from header.tpl */ ?>
<?php if ($this->_tpl_vars['CURRENT_PAGE'] == 'page-unavailable' || $this->_tpl_vars['CURRENT_PAGE'] == 'job-unavailable'): ?>
	<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php if ($this->_tpl_vars['seo_title']): ?><?php echo $this->_tpl_vars['seo_title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['html_title']; ?>
<?php endif; ?></title>
    <meta name="description" content="<?php if ($this->_tpl_vars['seo_desc']): ?><?php echo $this->_tpl_vars['seo_desc']; ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_description']; ?>
<?php endif; ?>">
    <meta name="keywords" content="<?php if ($this->_tpl_vars['seo_keys']): ?><?php echo $this->_tpl_vars['seo_keys']; ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_keywords']; ?>
<?php endif; ?>">
	<meta name="generator" content="Jobberbase v<?php echo @JOBBERBASE_VERSION; ?>
">
    <meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
favicon.ico" type="image/x-icon">
	<?php if ($this->_tpl_vars['CURRENT_PAGE'] == '' || $this->_tpl_vars['CURRENT_PAGE'] != 'jobs'): ?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/all/">
	<?php else: ?>
		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
rss/<?php echo $this->_tpl_vars['current_category']; ?>
/">
	<?php endif; ?>
	<!--[if !IE]><script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.history.js" type="text/javascript"></script><![endif]-->
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<link href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
_templates/<?php echo $this->_tpl_vars['THEME']; ?>
/css/custom.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery-1.7.min.js"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.form.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/cmxforms.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.metadata.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->_tpl_vars['BASE_URL']; ?>
js/functions.js" type="text/javascript"></script>
	<script type="text/javascript">
		Jobber.I18n = <?php echo $this->_tpl_vars['translationsJson']; ?>
;
	</script>
	
</head>

<body>
		<?php if ($_SESSION['status'] != ''): ?>
			<div id="status">
				<?php echo $_SESSION['status']; ?>

			</div><!-- #status -->
		<?php endif; ?>
	<div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
"><h1><?php echo $this->_tpl_vars['translations']['header']['name']; ?>
</h1></a>
          <ul class="nav">
            <li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
">Home</a></li>
            <li class="dropdown" data-dropdown="dropdown">
                <a href="#" class="menu"><?php echo $this->_tpl_vars['translations']['footer']['column_use']; ?>
</a>
                <ul class="menu-dropdown">
                <?php if ($this->_tpl_vars['navigation']['footer1'] != ''): ?>
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['footer1']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
						<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['footer1'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
							<li><a href="<?php if ($this->_tpl_vars['navigation']['footer1'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['footer1'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['footer1'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['footer1'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
						<?php endif; ?>
					<?php endfor; endif; ?>
				<?php endif; ?>
                </ul>
            </li>
			<li class="dropdown" data-dropdown="dropdown">
                <a href="#" class="menu"><?php echo $this->_tpl_vars['translations']['footer']['column_find']; ?>
</a>
                <ul class="menu-dropdown">
                <?php if ($this->_tpl_vars['navigation']['footer2'] != ''): ?>
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['footer2']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
						<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['footer2'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
							<li><a href="<?php if ($this->_tpl_vars['navigation']['footer2'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['footer2'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['footer2'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['footer2'][$this->_sections['tmp']['index']]['name']; ?>
</a><li>
						<?php endif; ?>
					<?php endfor; endif; ?>
				<?php endif; ?>
                </ul>
            </li>
			<li class="dropdown" data-dropdown="dropdown">
                <a href="#" class="menu"><?php echo $this->_tpl_vars['translations']['footer']['column_misc']; ?>
</a>
                <ul class="menu-dropdown">
                <?php if ($this->_tpl_vars['navigation']['footer3'] != ''): ?>
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['footer3']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
						<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['footer3'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
							<li><a href="<?php if ($this->_tpl_vars['navigation']['footer3'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['footer3'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['footer3'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['footer3'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
						<?php endif; ?>
					<?php endfor; endif; ?>
				<?php endif; ?>
                </ul>
            </li>
          </ul>
		  
		  <ul class="customnav">
		  <li class="dropdown" data-dropdown="dropdown">
                <a href="#" class="menu">Help and Support</a>
                <ul class="menu-dropdown">
                <?php if ($this->_tpl_vars['navigation']['primary'] != ''): ?>
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['primary']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['tmp']['show'] = true;
$this->_sections['tmp']['max'] = $this->_sections['tmp']['loop'];
$this->_sections['tmp']['step'] = 1;
$this->_sections['tmp']['start'] = $this->_sections['tmp']['step'] > 0 ? 0 : $this->_sections['tmp']['loop']-1;
if ($this->_sections['tmp']['show']) {
    $this->_sections['tmp']['total'] = $this->_sections['tmp']['loop'];
    if ($this->_sections['tmp']['total'] == 0)
        $this->_sections['tmp']['show'] = false;
} else
    $this->_sections['tmp']['total'] = 0;
if ($this->_sections['tmp']['show']):

            for ($this->_sections['tmp']['index'] = $this->_sections['tmp']['start'], $this->_sections['tmp']['iteration'] = 1;
                 $this->_sections['tmp']['iteration'] <= $this->_sections['tmp']['total'];
                 $this->_sections['tmp']['index'] += $this->_sections['tmp']['step'], $this->_sections['tmp']['iteration']++):
$this->_sections['tmp']['rownum'] = $this->_sections['tmp']['iteration'];
$this->_sections['tmp']['index_prev'] = $this->_sections['tmp']['index'] - $this->_sections['tmp']['step'];
$this->_sections['tmp']['index_next'] = $this->_sections['tmp']['index'] + $this->_sections['tmp']['step'];
$this->_sections['tmp']['first']      = ($this->_sections['tmp']['iteration'] == 1);
$this->_sections['tmp']['last']       = ($this->_sections['tmp']['iteration'] == $this->_sections['tmp']['total']);
?>
						<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
							<li><a href="<?php if ($this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['primary'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
							<?php $this->assign('i', 1); ?>
						<?php endif; ?>
					<?php endfor; endif; ?>
				<?php endif; ?>
                </ul>
            </li>
		  </ul>
        </div>
      </div>
    </div>
	
	<div class="container">
	<div class="content">
		  <div class="page-header">
			<?php if (@ENABLE_NEW_JOBS): ?>		  
			<div class="coll">
				<a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
post/" class="btn large danger"><?php echo $this->_tpl_vars['translations']['search']['submit']; ?>
</a>
			</div>
			<?php endif; ?>
			<div class="colr">
				<form method="post" action="<?php echo $this->_tpl_vars['BASE_URL']; ?>
search/">
				<fieldset>
					<input class="span12" type="text" name="keywords" placeholder="<?php echo $this->_tpl_vars['translations']['search']['example']; ?>
 and Press Enter" />
				</fieldset>	
				</form>
			</div>	
        </div>