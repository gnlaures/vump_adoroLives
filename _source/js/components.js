// formsorm
if ($('.liSelect').length) {
    $('.liSelect select').on('focusin', function () {
        $(this).closest('.liSelect').addClass('is-active');
    });
    $('.liSelect select').on('focusout', function () {
        $(this).closest('.liSelect').removeClass('is-active');
    });
}
if ($('.liFile').length) {
    $('.inputAttach').on('change', function() {
        var t = $(this).val().split('fakepath');
        console.log(t);
        $(this).closest('.liFile').find('.inputText').val(t[1]);
    });
}
if ($('.c-search').length) {
    $('.c-search__select').select2({
        minimumInputLength: 3,
        dropdownCssClass: 'c-search__dropdownSearch',
        placeholder: "",
        language: {
            inputTooShort: function () {
                return "Digite pelo menos 3 caracteres";
            },
            inputTooLong: function () {
                return "Limite de caracteres máximo atingido";
            },
            errorLoading: function () {
                return "Erro ao carregar resultados";
            },
            loadingMore: function () {
                return "Carrengando mais resultados";
            },
            maximumSelected: function () {
                return "Número máximo de selecionados atingido";
            },
            noResults: function () {
                return "Sem resultados";
            },
            removeAllItems: function () {
                return "Desmarcar itens";
            }
        },
    });
    $(window).on('load', function() {
        $('.select2-selection__placeholder').html('<strong class="u-color--primary">encontre</strong> <span class="u-color--textDefault">um show, um evento ou o que vc quiser</span>');
    });
    $('.c-search__select .select2-search__field').on('focusout', function() {
        $('.c-search__select').select2('close');
    })
}
if ($('.c-copyLinkLive').length) {
    $('.c-copyLinkLive span').on('click', function (e) {
        e.preventDefault();
        var input = $(this).closest('.c-copyLinkLive').children('input');
        input.focus().select();
        $('.c-copyLinkLive__feedback').addClass('u-dnone');
        try {
            var successful = document.execCommand('copy');
            $('.c-copyLinkLive__feedback.--success').removeClass('u-dnone');
        } catch (err) {
            $('.c-copyLinkLive__feedback.--fail').removeClass('u-dnone');
        }
        setTimeout(function(){
            $('.c-copyLinkLive__feedback').addClass('u-dnone');
        }, 5000);
    });

}

// grids / tabs
if ($('.c-responsiveGrid').length) {

    function removeGridClass(el) {
        for (var i = 1; i <= 12; i++) {
            el.removeClass('--col' + i);
        }
        el.removeClass('--colNaN');
    }

    $(window).on('load resize', function() {
        $('.c-responsiveGrid').each(function( index ) {
            var propsGrid = {
                maxwBreaks: $(this).attr('data-maxw-breaks').split(', ').map(Number),
                maxwCols: $(this).attr('data-maxw-cols').split(', ').map(Number),
                initCols: parseInt($(this).attr('data-cols-init')),
                windowW: $(window).width(),
            };
            var qtfBreaks = propsGrid.maxwBreaks.length;
            if (propsGrid.maxwBreaks.length === propsGrid.maxwCols.length) {
                for (var i = 0; i <= qtfBreaks; i++) {
                    if (propsGrid.maxwBreaks[i] >= propsGrid.windowW) {
                        removeGridClass($(this));
                        $(this).addClass('--col' + propsGrid.maxwCols[i]);
                    }
                    if (propsGrid.windowW > propsGrid.maxwBreaks[0]) {
                        removeGridClass($(this));
                        $(this).addClass('--col' + propsGrid.initCols);
                    }
                }
            } else {
                console.log('Ta faltando media querie ou colunas, verifique seu componente');
            }
        });
    });
}
if ($('.c-tabHorizontal').length) {
    var propsTabH = {
        el: $('.c-tabHorizontal'),
        item: $('.c-tabHorizontal a'),
        header: $('.c-tabHorizontal__header'),
        content: $('.c-tabHorizontal__content'),
    };

    propsTabH.item.on('click', function(e) {
        e.preventDefault();
        // toggle active header
        $(this).closest('.c-tabHorizontal__header').find('a').removeClass('is-active');
        $(this).addClass('is-active');

        // scroll to active
        //console.log($(this).closest('.c-tabHorizontal__header ul').scrollLeft());

        // toggle active content
        var contentDestiny = $(this).attr('href');
        var thisElement = $(this);
        thisElement.closest(propsTabH.el).find(propsTabH.content).removeClass('is-active');
        setTimeout(function(){
            thisElement.closest(propsTabH.el).find(propsTabH.content).addClass('u-dnone');
            $(contentDestiny).removeClass('u-dnone');
            $(contentDestiny).addClass('is-active');
        }, 350);
    });
}
if ($('.c-toggleList').length) {
    $('.c-toggleList__header').on('click', function() {
        $(this).parent().toggleClass('is-active');
    });
}
if ($('.c-toggle').length) {
    $('.c-toggle a').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.c-toggle').find('a').removeClass('is-active');
        $(this).addClass('is-active');
    })
}

