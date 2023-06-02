<div class="pagination clearfix">
	<?php if ( class_exists( 'INVP' ) && is_callable( array( 'INVP', 'get_paging_html' ) ) ) { echo INVP::get_paging_html(); } ?>
</div>