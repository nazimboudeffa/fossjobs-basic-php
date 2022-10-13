<?php /* Smarty version 2.6.26, created on 2022-10-13 21:30:50
         compiled from home.tpl */ ?>
		<div class="span12">
		<?php if ($this->_tpl_vars['spotlight_jobs']): ?>
			<div class="spotlight-jobs zebra-striped"><!-- Spotlight Jobs /-->
				<h6><?php echo $this->_tpl_vars['translations']['homepage']['spotlight_jobs']; ?>
</h6>
				<?php $_from = $this->_tpl_vars['spotlight_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
				<div class="row"><!-- Start job /-->
					<div class="span2">
						<span class="label <?php echo $this->_tpl_vars['job']['type_var_name']; ?>
"><?php echo $this->_tpl_vars['job']['type_name']; ?>
</span>
					</div>
					<div class="span10">
						<h5><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a></h5>
						<span class="spanuser"><?php echo $this->_tpl_vars['translations']['homepage']['at']; ?>
 <?php echo $this->_tpl_vars['job']['company']; ?>
<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?>, <?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?></span>
						<span class="spanuser"><?php echo $this->_tpl_vars['translations']['homepage']['in']; ?>
 <?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?></span>
					</div>
					
				</div><!-- End job /-->
				<?php endforeach; endif; unset($_from); ?>
			</div><!-- End Spotlight Jobs /-->
		<?php endif; ?>

<div>
<img src="/fossjobs.logo.svg" width="200" style="float:right; margin-left:15px;" alt="">
<h2>Welcome to fossjobs.net</h2>
<div style="margin:5px">
<p>This is a job board exclusively for free &amp; open source jobs: <b>We only list jobs at organizations that improve and involve FOSS or open hardware projects. Merely _using_ open source is not enough.</b></p>
<p>You can also send us job links to <i>submit [(at)] fossjobs [dot] net</i>.</p>
<br/><p><a href="https://fosstodon.org/@fossjobs">Mastodon</a> &bull; <a href="https://twitter.com/fossjobs_net">Twitter</a> &bull; <a href="ircs://chat.freenode.net/#fossjobs">IRC</a> &bull; <a href="https://www.facebook.com/fossjobs.net">Facebook</a> &bull; <a href="https://www.fossjobs.net/rss/">RSS Feeds</a> &bull; <a href="https://github.com/fossjobs/">Github</a></p>
<hr/></div>	
</div>

		<?php if ($this->_tpl_vars['latest_jobs']): ?>
			<div class="recent-jobs zebra-striped"><!-- Recent Jobs /-->
				<h6><?php echo $this->_tpl_vars['translations']['homepage']['recent_jobs']; ?>
 <small><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOBS']; ?>
/"><?php echo $this->_tpl_vars['translations']['homepage']['view_all_jobs']; ?>
</a></small></h6>
				<?php $_from = $this->_tpl_vars['latest_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
				<div class="row"><!-- Start job /-->
					<div class="span2">
						<span class="label <?php echo $this->_tpl_vars['job']['type_var_name']; ?>
"><?php echo $this->_tpl_vars['job']['type_name']; ?>
</span>
					</div>
					<div class="span10">
						<h5><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a></h5>
						<span><?php echo $this->_tpl_vars['job']['created_on']; ?>
 - <?php echo $this->_tpl_vars['translations']['homepage']['at']; ?>
 <?php echo $this->_tpl_vars['job']['company']; ?>
<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?>, <?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?></span>
						<span><?php echo $this->_tpl_vars['translations']['homepage']['in']; ?>
 <?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?></span>
					</div>
				</div><!-- End job /-->
				<?php endforeach; endif; unset($_from); ?>
			</div><!-- End Recent Jobs /-->
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['most_applied_to_jobs']): ?>
			<div class="applied-jobs zebra-striped"><!-- Recent Jobs /-->
				<h6><?php echo $this->_tpl_vars['translations']['homepage']['popular_jobs']; ?>
</h6>
				<?php $_from = $this->_tpl_vars['most_applied_to_jobs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['job']):
?>
				<div class="row"><!-- Start job /-->
					<div class="span2">
						<span class="label <?php echo $this->_tpl_vars['job']['type_var_name']; ?>
"><?php echo $this->_tpl_vars['job']['type_name']; ?>
</span>
					</div>
					<div class="span10">
						<h5><a href="<?php echo $this->_tpl_vars['BASE_URL']; ?>
<?php echo $this->_tpl_vars['URL_JOB']; ?>
/<?php echo $this->_tpl_vars['job']['id']; ?>
/<?php echo $this->_tpl_vars['job']['url_title']; ?>
/" title="<?php echo $this->_tpl_vars['job']['title']; ?>
"><?php echo $this->_tpl_vars['job']['title']; ?>
</a></h5>
						<span><?php echo $this->_tpl_vars['job']['apps']; ?>
 <?php echo $this->_tpl_vars['translations']['homepage']['applicants']; ?>
 - <?php echo $this->_tpl_vars['translations']['homepage']['at']; ?>
 <?php echo $this->_tpl_vars['job']['company']; ?>
<?php if ($this->_tpl_vars['job']['is_location_anywhere']): ?>, <?php echo $this->_tpl_vars['translations']['jobs']['location_anywhere']; ?>
<?php else: ?></span>
						<span><?php echo $this->_tpl_vars['translations']['homepage']['in']; ?>
 <?php echo $this->_tpl_vars['job']['location']; ?>
<?php endif; ?></span>
					</div>
					
				</div><!-- End job /-->
				<?php endforeach; endif; unset($_from); ?>
			</div><!-- End Recent Jobs /-->
		<?php endif; ?>	
          </div>
		  