function buscar(cate=""){
    $.post("models/db.php", {s: $("input#s").val(),ct: cate}, function(msg){$("#list").html(msg);});
}