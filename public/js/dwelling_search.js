function quickSearch(){

    console.log("realizando quick search");

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    // Ajax POST request


    $('#country_pn').children('option:selected').val();.

    // $.each($("input[name='found_us']:checked"), function(){
    //     found_us = $(this).val();
    // });

    var data = {};
    data["arreloco"] = 2;

    $.ajax({
        url: quickSearch_post_url,
        method: 'post',
        data: data,
        success: function(data){

            console.log(data);
        }
    });    
}