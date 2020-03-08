<div id="footer" class="clearfix">

	<div id="footer_container" class="clearfix">
		<div id="footer_content" class="clearfix">

			<div class="footer_subpage clearfix">
				<span class="pagenav"><?php _e('Kontakt') ?></span><br /><br />

				<strong>Harley Owner Group<br />
					Metropolitan Chapter Hamburg</strong><br />
				Ivo-Hauptmann-Ring 4<br />
				22159 Hamburg<br /><br />

				<a href="mailto:info@metropolitan-chapter.de">info@metropolitan-chapter.de</a><br />
				<a href="https://www.metropolitan-chapter.de">www.metropolitan-chapter.de</a>
			</div>
			<div class="footer_subpage clearfix">
				<?php wp_list_pages('child_of=2&title_li=Startseite<br /><br />'); ?>
			</div>

			<div class="footer_subpage clearfix">
				<?php wp_list_pages('child_of= 13&title_li=Chapter<br /><br />'); ?>
			</div>

			<div class="footer_subpage clearfix">
				<?php wp_list_pages('child_of= 15&title_li=Bilder<br /><br />'); ?>
			</div>

			<div class="footer_subpage clearfix">
				<?php wp_list_pages('child_of= 14&title_li=Events<br /><br />'); ?>
			</div>

			<div class="clearfix"></div>
		</div>
		<div>
		</div>

		<?php wp_footer(); ?>
		</body> <!-- End Body -->

		</html> <!-- End HTML -->