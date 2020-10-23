// init base functions
$(window).on('load', function () {
    classOnBody($('main').attr('id'));
    scrollDirection();
    initGettersAndSetters();
    changeTouchClickText();
});
$(window).on('hashchange', function () {
    initGettersAndSetters();
});

// init AOS
if (is.not.ie()) {
    AOS.init();
} else {
    $('*').removeAttr("data-aos");
}

// l
if ($('.l-nav').length) {
    var propsNav = {
        active: 'is-active',
        scrollInit: 0,
        scrollClassScrolled: 99,
        scrollClassMiddle: 600,
        body: $('body'),
        nav: $('.l-nav'),
        hamburguer: $('.l-nav .c-hamburguer'),
        contentHero: $('.l-nav__contentHero'),
        mask: $('.l-nav__maskMenu'),
        maskAll: $('.l-nav__maskMenu.maskAll'),
    };

    function checkResponsiveMode() {
        var resultCheck;
        var displayCheck = propsNav.hamburguer.css('display');
        if (displayCheck !== 'none') {
            resultCheck = 'is-responsive';
            propsNav.nav.removeClass('is-desktop');
            propsNav.nav.addClass('is-responsive');
        } else {
            resultCheck = 'is-desktop';
            propsNav.nav.removeClass('is-responsive');
            propsNav.nav.addClass('is-desktop');
        }
        return resultCheck;
    }
    function closeAllSubMenus() {
        $('.c-subMenu').removeClass('is-active');
    }
    function closeResponsiveMenu() {
        propsNav.hamburguer.removeClass(propsNav.active);
        propsNav.contentHero.removeClass(propsNav.active);
    }
    function hideMaskMenu() {
        propsNav.mask.removeClass(propsNav.active);
    }
    function disableOverflow() {
        propsNav.body.addClass('u-overflowBlocked');
    }
    function enableOverflow() {
        propsNav.body.removeClass('u-overflowBlocked');
    }


    // RESPONSIVE MENU
    // - open / close
    propsNav.hamburguer.on('click', function() {
        if ($(this).hasClass(propsNav.active)) {
            // close menu
            enableOverflow();
            $(this).removeClass(propsNav.active);
            propsNav.maskAll.removeClass(propsNav.active);
            propsNav.contentHero.removeClass(propsNav.active);
        } else {
            // open menu
            disableOverflow();
            $(this).addClass(propsNav.active);
            propsNav.maskAll.addClass(propsNav.active);
            propsNav.contentHero.addClass(propsNav.active);
        }
    });
    // - close
    propsNav.maskAll.on('click', function(){
        closeResponsiveMenu();
        hideMaskMenu();
        closeAllSubMenus();
        enableOverflow();
    });


    // RESPONSIVE MODE
    $(window).on('resize', function() {
        if (checkResponsiveMode() === "is-desktop") {
            if (propsNav.contentHero.hasClass(propsNav.active)) {
                closeAllSubMenus();
                closeResponsiveMenu();
                hideMaskMenu();
            }
        }
    });


    // SCROLL CHANGES
    $(window).on('load', function(event) {
        checkResponsiveMode();
        var scrollBody = $(this).scrollTop();
        if (scrollBody > 1) {
            propsNav.nav.addClass('scrolled');
        } else {
            propsNav.nav.removeClass('scrolled');
        }
    });
    $(window).on('scroll', function() {
        var scrollBody = $(this).scrollTop();
        // scroll up to 99
        if (scrollBody > propsNav.scrollClassScrolled) {
            propsNav.nav.addClass('scrolled');
        } else {
            propsNav.nav.removeClass('scrolled');
        }
        // middle class
        if (scrollBody > propsNav.scrollClassMiddle) {
            propsNav.nav.addClass('hidden');
            propsNav.nav.addClass('scrolledMiddle');
        } else {
            propsNav.nav.removeClass('hidden');
            propsNav.nav.removeClass('scrolledMiddle');
        }
        // scroll up or down
        if (scrollBody < propsNav.scrollInit) {
            propsNav.nav.removeClass('hidden');
            propsNav.nav.addClass('scrolledUp');
            propsNav.nav.removeClass('scrolledDown');
        } else {
            propsNav.nav.removeClass('scrolledUp');
            propsNav.nav.addClass('scrolledDown');
        }
        // close menus on hidden nav
        if(propsNav.nav.hasClass('hidden')) {
            closeAllSubMenus();
            hideMaskMenu();
        }
        // reference var
        propsNav.scrollInit = scrollBody;
    });

}

// s
if ($('.s-galleryLives').length) {
    // toggle menu
    $('.header__select .c-subMenuHover > a').on('click', function (e) {
        e.preventDefault();
    });
    $('.header__select .c-subMenuHover__sub a').on('click', function (e) {
        e.preventDefault();
        var thisCategory = $(this).text();
        $('.header__select .c-subMenuHover > a').html(thisCategory);
    });

    // swiper
    var returnTouchMove
    if (is.desktop()) {
        returnTouchMove = false;
    } else {
        returnTouchMove = true;
    }
    var swiper__galleryLives = new Swiper('.swiper__galleryLives', {
        speed: 400,
        slidesPerView: 5,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        allowTouchMove: returnTouchMove,
    });
}

// m
if ($('.m-defaultModal').length) {
    // close modal
    $('.m-defaultModal__close, .m-defaultModal__maskClose').on('click', function() {
        $('.m-defaultModal').removeClass('is-active');
        $('.m-defaultModal__maskClose').removeClass('is-active');
        window.location.hash = '#_';
    });

    // open modal on click
    $('.js-openModal').on('click', function(e) {
        e.preventDefault();
        // show mask
        $('.m-defaultModal__maskClose').addClass('is-active');

        // get content
        var thisHref = $(this).attr('href');
        $(thisHref).addClass('is-active');

        // set hash
        window.location.hash = thisHref;
    });

    // open modal on hash
    $(window).on('load hashchange', function() {
       var hash = get__hash();
       console.log(hash);

       if ($(hash).hasClass('m-defaultModal')) {
           $('.m-defaultModal__maskClose').addClass('is-active');
           $(hash).addClass('is-active');
       } else {
           $('.m-defaultModal__maskClose').removeClass('is-active');
           $('.m-defaultModal').removeClass('is-active');
       }
    });

    // remove u-dnone on load
    $(window).on('load', function() {
        $('.m-defaultModal').removeClass('u-dnone');
    });
}
if ($('.m-userRegister').length) {
    $(document).on('click', '.js-menuCategories .c-subMenu__content .liCheckbox > div', function() {
        var thisAttr = $(this).attr('data-id-category');
        $(".js-menuSubCategories .c-subMenu__content .liCheckbox > div[data-id-category="+thisAttr+"]").removeClass('u-dnone');
    });
    $(document).on('click', '.js-menuCategories .c-multiSelect__selecteds .liCheckbox input', function() {
        var thisAttr = $(this).parent().attr('data-id-category');
        $(".js-menuSubCategories .c-subMenu__content .liCheckbox > div[data-id-category="+thisAttr+"]").addClass('u-dnone');
        $(".js-menuSubCategories .c-multiSelect__selecteds .liCheckbox > div[data-id-category="+thisAttr+"]").closest('li').remove();
    });
}

