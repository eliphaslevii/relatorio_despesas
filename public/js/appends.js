// ready to mask
$(document).ready(function () {
    $("#reset").on("click", function () {
        $('label').removeClass('active');
    });
//aereas br
$("body").delegate(".add_field_button_mobile1", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_ext_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_tax_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_est_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});

$("body").delegate(".add_field_button_com_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});

$("body").delegate(".add_field_button_cor_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_tel_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_hosb_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_hose_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_con_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});

$("body").delegate(".add_field_button_ref_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_pre_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_desv_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});
$("body").delegate(".add_field_button_odes_mobile", "click", function(){
    $('.maskmoney').maskMoney();

});

    $("body").delegate(".add_field_button1", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_ext", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_tax", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_est", "click", function(){
        $('.maskmoney').maskMoney();

    });

    $("body").delegate(".add_field_button_com", "click", function(){
        $('.maskmoney').maskMoney();

    });

    $("body").delegate(".add_field_button_cor", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_tel", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_hosb", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_hose", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_con", "click", function(){
        $('.maskmoney').maskMoney();

    });

    $("body").delegate(".add_field_button_ref", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_pre", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_desv", "click", function(){
        $('.maskmoney').maskMoney();

    });
    $("body").delegate(".add_field_button_odes", "click", function(){
        $('.maskmoney').maskMoney();

    });



})

//aereas brasil

$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper1"); //Fields wrapper
    var add_button = $(".add_field_button1"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();

        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow">\n' +

                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper1" class="i_wrapper1">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr">\n' +
                '<div class="divider" id="removedivider">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider').remove();
        $('#removebr').remove();
        $('#removebr1').remove();


        x--;
    })

});
//aereas brasil Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_mobile1"); //Fields wrapper
    var add_button = $(".add_field_button_mobile1"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();

        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow">\n' +
            '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+

                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper1" class="i_wrapper1">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr">\n' +
                '<div class="divider" id="removedivider">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider').remove();
        $('#removebr').remove();
        $('#removebr1').remove();


        x--;
    })

});

//aereas ext
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_ext"); //Fields wrapper
    var add_button = $(".add_field_button_ext"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_ext">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_ext" class="i_wrapper_ext">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_ext">\n' +
                '<div class="divider" id="removedivider_ext">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_ext">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_ext').remove();
        $('#removebr_ext').remove();
        $('#removebr1_ext').remove();


        x--;
    })

});

//aereas ext Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_ext_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_ext_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_ext_mobile2">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_ext_mobile2" class="i_wrapper_ext_mobile2">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_ext_mobile2">\n' +
                '<div class="divider" id="removedivider_ext_mobile2">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_ext_mobile2">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_ext_mobile2').remove();
        $('#removebr_ext_mobile2').remove();
        $('#removebr1_ext_mobile2').remove();


        x--;
    })

});

//Taxi
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_tax"); //Fields wrapper
    var add_button = $(".add_field_button_tax"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_tax">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tax" class="i_wrapper_tax">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_tax">\n' +
                '<div class="divider" id="removedivider_tax">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_tax">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_tax').remove();
        $('#removebr_tax').remove();
        $('#removebr1_tax').remove();


        x--;
    })

});

//Taxi Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_tax_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_tax_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_tax">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="fd-form__control" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tax" class="i_wrapper_tax">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_tax">\n' +
                '<div class="divider" id="removedivider_tax">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_tax">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_tax').remove();
        $('#removebr_tax').remove();
        $('#removebr1_tax').remove();


        x--;
    })

});

//Estacionamento
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_est"); //Fields wrapper
    var add_button = $(".add_field_button_est"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_est">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tax" class="i_wrapper_tax">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_est">\n' +
                '<div class="divider" id="removedivider_est">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_est">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_est').remove();
        $('#removebr_est').remove();
        $('#removebr1_est').remove();


        x--;
    })

});

//Estacionamento Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_est_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_est_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_est">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '</div>'+
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tax_mobile" class="i_wrapper_tax_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_est">\n' +
                '<div class="divider" id="removedivider_est">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_est">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_est').remove();
        $('#removebr_est').remove();
        $('#removebr1_est').remove();


        x--;
    })

});

