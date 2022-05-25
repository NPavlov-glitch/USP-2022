<?php
$brands   = get_results_from_db_table( "SELECT `brand` FROM `devices`;", $db_connection, 'brand' );
$models   = get_results_from_db_table( "SELECT `model` FROM `devices`;", $db_connection, 'model' );
$screens  = get_results_from_db_table( "SELECT `screen` FROM `devices`;", $db_connection, 'screen' );
$cameras  = get_results_from_db_table( "SELECT `camera` FROM `devices`;", $db_connection, 'camera' );
$memories = get_results_from_db_table( "SELECT `memory` FROM `devices`;", $db_connection, 'memory' );
$prices   = get_results_from_db_table( "SELECT `price` FROM `devices`;", $db_connection, 'price' );

?>
<div class="filter">
	<h2>Филтри</h2>

	<form>
		<ul>
			<li>
				<label>Марка:</label>
			</li>

			<li>
				<select type="select" name="brand" class="dropdown">
					<?php foreach ( $brands as $brand ) : ?>
						<option value="<?php echo htmlspecialchars( $brand ); ?>">
							<?php echo htmlspecialchars( $brand ); ?>
						</option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label>Модел:</label>
			</li>

			<li>
				<select type="select" name="model" class="dropdown">
					<?php foreach ( $models as $model ) : ?>
						<option value="<?php echo htmlspecialchars( $model ); ?>">
							<?php echo htmlspecialchars( $model ); ?>
						</option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label>Екран:</label>
			</li>

			<li>
				<select type="select" name="screen" class="dropdown">
					<?php foreach ( $screens as $screen ) : ?>
						<option value="<?php echo htmlspecialchars( $screen ); ?>">
							<?php echo htmlspecialchars( $screen ); ?>
						</option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label>Камера:</label>
			</li>

			<li>
				<select type="select" name="camera" class="dropdown">
					<?php foreach ( $cameras as $camera ) : ?>
						<option value="<?php echo htmlspecialchars( $camera ); ?>">
							<?php echo htmlspecialchars( $camera ); ?>
						</option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label>Памет:</label>
			</li>

			<li>
				<select type="select" name="memory" class="dropdown">
					<?php foreach ( $memories as $memory ) : ?>
						<option value="<?php echo htmlspecialchars( $memory ); ?>">
							<?php echo htmlspecialchars( $memory ); ?>
						</option>
					<?php endforeach ?>
				</select>
			</li>

			<li>
				<label>Цена :</label>
			</li>

			<li>
				<select type="select" name="price" class="dropdown">
					<?php foreach ( $prices as $price ) : ?>
						<option value="<?php echo htmlspecialchars( $price ); ?>">
							<?php echo htmlspecialchars( $price ); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</li>
		</ul>
	</form>
</div>
