const form = document.getElementById('apiParams');
$(".loader").hide();
function api(type) {
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return false;
    }

    switch (type) {
        case 'getChannelDetails':
            request('getChannelDetails');
            break;
    }
}

function request(url) {
    $(".loader").show();
    $(".loader").parent().attr("disabled",true);
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
    );
}
