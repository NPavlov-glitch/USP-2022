<?php
$sql = "SELECT * FROM devices";
    
$result = mysqli_query( $db_connection, $sql );

$devices = mysqli_fetch_all( $result, MYSQLI_ASSOC );

mysqli_free_result( $result );

mysqli_close( $db_connection );
?>
<div class="items">
	<?php foreach ( $devices as $device ) : ?>
		<div class="phone">
			<div class="phone_img">
				<img src="img/phone1.jpg">
			</div>
			
			<div class="phone_txt">
				<ul>
					<li>
						Марка: Xiaomi
					</li>
					
					<li>
						Модел: Redmi Note 11 Pro
					</li>
					
					<li>
						Екран: 6.67"
					</li>
					
					<li>
						Камера: 108 MP
					</li>
					
					<li>
						Памет: 128 GB
					</li>
					
					<li>
						Цена: 500 лв
					</li>
				</ul>
			</div>
		</div>
	<?php endforeach ?>
</div>
