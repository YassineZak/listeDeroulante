$(document).ready(function(){
ajaxList();
})

function ajaxList(){
    $(".ajaxList").change(function(e){
        var select = $(this);
        console.log(select);
        var idModele = "#"+select.data("target");
        $.get(select.data("url"), {id:select.val()}, function(data){
            if(data.error){
                alert(data.error);
            }else{
                var target = $(idModele).get(0);
                target.options.length = 0
                for(var i in data.results){
                    var result = data.results[i];
                    if(Object.keys(result).length > 1 ){
                      if(result.MOTORISATION){
                          console.log(result.MOTORISATION);
                          $("#motorisation option") == new Option(result.MOTORISATION, result.MOTORISATION, false, false)
                      }
                    }
                    else{
                        target.options[i] = new Option(result[Object.keys(result)[0]], result[Object.keys(result)[0]], false, false)
                    }

                }
            }
        }, 'json');
    })
}