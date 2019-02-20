<div class="followupsection">
	<p>
		<?php print_unescaped(str_replace(
			[
				'{communityopen}',
				'{githubopen}',
				'{licenseopen}',
				'{linkclose}',
			],
			[
				'<a href="https://nextcloud.com/contribute" target="_blank" rel="noreferrer noopener">',
				'<a href="https://github.com/nextcloud" target="_blank" rel="noreferrer noopener">',
				'<a href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noreferrer noopener">',
				'</a>',
			],
			$l->t('Developed by the {communityopen}Nextcloud community{linkclose}, the {githubopen}source code{linkclose} is licensed under the {licenseopen}AGPL{linkclose}.')
		)); ?>
	</p>

	<p class="social-button">
		<?php print_unescaped(str_replace(
			[
				'{googleimage}',
				'{facebookimage}',
				'{twitterimage}',
				'{mastodonimage}',
				'{rssimage}',
				'{mailimage}',
				'{googleopen}',
				'{facebookopen}',
				'{twitteropen}',
				'{mastodonopen}',
				'{rssopen}',
				'{newsletteropen}',
				'{linkclose}',
				'{googletext}',
				'{facebooktext}',
				'{twittertext}',
				'{mastodontext}',
				'{rsstext}',
				'{mailtext}',
			],
			[
				image_path('core', 'googleplus.svg'),
				image_path('core', 'facebook.svg'),
				image_path('core', 'twitter.svg'),
				image_path('core', 'mastodon.svg'),
				image_path('core', 'rss.svg'),
				image_path('core', 'mail.svg'),
				'<a target="_blank" rel="noreferrer noopener" href="https://plus.google.com/+Nextcloud">',
				'<a target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/Nextclouders/">',
				'<a target="_blank" rel="noreferrer noopener" href="https://twitter.com/nextclouders">',
				'<a target="_blank" rel="noreferrer noopener" href="https://mastodon.xyz/@nextcloud">',
				'<a target="_blank" rel="noreferrer noopener" href="https://nextcloud.com/news/">',
				'<a target="_blank" rel="noreferrer noopener" href="https://newsletter.nextcloud.com/?p=subscribe&amp;id=1">',
				'</a>',
				$l->t('Follow us on Google+'),
				$l->t('Like our Facebook page'),
				$l->t('Follow us on Twitter'),
				$l->t('Follow us on Mastodon'),
				$l->t('Check out our blog'),
				$l->t('Subscribe to our newsletter'),

			],
'{googleopen}<img width="50" src="{googleimage}" title="{googletext}" alt="{googletext}">{linkclose}
{facebookopen}<img width="50" src="{facebookimage}" title="{facebooktext}" alt="{facebooktext}">{linkclose}
{twitteropen}<img width="50" src="{twitterimage}" title="{twittertext}" alt="{twittertext}">{linkclose}
{mastodonopen}<img width="50" src="{mastodonimage}" title="{mastodontext}" alt="{mastodontext}">{linkclose}
{rssopen}<img class="img-circle" width="50" src="{rssimage}" title="{rsstext}" alt="{rsstext}">{linkclose}
{newsletteropen}<img width="50" src="{mailimage}" title="{mailtext}" alt="{mailtext}">{linkclose}'
		)); ?>
	</p>
</div>