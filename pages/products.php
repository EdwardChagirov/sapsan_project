<?php 
	require_once ("header.php"); 
?>
		
		<section class="slider_prod">
			<div class="slideshow-container">
				<div class="mySlides fade">
					<img src="../img/img_slider1.jpg" alt="">
				</div>
				<div class="mySlides fade">
					<img src="../img/img_slider4.jpg" alt="">
				</div>
				<div class="mySlides fade">
					<img src="../img/img_slider3.jpg" alt="">
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094</a>
				<a class="next" onclick="plusSlides(1)">&#10095</a>

				<div class="dots">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>
		</section>

		<section class="main_content_prod">
			<div class="wrap_nav_prod">
				<div class="nav-desktop">
					<h2>Каталог</h2>
					<nav>
						<a href="#" class="category_link">Вся продукция</a>
						<a href="#" class="category_link">Прямые диваны</a>
						<a href="#" class="category_link">Угловые диваны</a>
						<a href="#" class="category_link">Кухонные диваны</a>
						<a href="#" class="category_link">Малые формы</a>
						<a href="#" class="category_link">Кресла</a>
					</nav>
					<div class="bars-btn-prod">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</div>
				</div>
				<nav class="nav-phone">
					<a href="#" class="category_link">Вся продукция</a>
					<a href="#" class="category_link">Прямые диваны</a>
					<a href="#" class="category_link">Угловые диваны</a>
					<a href="#" class="category_link">Кухонные диваны</a>
					<a href="#" class="category_link">Малые формы</a>
					<a href="#" class="category_link">Кресла</a>
				</nav>
			</div>
			
			<?php 
				$mysqli = new mysqli("localhost", "root", "", "sapsan");
				$mysqli->set_charset("utf8");

				if ($mysqli->connect_errno) {
					echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
				}

				$productsRes;

				if (isset($_POST['category'])){
					$category = $_POST['category'];
					$productsRes = $mysqli->query("SELECT id, name, category, pictures, collection FROM products WHERE category = '$category'");
				}else {
					$productsRes = $mysqli->query("SELECT id, name, category, pictures, collection FROM products");
				}
			?>

			<div class="prod_content">
				<?php	
					while ($productRow = $productsRes->fetch_assoc()) {
						$paths = explode('|', $productRow['pictures']);

						echo '<div class="prod_item">
							<div>
								<img src=" ' . $paths[0] . '">
								<div class="desk_prod_bottom">
									<p>Коллекция</p>
									<h3>' . $productRow['collection'] . '</h3>
								</div>
							</div>
							<div class="hover_prod_item">
								<h2>
									' . $productRow['name'] . '
								</h2>
								<div class="read_more">
									<a href="product.php?id=' . $productRow['id'] . '">Подробнее</a>
								</div>
							</div>
						</div>';
					}
				?>
			</div>
		</section>
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
		<script src="../js/common.js"></script>
		<script src="../js/slider.js"></script>
	</body>
</html>