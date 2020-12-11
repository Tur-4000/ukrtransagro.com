$(document).ready(function() {
// MENU --------------------------------------------------
    $('#menu-button').click(function(){
       $('menu').fadeIn(500);
    });
    $('close').click(function(){
       $('menu').fadeOut(500);
    });
// АКТИУНОСТЬ МЕНЮ --------------------------------------------------------------
    $('lang, [lang = '+lang+']').each(function(){
        $('lang a').removeClass('active');
        $(this).addClass('active');
    });
// ВЫЗОВ ВИДЕО В НОВОСТЯХ --------------------------------------------------------------
    $('.play').click(function(){
        $('.play').fadeOut(300);
        $('.stop').fadeIn(300);
        $('.video').css('right','0');
    });
    $('.stop').click(function(){
        $('.play').fadeIn(300);
        $('.stop').fadeOut(300);
        $('.video').css('right','');
    });
// ВИДЕО --------------------------------------------------------------
    $('.play_button').click(function(){
        var h = $("video").height();
        if($(this).hasClass('active')){
            $('.play_button').removeClass('active').css('opacity', '0.5');
            $("video").get(0).pause();
            $("screen, header").height(650);
            $("header > div").fadeIn(200);
            // $(".mission").css("margin", "100px auto");
        }
        else{
            $("video").get(0).play();
            $("screen, header").height(h);
            $("header > div").fadeOut(200);
            $('.play_button').addClass('active').css('opacity', '0.1');
        }
    })
// ОБРАБОТКА ССЫЛОК ДЛЯ ЯЗЫКОВ =================================================
    if(lang == 'ua') {
        $('menu ul a, charact a, a.link, .news a').each(function(){
            var target = $(this).attr('target');
            if(target != '_blank') {
            $(this).attr('href', 'ua/' + $(this).attr('href'));
            }
        });
    }
    if(lang == 'en') {
        $('menu ul a, charact a, a.link, .news a').each(function(){
            var target = $(this).attr('target');
            if(target != '_blank') {
            $(this).attr('href', 'en/' + $(this).attr('href'));
            }
        });
    }
// ОТПРАВКА ФОРМЫ --------------------------------------------------------------
    $(".form").submit(function(){ // перехватываем все при событии отправки
		var form = $(this); // запишем форму, чтобы потом не было проблем с this
		var error = false; // предварительно ошибок нет
//		form.find('input').each( function(){ // пробежим по каждому полю в форме
//			if ($(this).val() == '') { // если находим пустое
//				alert('Заполните поле "'+$(this).attr('placeholder')+'"!'); // говорим заполняй!
//				error = true; // ошибка
//			}
//		});
		if (!error) { // если ошибки нет
			var data = form.serialize(); // подготавливаем данные
			$.ajax({ // инициализируем ajax запрос
			   type: 'POST', // отправляем в POST формате, можно GET
			   url: 'sm_admin/core/mail.php', // путь до обработчика, у нас он лежит в той же папке
			   dataType: 'json', // ответ ждем в json формате
			   data: data, // данные для отправки
		       beforeSend: function(data) { // событие до отправки
		            form.find('input[type="submit"]').attr('disabled', 'disabled'); // например, отключим кнопку, чтобы не жали по 100 раз
		          },
		       success: function(data){ // событие после удачного обращения к серверу и получения ответа
		       		if (data['error']) { // если обработчик вернул ошибку
		       			alert(data['error']); // покажем её текст
		       		} else { // если все прошло ок
		       			alert('Ваш запрос отправлен! Мы свяжеся с Вами в ближайшее время.'); // пишем что все ок
		       		}
		         },
		       error: function (xhr, ajaxOptions, thrownError) { // в случае неудачного завершения запроса к серверу
		            alert(xhr.status); // покажем ответ сервера
		            alert(thrownError); // и текст ошибки
		         },
		       complete: function(data) { // событие после любого исхода
		            form.find('input[type="submit"]').prop('disabled', false); // в любом случае включим кнопку обратно
		         }
		                  
			     });
		}
		return false; // вырубаем стандартную отправку формы
	});
});
