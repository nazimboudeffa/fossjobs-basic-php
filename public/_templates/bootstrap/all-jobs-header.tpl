{include file="header.tpl"}

		<div class="row jobmain">
			{if $jobs}
			<div class="span4">
			<div class="spannerfirst">
            <h6>{$translations.category.display_only}</h6>
				<ul>
					{section name=tmp loop=$types}
					<li><a href="{$BASE_URL}{$URL_JOBS}/{$types[tmp].var_name}/" title="{$types[tmp].name}">{$types[tmp].name}</a></li>
					{/section}
				</ul>
			</div>		
			</div><!-- #sort-by-type -->
			{/if}
			<div class="span12">
				<div class="job-details zebra-striped"><!-- Recent Jobs /-->
				<h6>{$translations.alljobs.all_jobs}</h6>
				{if $jobs}
					{include file="jobs-list.tpl"}
				{/if}
				</div>
			</div>
		</div><!-- #content -->

{include file="footer.tpl"}