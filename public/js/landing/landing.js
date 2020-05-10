/*!
    
 =========================================================
 * Material Kit - v1.1.1.0
 =========================================================
 
 * Product Page: http://www.creative-tim.com/product/material-kit
 * Copyright 2017 Creative Tim (http://www.creative-tim.com)
 * Licensed under MIT (https://github.com/timcreative/material-kit/blob/master/LICENSE.md)
 
 =========================================================
 
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 
 */

$(document).ready(function(){
    // Custom validator method.
    $.validator.addMethod("uniqueEmail", function() {
        var csrf = document.getElementById('csrf-token').content;
        var email = document.getElementById('email').value;
        var response = false;

        $.ajax({ url: "/checkUniqueEmail", 
        data: {"_token": csrf, "email": email}, 
        method: "POST",
        async: false, 
        success: 
            function(msg) {
                response = msg.data; }
        });

        return response;
    }, "Email already registered.");

    // Init Material scripts for buttons ripples, inputs animations etc, more info on the next link https://github.com/FezVrasta/bootstrap-material-design#materialjs
    $.material.init();

    // Active Carousel
	$('.carousel').carousel({
      interval: 6000
    });


    // Validations
    $.validator.setDefaults({
        errorClass: "help-block",
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('span').remove();
            $(element).closest('.form-group').append('<span class="form-control-feedback"><i class="material-icons">clear</i></span>');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('span').remove();
            $(element).closest('.form-group').append('<span class="form-control-feedback"><i class="material-icons">done</i></span>');
        }
    });

    // Form contacto
    $('form#contacto').validate({
        focusin: false,
        focusout: false,
        rules: {
            nombre: {required: true, minlength: 3, maxlength: 30},
            mail: {required: true, email: true, minlength: 6},
            texto: {required: true, minlength: 6}
        },
        submitHandler: function () {
            saveLandingFeedback();
        }
    });

    // Form registro
    $('form#registro').validate({
        focusin: false,
        focusout: false,
        rules: {
            name: {required: true, minlength: 3, maxlength: 30},
            email: {required: true, email: true, minlength: 6, uniqueEmail: true},
            password: {required: true, minlength: 6},
            password_confirmation: {required: true, equalTo : "#password"},
        },
        submitHandler: function () {
            registerNewUser();
        }
    });

});

function saveLandingFeedback() {
    var csrf = document.getElementById('csrf-token').content;
    var nombre = document.getElementById('nombre').value;
    var mail = document.getElementById('mail').value;
    var texto = document.getElementById('texto').value;

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/saveLandingFeedback");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "nombre": nombre, "mail": mail, "texto": texto}));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            siguientePasoMensaje();
        }
    };
}

function registerNewUser() {
    var csrf = document.getElementById('csrf-token').content;
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password_confirmation = document.getElementById('password_confirmation').value;

    // Make AJAX request
    var http = new XMLHttpRequest();
    http.open("POST", "/register");
    http.setRequestHeader("Content-type", "application/json");
    http.send(JSON.stringify({ "_token": csrf, "name": name, "email": email, "password": password, "password_confirmation": password_confirmation }));

    http.onreadystatechange = function () {
        if (http.readyState === 4 && http.status === 200) {
            siguientePasoMensaje();
        }
    };
}

function siguientePasoMensaje() {
    window.location.replace("/registered");
    // $('#formulario').slideUp('fast', function () {
    //     $('#formulario-registrar').removeClass('hidden').css({opacity: 0, display: 'block'}).animate({opacity: 1}, 'fast');
    //     $('#cont_formulario').addClass('bg_green').find('.text-center').css('color', '#fff');
    // });
}

function showText(element) {
    if (element.id === 'icon-left-1') {
        document.getElementById('text-left-1').style.visibility = 'visible';
    }

    if (element.id === 'icon-left-2') {
        document.getElementById('text-left-2').style.visibility = 'visible';
    }

    if (element.id === 'icon-left-3') {
        document.getElementById('text-left-3').style.visibility = 'visible';
    }

    if (element.id === 'icon-left-4') {
        document.getElementById('text-left-4').style.visibility = 'visible';
    }

    if (element.id === 'icon-left-5') {
        document.getElementById('text-left-5').style.visibility = 'visible';
    }

    if (element.id === 'icon-left-6') {
        document.getElementById('text-left-6').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-1') {
        document.getElementById('text-right-1').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-2') {
        document.getElementById('text-right-2').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-3') {
        document.getElementById('text-right-3').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-4') {
        document.getElementById('text-right-4').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-5') {
        document.getElementById('text-right-5').style.visibility = 'visible';
    }

    if (element.id === 'icon-right-6') {
        document.getElementById('text-right-6').style.visibility = 'visible';
    }
}

function hideText(element) {
    if (element.id === 'icon-left-1') {
        document.getElementById('text-left-1').style.visibility = 'hidden';
    }

    if (element.id === 'icon-left-2') {
        document.getElementById('text-left-2').style.visibility = 'hidden';
    }

    if (element.id === 'icon-left-3') {
        document.getElementById('text-left-3').style.visibility = 'hidden';
    }

    if (element.id === 'icon-left-4') {
        document.getElementById('text-left-4').style.visibility = 'hidden';
    }

    if (element.id === 'icon-left-5') {
        document.getElementById('text-left-5').style.visibility = 'hidden';
    }

    if (element.id === 'icon-left-6') {
        document.getElementById('text-left-6').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-1') {
        document.getElementById('text-right-1').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-2') {
        document.getElementById('text-right-2').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-3') {
        document.getElementById('text-right-3').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-4') {
        document.getElementById('text-right-4').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-5') {
        document.getElementById('text-right-5').style.visibility = 'hidden';
    }

    if (element.id === 'icon-right-6') {
        document.getElementById('text-right-6').style.visibility = 'hidden';
    }
}
