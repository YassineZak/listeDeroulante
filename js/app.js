$(document).ready(function(){
ajaxList();
})

function ajaxList(){
    var idSelect = $("#"+$('#marque').data("target"));
    $(".ajaxList").change(function(e){
        var select = $(this);
        var idSelect = "#"+select.data("target");
        $.get(select.data("url"), {id:select.val()}, function(data){
            if(data.error){
                alert(data.error);
            }else{
                    for (var i = 0; i < idSelect.length; i++){
                        var target = $(idSelect).get(i);
                        target.options.length = 0;
                        for(var j in data.results){
                            var result = data.results[j];
                            switch (target.id.toUpperCase()){
                                case 'MODELE':
                                $("#modele").get(i).options[j] = new Option(result.MODELE, result.MODELE, false, false);
                                case 'VERSION': 
                                $("#version").get(i).options[j] = new Option(result.VERSION, result.VERSION, false, false);
                                case 'MOTORISATION':
                                console.log(result);
                                if(j == 0){
                                    $("#motorisation").get(i).options[j] = new Option(result.MOTORISATION, result.MOTORISATION, false, true);
                                    $("#co2").get(i).options[j] = new Option(result.CO2, result.CO2, false, true);
                                }
                                
                            }

                        }
                    }
                }
        }, 'json');
    })
}