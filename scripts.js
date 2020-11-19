console.log('1testrrrrrrr666');

//var submitBtn = document.getElementById("submit-btn");
//submitBtn.addEventListener("click", validateForm);

function validateForm() {
	console.log('submitting');
}


$( document ).ready(function() {
    console.log( "ready!" );
	$('select').on('change', function() {
		$('.hidden-inputs li.active').removeClass('active');
		$('.' + this.value + '-wrapper').addClass('active');
	});
});