function Passwd(){
    
    let email = document.getElementById('cmpEmail').value;
    let passwd = document.getElementById('cmpPasswd').value;
    console.log(email,passwd);

    if(email==='anderson@email.com'&&passwd=='123456'){
        window.location.replace("principal.php");
    }else{
        document.getElementById('cmpEmail').value="";
        document.getElementById('cmpPasswd').value="";
        M.toast({html: 'Login ou senha inválidos '});
    }

}