//Combustivel
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_com"); //Fields wrapper
    var add_button = $(".add_field_button_com"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_comb">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_comb" class="i_wrapper_comb">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_comb">\n' +
                '<div class="divider" id="removedivider_comb">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_comb">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_comb').remove();
        $('#removebr_comb').remove();
        $('#removebr1_comb').remove();


        x--;
    })

});

//Combustivel Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_com_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_com_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_comb">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_comb_mobile" class="i_wrapper_comb_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_comb">\n' +
                '<div class="divider" id="removedivider_comb">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_comb">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_comb').remove();
        $('#removebr_comb').remove();
        $('#removebr1_comb').remove();


        x--;
    })

});

//Correio
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_cor"); //Fields wrapper
    var add_button = $(".add_field_button_cor"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_cor">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_cor" class="i_wrapper_cor">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_cor">\n' +
                '<div class="divider" id="removedivider_cor">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_cor">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_cor').remove();
        $('#removebr_cor').remove();
        $('#removebr1_cor').remove();


        x--;
    })

});

//Correio Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_cor_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_cor_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_cor">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+

                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_cor_mobile" class="i_wrapper_cor_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_cor">\n' +
                '<div class="divider" id="removedivider_cor">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_cor">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_cor').remove();
        $('#removebr_cor').remove();
        $('#removebr1_cor').remove();


        x--;
    })

});

//Telefone
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_tel"); //Fields wrapper
    var add_button = $(".add_field_button_tel"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_tel">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tel" class="i_wrapper_tel">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_tel">\n' +
                '<div class="divider" id="removedivider_tel">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_tel">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_tel').remove();
        $('#removebr_tel').remove();
        $('#removebr1_tel').remove();


        x--;
    })

});

//Telefone Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_tel_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_tel_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_tel">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_tel_mobile" class="i_wrapper_tel_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_tel">\n' +
                '<div class="divider" id="removedivider_tel">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_tel">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_tel').remove();
        $('#removebr_tel').remove();
        $('#removebr1_tel').remove();


        x--;
    })

});

//hospedagem brasil
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_hosb"); //Fields wrapper
    var add_button = $(".add_field_button_hosb"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_hosb">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '<div class="col s6 m2">'+
                '<label class="fd-form__label" for="Data">'+
                 '   Capital ?'+
                 '</label>'+
                '<select id="capital'+length+'" name="capital[]">'+
                    '<option value="Capital">Capital</option>'+
                    '<option value="Não capital">Não capital</option>'+
                '</select>'+
            '</div>'+
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_hosb" class="i_wrapper_hosb">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_hosb">\n' +
                '<div class="divider" id="removedivider_hosb">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_hosb">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_hosb').remove();
        $('#removebr_hosb').remove();
        $('#removebr1_hosb').remove();
        x--;
    })

});

//hospedagem brasil mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_hosb_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_hosb_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_hosb">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '<div class="col s12 m2">'+
                '<label class="fd-form__label" for="Data">'+
                '   Capital ?'+
                '</label>'+
                '<select id="capital'+length+'" name="capital[]">'+
                '<option value="Capital">Capital</option>'+
                '<option value="Não capital">Não capital</option>'+
                '</select>'+
                '</div>'+
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_hosb_mobile" class="i_wrapper_hosb_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_hosb">\n' +
                '<div class="divider" id="removedivider_hosb">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_hosb">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_hosb').remove();
        $('#removebr_hosb').remove();
        $('#removebr1_hosb').remove();
        x--;
    })

});

//hospedagem ext
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_hose"); //Fields wrapper
    var add_button = $(".add_field_button_hose"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_hose">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_hose" class="i_wrapper_hose">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_hose">\n' +
                '<div class="divider" id="removedivider_hose">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_hose">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_hose').remove();
        $('#removebr_hose').remove();
        $('#removebr1_hose').remove();
        x--;
    })

});

//hospedagem ext Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_hose_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_hose_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_hose">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_hose_mobile" class="i_wrapper_hose_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_hose">\n' +
                '<div class="divider" id="removedivider_hose">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_hose">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_hose').remove();
        $('#removebr_hose').remove();
        $('#removebr1_hose').remove();
        x--;
    })

});

