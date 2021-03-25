$(document).ready(function(){
    $(document).on('click', '#btn_add_banque', function(){
        $('#chgt_ico_mdc').removeClass('hide');
        $('#sd_ico_mdc').addClass('hide');

        var banque = $('#nom').val(),
            RIB = $('#RIB').val(),
            numero = $('#compte').val(),
            url = $('#url_banque').val();

        $.post(
            url,
            {
                RIB : RIB,
                nom : banque,
                compte : numero
            },
            function(){
                $('#sd_ico_mdc').removeClass('hide');
                $('#chgt_ico_mdc').addClass('hide');
            }
        )
    })

    $(document).on('click', '#btn_add_mobile', function(){
        $('#chgt_ico_mdc').removeClass('hide');
        $('#sd_ico_mdc').addClass('hide');

        var operateur = $('#operateur').val(),
            numero = $('#numero').val(),
            reference = $('#reference').val(),
            url = $('#url_mobile').val();
            

        $.post(
            url,
            {
                operateur : operateur,
                numero : numero,
                reference : reference
            },
            function(){
                $('#sd_ico_mdc').removeClass('hide');
                $('#chgt_ico_mdc').addClass('hide');
            }
        )
    })

})