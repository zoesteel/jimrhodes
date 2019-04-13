//burger menus
function burgerAnimation(x) {
    x.classList.toggle("change");
}

jQuery('.burger-menu').click(function(){
	jQuery('#mobile-menu').toggleClass('display-none');
});