//Convite
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_con"); //Fields wrapper
    var add_button = $(".add_field_button_con"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div class="row" id="removerowall">\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <label class="fd-form__label" for="Data">\n' +
                '                                                                    Data\n' +
                '                                                                </label>\n' +
                '                                                                <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                       name="data_cupom[]" required>\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Número de convidados\n' +
                '                                                                    </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <select name="convidados[]" id="convidados'+length+'">\n' +
                '                                                                        <option value="1">1</option>\n' +
                '                                                                        <option value="2">2</option>\n' +
                '                                                                        <option value="3">3</option>\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Cidade\n' +
                '                                                                    </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <select name="capital[]" id="capital'+length+'">\n' +
                '                                                                        <option value="Capital">Capital</option>\n' +
                '                                                                        <option value="Não capital">Não capital</option>\n' +
                '\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Refeição\n' +

                '                                                                    </label>\n' +
                '                                                                <select id="refeicao{{$i}}" name="refeicao[]">\n' +
                '                                                                        <option value="Almoço">Almoço</option>\n' +
                '                                                                        <option value="Jantar">Jantar</option>\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m4">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Descrição\n' +

                '                                                                    </label>\n' +
                '                                                                    <input type="text" class="fd-form__control"\n' +
                '                                                                           id="descricao_cupom{{$i}}"\n' +
                '                                                                           name="descricao_cupom[]"\n' +
                '                                                                           placeholder="Descrição" required>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                        </div>\n' +
                '                                                        <div class="row">\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                        R$\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="text"\n' +
                '                                                                           class="fd-form__control maskmoney"\n' +
                '                                                                           id="valor_cupom{{$i}}"\n' +
                '                                                                           name="valor_cupom[]"\n' +
                '                                                                           placeholder="R$" required\n' +
                '                                                                           data-thousands="" data-decimal=".">\n' +
                '                                                                </div>\n' +
                '                                                            </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br id="removebr3">\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_con" class="i_wrapper_con">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr4">\n' +
                '<div class="divider" id="removedivider_con">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_con">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove();
        $('#removerowall').remove();
        $('#removebr3').remove();
        $('#removebr4').remove();
        $('#removedivider_con').remove();
        $('#removebr_con').remove();
        $('#removebr1_con').remove();
        x--;
    })

});

//Convite mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_con_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_con_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(' <div class="row" id="removerowall">\n' +
                '<div class="row">'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                <label class="fd-form__label" for="Data">\n' +
                '                                                                    Data\n' +
                '                                                                </label>\n' +
                '                                                                <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                       name="data_cupom[]" required>\n' +
                '                                                            </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Número de convidados\n' +
                '                                                                    </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <select name="convidados[]" id="convidados'+length+'">\n' +
                '                                                                        <option value="1">1</option>\n' +
                '                                                                        <option value="2">2</option>\n' +
                '                                                                        <option value="3">3</option>\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Cidade\n' +
                '                                                                    </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <select name="capital[]" id="capital'+length+'">\n' +
                '                                                                        <option value="Capital">Capital</option>\n' +
                '                                                                        <option value="Não capital">Não capital</option>\n' +
                '\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Refeição\n' +

                '                                                                    </label>\n' +
                '                                                                <select id="refeicao{{$i}}" name="refeicao[]">\n' +
                '                                                                        <option value="Almoço">Almoço</option>\n' +
                '                                                                        <option value="Jantar">Jantar</option>\n' +
                '                                                                    </select>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                            <div class="col s12 m4">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Descrição\n' +

                '                                                                    </label>\n' +
                '                                                                    <input type="text" class="fd-form__control"\n' +
                '                                                                           id="descricao_cupom{{$i}}"\n' +
                '                                                                           name="descricao_cupom[]"\n' +
                '                                                                           placeholder="Descrição" required>\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                        </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                        <div class="row">\n' +
                '                                                            <div class="col s12 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                        R$\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="text"\n' +
                '                                                                           class="fd-form__control maskmoney"\n' +
                '                                                                           id="valor_cupom{{$i}}"\n' +
                '                                                                           name="valor_cupom[]"\n' +
                '                                                                           placeholder="R$" required\n' +
                '                                                                           data-thousands="" data-decimal=".">\n' +
                '                                                                </div>\n' +
                '                                                            </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br id="removebr3">\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_con_mobile" class="i_wrapper_con_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr4">\n' +
                '<div class="divider" id="removedivider_con">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_con">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove();
        $('#removerowall').remove();
        $('#removebr3').remove();
        $('#removebr4').remove();
        $('#removedivider_con').remove();
        $('#removebr_con').remove();
        $('#removebr1_con').remove();
        x--;
    })

});

