$(document).ready(function(){

	$(".sidebar_link").on("click", function(event){
		event.preventDefault();

		$('.container_info .tab_container').fadeOut(400, function(){
			
		});

		var id_container =  $(this).data('tab_container');
		setTimeout( function(){
			$('#' + id_container).fadeIn(400, function(){

			});
		}, 400);
	});

	$('#order_by').on('click', function(event){
		event.preventDefault();

		var name = $('.name').val();
		var phone = $('#phone').val();

		$.ajax({
			type: "POST",
			url: "mail.php",
			data: {
				"name": name,
				"phone": phone
			},
			success: function(data){
				alert(data);
			},
			error: function(data){
				alert(data);
			}
		});
	});

	$('.btn-down-order').on('click', 'a', function(event){
		event.preventDefault();

		var id = $(this).attr('href');
		var top = $(id).offset().top;
		$('body, html').animate({scrollTop:top}, 1500);
	});

  	$('.category_link').on('click', function(event){
  		event.preventDefault();

	    var category = $(this).text(); // id статьи в базе данных

	    $.ajax({
	        url: 'category_order.php', // путь к обработчику
	        type: 'POST', // метод передачи данных
	        data: {category: category}, // передаваемые данные {ключ1 : значение1, ключ2 : значение2}
	        success: function(data){ // в случае удачного завершения запроса к серверу
	            // в переменной data - ответ сервера
	            $('.prod_content').html(data).hide().fadeIn(700);
	        },
	        error: function(data){
	        	alert("Ошибка");
	        }
	    });
	});

	$('.bars-btn i').click(function(){
		$('.navigation-phone').slideToggle('slow');
	});

	$('.bars-btn-prod i').click(function(){
		$('.nav-phone').slideToggle('slow');
	});
});