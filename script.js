$(document).ready(function() {
	$('.trigger').on('click',function(e) {
		e.preventDefault()
		$('body').toggleClass('active')
	})
})