//Refeições
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_ref"); //Fields wrapper
    var add_button = $(".add_field_button_ref"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_ref">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '<div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Localidade\n' +
                '                                                                        </label>\n' +
                '                                                                    <select name="capital[]" id="capital'+length+'">\n' +
                '                                                                           <option value="Refeições">Nacional</option>\n' +
                '                                                                           <option value="Refeições ( Internacional )">Internacional</option>\n' +
                '                                                                       </select>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                                    <input hidden name="refeicoes[]" id="refeicoes'+length+'" value="NULL">'+
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_ref" class="i_wrapper_ref">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_ref">\n' +
                '<div class="divider" id="removedivider_ref">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_ref">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_ref').remove();
        $('#removebr_ref').remove();
        $('#removebr1_ref').remove();


        x--;
    })

});

//Refeições Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_ref_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_ref_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_ref">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '<div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Localidade\n' +
                '                                                                        </label>\n' +
                '                                                                    <select name="refeicoes[]" id="refeicoes'+length+'">\n' +
                '                                                                           <option value="Refeições">Nacional</option>\n' +
                '                                                                           <option value="Refeições ( Internacional )">Internacional</option>\n' +
                '                                                                       </select>\n' +
                '                                                                        <input name="capital[]" id="capital{{$i}}" value="NULL" hidden>'+
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="number"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_ref" class="i_wrapper_ref">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_ref">\n' +
                '<div class="divider" id="removedivider_ref">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_ref">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_ref').remove();
        $('#removebr_ref').remove();
        $('#removebr1_ref').remove();


        x--;
    })

});

//Presentes
 $(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_pre"); //Fields wrapper
    var add_button = $(".add_field_button_pre"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_con">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_pre" class="i_wrapper_pre">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_pre">\n' +
                '<div class="divider" id="removedivider_pre">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_pre">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_pre').remove();
        $('#removebr_pre').remove();
        $('#removebr1_pre').remove();
        x--;
    })

});

//Presentes Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_pre_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_pre_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_con">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_pre" class="i_wrapper_pre">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_pre">\n' +
                '<div class="divider" id="removedivider_pre">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_pre">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_pre').remove();
        $('#removebr_pre').remove();
        $('#removebr1_pre').remove();
        x--;
    })

});

//Despesas com veículos
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_desv"); //Fields wrapper
    var add_button = $(".add_field_button_desv"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_desv">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_desv" class="i_wrapper_desv">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_desv">\n' +
                '<div class="divider" id="removedivider_desv">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_desv">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_desv').remove();
        $('#removebr_desv').remove();
        $('#removebr1_desv').remove();
        x--;
    })

});

//Despesas com veículos Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_desv_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_desv_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_desv">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s12 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_desv" class="i_wrapper_desv">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_desv">\n' +
                '<div class="divider" id="removedivider_desv">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_desv">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_desv').remove();
        $('#removebr_desv').remove();
        $('#removebr1_desv').remove();
        x--;
    })

});

//Despesas de viagens
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_deso"); //Fields wrapper
    var add_button = $(".add_field_button_deso"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_deso">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_deso" class="i_wrapper_deso">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_deso">\n' +
                '<div class="divider" id="removedivider_deso">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_deso">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_deso').remove();
        $('#removebr_deso').remove();
        $('#removebr1_deso').remove();
        x--;
    })

});

