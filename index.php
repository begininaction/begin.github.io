<!DOCTYPE html> 
<html>
<head>
	<title>РОСЗДРАВНАДЗОР</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;700&display=swap" rel="stylesheet">   
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<div class="container-fluid">
			<nav>
				<div class="row">
					<div class="col-md-3">
						<a href="https://roszdravnadzor.ru/" target="_blank" class="header__logo"><img src="images/3.png"></a>
					</div>
					<div class="col-md-9">
						<ul>
							<li><a href="http://52reg.roszdravnadzor.ru/about/info" target="_blank"> Общая информация  </a></li>
							<li><a href="http://52reg.roszdravnadzor.ru/documents" target="_blank"> Документы </a></li>
							<li><a href="http://52reg.roszdravnadzor.ru/services" target="_blank"> Электронные сервисы </a> </li>
						</ul>
					</div>
				</div>
			</nav>
	</div>
	</header>
	<main>
		<div class="container">
			<div class="pt-5 pb-3">
				<h1 class="index__header">Новости</h1>
			</div>
			<div class="row">

        <?php

          $file = file_get_contents('data.json');  // Открыть файл data.json
          $newsList = json_decode($file, TRUE);    // Декодировать в массив 
          unset($file);

          // цикл по всем элементам массива с объектами новостей
          foreach ($newsList as &$newsItem) {
            
            echo '<div class="col-md-6 col-lg-4 min-h-100 mb-4">
              <div class="news-preview">
                <div class="news-preview__datе">'. $newsItem["date"] .'</div>
                <div class="news-preview__text">'. $newsItem["text"] .'</div>
                <a href="news?id='. $newsItem["id"] .'.html" class="news-preview__link">Подробнее</a>
              </div>
            </div>';
          }

          unset($newsList);

        ?>

      </div>
		</div>
	</main>
	<footer class="footer">
		<div class="container">
			<div class="footer__contacts">
				<h4>Контакты</h4>
			</div>
			<div class="footer__number">
				<p>Справочная Росздравнадзора: +7 (495) 698-45-38, +7 (499) 578-02-30</p>
			</div>
			<div class="footer__address">
				<p>Адрес: 109074, Москва, Славянская площадь, д. 4, стр. 1</p>
			</div>
			<div class="footer__location-map">
				<a href="https://www.roszdravnadzor.ru/about/contacts" target="blank" style="color:black">Схема проезда</a>
			</div>
		</div>
	</footer>
</body>
</html>