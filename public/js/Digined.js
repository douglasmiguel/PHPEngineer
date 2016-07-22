"use strict";

$(document).ready(function() {
    //  Base URL
    Config.BASE_URL = $('body').attr('data-base-url');
    //  Sidebar
    $('body').on('click', '.sidebar-toggle', function(){
        var active = ( $('body').hasClass('sidebar-collapse') ) ? true : false;
        Config.doRequest(Config.BASE_URL + 'menu', 'POST', { 'menu_collapsed': active }, 'menu');
    });
});

var Config = {
    'BASE_URL': '',
    'ERROR':
    {
        'delete': 'Error deleting record.',
    },
    requestError: function(jqXHR, textStatus, errorThrown)
    {
        console.warn(textStatus);
    },
    doRequest: function(URL, type, params, successType, errorMessage, $line)
    {
        $.ajax({
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            url: URL,
            type: type,
            data: params,
            success: function(data, textStatus, jqXHR)
            {
                switch(successType)
                {
                    case 'image_info':
                    {
                        if(data.image!='') {
                            Image.change(data);
                        } else {
                            Image.notFound(data);
                        }
                    }
                    break;
                    case 'delete':
                    {
                        if(data.deleted_at!='') {
                            if($line!=null) {
                                $line.hide('slow');
                                swal('Sucesso!', 'Registro excluído com sucesso.', 'success');
                            }
                        } else {
                            Config.requestError(jqXHR, errorMessage, errorThrown);
                        }
                    }
                    break;
                    default: {} break;
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {
                Config.requestError(jqXHR, textStatus, errorThrown);
            }
        });
    }
};
