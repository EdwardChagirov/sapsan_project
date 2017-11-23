<?php require_once "admin_header.php"; ?>

<body>
	<div class="admin_panel">
		<div class="admin_panel__container">
			<div class="admin_panel__flex">
				<div class="admin_panel__tabs">
					<div class="admin_panel__tabs__tab" >
						<p><a href="#" data-admin_tab="add">Добавить</a></p>
					</div>
					<div class="admin_panel__tabs__tab">
						<p><a href="#" data-admin_tab="edit">Редактировать</a></p>
					</div>
					<div class="admin_panel__tabs__tab">
						<p><a href="#" data-admin_tab="del">Удалить</a></p>
					</div>
				</div>

				<div class="admin_panel__tabs_container">

					<div class="admin_panel__tab_container_wrap active" id="add">
						
						<div class="admin_panel__tab_container">
							<div class="desc_parameters">
								<div class="desc_parameters__parameters">
									<p>Наименование товара</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Категория</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Коллекция</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Спальное место</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Размеры</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Механизм раскладки</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Материал каркаса</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Материал отбивки</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Основание сидения</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Наполнитель сидения</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Наполнитель слинки</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Спинка</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Боковина</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Подушки</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Бельевой ящик</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Изображения</p>
								</div>
								<div class="desc_parameters__parameters">
									<p>Галерея</p>
								</div>
							</div>

							<form action="add_product.php" enctype="multipart/form-data" method="POST" id="form_add_product">
								<input type="hidden" name="add_product">
								<div class="value_parameters">
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Наименование товара" name="name_prod" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<select name="category_prod">
											<option value="Прямые диваны">Прямые диваны</option>
											<option value="Угловые диваны">Угловые диваны</option>
											<option value="Кухонные диваны">Кухонные диваны</option>
											<option value="Малые формы">Малые формы</option>
											<option value="Кресла">Кресла</option>
										</select>
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Коллекция" name="collection" value="">
									</div>
									<div class="value_parameters__parameters w50">
										<input type="number" placeholder="Длина" name="sleep_area_l" value="">
										<input type="number" placeholder="Высота" name="sleep_area_h" value="">
									</div>
									<div class="value_parameters__parameters w33">
										<input type="number" placeholder="Длина" name="size_area_l" value="">
										<input type="number" placeholder="Ширина" name="size_area_w" value="">
										<input type="number" placeholder="Высота" name="size_area_h" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Механизм раскладки" name="charact1" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Материал каркаса" name="charact2" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Материал отбивки" name="charact3" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Основание сидения" name="charact4" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Наполнитель сидения" name="charact5" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Наполнитель слинки" name="charact6" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Спинка" name="charact7" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Боковина" name="charact8" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Подушки" name="charact9" value="">
									</div>
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Бельевой ящик" name="charact10" value="">
									</div>
									<div class="value_parameters__parameters w100 button picture_container">
										<div class="contain_block">
											<input type="file" id="file" value="" name="picture_1">
											<a href="#" class="add_picture">Добавить</a>
										</div>
									</div>
									<div class="value_parameters__parameters w100 button gallery_container">
										<div class="contain_block">
											<input type="file" id="file_gallery" value="" name="gallery_1">
											<a href="#" class="add_gallery">Добавить</a>
										</div>
									</div>

									<input type="hidden" name="count_pictures" class="count_pictures" value="1">
									<input type="hidden" name="count_gallery" class="count_gallery" value="1">
								</div>
								<input type="submit" class="admin_panel__tab_container__submit_form" id="add_product"></input>
							</form>
						</div>
					</div>
					
					<div class="admin_panel__tab_container_wrap" id="edit">
						<form action="">

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Поиск товара товара</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="search_name" placeholder="Наименование товара">
									<a href="#" class="search_prod">Ок</a>
								</div>
							</div>
							
							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Наименование товара</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="search_name">
									<a href="#" class="search_prod">Ок</a>
								</div>
							</div>

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Категория</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="edit_category_prod">
								</div>
							</div>

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Спальное место</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="edit_sleep_l" placeholder="Длина">
									<input type="text" name="edit_sleep_h" placeholder="Высота">
								</div>
							</div>

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Размеры</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="edit_size_l" placeholder="Длина">
									<input type="text" name="edit_size_w" placeholder="Ширина">
									<input type="text" name="edit_size_h" placeholder="Высота">
								</div>
							</div>

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Наименование товара</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="search_name">
									<a href="#" class="search_prod">Ок</a>
								</div>
							</div>

							<div class="tab_container_wrap__row">
								<div class="row__left_block">
									<p>Наименование товара</p>
								</div>
								<div class="row__right_block">
									<input type="text" name="search_name">
									<a href="#" class="search_prod">Ок</a>
								</div>
							</div>
						</form>
					</div>
					
					<div class="admin_panel__tab_container_wrap" id="del">
						
						<div class="admin_panel__tab_container">
							<div class="desc_parameters">
								<div class="desc_parameters__parameters">
									<p>Наименование товара</p>
								</div>
							</div>

							<form action="del_product.php" enctype="multipart/form-data" method="POST" id="form_del_product">
								<input type="hidden" name="del_product">
								<div class="value_parameters">
									<div class="value_parameters__parameters w100">
										<input type="text" placeholder="Наименование товара" name="del_name_prod" value="">
									</div>
								</div>
								<input type="submit" value="Удалить" class="admin_panel__tab_container__submit_form" id="del_product"></input>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


						<!--<div class="admin_panel__tab_container_wrap" id="edit">
						<div class="admin_panel__tab_container">
							<div class="desc_parameters">
								<div class="desc_parameters__parameters active_parameters">
									<p>Выберите наименование товара,<br>который необходимо отредактировать</p>
								</div>
								<div class="desc_parameters__wrap_container">
									<div class="desc_parameters__parameters">
										<p>Наименование товара</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Категория</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Коллекция</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Спальное место</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Размеры</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Механизм раскладки</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Материал каркаса</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Материал отбивки</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Основание сидения</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Наполнитель сидения</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Наполнитель слинки</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Спинка</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Боковина</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Подушки</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Бельевой ящик</p>
									</div>
									<div class="desc_parameters__parameters">
										<p>Изображения</p>
									</div>
									<div class="desc_parameters__parameters w100 button picture_container">
										<div class="contain_block">
											<input type="file" id="file" value="" name="picture_1">
											<a href="#" class="edit_picture">Добавить</a>
										</div>
									</div>
									<div class="desc_parameters__parameters w100 button gallery_container">
										<div class="contain_block">
											<input type="file" id="file_gallery" value="" name="gallery_1">
											<a href="#" class="edit_gallery">Обзор</a>
										</div>
									</div>
								</div>
							</div>

							<form action="" enctype="multipart/form-data" method="POST" id="form_edit_product">

								<input type="hidden" name="edit_product">

								<div class="value_parameters">

									<div class="value_parameters__parameters w100 active_parameters">
										<input type="text" placeholder="Наименование товара" name="id_prod" value="">
										<a href="#" class="search_prod">Ок</a>
									</div>

									<div class="value_parameters__wrap_container">
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Наименование товара" name="edit_name_prod" value="">
										</div>

										<div class="value_parameters__parameters w100">
											<select name="edit_category_prod">
												<option value="Прямые диваны">Прямые диваны</option>
												<option value="Угловые диваны">Угловые диваны</option>
												<option value="Кухонные диваны">Кухонные диваны</option>
												<option value="Малые формы">Малые формы</option>
												<option value="Кресла">Кресла</option>
											</select>
										</div>

										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Коллекция" name="edit_collection" value="">
										</div>

										<div class="value_parameters__parameters w50">
											<input type="number" placeholder="Длина" name="edit_sleep_area_l" value="">
											<input type="number" placeholder="Высота" name="edit_sleep_area_h" value="">
										</div>

										<div class="value_parameters__parameters w33">
											<input type="number" placeholder="Длина" name="edit_size_area_l" value="">
											<input type="number" placeholder="Ширина" name="edit_size_area_w" value="">
											<input type="number" placeholder="Высота" name="edit_size_area_h" value="">
										</div>

										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Механизм раскладки" name="edit_charact1" value="">
										</div>

										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Материал каркаса" name="edit_charact2" value="">
										</div>

										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Материал отбивки" name="edit_charact3" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Основание сидения" name="edit_charact4" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Наполнитель сидения" name="edit_charact5" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Наполнитель слинки" name="edit_charact6" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Спинка" name="edit_charact7" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Боковина" name="edit_charact8" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Подушки" name="edit_charact9" value="">
										</div>
										<div class="value_parameters__parameters w100">
											<input type="text" placeholder="Бельевой ящик" name="edit_charact10" value="">
										</div>

										<div class="value_parameters__parameters text">
											<p>Галерея</p>
										</div>

										<div class="value_parameters__parameters w100 button picture_container">
											<div class="contain_block">
												<input type="file" id="file" value="" name="picture_1">
												<a href="#" class="edit_picture">Добавить</a>
											</div>
										</div>

										<input type="hidden" name="count_pictures" class="count_pictures" value="1">
										<input type="hidden" name="count_gallery" class="count_gallery" value="1">
									</div>
								</div>
								<input type="submit" class="admin_panel__tab_container__submit_form" style="display: none;" id="edit_product"></input>
							</form>
						</div>
					</div>-->

	<script src="../node_modules/jquery/dist/jquery.min.js"></script>
	<script src="../js/admin_common.js"></script>
</body>