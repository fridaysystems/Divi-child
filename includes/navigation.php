<div class="pagination clearfix">
	<?php if ( class_exists( 'INVP' ) && is_callable( array( 'INVP', 'paging_html' ) ) ) { echo INVP::paging_html(); } ?>
</div>