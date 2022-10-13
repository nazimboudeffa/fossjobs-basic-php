<?php /* Smarty version 2.6.26, created on 2022-10-13 21:30:50
         compiled from sidebar.tpl */ ?>
		<div class="span4">
			<div class="spannerfirst">
						
			<h6>Job Categories</h6>
				<ul>
				<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['var_name']; ?>
/" title="<?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
"><?php echo $this->_tpl_vars['categories'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
				<?php endfor; endif; ?>
				</ul>
					
			</div>
			<?php if ($this->_tpl_vars['CURRENT_PAGE'] == ''): ?>
			<div class="spanner">			
			<h6><?php echo $this->_tpl_vars['jobs_count_all']; ?>
 <?php echo $this->_tpl_vars['translations']['homepage']['sidebar_totaljobs']; ?>
</h6>
				<ul>
					<?php if (@SIDEBAR_SHOW_WHAT == 'categories'): ?>
					<?php $_from = $this->_tpl_vars['jobs_count_all_categs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
					<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/<?php echo $this->_tpl_vars['job']['categ_varname']; ?>
/"><?php echo $this->_tpl_vars['job']['categ_name']; ?>
 (<?php echo $this->_tpl_vars['job']['categ_count']; ?>
)</a></li>
					<?php endforeach; endif; unset($_from); ?>
				<?php else: ?>
					<?php $_from = $this->_tpl_vars['jobs_count_per_country']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
					<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS_IN_COUNTRY']; ?>
/<?php echo $this->_tpl_vars['job']['country_ascii_name']; ?>
/"><?php echo $this->_tpl_vars['job']['country_name']; ?>
 (<?php echo $this->_tpl_vars['job']['jobs_in_country']; ?>
)</a></li>
					<?php endforeach; endif; unset($_from); ?>
					<?php if (! $this->_tpl_vars['hide_other_countries_in_sidebar']): ?>
					<li><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
jobs-worldwide/"><?php echo $this->_tpl_vars['translations']['sidebar']['other_countries']; ?>
 (<?php echo $this->_tpl_vars['jobs_count_in_other_countries']; ?>
)</a></li>
					<?php endif; ?>
				<?php endif; ?>
					
				</ul>	
			</div>
			<?php endif; ?>
			<div class="spanner">
			 <h6><a href="/rss/"><img src="/_templates/bootstrap/img/rss.png"> RSS Feeds</a></h6>
			</div>
			<div class="spannerlast">
			<?php if ($this->_tpl_vars['navigation']['secondary'] != ''): ?>
			<h6><?php echo $this->_tpl_vars['translations']['sidebar']['menu_title']; ?>
</h6>
				<ul>
					<?php unset($this->_sections['tmp']);
$this->_sections['tmp']['name'] = 'tmp';
$this->_sections['tmp']['loop'] = is_array($_loop=$this->_tpl_vars['navigation']['secondary']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<?php if (@ENABLE_NEW_JOBS || ( ! @ENABLE_NEW_JOBS && $this->_tpl_vars['navigation']['secondary'][$this->_sections['tmp']['index']]['url'] != 'post' )): ?>
						<li><a href="<?php if ($this->_tpl_vars['navigation']['secondary'][$this->_sections['tmp']['index']]['outside'] != 1): ?><?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['navigation']['secondary'][$this->_sections['tmp']['index']]['url']; ?>
/" title="<?php echo $this->_tpl_vars['navigation']['secondary'][$this->_sections['tmp']['index']]['title']; ?>
" ><?php echo $this->_tpl_vars['navigation']['secondary'][$this->_sections['tmp']['index']]['name']; ?>
</a></li>
					<?php endif; ?>
				<?php endfor; endif; ?>
				</ul>
			<?php endif; ?>		
			</div>
		</div>