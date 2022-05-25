<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
//include( 'config/db_connect.php' );
include( 'templates/header.php' );
?>
<style>
<?php include 'CSS/style.css'; ?>
</style>
<div class="add_body">
<h1>Добавяне на мобилен телефон</h1>

<form>
	<div class="lab">
		<div class="lab_elem">
	        <label for="image">Снимка:</label>
	        <input type="file" id="image" />
      	</div>
      	<div class="lab_elem">
	        <label for="brand">Марка:</label>
	        <input type="text" id="brand" placeholder="Въведи марка" />
      	</div>
      	<div class="lab_elem">
	        <label for="model">Модел:</label>
	        <input type="text" id="model" placeholder="Въведи модел" />
      	</div>
      	<div class="lab_elem">
	        <label for="screen">Екран:</label>
	        <input type="text" id="screen" placeholder="Въведи размер на екран" />
      	</div>
      	<div class="lab_elem">
	        <label for="camera">Камера:</label>
	        <input type="text" id="camera" placeholder="Въведи мп на камера" />
      	</div>
      	<div class="lab_elem">
	        <label for="memory">Памет:</label>
	        <input type="text" id="memory" placeholder="Въведи памет" />
      	</div>
      	<div class="lab_elem">
	        <label for="price">Цена:</label>
	        <input type="text" id="price" placeholder="Въведи цена" />
      	</div>
      
      <input class="btn_add" type="submit" value="Добави" />
		
	</div>
	

		</form>
</div>
<?php
include( 'templates/footer.php' );
?>
</body>
</html>
