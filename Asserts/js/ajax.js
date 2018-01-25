$(document).ready(function() {
    $('#Getdetails').click(function() {
        var trackingno = $("#txtTrackingno").val();
        var manuscriptno = $("#txtManuscriptNo").val();
        if(trackingno == "" && manuscriptno == ""){
            alert("Please enter trackingno/manuscriptno")
        }else{
            $('.progressbar').show();
            $.ajax({
                url: "getArticleInfo",
                type: "POST",
                dataType: "html",
                data: {
                    "trackingno": trackingno,
                    "manuscriptno": manuscriptno
                },
                success: function(data) {
                    $("#result").html(data);
                    $('.progressbar').hide();
               },
                error: function(xhr, ajaxOptions, thrownError) {
                    $.alertOnError(thrownError);
                    $('.progressbar').hide();
                }
            });

        }
        
    });

    $('#frmReset').click(function() {
        $('#frmRes')[0].reset();
    });
});