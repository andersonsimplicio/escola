
 document.addEventListener('DOMContentLoaded', function () {
    var Modalelem = document.querySelector('.modal');
    var instance = M.Modal.init(Modalelem);
    instance.open();
});


function GetNome(){
    let nome = document.getElementById('nome').value;
       
    if(nome!==""){
        M.toast({html: 'Seja muito Bem Vindo! '+nome});
    }else{
        window.location.reload();
    }
}





