
$(document).ready(function () {
    $("#reset").on("click", function () {
        $('label').removeClass('active');
    });

    $('.maskmoney').maskMoney();
})
$(document).ready(function(){
    var url = window.location.href;
    var parts = url.split("/relatorio/");
    var last_part = parts[parts.length-1];

    if(last_part === 'http://127.0.0.1:8000/relatorio')
    {
        $('#oldvalue').html('Selecione a semana')
        $('#semana_mes_ext').val(last_part)
    }
    else
    {
        $('#oldvalue').val(last_part)
        $('#oldvalue').html(last_part)
        $('#semana_mes_ext').val(last_part)

    }


})
$(document).ready(function(){
    var url = window.location.href;
    var parts = url.split("checkout/");
    var last_part = parts[parts.length-1];
    var str = last_part;


    if(last_part === 'http://127.0.0.1:8000/checkout')
    {
        $('#nome_ext_p').html('Selecione um funcionário')
        $('#nome_ext_p').text('Selecione um funcionário');

    }
    else
    {
        $('#nome_ext_p').html(unescape('Nome: &nbsp'+str))
        $('#nome_ext_p').text( function(i,txt) {return txt.replace(/\d+/,''); });
        $('#nome_ext_p').text( function(i,txt) {return txt.replace(/\/+/,''); });
         var y = unescape(str);
        $('#nome_ext_1').val(y)


    }


})

$(document).ready(function () {

    var zero = $('#valor_total_aerea_brasil').val();
    var um = $('#valor_total_aerea_brasil1').val();
    var dois = $('#valor_total_aerea_brasil2').val();
    var tres = $('#valor_total_aerea_brasil3').val();
    var quatro = $('#valor_total_aerea_brasil4').val();
    var cinco = $('#valor_total_aerea_brasil5').val();
    var seis = $('#valor_total_aerea_brasil6').val();
    var sete = $('#valor_total_aerea_brasil7').val();
    var oito = $('#valor_total_aerea_brasil8').val();
    var nove = $('#valor_total_aerea_brasil9').val();
    var dez = $('#valor_total_aerea_brasil10').val();
    var onze = $('#valor_total_aerea_brasil11').val();
    var doze = $('#valor_total_aerea_brasil12').val();
    var treze = $('#valor_total_aerea_brasil13').val();
    var quatorze = $('#valor_total_aerea_brasil14').val();
    var quinze = $('#valor_total_aerea_brasil15').val();
    var dezeseis = $('#valor_total_km').val();

    if(zero !== 'R$')
    {
        $('#showconfirm').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm').remove();
    }
    if(um !== 'R$')
    {
        $('#showconfirm1').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm1').remove();
    }
    if(dois !== 'R$')
    {
        $('#showconfirm2').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm2').remove();
    }
    if(tres !== 'R$')
    {
        $('#showconfirm3').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm3').remove();
    }
    if(quatro !== 'R$')
    {
        $('#showconfirm4').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm4').remove();
    }
    if(cinco !== 'R$')
    {
        $('#showconfirm5').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm5').remove();
    }
    if(seis !== 'R$')
    {
        $('#showconfirm6').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm6').remove();
    }
    if(sete !== 'R$')
    {
        $('#showconfirm7').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm7').remove();
    }
    if(oito !== 'R$')
    {
        $('#showconfirm8').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm8').remove();
    }
    if(nove !== 'R$')
    {
        $('#showconfirm9').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm9').remove();
    }
    if(dez !== 'R$')
    {
        $('#showconfirm10').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm10').remove();
    }

    if(onze !== 'R$')
    {
        $('#showconfirm11').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm11').remove();
    }
    if(doze !== 'R$')
    {
        $('#showconfirm12').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm12').remove();
    }
    if(treze !== 'R$')
    {
        $('#showconfirm13').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm13').remove();
    }
    if(quatorze !== 'R$')
    {
        $('#showconfirm14').addClass('medium material-icons right green-text darken-2');
    }
    else
    {
        $('#showconfirm14').remove();
    }
    if(quinze !== 'R$')
    {
        $('#showconfirm15').addClass('medium material-icons right green-text darken-2');
    }
    else
    {

        $('#showconfirm15').remove();
    }
    if(dezeseis !== 'R$')
    {
        $('#showconfirm16').addClass('medium material-icons right green-text darken-2');
    }
    else
    {

        $('#showconfirm16').remove();
    }


})


document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelector('.sidenav');
    var instances = M.Sidenav.init(elems)
})
document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems);
});

document.addEventListener('DOMContentLoaded', function () {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems)
})

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems)

})

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('.character-counter')
    var instances = M.CharacterCounter.init(elems)
})

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems);
});

document.addEventListener('DOMContentLoaded',function () {
    var elems = document.querySelectorAll('tabs');
    var instances = M.Tabs.init(elems);
})



// Or with jQuery

$(document).ready(function () {
    $('#menu').hover(
        function (){ $(this).addClass('pulse') },
        function(){ $(this).removeClass('pulse') }
    )

})

$('.dropdown-trigger').dropdown();

$("body").delegate(".add_field_button", "click", function(){
    $('.maskmoney').maskMoney();

});


