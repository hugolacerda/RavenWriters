$('.sideTog').toggle(

function() {
	console.log("i'm clicked")
    $('.block').css('left', '0')
}, function() {
    $('.block').css('left', '-400px')
});