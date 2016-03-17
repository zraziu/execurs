$(document).ready(function(){
    $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
            var form_data = $(this).serialize(); //собераем все данные из формы
            $.ajax({
            type: "POST", //Метод отправки
            url: "send.php", //путь до php фаила отправителя
            data: form_data,
            success: function() {
                   //код в этом блоке выполняется при успешной отправке сообщения
                   alert("Ваше сообщение отпрвлено!");
            });
    });
});    



$(document).ready(function(){
	var days = {
	"2/7/2015":"",
	"3/7/2015":"",
	"4/7/2015":"",
	"7/7/2015":"",
	"9/7/2015":"",
	"10/7/2015":"",
	"11/7/2015":"",
	"14/7/2015":"",
	"16/7/2015":"",
	"17/7/2015":"",
	"18/7/2015":"",
	"21/7/2015":"",
	"23/7/2015":"",
	"24/7/2015":"",
	"25/7/2015":"",
	"28/7/2015":"",
	"30/7/2015":"",
	"31/7/2015":"",
	"1/8/2015":"",
	"4/8/2015":"",
	"6/8/2015":"",
	"7/8/2015":"",
	"8/8/2015":"",
	"11/8/2015":"",
	"13/8/2015":"",
	"14/8/2015":"",
	"15/8/2015":"",
	"18/8/2015":"",
	"20/8/2015":"",
	"21/8/2015":"",
	"22/8/2015":"",
	"25/8/2015":"",
	"27/8/2015":"",
	"28/8/2015":"",
	"29/8/2015":"",
	"1/9/2015":"",
	"3/9/2015":"",
	"4/9/2015":"",
	"5/9/2015":"",
	"8/9/2015":"",
	"10/9/2015":"",
	"11/9/2015":"",
	"12/9/2015":"",
	"15/9/2015":"",
	"17/9/2015":"",
	"18/9/2015":"",
	"19/9/2015":"",
	"22/9/2015":"",
	"24/9/2015":"",
	"25/9/2015":"",
	"26/9/2015":"",
	"29/9/2015":"",

	};
	$('#calendar1').datepicker({
		 monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
		'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
		'Октябрь', 'Ноябрь', 'Декабрь'],
		 dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
		 firstDay: 1,
		 dateFormat: "dd.mm.yy",
		showButtonPanel: false,
		numberOfMonths: 3,
		showOtherMonths: true,
		beforeShowDay: function(date) {
			var this_date = date.getDate().toString() + "/" +(date.getMonth()+1).toString() + "/" + date.getFullYear().toString();
			if (this_date in days)
			return [true, , "Есть автобус"];
			else return [false, , "нет автобуса"];
		},
		onSelect: function(date) {
			var myday = "дата "+date+", событие: "+days[date];
			$('#date1').val(date);
			var scroll_el = '.head'; // возьмем содержимое атрибута href
				if ($(scroll_el).length != 0) { // проверим существование элемента чтобы избежать ошибки
				$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
			}
		}
	});



				$("#callback").submit(function() {
					var form = $(this);
					var error = false; 
					var name = $("#name").val();
					var kontakt = $("#phone").val();
					form.find('input').each( function(){ 
						if ($(this).val() == '') { 
							$(this).addClass('error');
							error = true; 
						}
					});
						$('#name, #phone').focus(function(){
							$(this).removeClass();
						})
						if(name == '' || kontakt == ''){
							return false;
						}
					if (!error) {
					$.ajax({
						type: "GET",
						url: "mail.php",
						data: $("#callback").serialize(),
					}).done(function() {
						alert("Спасибо за заявку!");
						$('#callback').css({"display":"none"});
						$('.done').css({"display":"block"})
					})
					return false;
					}
				});
				
				$("#order1").submit(function() {
					var form = $(this);
					var error = false; 
					var date = $("#date1").val();
					var phone2 = $("#phone2").val();
					form.find('input').each( function(){ 
						if ($(this).val() == '') { 
							$(this).addClass('error');
							error = true; 
						}
					});
						$('#date1, #phone2').focus(function(){
							$(this).removeClass();
						})
						if(date == '' || phone2 == ''){
							return false;
						}
					if (!error) {
					$.ajax({
						type: "GET",
						url: "mail2.php",
						data: $("#order1").serialize(),
					}).done(function() {
						alert("Спасибо за заявку!");
						$('#date1').attr("disabled", true).css({"opacity":"0.7"});
						$('#phone2').attr("disabled", true).css({"opacity":"0.7"});
						$('#send2').attr("disabled", true);
					})
					return false;
					}
				});
				
				$("#consultation").submit(function() {
					var form = $(this);
					var error = false; 
					var name3 = $("#name3").val();
					var phone3 = $("#phone3").val();
					var mail = $("#mail").val();
					form.find('input').each( function(){ 
						if ($(this).val() == '') { 
							$(this).addClass('error');
							error = true; 
						}
					});
						$('#name3, #phone3, #mail').focus(function(){
							$(this).removeClass();
						})
						if(name3 == '' || phone3 == '' || mail == ''){
							return false;
						}
					if (!error) {
					$.ajax({
						type: "GET",
						url: "mail3.php",
						data: $("#consultation").serialize(),
					}).done(function() {
						alert("Спасибо за заявку!");
						$('#name3').attr("disabled", true).css({"opacity":"0.7"});
						$('#phone3').attr("disabled", true).css({"opacity":"0.7"});
						$('#mail').attr("disabled", true).css({"opacity":"0.7"});
						$('#send3').attr("disabled", true);
					})
					return false;
					}
				});
				
				$("#question").submit(function() {
					var form = $(this);
					var error = false; 
					var name4 = $("#name4").val();
					var phone4 = $("#phone4").val();
					var mail2 = $("#mail2").val();
					var text = $("#text2").val();
					form.find('input, textarea').each( function(){ 
						if ($(this).val() == '') { 
							$(this).addClass('error');
							error = true; 
						}
					});
						$('#name4, #phone4, #mail2, #text2').focus(function(){
							$(this).removeClass();
						})
						if(name4 == '' || phone4 == '' || mail2 == '' || text == ''){
							return false;
						}
					if (!error) {
					$.ajax({
						type: "GET",
						url: "mail4.php",
						data: $("#question").serialize(),
					}).done(function() {
						alert("Спасибо за заявку!");
						$('#name4').attr("disabled", true).css({"opacity":"0.7"});
						$('#phone4').attr("disabled", true).css({"opacity":"0.7"});
						$('#mail2').attr("disabled", true).css({"opacity":"0.7"});
						$('#text2').attr("disabled", true).css({"opacity":"0.7"});
						$('#send4').attr("disabled", true);
					})
					return false;
					}
				});
})