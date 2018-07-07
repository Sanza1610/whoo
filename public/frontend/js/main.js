var hash = location.hash;

function Page() {
    var self = this;
    this.init = function () {
        self.animatePage();
        return self;
    };
    this.main = function () {
        $(document).on('click', '.hamburger', function () {
            if (!$(this).hasClass('open')) {
                $('.bot-header').stop().slideDown();
                $(this).addClass('open');
            } else {
                $('.bot-header').stop().slideUp();
                $(this).removeClass('open');
            }
        });
        $(document).on('click', 'html, body', function (e) {
            if ($('.hamburger').hasClass('open')) {
                if ($(e.target).is('.hamburger, .hamburger *, .bot-header, .bot-header *')) {
                    return;
                } else {
                    $('.bot-header').stop().slideUp();
                    $('.hamburger').removeClass('open');
                }
            }
        });
    }
    this.animatePage = function () {
        var w_win = $(window).width();
        var h_win = $(window).height();
        if ($('.datepicker').length > 0) {
            $('.datepicker').datepicker({
                format: 'dd-mm-yyyy'
            });
        }
    }
    $(window).resize(function () {
        self.animatePage();
    });
}

Page = new Page();
Page.init();
$(document).ready(function () {
    Page.main();
});