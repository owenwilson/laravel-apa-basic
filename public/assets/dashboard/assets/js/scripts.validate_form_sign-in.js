function validateform(){
    let email = document.login.email.value;
    let password = document.login.password.value;

    if (/^[a-z0-9][a-z0-9-_\.]+@([a-z]|[a-z0-9]?[a-z0-9-]+[a-z0-9])\.[a-z0-9]{2,10}(?:\.[a-z]{2,10})?$/.test(email) == false && email != null && email != ""){
        document.getElementById("messageEmail").innerHTML = "El correo es invalido, debe contener un @domain.com";
        return false;
    }else if (email == null || email == ""){
        document.getElementById("messageEmail").innerHTML = "El campo correo no puede estar vacio";
        return false;
    }else if (password.length < 8){
        document.getElementById("messagePassword").innerHTML = "Contraseña debe de tener por lo menos 8 caracteres";
        return false;
    }

}
