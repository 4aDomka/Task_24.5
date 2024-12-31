<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Портфолио</title>
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
				<h1>Портфолио</h1>
<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>