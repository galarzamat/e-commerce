function buscar(cate=""){
    $.post("models/db.php", {s: $("input#s").val(),ct: cate}, function(msg){$("#list").html(msg);});
}
function comprar(){
    alert('compra realizada con exito');
    window.location.replace('index.php');
}