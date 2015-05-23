$(document).ready(function(){
    $("#del-dialog").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            "OK": function(){
                var id=$('.onClick').attr("id");
                window.location.href="delete_user/"+id;
                $(this).dialog('close');
            },
            "Cancel": function(){
                $(this).dialog('close');
            }
        }
    });

    $(".option").click(function(){
        $(this).addClass('onClick');
        $("#del-dialog").dialog('open');
    });
});