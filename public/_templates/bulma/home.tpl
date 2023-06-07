	<div class="column is-9">
		<div class="box content" role="main">
			<h1>Welcome to neoFreelance</h1>
			<div class="content">
				<div>
					<p>This board is exclusively for FOSS jobs</p>
					<a href="{$BASE_URL}post/">Submit jobs you find!</a></p>
					<hr/>
				</div>
			</div>

			{if $latest_jobs}
				<h2 class="is-sr-only">Latest jobs</h2>
				{foreach item=job from=$latest_jobs}
					<article class="post">
						<h3><a href="{$BASE_URL}{$URL_JOB}/{$job.id}/{$job.url_title}/">{$job.title}</a></h3>
						<div class="media">
							<div class="media-content">
								<div class="content">
									<p>
										{$job.created_on} - {$translations.homepage.at}
										{if $job.url && $job.url != 'http://'}
											<a href="{$job.url}" class="neutral-link">{$job.company}</a>
										{else}
											{$job.company}
										{/if}

										{if $job.is_location_anywhere}— {$translations.jobs.location_anywhere}{else}{$translations.homepage.in} {$job.location}{/if}

										<a href="{$BASE_URL}jobs/{$job.type_var_name}/">
											<span class="tag">
												{$job.type_name}
												<span class="bd-color {$job.type_var_name}">&nbsp;</span>
											</span>
										</a>
									</p>
								</div>
							</div>
							<div class="media-right is-hidden-mobile">
								<span class="has-text-grey-light"><i class="fa fa-comments"></i> {$job.views_count}</span>
							</div>
						</div>
					</article>
				{/foreach}
				<a href="{$BASE_URL}{$URL_JOBS}/">{$translations.homepage.view_all_jobs}</a>
			{/if}
		</div>
	</div>
