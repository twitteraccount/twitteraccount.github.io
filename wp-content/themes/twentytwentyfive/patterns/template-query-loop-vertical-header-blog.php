<!-- wp:query {"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"fontSize":"xx-large"} /-->
			<!-- wp:post-date {"fontSize":"small","isLink":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:spacer {"height":"var:preset|spacing|40"} -->
		<div style="height:var(--wp--preset--spacing--40)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
		<div class="wp-block-columns">
<!-- wp:column {"width":"70%"} -->
		<div class="wp-block-column" style="flex-basis:70%"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false} /--></div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column"></div>
		<!-- /wp:column -->
</div>
		<!-- /wp:columns -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9"} /-->
		<!-- wp:spacer {"height":"var:preset|spacing|80"} -->
		<div style="height:var(--wp--preset--spacing--80)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph -->
		<p><br>
<b>Fatal error</b>:  Uncaught Error: Call to undefined function esc_html_x() in C:\xampp\htdocs\wp-content\themes\twentytwentyfive\patterns\template-query-loop-vertical-header-blog.php:47
Stack trace:
#0 {main}
  thrown in <b>C:\xampp\htdocs\wp-content\themes\twentytwentyfive\patterns\template-query-loop-vertical-header-blog.php</b> on line <b>47</b><br>
</p>
</div>