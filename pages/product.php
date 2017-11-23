<?php 
	require_once ("header.php");

	$mysqli = new mysqli("localhost", "root", "", "sapsan");
	$mysqli->set_charset("utf8");

	if ($mysqli->connect_errno) {
	    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$id = 0;

	if (isset($_GET['id'])){
		$id = $_GET['id'];
	}

	$res = $mysqli->query("SELECT id, name, category, sleep_area_l, sleep_area_h, size_area_l, size_area_w, size_area_h, charact1, charact2, charact3, charact4, 
	charact5, charact6, charact7, charact8, charact9, charact10, pictures, gallery_prod, collection FROM products WHERE id = '$id'");
	$row = $res->fetch_assoc();

	$collectionOrder = $row['collection'];
	$collectionRes = $mysqli->query("SELECT id, name, pictures, collection FROM products WHERE collection = '$collectionOrder' and id != '$id'");
?>
		<div class="container_prod">
			<!--<h1 class="title_prod">Блисс</h1>-->
			<div class="wrap_main_container">
				<div class="main_slider">
					<div class="slidel_label">
						<?php
							$paths = explode('|', $row['pictures']);

							for ($i = 0; $i < count($paths); $i++) { 
								echo '<div class="item_slider zoom_slider"><img src=" ' . $paths[$i] . ' " alt="Слайд"></div>';
							}
						?>
					</div>
					<div class="slider">
						<?php
							$paths = explode('|', $row['pictures']);

							for ($i = 0; $i < count($paths); $i++) { 
								echo '<div class="item_slider"><img src=" ' . $paths[$i] . ' " alt="Слайд"></div>';
							}
						?>
					</div>
				</div>

				<div class="big_name_prod">
					<h1><?php echo $row['collection'] ?></h1>
				</div>
			</div>

			<div class="desc_prod">
				<div class="block1">
					<ul>
						<h1>Название</h1>
						<li><?php echo $row['name'] ?></li>
					</ul>
					<ul>
						<h1>Категория</h1>
						<li><?php echo $row['category'] ?></li>
					</ul>
					
					<?php 
						if ($row['sleep_area_l'] == "" && $row['sleep_area_h'] == ""){
							echo "<ul class='absent'>
									<h1>Спальное место</h1>
									<li>Отсутствует</li>
								  </ul>";
						}
						else{
							echo "<ul class='present'>
									<h1>Спальное место</h1>
									<li>Длина: <span> " . $row['sleep_area_l'] . " </span></li>
									<li>Высота: <span> " . $row['sleep_area_h'] . "</span></li>
								  </ul>";
						}
					?>

				</div>
				<div class="block2">
					<ul>
						<h1>Размеры</h1>
						<li>Длина: <span> <?php echo $row['size_area_l'] ?> </span></li>
						<li>Ширина: <span> <?php echo $row['size_area_w'] ?> </span></li>
						<li>Высота: <span> <?php echo $row['size_area_h'] ?> </span></li>
					</ul>
				</div>
				<div class="block3">
					<ul>
						<h1>Характеристики</h1>
						<li>Механизм раскладки: <span> <?php echo $row['charact1'] ?> </span></li>
						<li>Материал каркаса: <span> <?php echo $row['charact2'] ?> </span></li>
						<li>Материал отбивки: <span> <?php echo $row['charact3'] ?> </span></li>
						<li>Основание сидения: <span> <?php echo $row['charact4'] ?> </span></li>
						<li>Наполнитель сидения: <span> <?php echo $row['charact5'] ?> </span></li>
						<li>Наполнитель слинки: <span> <?php echo $row['charact6'] ?> </span></li>
						<li>Спинка: <span> <?php echo $row['charact7'] ?> </span></li>
						<li>Боковина: <span> <?php echo $row['charact8'] ?> </span></li>
						<li>Подушки: <span> <?php echo $row['charact9'] ?> </span></li>
						<li>Бельевой ящик: <span> <?php echo $row['charact10'] ?> </span></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="gallery">
			<h1 class="gallery_title">Галерея</h1>
			<div class="gallery_slider">
				<?php
					$paths = explode('|', $row['gallery_prod']);

					for ($i = 0; $i < count($paths); $i++) { 
						echo '<div class="gallery_item">
								<img src=" ' . $paths[$i] . ' " alt="Слайд #1">
								<div class="gallery_hover_item">
									<a href=" ' . $paths[$i] . ' " data-fancybox="group" data-caption="Caption">Посмотреть</a>
									<div class="triangle_down"></div>
							    </div>
							  </div>';
					}
				?>
			</div>
		</div>

		<div class="assoc_prod">
			<h1 class="assoc_title">Сопутствующие товары</h1>
			<div class="assoc_slider">
				<?php
					while ($collectionRow = $collectionRes->fetch_assoc()) { 

						$paths = explode('|', $collectionRow['pictures']);

						echo '<div class="prod_item">
								<div>
									<img src=" ' . $paths[0] . ' " alt="">
									<div class="desk_prod_bottom">
										<p>Коллекция</p>
										<h3> ' . $collectionRow['collection'] . ' </h3>
									</div>
								</div>
								<div class="hover_prod_item">
									<h2>
										' . $collectionRow['name'] . '
									</h2>
									<div class="read_more">
										<a href="product.php?id=' . $collectionRow['id'] . '">Подробнее</a>
									</div>
								</div>
							</div>';
					}
				?>
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
						<div class="vk"><a href="https://vk.com/"><i class="fa fa-vk"></i></a></div>
						<div class="odn"><a href="https://ok.ru/"><i class="fa fa-odnoklassniki"></i></a></div>
						<div class="insta"><a href="www.facebook.com"><i class="fa fa-instagram"></i></a></div>
					</div>
				</div>
			</div>

			<div class="sub_footer">
				<h4>2016 - 2017 Фабрика мягкой мебели "САПСАН"</h4>
			</div>
		</section>
	    <script src="../js/jquery-3.2.1.min.js"></script>
		<script src="../node_modules/enquire.js/dist/enquire.min.js"></script>
		<script type="text/javascript" src="../libs/slick/slick.min.js"></script>
		<script src="../libs/okfocus-okzoom-b324b70/src/okzoom.js"></script>
		<script src="../js/jquery.fancybox.min.js"></script>
		<script>
			$(function(){
				$('.slidel_label').slick({
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					fade: true,
					asNavFor: '.slider'
				});
				$('.slider').slick({
					slidesToShow: 4,
					slidesToScroll: 1,
					asNavFor: '.slidel_label',
					dots: true,
					focusOnSelect: true,
					responsive: true,
					accessibility: true,
					autoplay: true,
					autoplaySpeed: 2000,
					responsive: [
						{
							breakpoint: 1280,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 1
							}
						},
						{
							breakpoint: 960,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 1
							}
						}
					]
				});
			});

			$('.gallery_slider').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				dots: true,
					responsive: [
						{
							breakpoint: 1280,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3
							}
						},
						{
							breakpoint: 960,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
			});

			$('.assoc_slider').slick({
				infinite: true,
				slidesToShow: 4,
				slidesToScroll: 4,
				dots: true,
					responsive: [
						{
							breakpoint: 1280,
							settings: {
								slidesToShow: 3,
								slidesToScroll: 3
							}
						},
						{
							breakpoint: 960,
							settings: {
								slidesToShow: 2,
								slidesToScroll: 2
							}
						},
						{
							breakpoint: 480,
							settings: {
								slidesToShow: 1,
								slidesToScroll: 1
							}
						}
					]
			});
		</script>
		<script type="text/javascript">
			$("[data-fancybox]").fancybox({
				// Options will go here
			});
		</script>
		<script src="../js/common.js"></script>
	</body>
</html>