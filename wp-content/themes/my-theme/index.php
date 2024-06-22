<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- Шрифты -->

    <!-- Основные стили -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <!-- Основные стили -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/functions.js"></script>

    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- OwlCarousel2 -->

    <title>К Телеком</title>
</head>

<body>

    <header class="header">
        <div class="header__logo">
			<img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Логотип К Телеком">
        </div>

        <div class="header__banner-wrapper">
            <div class="header__banner">

                <div class="header__banner-content">
                    <h1 class="header__banner-title">Экономия нервов и денег — интернет К-Телеком</h1>
                    <ul class="header__banner-list">
                        <li class="header__banner-list-item">5 тарифов для многоквартирных и 4 для частных домов</li>
                        <li class="header__banner-list-item">безлимит подключенных устройств</li>
                        <li class="header__banner-list-item">комфортная поддержка 24/7</li>
                    </ul>
                    <button class="header__banner-button">Подробнее</button>
                </div>
    
                <div class="header__banner-img">
					<img src="<?php echo get_template_directory_uri(); ?>/images/banner_pic.png" alt="Картинка">
                </div>
            </div>
        </div>

    </header>


    <main class="main">

        <section class="tariff-plans">

            <h2 class="tariff-plans__title">Тарифные планы</h2>

            <div class="tariff-plans__carousel owl-carousel">

                <div class="tariff-plans__item">
                    <h4 class="tariff-plans__item-title">Мой клик</h4>
                    <p class="tariff-plans__item-speed">Скорость интернета</p>
                    <h3 class="tariff-plans__item-value">до 40 Мбит/с</h3>
                    <p class="tariff-plans__item-description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    <div class="tariff-plans__item-checkbox">
                        <input type="checkbox" id="checkbox1" class="tariff-plans__item-checkbox-input">
                        <div class="tariff-plans__item-checkbox-labels">
                            <label for="checkbox1" class="tariff-plans__item-checkbox-label">ТВ + 100 ₽</label>
                            <label for="checkbox1" class="tariff-plans__item-checkbox-label">(пакет "Базовый")</label>
                        </div>
                    </div>
                    <p class="tariff-plans__item-price"><span class="tariff-plans__item-price-value">399 ₽</span> в месяц</p>
                    <p class="tariff-plans__item-note">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                    <button class="tariff-plans__item-button">Выбрать тариф</button>
                </div>

                <div class="tariff-plans__item">
                    <h4 class="tariff-plans__item-title">Резвый клик</h4>
                    <p class="tariff-plans__item-speed">Скорость интернета</p>
                    <h3 class="tariff-plans__item-value">80-100 Мбит/с</h3>
                    <p class="tariff-plans__item-description">Отличный вариант для всей семьи. Общайтесь в соцсетях и смотрите любимые фильмы и сериалы!</p>
                    <div class="tariff-plans__item-checkbox">
                        <input type="checkbox" id="checkbox2" class="tariff-plans__item-checkbox-input">
                        <div class="tariff-plans__item-checkbox-labels">
                            <label for="checkbox2" class="tariff-plans__item-checkbox-label">ТВ + 100 ₽</label>
                            <label for="checkbox2" class="tariff-plans__item-checkbox-label">(пакет "Базовый")</label>
                        </div>
                    </div>
                    <p class="tariff-plans__item-price"><span class="tariff-plans__item-price-value">449 ₽</span> в месяц</p>
                    <p class="tariff-plans__item-note">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                    <button class="tariff-plans__item-button">Выбрать тариф</button>
                </div>

                <div class="tariff-plans__item">
                    <h4 class="tariff-plans__item-title">Мой клик</h4>
                    <p class="tariff-plans__item-speed">Скорость интернета</p>
                    <h3 class="tariff-plans__item-value">до 40 Мбит/с</h3>
                    <p class="tariff-plans__item-description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    <div class="tariff-plans__item-checkbox">
                        <input type="checkbox" id="checkbox3" class="tariff-plans__item-checkbox-input">
                        <div class="tariff-plans__item-checkbox-labels">
                            <label for="checkbox3" class="tariff-plans__item-checkbox-label">ТВ + 100 ₽</label>
                            <label for="checkbox3" class="tariff-plans__item-checkbox-label">(пакет "Базовый")</label>
                        </div>
                    </div>
                    <p class="tariff-plans__item-price"><span class="tariff-plans__item-price-value">399 ₽</span> в месяц</p>
                    <p class="tariff-plans__item-note">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                    <button class="tariff-plans__item-button">Выбрать тариф</button>
                </div>

                <div class="tariff-plans__item">
                    <h4 class="tariff-plans__item-title">Мой клик</h4>
                    <p class="tariff-plans__item-speed">Скорость интернета</p>
                    <h3 class="tariff-plans__item-value">до 40 Мбит/с</h3>
                    <p class="tariff-plans__item-description">Отличный вариант для пенсионеров, выполнения определенных задач и работе с файлами различных размеров.</p>
                    <div class="tariff-plans__item-checkbox">
                        <input type="checkbox" id="checkbox4" class="tariff-plans__item-checkbox-input">
                        <div class="tariff-plans__item-checkbox-labels">
                            <label for="checkbox4" class="tariff-plans__item-checkbox-label">ТВ + 100 ₽</label>
                            <label for="checkbox4" class="tariff-plans__item-checkbox-label">(пакет "Базовый")</label>
                        </div>
                    </div>
                    <p class="tariff-plans__item-price"><span class="tariff-plans__item-price-value">399 ₽</span> в месяц</p>
                    <p class="tariff-plans__item-note">*итоговая цена зависит от варианта оплаты и пакета ТВ при необходимости</p>
                    <button class="tariff-plans__item-button">Выбрать тариф</button>
                </div>

            </div>

        </section>

    </main>
		
	<div class="footer__wrapper">
        <footer class="footer">

            <div class="footer__logo">
				<img class="footer__logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Логотип К Телеком">
                <div class="footer__text"><p> © 2018–2022 ООО «К-Телеком»</p></div>
            </div>

            <div class="footer__icons">
                <a class="footer__icons-link footer__icons-link--instagram" href="">
                    <img class="footer__icons-img" src="<?php echo get_template_directory_uri(); ?>/images/instagram.png" alt="Instagram">
                </a>
                <a class="footer__icons-link footer__icons-link--youtube" href="">
                    <img class="footer__icons-img" src="<?php echo get_template_directory_uri(); ?>/images/youtube.png" alt="YouTube">
                </a>
                <a class="footer__icons-link footer__icons-link--vk" href="">
                    <img class="footer__icons-img" src="<?php echo get_template_directory_uri(); ?>/images/vk.png" alt="VK">
                </a>
            </div>
    
        </footer>
    </div>

    <script>

        $(document).ready(function() {
          $('.owl-carousel').owlCarousel({
              items: 3,
              loop: true,
              margin: 10,
              autoplay: true,
              autoplayTimeout: 4000,
              responsive: {
                0: {
                  items: 1
                },
                600: {
                  items: 2
                },
                1000: {
                  items: 3
                }
              }
            })
            
        });
      </script>
      
</body>
</html>
