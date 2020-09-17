@extends('layouts.app')

@section('content')
    <?php $i=1;?>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" ></script>
    <video id="preview" style="width: 70px"></video>
    <input id="qrcode" name="qrcode[]" class="class" value="">
    <button id="add_field_butto" class="add_field_butto">APP</button>

    <button id="qrcodescan" onclick="qrcodescan()">QRCODE</button>

    <div class="i_wrappe"></div>
    <script>
        function qrcodescan{{$i}}()
        {
            let scanner = new Instascan.Scanner(
                {
                    video: document.getElementById('preview')
                }
            );

                scanner.addListener('scan', function (content) {
                    $('#qrcodeval').val(content);
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


        $(document).ready(function() {
            var max_fields = 25; //maximum input boxes allowed
            var wrapper = $(".i_wrappe"); //Fields wrapper
            var add_button = $(".add_field_butto"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e) { //on add input button click
                e.preventDefault();

                var length = wrapper.find("input:text").length;

                if (x < max_fields) { //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('' +
                        '    <video id="preview" style="width: 70px"></video>\n'+
                        ' <input id="qrcode'+length+'" name="qrcode[]" class="class" value="">\n' +
                        '    <button id="add_field_button1" class="add_field_button1">APP</button>\n' +
                        '\n' +
                        '    <button id="qrcodescan'+length+'" onclick="qrcodescan'+length+'()">QRCODE</button>'
                    );
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
</script>
    <?php $i++?>
@endsection
