<html>
<head>
<Link rel ="stylesheet" href="1.css">
<?php
	$cars = ['toyota' => [[
					'model' => 'Corolla',
					'year' => 2014,
					'mileage' => 12000,
					'cost' => 87000,
					'photos' => [
						'https://auto.ngs.ru/pview/offers/a291c845f06e58886b3f489ca83ce9af_680_470.jpg',
						'https://auto.ngs.ru/pview/offers/cbd892c2c75365eb5f68d53a6ecc1b9f_680_470.jpg'
					]
				],
				[
					'model' => 'Vitz',
					'year' => 2010,
					'mileage' => 55000,
					'cost' => 420000,
					'photos' => [
						'https://auto.ngs.ru/pview/offers/a7dd6633781aa1d062958f3fcbd69ab1_680_470.jpg'
					]
				],
				[
					'model' => 'Corolla',
					'year' => 2010,
					'mileage' => 70000,
					'cost' => 500000,
					'photos' => [
						'https://auto.ngs.ru/pview/offers/0dea9d7c3f848e76b0eeb182b6c524fd_680_470.jpg'
					]
				]
			
		],
		'ВАЗ' => [
			[
				'model' => 'Granta',
				'year' => 2014,
				'mileage' => 15500,
				'cost' => 490000,
				'photos' => [
					'https://auto.ngs.ru/pview/offers/35852835ae8dc639017cb4959296ac8b_680_470.jpg'
				]
			],
			[
				'model' => 'Largus',
				'year' => 2013,
				'mileage' => 82300,
				'cost' => 350000,
				'photos' => [
				]
			]
		]
	]
	
;
?>
<div class="brand">
<div class="model">
<div class="year"> 
<div class="mileage"> 
<div class="cost"> 
<?php

foreach ($cars as $brand=>$items) { 
		
echo "<div class='brand'>Марка: ".$brand."<br>";
	foreach ($items as $data) {
			echo "<div class='model'>  Модель : ".htmlspecialchars($data['model'])."<br>" . "</div>";
			echo " <div class='year'>  Год: ".htmlspecialchars($data['year'])."<br>" . "</div>";
			echo "<div class='mileage'>   Пробек: ".htmlspecialchars($data['mileage'])."<br>" . "</div>";
			echo "<div class='cost'> Стоимость: ".number_format($data['cost'], 0, ' ', ' ' )." руб"."<br>" . "</div>";
		if (isset($data['photos'])){
			foreach ($data['photos'] as $photo){
			echo "<div class = 'photos'>	<img src = '".$photo."'/></div>";
				echo '<hr>';
			}
echo"</div>";
			}
echo"</div>";
echo"</div>";
echo"</div>";
	}
}

?>	
</body>
</html>