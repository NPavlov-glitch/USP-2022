<?php
include( 'config/db_connect.php' );

include( 'templates/header.php' );

$brand = $model = $screen = $camera = $memory = $price = '';
$errors = array( 'brand' => '', 'model' => '', 'screen' => '', 'camera' => '', 'memory' => '', 'price' => '' );

if ( isset( $_POST['submit'] ) ) {
	
	if ( empty( $_POST['add_brand'] ) ) {
		$errors['brand'] = 'A brand is required <br/>';
	} else {
		$brand = $_POST['add_brand'];
	}

	if ( empty( $_POST['add_model'] ) ) {
		$errors['model'] = 'A model is required <br/>';
	} else {
		$model = $_POST['add_model'];
	}

	if ( empty( $_POST['add_screen'] ) ) {
		$errors['screen'] = 'A screen is required <br/>';
	} else {
		$screen = $_POST['add_screen'];
	}

	if ( empty( $_POST['add_camera'] ) ) {
		$errors['camera'] = 'A camera is required <br/>';
	} else {
		$camera = $_POST['add_camera'];
	}

	if ( empty( $_POST['add_memory'] ) ) {
		$errors['memory'] = 'A memory is required <br/>';
	} else {
		$memory = $_POST['add_memory'];
	}

	if ( empty( $_POST['add_price'] ) ) {
		$errors['price'] = 'A price is required <br/>';
	} else {
		$price = $_POST['add_price'];
	}
}

if ( ! array_filter( $errors ) ) {
	$brand  = mysqli_real_escape_string( $db_connection, $_POST['add_brand'] );
	$model  = mysqli_real_escape_string( $db_connection, $_POST['add_model'] );
	$screen = mysqli_real_escape_string( $db_connection, $_POST['add_screen'] );
	$camera = mysqli_real_escape_string( $db_connection, $_POST['add_camera'] );
	$memory = mysqli_real_escape_string( $db_connection, $_POST['add_memory'] );
	$price  = mysqli_real_escape_string( $db_connection, $_POST['add_price'] );

	$sql = "INSERT INTO devices(brand, model, camera, screen, price, memory) VALUES('$brand', '$model', '$camera', '$screen', '$price', '$memory' )";

	if( mysqli_query( $db_connection, $sql ) ){
		header('Location: index.php');
	}
}
?>

<div class="add_body">
	<h1>Добавяне на мобилен телефон</h1>

	<form action="add.php" method="POST">
		<div class="lab">
			<div class="lab_elem">
				<label for="add_brand">Марка:</label>
				<input type="text" name="add_brand" id="brand" placeholder="Въведи марка" />
				<div class="red-text"><?php echo $errors['brand']; ?></div>
			</div>
			<div class="lab_elem">
				<label for="add_model">Модел:</label>
				<input type="text" name="add_model" id="model" placeholder="Въведи модел" />
				<div class="red-text"><?php echo $errors['model']; ?></div>
			</div>
			<div class="lab_elem">
				<label for="add_screen">Екран:</label>
				<input type="text" name="add_screen" id="screen" placeholder="Въведи размер на екран" />
				<div class="red-text"><?php echo $errors['screen']; ?></div>
			</div>
			<div class="lab_elem">
				<label for="add_camera">Камера:</label>
				<input type="text" name="add_camera" id="camera" placeholder="Въведи мп на камера" />
				<div class="red-text"><?php echo $errors['camera']; ?></div>
			</div>
			<div class="lab_elem">
				<label for="add_memory">Памет:</label>
				<input type="text" name="add_memory" id="memory" placeholder="Въведи памет" />
				<div class="red-text"><?php echo $errors['memory']; ?></div>
			</div>
			<div class="lab_elem">
				<label for="add_price">Цена:</label>
				<input type="text" name="add_price" id="price" placeholder="Въведи цена" />
				<div class="red-text"><?php echo $errors['price']; ?></div>
			</div>

			<input class="btn_add" name="submit" type="submit" value="Добави" />

		</div>


	</form>
</div>
<?php
include( 'templates/footer.php' );

