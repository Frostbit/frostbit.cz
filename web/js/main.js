/* Responsive navigation */
$('.toggle').click(function() {
	$('.responsive-navigation').toggle('slow', function() {
		// animation complete
	});
});

/* Webhosting */
var prices = [25,32,39,46,53,60,67,74,81,88,95,102,109,116,123,130,137,144,151,158];
$('#pg1').click(function() {
    $('.slider').val(2);
});
$('#pg2').click(function() {
    $('.slider').val(10);
});
$('#pg3').click(function() {
    $('.slider').val(15);
});

$('.slider').noUiSlider({
    start: 2,
    step: 1,
    connect: 'upper',
    behaviour: 'none',
            
    range: {
       'min': 1,
       'max': 20
    }
});

$('.slider').Link('lower').to($('#space'));

/* Display price */
$('#space').keyup(function() {
    alert('Debug');
});

$(".slider").noUiSlider_pips({
    mode: 'values',
    values: [1, 2, 5, 10, 15, 20],
    density: 4
});

$('#moreParams').click(function() {
	$('#params').toggle('show', function() {

	});
});