//Despesas de viagens Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_deso_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_deso_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_deso">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_deso_mobile" class="i_wrapper_deso_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_deso">\n' +
                '<div class="divider" id="removedivider_deso">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_deso">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_deso').remove();
        $('#removebr_deso').remove();
        $('#removebr1_deso').remove();
        x--;
    })

});

//Outras despesas
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_odes"); //Fields wrapper
    var add_button = $(".add_field_button_odes"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_odes">\n' +

                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_odes" class="i_wrapper_odes">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_odes">\n' +
                '<div class="divider" id="removedivider_odes">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_odes">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_odes').remove();
        $('#removebr_odes').remove();
        $('#removebr1_odes').remove();
        x--;
    })

});

//Outras despesas Mobile
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_odes_mobile"); //Fields wrapper
    var add_button = $(".add_field_button_odes_mobile"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append('' +
                '<div class="row" id="removerow_odes">\n' +
                '<div class="row">'+
                '                                                               <div class="col s12 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '</div>'+
                '<div class="row">'+
                '                                                                <div class="col s12 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control maskmoney"\n' +
                '                                                                               id="valor_cupom'+length+'"\n' +
                '                                                                               name="valor_cupom[]"\n' +
                '                                                                               placeholder="R$" required\n' +
                '                                                                               data-thousands="" data-decimal=".">\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '</div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_odes_mobile" class="i_wrapper_odes_mobile">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_odes">\n' +
                '<div class="divider" id="removedivider_odes">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_odes">'); //add input box
        }
        //Fazendo com que cada uma escreva seu name

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removedivider_odes').remove();
        $('#removebr_odes').remove();
        $('#removebr1_odes').remove();
        x--;
    })

});

//kmprop
$(document).ready(function() {
    var max_fields = 25; //maximum input boxes allowed
    var wrapper = $(".i_wrapper_kmprop"); //Fields wrapper
    var add_button = $(".add_field_button_kmprop"); //Add button ID

    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        var length = wrapper.find("input:text").length;

        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper).append(
                '<div class="row" id="removerow_kmp">\n' +
'<input name="valor_cupom[]" id="valor_cupom'+length+'" hidden value="0">'+
                '                                                               <div class="col s6 m2">\n' +
                '                                                                    <label class="fd-form__label" for="Data">\n' +
                '                                                                        Data\n' +
                '                                                                        </span>\n' +
                '                                                                    </label>\n' +
                '                                                                    <input type="date" class="" id="data_cupom'+length+'"\n' +
                '                                                                           name="data_cupom[]" required>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m4">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Descrição\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text" class="fd-form__control"\n' +
                '                                                                               id="descricao_cupom'+length+'"\n' +
                '                                                                               name="descricao_cupom[]"\n' +
                '                                                                               placeholder="Descrição" required>\n' +
                '                                                                    </div>\n' +
                '                                                                </div>\n' +
                '                                                                <div class="col s6 m2">\n' +
                '                                                                    <div class="fd-form__item">\n' +
                '                                                                        <label class="fd-form__label" for="OatmD552">Quilometragem\n' +
                '                                                                            R$\n' +
                '                                                                        </label>\n' +
                '                                                                        <input type="text"\n' +
                '                                                                               class="fd-form__control"\n' +
                '                                                                               id="quilometragem'+length+'"\n' +
                '                                                                               name="quilometragem[]"\n' +
                '                                                                               required\n' +
                '                                                                              >\n' +
                '                                                                    </div>\n' +
                '                                                                </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating remove blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                        <br>\n' +
                '                                                    </div>\n' +
                '                                                    <div id="i_wrapper_kmp" class="i_wrapper_kmp">\n' +
                '                                                    </div>\n' +
                '                                                    <br id="removebr_kmp">\n' +
                '<div class="divider" id="removedivider_kmp">\n' +
                '</div>\n' +
                '                                                        <br id="removebr1_kmp">'); //add input box
        }

    });

    $(wrapper).on("click", ".remove", function(e) { //user click on remove text
        e.preventDefault();
        $(this).closest('.row').remove()
        $('#removerow').remove();
        $('#removedivider_kmp').remove();
        $('#removebr_kmp').remove();
        $('#removebr1_kmp').remove();
        x--;
    })

});
