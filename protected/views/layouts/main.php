<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<title>title</title>
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" href="<?= Yii::app()->baseUrl ?>/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/assets/css/form.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="wrapper">
		<header class="header">
			<div class="h-logo">
				<a href="" class="logo-link"></a>
				<div class="logo-txt">
					<div class="logo-abrv">
						АРКС
					</div>
					<h1 class="logo-name">
						Ассоциация Развития Компьютерного Спорта
					</h1>
				</div>
			</div>

			<div class="sticker">
				Тут должен быть какой-то слоган
			</div>
		</header>
		
		<ul class="main-nav">
			<li>
				<a href="">
					Главная
					<span>Домашняя</span>
				</a>
			</li>
			<li>
				<a href="">
					О нас
					<span>Организация</span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="">Наша организация</a></li>
					<li><a href="">Устав</a></li>
					<li><a href="">Руководящие и контрольно-ревизионные органы</a></li>
					<li><a href="">Мероприятия</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					Регионы
					<span>Мы в стране</span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="">Список регионов</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					Галерея
					<span>Фото и видео</span>
				</a>
				<ul class="dropdown-menu">
					<li><a href="">Фото</a></li>
					<li><a href="">Видео</a></li>
				</ul>
			</li>
			<li>
				<a href="">
					Контакты
					<span>Связаться с нами</span>
				</a>
			</li>
			<li>
				<a href="">
					Вступить в АРКС
					<span>Хочешь быть среди нас?</span>
				</a>
			</li>
		</ul>

		<div class="container">
			<div class="content">
				<div class="events">
					<div class="events__main">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/event.jpg" alt="">
						<h2>Наверное какое-то событие очень важное</h2>
						<p>Lorem ipsum mea ea error praesent vituperata. Pri mollis qualisque no, veritus persequeris vituperatoribus at pro, no volumus instructior mel. Dico admodum in duo, prompta constituto constituam mea id, per dicunt convenire cu. Nostro inimicus postulant mea no, ullum disputando sea ad. Cu habeo posse summo pro. Mei eu sonet habemus deseruisse, eius inimicus salutandi eum cu.</p>
					</div>
					<div class="events__all">
						<ul class="event__list">
							<li>
								<a href="" class="events__all-link">
									<img src="<?= Yii::app()->baseUrl ?>/assets/images/ev1.jpg" alt="">
								</a>
							</li>
							<li>
								<a href="" class="events__all-link">
									<img src="<?= Yii::app()->baseUrl ?>/assets/images/ev1.jpg" alt="">
								</a>
							</li>
							<li>
								<a href="" class="events__all-link">
									<img src="<?= Yii::app()->baseUrl ?>/assets/images/ev1.jpg" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="post">
					<div class="post-img">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/img.jpg" alt="">
					</div>
					<div class="post-text">
						<h2>Заголовок поста из бложика, может новость а может и видео</h2>
						<p>Lorem ipsum mea ea error praesent vituperata. Pri mollis qualisque no, veritus persequeris vituperatoribus at pro, no volumus instructior mel. Dico admodum in duo, prompta constituto constituam mea id, per dicunt convenire cu. Nostro inimicus postulant mea no, ullum disputando sea ad. Cu habeo posse summo pro. Mei eu sonet habemus deseruisse, eius inimicus salutandi eum cu.</p>
						<div class="post-links">
							<span class="comments">
								Комментариев: <a href="">100</a>
							</span>
							<a href="">Читать далее</a>
						</div>
					</div>
				</div>

				<div class="post">
					<div class="post-img">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/img.jpg" alt="">
					</div>
					<div class="post-text">
						<h2>Заголовок поста из бложика, может новость а может и видео</h2>
						<p>Lorem ipsum mea ea error praesent vituperata. Pri mollis qualisque no, veritus persequeris vituperatoribus at pro, no volumus instructior mel. Dico admodum in duo, prompta constituto constituam mea id, per dicunt convenire cu. Nostro inimicus postulant mea no, ullum disputando sea ad. Cu habeo posse summo pro. Mei eu sonet habemus deseruisse, eius inimicus salutandi eum cu.</p>
						<div class="post-links">
							<span class="comments">
								Комментариев: <a href="">100</a>
							</span>
							<a href="">Читать далее</a>
						</div>
					</div>
				</div>

				<div class="post">
					<div class="post-img">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/img.jpg" alt="">
					</div>
					<div class="post-text">
						<h2>Заголовок поста из бложика, может новость а может и видео</h2>
						<p>Lorem ipsum mea ea error praesent vituperata. Pri mollis qualisque no, veritus persequeris vituperatoribus at pro, no volumus instructior mel. Dico admodum in duo, prompta constituto constituam mea id, per dicunt convenire cu. Nostro inimicus postulant mea no, ullum disputando sea ad. Cu habeo posse summo pro. Mei eu sonet habemus deseruisse, eius inimicus salutandi eum cu.</p>
						<div class="post-links">
							<span class="comments">
								Комментариев: <a href="">100</a>
							</span>
							<a href="">Читать далее</a>
						</div>
					</div>
				</div>

				<div class="post">
					<div class="post-img">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/img.jpg" alt="">
					</div>
					<div class="post-text">
						<h2>Заголовок поста из бложика, может новость а может и видео</h2>
						<p>Lorem ipsum mea ea error praesent vituperata. Pri mollis qualisque no, veritus persequeris vituperatoribus at pro, no volumus instructior mel. Dico admodum in duo, prompta constituto constituam mea id, per dicunt convenire cu. Nostro inimicus postulant mea no, ullum disputando sea ad. Cu habeo posse summo pro. Mei eu sonet habemus deseruisse, eius inimicus salutandi eum cu.</p>
						<div class="post-links">
							<span class="comments">
								Комментариев: <a href="">100</a>
							</span>
							<a href="">Читать далее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="right-side">
				<div class="social">
					Мы в социальных сетях:
					<ul class="social-list">
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/vk.gif" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/fb.gif" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/tw.gif" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/gp.gif" alt=""></a>
						</li>
					</ul>
				</div>

				<div class="right-section">
					<div class="right__title">
						Последние новости
					</div>
					<div class="latest-news">
						<a href="">
							<div class="news-img">
								<img src="<?= Yii::app()->baseUrl ?>/assets/images/n1.jpg" alt="">
							</div>
							<div class="news-txt">
								<div class="news-txt__title">
									CS-турнир с ризовым фондом в 15000$
								</div>
								<p>Lorem ipsum ne pro nihil saperet int scaevola, eu vix sumo exerci, melsi aeterno feugiat intellegam cu.  Lom ipsum ne pro.</p>
							</div>
						</a>
					</div>

					<div class="latest-news">
						<a href="">
							<div class="news-img">
								<img src="<?= Yii::app()->baseUrl ?>/assets/images/n1.jpg" alt="">
							</div>
							<div class="news-txt">
								<div class="news-txt__title">
									CS-турнир с ризовым фондом в 15000$
								</div>
								<p>Lorem ipsum ne pro nihil saperet int scaevola, eu vix sumo exerci, melsi aeterno feugiat intellegam cu.  Lom ipsum ne pro.</p>
							</div>
						</a>
					</div>

					<div class="latest-news">
						<a href="">
							<div class="news-img">
								<img src="<?= Yii::app()->baseUrl ?>/assets/images/n1.jpg" alt="">
							</div>
							<div class="news-txt">
								<div class="news-txt__title">
									CS-турнир с ризовым фондом в 15000$
								</div>
								<p>Lorem ipsum ne pro nihil saperet int scaevola, eu vix sumo exerci, melsi aeterno feugiat intellegam cu.  Lom ipsum ne pro.</p>
							</div>
						</a>
					</div>

					<div class="latest-news">
						<a href="">
							<div class="news-img">
								<img src="<?= Yii::app()->baseUrl ?>/assets/images/n1.jpg" alt="">
							</div>
							<div class="news-txt">
								<div class="news-txt__title">
									CS-турнир с ризовым фондом в 15000$
								</div>
								<p>Lorem ipsum ne pro nihil saperet int scaevola, eu vix sumo exerci, melsi aeterno feugiat intellegam cu.  Lom ipsum ne pro.</p>
							</div>
						</a>
					</div>
				</div>

				<div class="right-section">
					<div class="right__title">
						Наши пртнеры
					</div>
					<a href="">
						<img src="<?= Yii::app()->baseUrl ?>/assets/images/partner.jpg" alt="">
					</a>
				</div>

				<div class="right-section">
					<div class="right__title">
						Последние видео
					</div>
					<ul class="video-list">
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
						<li>
							<a href=""><img src="<?= Yii::app()->baseUrl ?>/assets/images/video.jpg" alt=""></a>
						</li>
					</ul>
				</div>
			</div>
		</div>

	</div>

	<div class="bottom">
		<footer class="footer">
			<div class="copyright">
				<p>&copy; 2013 АРКС. Ассоциация Развития Компьютерного Спорта</p>
			</div>
		</footer>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="<?= Yii::app()->baseUrl ?>/assets/js/interface.js"></script>

</body>
</html>