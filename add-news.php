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
				<h1 class="index__header">Добавить новость</h1>
      </div>
      <div class="mt-5">
        <div class="row">
          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="news-form__date" class="mr-3">Дата</label>
                <input id="news-form__date" type="date" name="date">
              </div>
              <div class="form-group">
                <label for="news-form__title">Заголовок новости</label>
                <input type="text" class="form-control" id="news-form__title" name="title" placeholder="">
              </div>
              <div class="form-group">
                <label for="news-form__text">Текст новости</label>
                <textarea type="text" class="form-control" id="news-form__text" name="text" placeholder=""></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Добавить новость</button>
            </form>
          </div>
        </div>
      </div>

      <?php

        if ($_POST["date"] && $_POST["title"] && $_POST["text"]) {

          $file = file_get_contents('data.json');  // Открыть файл data.json
          $newsList = json_decode($file, TRUE);        // Декодировать в массив 
          unset($file);
          $newsList[] = array('id' => count($newsList), 'date' => $_POST["date"], 'title' => $_POST["title"], 'text' => $_POST["text"]);
          file_put_contents('data.json', json_encode($newsList));  // Перекодировать в формат и записать в файл.
          unset($newsList);

        }

      ?>

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
