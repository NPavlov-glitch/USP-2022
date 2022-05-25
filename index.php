<?php
include( 'config/db_connect.php' );

include( 'templates/header.php' );
?>

<div class="row">
	<?php
	include( 'templates/filter.php' );

	include( 'templates/listing.php' );
	?>
</div>

<?php
include( 'templates/footer.php' );
