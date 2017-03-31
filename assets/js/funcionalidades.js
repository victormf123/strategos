
$(document).ready(function () {
	$('.servico1').hide();
	$('.servico2').hide();
	$('.servico3').hide();
	$('.servico4').hide();
	$('.servico5').hide();
	$('.servico6').hide();
	$('.servico7').hide();
	$('.servico8').hide();
	$('.servico9').hide();
	$('.servico10').hide();

	$('.bt-servicos1').click(function () {
		$('.servico1').fadeToggle('slow');
	});
	$('.bt-servicos2').click(function () {
		$('.servico2').fadeToggle('slow');
	});
	$('.bt-servicos3').click(function () {
		$('.servico3').fadeToggle('slow');
	});
	$('.bt-servicos4').click(function () {
		$('.servico4').fadeToggle('slow');
	});
	$('.bt-servicos5').click(function () {
		$('.servico5').fadeToggle('slow');
	});
	$('.bt-servicos6').click(function () {
		$('.servico6').fadeToggle('slow');
	});
	$('.bt-servicos7').click(function () {
		$('.servico7').fadeToggle('slow');
	});
	$('.bt-servicos8').click(function () {
		$('.servico8').fadeToggle('slow');
	});
	$('.bt-servicos9').click(function () {
		$('.servico9').fadeToggle('slow');
	});
	$('.bt-servicos10').click(function () {
		$('.servico10').fadeToggle('slow');
	});


	$("#fade").fadeIn("slow");

	$('#row1').show();
	$('#a1').css('border-bottom', 'solid 6px #f19333');
	$('#row2').hide();
	$('#row3').hide();

	$('#a1').click(function () {
		$('#a1').css('border-bottom', 'solid 6px #f19333');
		$('#a2').css('border-bottom', 'solid 0px');
		$('#a3').css('border-bottom', 'solid 0px');
		$('#row1').show();
		$('#row2').hide();
		$('#row3').hide();
	});

	$('#a2').click(function () {
		$('#a2').css('border-bottom', 'solid 6px #f19333');
		$('#a1').css('border-bottom', 'solid 0px');
		$('#a3').css('border-bottom', 'solid 0px');
		$('#row1').hide();
		$('#row2').show();
		$('#row3').hide();
	});
	$('#a3').click(function () {
		$('#a3').css('border-bottom', 'solid 6px #f19333');
		$('#a1').css('border-bottom', 'solid 0px');
		$('#a2').css('border-bottom', 'solid 0px');
		$('#row1').hide();
		$('#row2').hide();
		$('#row3').show();
	});
	$('#menu-item-89').click(function () {
		$("html, body").animate({
			scrollTop: $("#footer").offset().top
		}, 200);
	});
});



