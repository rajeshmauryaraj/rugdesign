
(function ($) {
    $.fn.menumaker = function (options) {
        var cssmenu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);
        return this.each(function () {
            $(this).find(".button").on('click', function () {
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                }
                else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function () {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function () {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function () {
                var mediasize = 1000;
                if ($(window).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };
})(jQuery);

(function ($) {
    $(document).ready(function () {
        $("#cssmenu").menumaker({
            format: "multitoggle"
        });
    });
})(jQuery);

//Main Slider Carousel
if ($('.owl-banner').length) {
    $('.owl-banner').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay:false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        active: true,
        smartSpeed: 1000,
        //autoplay: 6000,
        navText: ['<span class="fa fa-arrow-left"></span>', '<span class="fa fa-arrow-right"></span>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
}

//Current Year

document.getElementById("year").innerHTML = new Date().getFullYear();

//SCROLL TOP BAR
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn();
        } else {
            $('#scroll').fadeOut();
        }
    });
    $('#scroll').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 100);
        return false;
    });
});


//EMAIL ID VALIDATION
const validateEmail = (email) => {
  return email.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
};

const validate = () => {
  const result = document.getElementById("result");
  const email = document.getElementById("email").value;
  result.innerText = "";

  if (validateEmail(email)) {
    document.getElementById("result").innerText = email + " valid ";
    document.getElementById("result").style.color = "green";
    document.getElementById("button").disabled = false;
    document.getElementById("button").innerText="Order a Call";
 
  } else {
    document.getElementById("result").innerText = email + " invalid ";
    document.getElementById("result").style.color = "red";
    document.getElementById("button").disabled = true;
    document.getElementById("button").innerText="Please Check Your Email ID..";
    
  }
  return false;
};

document.getElementById("email").addEventListener("input", validate);

//MOBILE NO. VALIDATION

function check() {
  var mobile = document.getElementById("phone");
  var message = document.getElementById("message");

  var goodColor = "green";
  var badColor = "red";

  if (mobile.value.length != 10) {
    // mobile.style.backgroundColor = badColor;
    message.style.color = badColor;
    message.innerHTML = "Mob. No. is invalid.Enter only 10 digits..";
    document.getElementById("button").disabled = true;
    document.getElementById("button").innerText="Please Check Your Mobile No..";
  } else {
    // mobile.style.backgroundColor = goodColor;
    message.style.color = goodColor;
    message.innerHTML = "Mobile No. is valid";
    document.getElementById("button").disabled = false;
    document.getElementById("button").innerText="Order a Call";

  }
}
// ONLY NUMBER ALLOW

function isNumberKey(evt) {
  var charCode = evt.which ? evt.which : evt.keyCode;
  return !(charCode > 31 && (charCode < 48 || charCode > 57));
  alert("Enter letters only.");
}


