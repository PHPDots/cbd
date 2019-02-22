// NAVBAR STICKY START

window.onscroll = function () {
    myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

$('.menu, .overlay').click(function () {
    $('.menu').toggleClass('clicked');
    $('#nav').toggleClass('show');
});

$('#category-tabs li a').click(function () {
    $(this).next('ul').slideToggle('500');
    $(this).find('i').toggleClass('fa-plus fa-minus')
});

// NAVBAR STICKY END