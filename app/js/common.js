$(function() {

	// // BEGIN Прекращает воспроизведение видео после закрвтия модального окна
	// $("#myModal-video-bt").on('click', function (e) {
	// 	$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	// });
	// $("div#myModal-video").on('click', function (e) {
	// 	$("#myModal-video iframe").attr("src", $("#myModal-video iframe").attr("src"));
	// });
	// //////

	// открывает fancybox при нажатии на div
	$("#object-video").on('click', function () {
		$.fancybox.open([
			{ src  : 'https://www.youtube.com/embed/wLVhg3rgpkc'}
		]);
	});
	$("#object-plan").on('click', function () {
		$.fancybox.open([
			{ src  : 'img/gallery/plan.jpg'}
		], 
		{
		loop : true
		});
	});
	$("#object-photo").on('click', function () {
		$.fancybox.open([
			{ src  : 'img/gallery/photo/photo-00001.jpg'},
			{ src  : 'img/gallery/photo/photo-00002.jpg'},
			{ src  : 'img/gallery/photo/photo-00003.jpg'},
			{ src  : 'img/gallery/photo/photo-00004.png'},
			{ src  : 'img/gallery/photo/photo-00005.jpg'},
			{ src  : 'img/gallery/photo/photo-00006.jpg'},
			{ src  : 'img/gallery/photo/photo-00007.jpg'},
			{ src  : 'img/gallery/photo/photo-00008.jpg'},
			{ src  : 'img/gallery/photo/photo-00009.jpg'},
			{ src  : 'img/gallery/photo/photo-00010.jpg'},
			{ src  : 'img/gallery/photo/photo-00011.jpg'},
			{ src  : 'img/gallery/photo/photo-00012.jpg'},
			{ src  : 'img/gallery/photo/photo-00013.jpg'},
			{ src  : 'img/gallery/photo/photo-00014.jpg'},
			{ src  : 'img/gallery/photo/photo-00015.jpg'},
			{ src  : 'img/gallery/photo/photo-00016.jpg'}
		], 
		{
		loop : true
		});
	});
	$("#flats-repairs").on('click', function () {
		$.fancybox.open([
			{ src  : 'img/gallery/repairs/repairs-00001.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00002.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00003.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00004.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00005.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00006.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00007.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00008.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00009.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00010.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00011.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00012.jpg'},
			{ src  : 'img/gallery/repairs/repairs-00013.jpg'},
			{ src  : 'img/gallery/repairs/podezd/podezd-00001.jpg'},
			{ src  : 'img/gallery/repairs/podezd/podezd-00002.jpg'},
			{ src  : 'img/gallery/repairs/podezd/podezd-00003.jpg'},
			{ src  : 'img/gallery/repairs/podezd/podezd-00004.jpg'}
		], 
		{
		loop : true
		});
	});
	////// END

	// BEGIN фильтр по квартирам
	$(".filter-button").click(function () {
		var value = $(this).attr('data-filter');
		if (value == "all") {
				$('.filter').show('1000');
		}
		else {
				$(".filter").not('.' + value).hide('3000');
				$('.filter').filter('.' + value).show('3000');
		}
	});
	if ($(".filter-button").removeClass("active")) {
		$(this).removeClass("active");
	}
	$(this).addClass("active");
	////// END

	// BEGIN Включаем Owl Carousel
	$(".owl-carousel").owlCarousel({
		items: 1,
		loop: true,
		nav: true,
		dots: false
	});
	////// END

	// BEGIN Button Back to top
  $(window).scroll(function() {
		if($(this).scrollTop() > $(this).height()) {
			$('.top-move-bt').addClass('active');
		}else{
			$('.top-move-bt').removeClass('active');
		}
	});
	$('.top-move-bt').click(function() {
		$('html, body').stop().animate({scrollTop:0}, 'slow', 'swing')
	});
	////// END

	// BEGIN функция маски телефона
  function loadMaskphone () {
    $('.tel').keypress(function(key) { if(key.charCode < 48 || key.charCode > 57) return false; });
    $(".tel").mask("9 (999) 999-99-99");
    
    // окрашиваем border в #1fb450 цвет
    var maxnumphone = 17; // максимум символов
    $('.phone-form').keyup(function(){
		 var count = $(this).val().length; // кол-во уже введенных символов
		 var num = maxnumphone - count; // кол-во символов, которое еще можно ввести
		 if(num === 0){
			 $(this).attr('style', 'border:1px solid #1fb450;color:#1fb450;font-weight:500;');
			 $(this).siblings('.fas').attr('style', 'color:#1fb450'); 
			 console.log('1fb450');
		 }else{
		 	$(this).attr('style', '');
		 	$(this).siblings('.fas').attr('style', '');
		 }
	});
	$('.nameclient-form').keyup(function(){
		 var count = $(this).val().length; // кол-во уже введенных символов
		 //var num = maxnumphone - count; // кол-во символов, которое еще можно ввести
		 if(count >= 2){
			 $(this).attr('style', 'border:1px solid #1fb450;color:#1fb450;font-weight:500;');
			 $(this).siblings('.fas').attr('style', 'color:#1fb450'); 
			 
		 }else{
		 	$(this).attr('style', '');
		 	$(this).siblings('.fas').attr('style', '');
		 }
	});
  }
  loadMaskphone ();
////// END

// // обработка форм
$(document).on('submit','.gform', function(e) {
    e.preventDefault(); // выключаем стандартное действие отправки
        var form = $(this); // запомним форму в переменной

        var data = form.serialize(); // сериализуем данные формы в строку для отправки
        
        $.ajax({ // инициализируем аякс в обработчик для googlesheet
            url: "core/order-gf.php", // путь до нашего php обработчика, в моем случае он лежит в той же папке что и форма
            data: data, // данные  которые мы сериализовали
            type: "POST", // постом
            dataType: "json", // ответ ждем в формате json
            beforeSend: function(){ // перед отправкой
                form.find('button').attr('disabled', true); // отключим кнопку
            },
            success: function(data) { // соединение прошло и получен ответ от обработчика
                // внутри data будет объект, все его ключи и значения повторяют массив который мы вернули php обработчиком в json строке, помимо ok и message можно сувать туда всякие другие вещи
                if (data.ok) { // если ok != 0 то значит ошибок нет
                    //form.remove(); // выпилим форму
                
                //$('.response').html(data.message); // и покажем сообщение от сервера
                  
                  $('.nameclient-form').val(''); 
                  $('.phone-form').val(''); 
                  $('.email-form').val(''); 
                  $('.onlynum').val(''); 
                  form.find('.phone-form').attr('style', '');
                  form.find('.phone-form').siblings('.fas').attr('style', '');
                  form.find('.nameclient-form').attr('style', '');
                  form.find('.nameclient-form').siblings('.fas').attr('style', '');
                  $('button.clickclose').click();
                  
                swal({
                  position: 'center',
                  type: 'success',
                  title: 'Спасибо за Вашу заявку!',
                  text: '',
                  showCloseButton: true,
                  showConfirmButton: false,
                  timer: 4500
                });
                }else {
                  form.find('.phone-form').attr('style', data.bord);
                  form.find('.phone-form').siblings('.fas').attr('style', data.icon);
                swal({
                  position: 'center',
                  type: 'error',
                  title: 'Нужно вписать телефон!',
                  showCloseButton: true,
                  showConfirmButton: false,
                  timer: 2500
                });
                };
            },
            error: function(xhr, ajaxOptions, thrownError) { // если ошибка
                //console.log(arguments); // убрать после дебага
            }, 
            complete: function() { // в конце любого исхода
                form.find('button').prop('disabled', false); // снова включим кнопку
            }
        });
        
});

});