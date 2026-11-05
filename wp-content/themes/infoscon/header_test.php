<!DOCTYPE html>
<html lang="ru">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>ИНФОСВЯЗЬ КОНСАЛТИНГ / лицензии на услуги связи (регистрация, продление, переоформление)</title>
    <!-- 	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
	<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" /> -->

    <?php $host = $_SERVER['REQUEST_URI']; ?>

    <?php
    wp_head();
    ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="over-menu"></div>
	<div id="wrap">
		<header class="header" id="header-sroll">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="desk-menu">
							<div class="logo">
								<h1 class="logo-adn">
									<a title="Davidson Silva - Desenvolvedor front-end em BH" href="https://www.davidsonsilva.com.br">
										Davidson <span>Silva</span>
									</a>
								</h1>
							</div>
							<nav class="box-menu">
								<div class="menu-container">
									<div class="menu-head">
										<a href="https://www.davidsonsilva.com.br" class="e1">
											<img src="http://pic.youmobile.org/imgcloud/googlenewicon_app.png" alt="Davidson Silva">
										</a>
									</div>
									<div class="menu-header-container">
										<ul id="cd-primary-nav" class="menu">
											<li class="menu-item menu-item-has-children">
												<a href="#">Lorem Ipsum</a>
												<ul class="sub-menu">
													<li class="menu-item">
														<a href="#">Lorem Ipsum</a>
													</li>
													<li class="menu-item">
														<a href="#">Lorem Ipsum</a>
													</li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Lorem Ipsum</a>
												<ul class="sub-menu">
													<li class="menu-item">
														<a href="#">Lorem Ipsum</a>
													</li>
													<li class="menu-item">
														<a href="h#">Lorem Ipsum</a>
													</li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Lorem Ipsum</a>
												<ul class="sub-menu">
													<li class="menu-item menu-item-has-children">
														<a href="#">Lorem Ipsum</a>
														<ul class="sub-menu">
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
														</ul>
													</li>
													<li class="menu-item menu-item-has-children">
														<a href="#">Lorem Ipsum</a>
														<ul class="sub-menu">
															<li class="menu-item">
																<a href="#">Lorem Ipsum</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="menu-item menu-item-has-children">
												<a href="#">Lorem Ipsum</a>
												<ul class="sub-menu">
													<li class="menu-item">
														<a href="#">Lorem Ipsum</a>
													</li>
													<li class="menu-item">
														<a href="#">Lorem Ipsum</a>
													</li>
												</ul>
											</li>
											<li class="contact menu-item ">
												<a href="#">Lorem Ipsum</a>
											</li>
											<li class="line"></li>
										</ul>
									</div>
									<div class="menu-foot">
										<div class="social">
											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
											<a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
											<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
											<a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a>
											<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
										</div>
										<hr/>
										<address>
											<span class="tel"><i class="fas fa-phone"></i> +55 31 3333-3333</span>
											<span class="email"><i class="fas fa-envelope"></i> email@email.com</span>
											<span class="end"><i class="fa-solid fa-location-dot"></i> Rua tal, 44, Lugar nenhum</span>
										</address>
									</div>
								</div>
								<div class="hamburger-menu">
									<div class="bar"></div>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="conteudo">
			<div class="container">
				<div class="resize-message">
					<span>Resize your browser<br/>
						<i class="fas fa-arrows-alt-h"></i>
					</span>
				</div>
			</div>
			<div class="author">
				<a href="https://www.davidsonsilva.com.br?utm_source=codepen" target="_blank">Davidson <span>Silva</span></a>
			</div>
		</div>
	</div>

    
<body>
<header>
<!-- Меню десктопа и часть мобильного -->
<!-- <div id="mens" class="mobile_menu"> -->
<!-- <a href="/">    -->
	<!-- <img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome"> -->
<!-- </a> -->
<!-- </div> -->
<!-- Логотип вроде бы -->
<div class="topnav" id="myTopnav">
            <div class="logo">
				<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="Компания ИнфоСвязь Консалтинг" class="gohome"><br>
				<img src="<?php bloginfo('template_url'); ?>/images/logo-slogan.png" alt="Связисты для связистов" class="gohome" style="margin-top: -5px;">
			</div>
  <a href="https://infoscon.ru/index/" class="active">Главная</a>
  <a href="https://infoscon.ru/kompaniya/">О нас</a>
  <div class="dropdown">
    <button class="dropbtn">Услуги 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="/uslugi/razresheniya-na-chastoty/">Разрешения на частоты</a>
      <a href="/uslugi/litsenzii-svyazi/">Лицензии связи</a>
      <a href="/uslugi/razresheniya-na-chastoty/">Разрешения на частоты</a>
      <a href="/uslugi/smi/">Регистрация СМИ</a>
      <a href="/prodlenie-litsenzij-svyazi/">Продление и переоформление</a>
    </div>
  </div> 
  <a href="https://infoscon.ru/price/">Цены</a>
  <a href="https://infoscon.ru/kontakty/">Контакты</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
			<!-- Меню навигации десктоп -->
			<?php wp_nav_menu('menu=top_menu&menu_class=top_menu&container=&'); ?>
            <!-- Всплывающее спецпредлжение -->
            <a class="order" id="freeCons">Получить спецпредложение</a>
            <!-- Блок контактов -->
            <div class="contacts">
                <div class="phone">+7 (495) 109-05-95 <sub>(многоканальный)</sub></div>
                <div class="info">
                    <div class="mailtol"><a href="mailto:info@infoscon.ru">info@infoscon.ru</a></div>
                    <!--<div class="num">+7(917)585-80-57</div>-->
                    <div class="w"><a style="color: #38a0db;
    font-weight: 500;" href="https://wa.me/79175858057?text=Я%20заинтересован%20в%20услуге%20...%20(укажите услугу)"><img src="<?php bloginfo('template_url'); ?>/images/lol/whatsapp.png" alt="Написать в вотсап">
                        </a></div>
                    <div class="v"><a style="color: #38a0db;
    font-weight: 500;" href="tg://resolve?domain=infoscon"><img src="<?php bloginfo('template_url'); ?>/images/lol/telegram.png" alt="В телеграм">
                        </a></div>
                    <div class="v"><a style="color: #38a0db;
    font-weight: 500;" href="tel:+79175858057" alt="Позвонить">&nbsp+7(917)585-8057</a></div>
                    <div class="priemzakazov">Прием заказов круглосуточно</div>
                </div>
            </div>
        </section>
    </header>



    <div class="main">


        <?php if (!is_Home() && !is_404() && !is_Page() && !is_category() && !in_category(1)) {
            echo '<section class="breadcrumbs">';
            yoast_breadcrumb('<div class="breadcrumbs__nav">', '</div>');
            echo '</section>';
        }
        2
        ?>