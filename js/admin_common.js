// Функция пдавного появления страниц
function fadeInPage(){
	var body = $('body');
	body.fadeIn(400);
}

function fadeInModalSuccess(){
	$('#admin_success_modal').fadeIn(400);
}

function fadeInModalStart(){
	$('#admin_start_modal').fadeIn(400);
}

// Раздел "Добавить"
// Функция для добавления продукта
// 
function add_product(){
	$('#add_product').on('click', function(event){
		event.preventDefault();

		var data = $('#form_add_product').serialize() + '&add_product';

		$.ajax({
			url: 'add_product.php',
			type: 'POST',
			data: data,
			success: function(data) {
				alert(data);
			},
			error: function(data) {
				alert(data);
			}
		});
	});
}

function edit_product() {
	$('#edit_product').on('click', function(event){
		event.preventDefault();

		var data = $('#form_edit_product').serialize();

		$.ajax({
			url: 'edit_product.php',
			type: 'POST',
			data: data,
			success: function(data) {
				alert(data);
			},
			error: function(data) {
				alert(data);
			}
		});
	});
}

function del_product() {
	$('#del_product').on('click', function(event){
		event.preventDefault();

		var data = $('#form_del_product').serialize();

		$.ajax({
			url: 'del_product.php',
			type: 'POST',
			data: data,
			success: function(data) {
				alert(data);
			},
			success: function(data) {
				alert(data);
			}
		});
	});
}

$(document).ready(function(){

	// Вызов метода для плавного появления страницы
	// 
	fadeInPage();

	$('#admin_enter').on('click', function(event){
		event.preventDefault();
		$('#admin_start_modal').fadeOut(400);
		setTimeout(fadeInModalSuccess, 400);
	});

	$('#back_autorize').on('click', function(event){
		event.preventDefault();
		$('#admin_success_modal').fadeOut(400);
		setTimeout(fadeInModalStart, 400);
	});

	// Переключатели между разделами
	// 
	$('.admin_panel__tabs__tab a').on('click', function(event){
		event.preventDefault();

		var id_tab_container = $(this).data('admin_tab');

		$('.admin_panel__tab_container_wrap').fadeOut(200);
		

		setTimeout(function(){
			$('.admin_panel__tab_container_wrap').removeClass('active');
			$('#' + id_tab_container).fadeIn(200);
			$('#' + id_tab_container).addClass('active');
		}, 200);
	});

	// Разедел "Добавить"
	// Добаление картинок для слайдера
	// 
	var name_picture_item = 1;

	$('.add_picture').on('click', function(event){
		event.preventDefault();

		name_picture_item++;
		var name_picture = 'picture_' + name_picture_item;

		$('.count_pictures').val(name_picture_item);

		$('.picture_container')
			.append('<div class="contain_block">' + 
				'<input type="file" value="" name="' + name_picture + '">' + 
				'</div>'
			);
	});

	// Разедел "Добавить"
	// Добаление картинок для галереи
	// 
	var name_gallery_item = 1;

	$('.add_gallery').on('click', function(event){
		event.preventDefault();

		name_gallery_item++;
		var name_gallery = 'gallery_' + name_gallery_item;

		$('.count_gallery').val(name_gallery_item);

		$('.gallery_container')
			.append('<div class="contain_block">' + 
					'<input type="file" value="" name="' + name_gallery + '">' +
					'</div>'
			);
	});

	// Раздел "Редактирование"
	// Поиск по наименованию товара
	// 
	$('.search_prod').on('click', function(event){
		event.preventDefault();

		var search_name = $('input[name=id_prod]').val();

		$.ajax({
			url: 'edit_product.php',
			type: 'POST',
			data: {
				'search_name': search_name
			},
			success: function(data) {
				var product_data = JSON.parse(data);

				$('input[name=edit_name_prod]').val(product_data.name);
				$('select[name=edit_category_prod]').val(product_data.category);
				$('input[name=edit_collection]').val(product_data.collection);
				$('input[name=edit_sleep_area_l]').val(product_data.sleep_area_l);
				$('input[name=edit_sleep_area_h]').val(product_data.sleep_area_h);
				$('input[name=edit_size_area_l]').val(product_data.size_area_l);
				$('input[name=edit_size_area_w]').val(product_data.size_area_w);
				$('input[name=edit_size_area_h]').val(product_data.size_area_h);
				$('input[name=edit_charact1]').val(product_data.charact1);
				$('input[name=edit_charact2]').val(product_data.charact2);
				$('input[name=edit_charact3]').val(product_data.charact3);
				$('input[name=edit_charact4]').val(product_data.charact4);
				$('input[name=edit_charact5]').val(product_data.charact5);
				$('input[name=edit_charact6]').val(product_data.charact6);
				$('input[name=edit_charact7]').val(product_data.charact7);
				$('input[name=edit_charact8]').val(product_data.charact8);
				$('input[name=edit_charact9]').val(product_data.charact9);
				$('input[name=edit_charact10]').val(product_data.charact10);

				var str_all_pictures = product_data.pictures;
				var arr_all_pictures = str_all_pictures.split('|');
				var picture_id = 1;
				var name_picture = "";

				for (var i = 0; i < arr_all_pictures.length; i++) {
					name_picture = "picture_" + picture_id;
					picture_id++;

					$('#form_edit_product .picture_container')
						.append('<div class="contain_block">' + 
									'<input type="file" value="' + arr_all_pictures[i] + '" name="' + name_picture + '">' + 
								'</div>'
						);
				}

				var paths_pictures = product_data.pictures;

				paths_pictures = paths_pictures.split('|');
			},
			error: function(data) {
				alert(data);
			}
		});

		$('.value_parameters__wrap_container').fadeIn(400);
		$('.desc_parameters__wrap_container').fadeIn(400);
		$('#form_edit_product input[type=submit]').fadeIn(400);
	});

	//Раздел "Редактирование"
	//Вызов функции для редактирования товара
	//

	edit_product();
	del_product();
});