// links
if ($('.c-subMenu').length) {
    var propsSubMenu = {
        toggle: $('.c-subMenu__call'),
        content: $('.c-subMenu__content'),
        el: $('.c-subMenu'),
        primary: $('.js-subMenuPrimary'),
        mask: $('.c-subMenu__mask')
    };

    function removeMask() {
        propsSubMenu.mask.removeClass('is-active');
    }

    // close
    propsSubMenu.mask.on('click', function() {
        propsSubMenu.el.removeClass('is-active');
        removeMask();
    });
    propsSubMenu.primary.parent().children('.c-subMenu__content').on('mouseleave', function() {
        propsSubMenu.el.removeClass('is-active');
        removeMask();
    });

    // open
    propsSubMenu.primary.on('click', function(e) {
        e.preventDefault();
        if ($(this).parent('.c-subMenu').hasClass('is-active')) {
            $(this).parent('.c-subMenu').removeClass('is-active');
        } else {
            // $('.c-subMenu').removeClass('is-active');
            // $(this).parent('.c-subMenu').addClass('is-active');
            if (($(this).parents('.l-nav').length) && ($('.l-nav').hasClass('is-responsive'))) {
                console.log('l-nav')
                $(this).parent('.c-subMenu').toggleClass('is-active');
            } else {
                console.log('not nav')
                $('.c-subMenu').removeClass('is-active');
                $(this).parent('.c-subMenu').addClass('is-active');
            }
        }
    });
    propsSubMenu.toggle.on('click', function(e) {
        e.preventDefault();
        if (!$(this).hasClass('js-subMenuPrimary')) {
            $(this).parent('.c-subMenu').toggleClass('is-active');
        }
    });
}
if ($('.c-subMenuHover').length) {
    function mobileAdjusts() {
        if (is.mobile()) {
            $('.c-subMenuHover').children('a').addClass('is-blocked-mobile');
            $('.c-subMenuHover').addClass('is-mobile');
        } else {
            $('.c-subMenuHover').children('a').removeClass('is-blocked-mobile');
            $('.c-subMenuHover').removeClass('is-mobile');
        }
    }
    $(window).on('load', function(){mobileAdjusts()});
    $(window).on('resize', function(){mobileAdjusts()});
}

// cards
if ($('.c-cardLive').length) {
    $('.c-cardLive__favorite').on('click', function(e) {
        e.preventDefault();
       $(this).closest('.c-cardLive').toggleClass('--favorited');
    });
}

// multiSelect
// pegar categoria clicada e mover para dentro da lista de selecteds
// ao clicar no input dentro de do "selected" mover de volta para dentro do componente
// validar quantidade de categorias (máx de 3)
if ($('.c-multiSelect').length) {

    // create selected list
    $(document).on('click', '.c-multiSelect__options .liCheckbox div > *', function(e) {
        //e.stopPropagation();
        e.preventDefault();

        // get number of selected categories
        var qtdSelectedElements = $(this).closest('.c-multiSelect').find('.c-multiSelect__selecteds').children('li').length;
        console.log(qtdSelectedElements);

        // move selected to list
        if (qtdSelectedElements < 3) {
            // get element
            var thisOption = $(this).parent().prop('outerHTML');

            // move to list
            $(this).closest('.c-multiSelect').find('.c-multiSelect__selecteds').append('<li class="liCheckbox">' + thisOption + '</li>')

            // delete option in submenu
            $(this).parent().remove();

            // remove ID all labels
            $('.c-multiSelect__selecteds label').each(function() {
                $(this).removeAttr('for');
            });
        } else {
            swal("Você pode selecionar apenas 3 categorias");
        }

        // close submenu
        $('.c-subMenu').removeClass('is-active');
    });

    // remove selecteds
    $(document).on('click', '.c-multiSelect__selecteds input', function() {
        // set attr 'for' in label before hide option
        var thisID = $(this).attr('id');
        $(this).parent().children('label').attr('for', thisID);

        // append this option in list
        var thisSelected = $(this).parent().prop('outerHTML');
        $(this).closest('.c-multiSelect').find('.c-subMenu__content').children('.liCheckbox').append(thisSelected);

        // remove option
        $(this).closest('.liCheckbox').remove();
    });
}