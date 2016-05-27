 //      SAVE AJAX   

        $('body').on('click', '#btn_enviar_form', function(event) {
            event.preventDefault();
            console.log("entra");
                $.ajaxSetup({
                    headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
                })
                
                var formId = '#form_enviar';
                $.ajax({
                    url: $(formId).attr('action'),
                    type: $(formId).attr('method'),
                    data: $(formId).serialize(),
                    dataType: 'html',
                    success: function(result){
                        if ($(formId).find("input:first-child").attr('value') == 'PUT') {
                            var $jsonObject = jQuery.parseJSON(result);
                            $(location).attr('href',$jsonObject.url);
                        }
                        else{
                            $(formId)[0].reset();
                            console.log(result); 
                            //swal("Tú Mensaje se ha enviado con éxito");
                            swal("Éxito", "Tu mensaje fue enviado", "success")
                            
                        }
                    },
                    error: function(){
                        console.log('Error');
                    }
                });                    
        });
//      END SAVE AJAX    <---