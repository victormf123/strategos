$(document).ready(function () {
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
});



