<?php
$sql = "SELECT * FROM devices ORDER BY `devices`.`id` DESC";

if ( ! empty( $_POST ) ) {

	$sql = "SELECT * FROM `devices` WHERE ";
		
	foreach ( $_POST as $key => $value ) {
		if ( is_int( $value ) ) {
			$sql .= " `" . $key . "` = " . $value . "";
		} else {
			$sql .= " `" . $key . "` = '" . $value . "'";
		}
		
		if ( ! empty( next($_POST) ) ) {
			$sql .= " AND ";
		}
	}

	$sql .= " ORDER BY `devices`.`id` DESC";
}

$result = mysqli_query( $db_connection, $sql );

$devices = mysqli_fetch_all( $result, MYSQLI_ASSOC );

mysqli_free_result( $result );

mysqli_close( $db_connection );
?>
<div class="items">
	<img src="img/spinner.gif" class="spinner">
	<?php if ( ! empty( $devices ) ) : ?>
		<?php foreach ( $devices as $device ) : ?>
			<div class="phone">
				<div class="phone_img">
					<?php switch ( $device['brand'] ) {
						case 'Samsung': ?>
						<img src="img/samsung.webp">
						<?php break;
						
						case 'Motorola': ?>
						<img src="img/motorola.jpg">
						<?php break;

						case 'Xiaomi': ?>
						<img src="img/phone1.jpg">
						<?php break;

						case 'Nokia': ?>
						<img src="img/nokia.jpg">
						<?php break;

						case 'LG': ?>
						<img src="img/lg.webp">
						<?php break;
						
						default: ?>
						<img src="img/phone1.jpg">
						<?php break;
					} ?>
				</div>
				
				<div class="phone_txt">
					<ul>
						<li>
							Марка: <?php echo htmlspecialchars( $device['brand'] ); ?>
						</li>
						
						<li>
							Модел: <?php echo htmlspecialchars( $device['model'] ); ?>
						</li>
						
						<li>
							Екран: <?php echo htmlspecialchars( $device['screen'] ) . ' "'; ?>
						</li>
						
						<li>
							Камера: <?php echo htmlspecialchars( $device['camera'] ) . ' MP'; ?>
						</li>
						
						<li>
							Памет: <?php echo htmlspecialchars( $device['memory'] ) . ' GB'; ?>
						</li>
						
						<li>
							Цена: <?php echo htmlspecialchars( $device['price'] ) . ' лв'; ?>
						</li>
					</ul>
				</div>
			</div>
		<?php endforeach ?>
	<?php else: ?>
		<p class="no_results">
			Няма намерени резултати!
		</p>
	<?php endif ?>
</div>
