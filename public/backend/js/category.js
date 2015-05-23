$(document).ready(function(){
    $("#btn-add").click(function(){
        $("#manager").css({'opacity': '0.3'});
        $("#form-add").show();
    });

    $("#btn-add-cancel").click(function(){
        $("#manager").css({'opacity':'1'});
        $("#form-add").hide();
    });

//Xóa danh mục

    $("#del-dialog").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            "OK": function(){
                var id=$('.onClick').attr("id");
                //window.location.href="delete_category"+id;
                $(location).attr('href', '/sharebook/category/delete_category/'+id);
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



    $("#edit-dialog").dialog({
        autoOpen: false,
        resizable: false,
        modal: true,
        buttons: {
            "OK": function(){
                var id=$('.onClick2').attr("id");
                var name = $('#edit_category').val();
                //window.location.href="delete_category"+id;
                $(location).attr('href', '/sharebook/category/edit_category/'+name+'/'+id);
                //alert(name);
                $(this).dialog('close');
            },
            "Cancel": function(){
                $(this).dialog('close');
            }
        }

    });


    $(".option-edit").click(function(){
        $(this).addClass('onClick2');
        $("#edit-dialog").dialog('open');
    });

    $("#btn-edit-ok").click(function(){

    });
    $("#btn-edit-cancel").click(function(){

    });
});