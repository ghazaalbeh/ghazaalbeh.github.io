// JavaScript Document
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#what-we-do').fadeIn();
            } else {
                $('#what-we-do').fadeOut();
            }
        });
        // scroll body to what-we-do on click
        $('#what-we-do').click(function () {
            $('#what-we-do').tooltip('hide');
            $('body,html').animate({
                scrollTop:640
            }, 800);
            return false;
        });
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#modern-design').fadeIn();
            } else {
                $('#modern-design').fadeOut();
            }
        });
        // scroll body to modern-design on click
        $('#modern-design').click(function () {
            $('#modern-design').tooltip('hide');
            $('body,html').animate({
                scrollTop: 1306
            }, 800);
            return false;
        });
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#payment').fadeIn();
            } else {
                $('#payment').fadeOut();
            }
        });
        // scroll body to payment on click
        $('#payment').click(function () {
            $('#payment').tooltip('hide');
            $('body,html').animate({
                scrollTop: 1904
            }, 800);
            return false;
        });
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#android').fadeIn();
            } else {
                $('#android').fadeOut();
            }
        });
        // scroll body to android on click
        $('#android').click(function () {
            $('#android').tooltip('hide');
            $('body,html').animate({
                scrollTop: 2366
            }, 800);
            return false;
        });
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#training').fadeIn();
            } else {
                $('#training').fadeOut();
            }
        });
        // scroll body to training on click
        $('#training').click(function () {
            $('#training').tooltip('hide');
            $('body,html').animate({
                scrollTop: 2831
            }, 800);
            return false;
        });
		$(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#shipping').fadeIn();
            } else {
                $('#shipping').fadeOut();
            }
        });
        // scroll body to shipping on click
        $('#shipping').click(function () {
            $('#shipping').tooltip('hide');
            $('body,html').animate({
                scrollTop: 3278
            }, 800);
            return false;
        });
        
        $('#what-we-do').tooltip('show');
		$('#modern-design').tooltip('show');
		$('#payment').tooltip('show');
		$('#android').tooltip('show');
		$('#training').tooltip('show');
		$('#shipping').tooltip('show');

});

$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-check')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-check');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});

