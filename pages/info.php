<?php 
	require_once ("header.php"); 
?>

	<div class="wrap_info">
		<aside class="sidebar_info">
			<h2 class="sidebar_item"><a href="#" data-tab_container="about_us" class="sidebar_link"><span class="glyphicons glyphicons-group"></span>О нас</a></h2>
			<h2 class="sidebar_item"><a href="#" data-tab_container="contact_us" class="sidebar_link">Контакты</a></h2>
			<h2 class="sidebar_item"><a href="#" data-tab_container="magazins" class="sidebar_link">Магазины</a></h2>
			<h2 class="sidebar_item"><a href="#" data-tab_container="dilers" class="sidebar_link">Дилерам</a></h2>
		</aside>

		<div class="container_info">
			
			<!-- О НАС -->

			<?php if (isset($_GET['about_us'])): ?>
				<div class="about_us tab_container" id="about_us" style="display: block;">
					<h2>О нас и нашей мебели</h2>
					<p>Основное направление деятельности фабрики «Сапсан» — 
					производство мягкой мебели в Ульяновске под заказ. 
					Наша компания на рынке уже более 5 лет. Мы гордимся своей 
					продукцией, потому что поддерживаем качество на высоте.
					Наша мебель в основном изготовлена из качественных и
					экологичных материалов, на металлических каркасах,
					все модели имеют функцию трансформации. А наши мастера
					 — квалифицированные специалисты с большим стажем,
					поэтому продукция наша служит долго и уютно 
					располагается в домах уже сотен ульяновцев и 
					тысяч россиян в различных регионах нашей страны.</p>
				</div>
			<?php endif; ?>

			<div class="about_us tab_container" id="about_us">
				<h2>О нас и нашей мебели</h2>
				<p>Основное направление деятельности фабрики «Сапсан» — 
				производство мягкой мебели в Ульяновске под заказ. 
				Наша компания на рынке уже более 5 лет. Мы гордимся своей 
				продукцией, потому что поддерживаем качество на высоте.
				Наша мебель в основном изготовлена из качественных и
				экологичных материалов, на металлических каркасах,
				все модели имеют функцию трансформации. А наши мастера
				 — квалифицированные специалисты с большим стажем,
				поэтому продукция наша служит долго и уютно 
				располагается в домах уже сотен ульяновцев и 
				тысяч россиян в различных регионах нашей страны.</p>
			</div>

			<!-- МАГАЗИНЫ -->

			<?php if (isset($_GET['mag'])): ?>
				<div class="magazins tab_container" id="magazins" style="display: block;">
					<h2>Магазины</h2>
					<div id="yandex_map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A53f016e5554550be67fb91d8c2c8528710e17c47941cc31ba0027268cc6b4056&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			<?php endif; ?>

			<div class="magazins tab_container" id="magazins">
				<h2>Магазины</h2>
				<div id="yandex_map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A53f016e5554550be67fb91d8c2c8528710e17c47941cc31ba0027268cc6b4056&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>

			<!-- КОНТАКТЫ -->
			
			<?php if (isset($_GET['contact_us'])): ?>
				<div class="contact_us tab_container" id="contact_us" style="display: block;">
					<h2>Контакты фабрики мягкой мебели</h2>
					<div class="inner_contact_us">
						<div class="contact_item">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<p>Телефон: <br>+7 (906)-143-42-86<br> +7 (999)-723-76-22<br> +7 (927)-633-93-27</p>
						</div>
						<div class="contact_item">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							<p>РЕКВИЗИТЫ:<br>
								ИП Логинова А.А<br>
								ИНН 732803401026<br>
								ОГРНИП 310732833600097</p>
						</div>
						<div class="contact_item">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<p>Время работы:<br>
								с 9:00 до 18:00<br>
								Пн-Пт Выходные - Сб,Вс</p>
						</div>
						<div class="contact_item">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<p>Мы находимся:<br>
								Россия, г. Ульяновск <br>
								1-й проезд Инженерный, 9а</p>
						</div>
					</div>
					<div id="yandex_map tab_container">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A53f016e5554550be67fb91d8c2c8528710e17c47941cc31ba0027268cc6b4056&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>
				</div>
			<?php endif; ?>
			<div class="contact_us tab_container" id="contact_us">
				<h2>Контакты фабрики мягкой мебели</h2>
				<div class="inner_contact_us">
					<div class="contact_item">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<p>Телефон: <br>+7 (906)-143-42-86<br> +7 (999)-723-76-22<br> +7 (927)-633-93-27</p>
					</div>
					<div class="contact_item">
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<p>РЕКВИЗИТЫ:<br>
							ИП Логинова А.А<br>
							ИНН 732803401026<br>
							ОГРНИП 310732833600097</p>
					</div>
					<div class="contact_item">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<p>Время работы:<br>
							с 9:00 до 18:00<br>
							Пн-Пт Выходные - Сб,Вс</p>
					</div>
					<div class="contact_item">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<p>Мы находимся:<br>
							Россия, г. Ульяновск <br>
							1-й проезд Инженерный, 9а</p>
					</div>
				</div>
				<div id="yandex_map tab_container">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A53f016e5554550be67fb91d8c2c8528710e17c47941cc31ba0027268cc6b4056&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
				</div>
			</div>
		</div>
	</div>

	<section class="frame_5">
		<div class="footer">
			<div class="block1">
				<h3>Связаться с нами</h3>
				<p><i class="fa fa-map-marker"></i>г. Ульяновск, 1-й проезд Инженерный, 9а</p>
				<p><i class="fa fa-phone"></i>+7 <span>(999)</span> 194-58-13 | +7 <span>(927)</span> 805-77-09</p>
				<p><i class="fa fa-envelope-o"></i>sapsan73ul@inbox.ru</p>
			</div>

			<div class="block2">
				<h3>Мы в соц.сетях</h3>
				<div class="social-buttons">
					<div class="vk"><i class="fa fa-vk"></i></div>
					<div class="odn"><i class="fa fa-odnoklassniki"></i></div>
					<div class="insta"><i class="fa fa-instagram"></i></div>
				</div>
			</div>
		</div>
		<div class="sub_footer">
			<h4>2016 - 2017 Фабрика мягкой мебели "САПСАН"</h4>
		</div>
	</section>
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/common.js"></script>
</body>