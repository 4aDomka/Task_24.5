<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Главная</title>
	<link rel="stylesheet" type="text/css" href="/css/style.css" />
</head>
<body>
<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">DOMka corp</span></a>
				</div>
				
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/application/views/services_view.php">Услуги</a></li>
							<li><a href="/application/views/portfolio_view.php">Портфолио</a></li>
							<li class="last"><a href="/application/views/contacts_view.php">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-sidebar">
					<h3>Наши контакты</h3>
					<ul class="list">
						<li class="first">Телефон: 89898872547</li>
						<li>Адрес: Ханты-Мансийский автономный округ, г. Ханты-Мансийск, ул. Советская, д. 12 </li>
						<li class="last">email: Domka@gmail.com</li>
					</ul>
				</div>
				<div id="page-bottom-content">
					<h3>О Компании</h3>
					<p>
Здесь должна быть информация о нашей компании, но её нет! Мы всегда рады всё рассказать при личной встрече в нашем офисе или по телефону.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">DOMka corp</a> &copy; 2024</a>
		</div>
</body>
</html>
