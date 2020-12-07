$(document).ready(function(){

        //display loader on page load
				$('.loader').hide();
				$('body').css({"background":"transparent","opacity":"1"})
	$(document).scroll(function () {
		$('#to_top').css('opacity', $(document).scrollTop() / 500);
	});

	$('#to_top').click(function () {
		$('html, body').animate({scrollTop: 0}, 1000);
	});

	// $('.sub_ul li').click(function () {
	// 	$('.subType').fadeOut();
	// 	$(".opacity0").removeClass('opacity0');
	// 	$(".checkCategory input[type = checkbox]").prop('disabled', false);
	// 	$(".type").click(function () {
	// 		$('.subType').fadeToggle(500);
	// 	});
	// });
	$('.checkCategory').click(function () {
		$(".checkCategory input[type = checkbox]").prop('disabled', false);
		$(".type").click(function () {
			$('.subType').fadeToggle(500);
		});
	});
	var resultEven = 0.5;
	var resultOdd = 1;
	$('.plus').click(function(){
		var input = $(this).parent().prev().children();
		if($(input).hasAttr('float')){
			resultEven = parseFloat($(input).val())+0.5;
			result = 	resultEven;
			$(input).val(result);
		}
		else{
			resultOdd = parseInt($(input).val())+1;
			result = resultOdd;
		}
		$(input).val(result);
		$(this).parent().parent().parent().prev().children("span").text(result);

		var hidden = $(this).parent().parent().parent().next().next();
		var addprice = $(this).parent().parent().parent().next().children("span").html();
		var sum = parseFloat(addprice);
		sum += parseFloat($(hidden).val());
		$(this).parent().parent().parent().next().children("span").html(sum);
	});
	$('.minus').click(function(){
		var input = $(this).parent().next().children();
		if($(input).hasAttr('float')){
			resultEven = parseFloat($(input).val())-0.5;
			result = 	resultEven;
			if(result < 0.5){
				return false
			}
			$(input).val(result);
		}
		else{
			resultOdd = parseInt($(input).val())-1;
			result = resultOdd;
			if(result < 1){
				return false
			}
		}
		$(input).val(result);
		$(this).parent().parent().parent().prev().children("span").text(result);
		
		var hidden = $(this).parent().parent().parent().next().next();
		var addprice = $(this).parent().parent().parent().next().children("span").html();
		var sum = parseFloat(addprice);
		sum -= parseFloat($(hidden).val());
		$(this).parent().parent().parent().next().children("span").html(sum);
	});

	$(".deliverTime li").click(function () {
		$(".deliverTime li").removeClass('active');
		$(this).addClass('active');
	})
	$(".payType li").click(function () {
		$(".payType li").removeClass('active');
		$(this).addClass('active');
	});
	$('.trash').click(function () {
		if(	confirm("Համոզվա՞ծ եք, որ ուզում եք ջնջել ապրանքը զամբյուղից")  == true){
			$(this).parent().parent().remove();
		}
	});
	$(".deleteBasket").click(function () {
		$(this).parent().parent().parent().find(".basketBody").remove();
	});
	$(".profileUl li:not(.active) .profileUl li:not(.prof)").mouseover(function () {
		$(this).addClass("active");
	}).mouseleave(function () {
		$(this).removeClass("active");
	});
	var ul = $('.profileUl li');
	$(".profileUl li:not(.prof)").click(function () {
		for (var i = 0; i < ul.length; i++) {
			if ($(ul[i]).hasClass('active')) {
				$(ul[i]).removeClass('active');
			}
			$(this).addClass('active');
		}
	});
	$(".orderCountBody").click(function () {
		$('.correctOrder').slideToggle();
		$(this).next('.fa').toggleClass('fa-angle-down').toggleClass('fa-angle-up');
	});
	$(".giveOrder").click(function () {
		var addres = $(".addres");
		var datepicker = $("#datepicker");
		if($(addres).val() !== "" && $(datepicker).val() !== ""){
			$(this).parent().attr("rel","modal:open");
		}
		else if($('.addres').val() == "" || $('.dataDay').val() == ""){
			alert('Խնդրում ենք լրանցնել պարտադիր դաշտերը');
			return false;
		}
	});
	$(".registerButton").click(function () {
		var regName = $(".regName"), regSurName =  $(".regSurName"), regMail = $('.regMail'), regPass = $('.regPass'), regRePass = $('.regRePass');
		if($(regName).val() !== "" && $(regSurName).val() !== "" && $(regMail).val() !== "" && $(regPass).val() !== "" && $(regRePass).val() !== ""){
			$(this).parent().attr("rel","modal:open");
		}
	});
	$(".resetSubmit").click(function () {
		var resetEmail = $(".resetEmail");
		if($(resetEmail).val() !== ""){
			$(this).parent().attr("rel","modal:open");
		}
	});
	$('.changeInfo').click(function () {
		$('.accountInfo').slideUp();
		$('.changeAccount').slideDown();
	});
	$('.closeChanges').click(function () {
		$('.accountInfo').slideDown();
		$('.changeAccount').slideUp();
	});
	$('.addproduct').click(function(){
		$(this).parent().children().first().fadeIn();
		$(this).addClass('active');
	});
	$(".toggle-password").click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
		var input = $($(this).prev());
		if (input.attr("type") == "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});
	// script for slide start
	var speed =  500;
	var autoswitch =true;
	var autoswitch_speed = 3000;

	$('.slide').first().addClass('slideActive');

	$('.slide').hide();

	$('.slideActive').show();

	$('.rightArrow').on('click', nextSlide);
	$('.leftArrow').on('click', prevSlide);
	if (autoswitch == true) {
		setInterval(function () {
		nextSlide();
		}, autoswitch_speed);
	}
	function nextSlide() {
		$('.slideActive').removeClass('slideActive').addClass('oldActive');
		if ($('.oldActive').is(':last-child')) {
			$('.slide').first().addClass('slideActive')
		}else{
			$('.oldActive').next().addClass('slideActive')
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
		$('.slideActive').fadeIn(speed);
	}
	function prevSlide() {
		$('.slideActive').removeClass('slideActive').addClass('oldActive');
		if ($('.oldActive').is(':first-child')) {
			$('.slide').last().addClass('slideActive')
		}else{
			$('.oldActive').prev().addClass('slideActive')
		}
		$('.oldActive').removeClass('oldActive');
		$('.slide').fadeOut(speed);
		$('.slideActive').fadeIn(speed);
	}
	// script for slide end

	$('.icon-line-awesome-close').click(function () {
		$(this).parent().remove();
	})
});
function myFunction() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
	$.fn.hasAttr = function(name) {  
		return this.attr(name) !== undefined;
};
// function for timer

const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('Sep 30, 2019 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

		}, second)
		window.onscroll = function() {myFunction()};
		var navbar = document.getElementById("navbar");
		var sticky = navbar.offsetTop;

		function myFunction() {
			if (window.pageYOffset >= sticky) {
				navbar.classList.add("sticky")
			} else {
				navbar.classList.remove("sticky");
			}
		}
		function filter(designDisp, itDisp, otherDisp) {
			setDisplay("accountbody", designDisp);
			setDisplay("accountAddress", itDisp);
			setDisplay("accountOrder", otherDisp);
		}
		
		function setDisplay(className, displayValue) {
			var items = document.getElementsByClassName(className);
			for (var i=0; i < items.length; i++) {
				items[i].style.display = (displayValue? "block" : "none");
			}
		}