var $form = $('#whereEntry'),
    $sumDisplay = $('#valor_km_proprio');

$form.delegate('.classekm', 'change', function ()
{
    var $summands = $form.find('.classekm');
    var sum = 0;
    $summands.each(function ()
    {
        var value = Number($(this).val());
        if (!isNaN(value)) sum += value;
    });

    $sumDisplay.val((parseFloat(sum) * parseFloat(0.80)))
});

//add dynamic field script
$(document).ready(function() {


    var MaxInputs       = 30; //maximum input boxes allowed
    var InputsWrapper   = $("#km_proprio_wrapper"); //Input boxes wrapper ID
    var AddButton       = $("#AddMoreIncomeBox"); //Add button ID
    var x = InputsWrapper.length; //initlal text box count
    var FieldCount=1; //to keep track of text box added

    $(AddButton).click(function (e)  //on add input button click
    {
        if(x <= MaxInputs) //max input box allowed
        {
            FieldCount++; //text box added increment
            //add input box
            $(InputsWrapper).append(
                '<div class="row">\n' +
                '                                                            <p class="fd-panel__description">\n' +
                '                                                                Carro proprio x km-Satz R$ 0,75\n' +
                '                                                            </p>\n' +
                '                                                            <br>\n' +
                '                                                            <div class="hide">\n' +
                '                                                                <input name="nome_funcionario" id="nome_funcionario"\n' +
                '                                                                       value="{{ Auth::user()->name }}">\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <label class="fd-form__label" for="Data">\n' +
                '                                                                    Data\n' +
                '                                                                </label>\n' +
                '                                                                <input type="date" class="" id="data_km_proprio'+FieldCount+'"\n' +
                '                                                                       name="data_km_proprio'+FieldCount+'">\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Quilometragem</label>\n' +
                '                                                                    <input type="text" class="fd-form__control classekm"\n' +
                '                                                                           id="quilometragem_km_proprio'+FieldCount+'"\n' +
                '                                                                           name="quilometragem_km_proprio'+FieldCount+'"\n' +
                '                                                                           placeholder="KM">\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '                                                            <div class="col s6 m4">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Descrição</label>\n' +
                '                                                                    <input type="text" class="fd-form__control"\n' +
                '                                                                           id="descricao_km_proprio'+FieldCount+'"\n' +
                '                                                                           name="descricao_cupom'+FieldCount+'"\n' +
                '                                                                           placeholder="Descrição">\n' +
                '                                                                </div>\n' +
                '                                                            </div>\n' +
                '<div class="col s6 m2">\n' +
                '                                                                <div class="fd-form__item">\n' +
                '                                                                    <label class="fd-form__label" for="OatmD552">Valor\n' +
                '                                                                        R$</label>\n' +
                '                                                                    <input type="text" class="fd-form__control maskmoney"\n' +
                '                                                                           id="valor_cupom'+FieldCount+'" name="valor_cupom[]"\n' +
                '                                                                           placeholder="R$" required>\n' +
                '                                                                </div>\n' +
                '                                                            </div>'+
                '                                                            <div class="col s4 m2">\n' +
                '                                                                    <br>\n' +
                '                                                                    <button\n' +
                '                                                                        class="btn btn-floating add_field_button blue darken-2 removeclass"\n' +
                '                                                                        id=""><i class="material-icons">remove</i>\n' +
                '                                                                        OK\n' +
                '                                                                    </button>\n' +
                '</div>'+
                '                                                            </div>\n' +
                '                                                            <br>\n' +
                '                                                        </div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click",".removeclass", function(e){ //user click on remove text
        if( x > 1 ) {
            $(this).parent('div').remove(); //remove text box
            x--; //decrement textbox
        }
        return false;
    })

});

//deixar pra baixo

var toastElement = document.querySelector('.toast');
var toastInstance = M.Toast.getInstance(toastElement);
toastInstance.dismiss();


function warndesphospbrasil()

{
                    M.toast({html: 'Lembre-se o valor máximo para capital é de R$230,00 e para não capital é de R$ 170,00!', classes: 'black-text rounded yellow darken-2'});
}
function warndesprefeicoes()

{
                    M.toast({html: 'Lembre-se o valor máximo para refeições é de R$80,00!', classes: 'black-text rounded yellow darken-2'});
}
// alerts on report
function qrcodescan()
{
    let scanner = new Instascan.Scanner(
        {
            video: document.getElementById('preview')
        }
    );

        scanner.addListener('scan', function (content) {
            $('#qrcodeval').val(content);
            console.log($('#qrcodeval').val())
        });

    Instascan.Camera.getCameras().then(cameras =>
    {
        if(cameras.length > 0){
            scanner.start(cameras[0]);
        } else {
            console.error("Não existe câmera no dispositivo!");
        }
    });
}


    $(document).ready(function () {
        $('.byeweek').focus(function () {
            $('.byeweek').val('');
        })
    })
    var doc = new jsPDF('landscape', 'pt', 'a4');
    doc.addHTML($('#content'), function() {

    });
    doc.addHTML($('#content2'), function() {
      doc.save("teste.pdf");
    });
