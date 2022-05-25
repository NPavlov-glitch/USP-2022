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

<div class="row">
	<div class="filter">
		<h2>Филтри</h2>
		<form>
			<ul>
			<li><label>Марка:</label></li>
			<li><input type="text" name="brand"></li>
			<li><label>Модел:</label></li>
			<li><input type="text" name="model"></li>
			<li><label>Екран:</label></li>
			<li><input type="text" name="screen"></li>
			<li><label>Камера:</label></li>
			<li><input type="text" name="camera"></li>
			<li><label>Памет:</label></li>
			<li><input type="text" name="memory"></li>
			<li><label>Цена :</label></li>
			<li><input type="text" name="price"></li>
			<li><input type="submit" name="submit" value="Приложи"></li>

		</ul>
		</form>
	</div>
	<div class="items">

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Huawei</li>
  				<li>Модел: Nova 9 SE</li>
  				<li>Екран: 6,78"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Samsung</li>
  				<li>Модел: Galaxy A33</li>
  				<li>Екран: 6.40"</li>
  				<li>Камера: 48 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

  		<div class="phone">
  			<div class="phone_img"><img src="/USP/img/phone1.jpg"></div>
  			<div class="phone_txt"><ul>
  				<li>Марка: Xiaomi</li>
  				<li>Модел: Redmi Note 11 Pro</li>
  				<li>Екран: 6.67"</li>
  				<li>Камера: 108 MP</li>
  				<li>Памет: 128 GB</li>
  				<li>Цена: 500 лв</li>
  			</ul></div>
  		</div>

	</div>
</div>

<?php
include( 'templates/footer.php' );
?>
</body>
</html>
