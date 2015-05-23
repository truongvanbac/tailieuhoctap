$(document).ready(function(){
    $("#del-dialog").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            "OK": function(){
                var id=$('.onClick').attr("id");
                //window.location.href="delete_category"+id;
                $(location).attr('href', '/sharebook/upload/delete_upload/'+id);
                //alert(id);
                $(this).dialog('close');
            },
            "Cancel": function(){
                $(this).dialog('close');
            }
        }
    });

    $(".option-del").click(function(){
        $(this).addClass('onClick');
        $("#del-dialog").dialog('open');
    });

    ////////////////////////////////////////////////////
    $("#btn-cancel").click(function(){
        $(location).attr('href', '/sharebook/upload/get_ebook_up');
    });
});