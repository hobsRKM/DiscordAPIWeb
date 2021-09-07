const form = document.getElementById('apiParams');
$(".loader").hide();
function api(type) {
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return false;
    }

    switch (type) {
        case 'postChannelDetails':
            request('postChannelDetails');
            break;
        case 'postChannelMessages':
            request('postChannelMessages');
            break;
        case 'postUpdateChannelDetails':
            request('postUpdateChannelDetails');
            break;
        case 'postUpdateChannelPermissions':
            request('postUpdateChannelPermissions');
            break;
    }
}

function request(url) {
    $(".loader").show();
    $(".loader").parent().attr("disabled",true);
    if(!$("#botToken").val()){
        $("#botToken").removeAttr("name")
    }
    $.post(
        url,
        $("#apiParams").serialize(),
        function (result) {
            $("#Canvas").empty();
            $("#RawJson").empty();
            $("#RawJson").append(result.toString());
            Process();
            CollapseLevel(4);
            $(".loader").hide();
            $(".loader").parent().attr("disabled",false);
        }
    ).fail(function(response) {
        alert("Error occurred!! Check your paramters and API Docs for correct Usage");
        $(".loader").hide();
        $(".loader").parent().attr("disabled",false);
    });;
}
