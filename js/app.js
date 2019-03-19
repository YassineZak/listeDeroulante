$(document).ready(function(){
ajaxList();
})

function ajaxList(){
    $(".ajaxList").change(function(e){
        var select = $(this);
        var idSelect = "#"+select.data("target");
        $.get(select.data("url"), {id:select.val()}, function(data){
            if(data.error){
                alert(data.error);
            }else{
                    for (var i = 0; i < idSelect.length; i++){
                        var target = $(idSelect).get(i);
                        target.options.length = 0
                        for(var j in data.results){
                            var result = data.results[j];
                            target.options[j] = new Option(result[Object.keys(result)[i]], result[Object.keys(result)[i]], false, false)
                        }
                    }
                }
        }, 'json');
    })
}