'use strict'


// ハンバーガーメニュー

// const btn = document.querySelector('.btn-open');
// const body = document.querySelector('body');
// btn.addEventListener('click', () => body.classList.toggle('open'));

$(function () {
    $('.btn-open').click(function() {
        $('body').toggleClass('open');
    });
});



// Topへ戻る

$(function() {
    
    const pagetop = $('#page-top');
    pagetop.hide();
    $(window).scroll(function() {
        if($(this).scrollTop() > 70) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    
    pagetop.click(function() {
        $('body, html').animate({scrollTop: 0}, 500);
        return false;
    });
});

// モーダルウィンドウ

$('.js-list, .js-item > img').click(function() {
    var srcA = $(this).attr('src');

    $('.modal-overlay').fadeIn();
    $('.modal-overlay').css('display', 'flex');
    
    $('#popup').attr('src', srcA);
});
$('.modal-img-box > span, .modal-overlay').click(function() {
    $('.modal-overlay').css('display','none');
});