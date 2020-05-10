function etaLight() {
	$(document).ready(function() {

	  const $valueSpan = $('.valueSpan2');
	  const $value = $('#range');
	  $valueSpan.html($value.val());
	  $value.on('input change', () => {

		$valueSpan.html($value.val());
	  });
	});	
	etaLight2();
}
function etaLight2() {
	$(document).ready(function() {

	  const $valueSpan = $('.valueSpan1');
	  const $value = $('#range2');
	  $valueSpan.html($value.val());
	  $value.on('input change', () => {

		$valueSpan.html($value.val());
	  });
	});
}