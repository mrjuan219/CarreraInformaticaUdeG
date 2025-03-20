
var usuarios = ["ruben", "juan", "pedro", "luis"];
var passwords = ['123', 'admin','abcd', 'password'];

function validateForm(){

    var user = document.getElementById("user").value;
    var password = document.getElementById("pass").value;
    var email = document.getElementById("correo").value;
    var rol = document.getElementById("rol").value;



    if(user != "" && password != "" && email != "" && rol != ""){

        var indexArrayUsers  = usuarios.indexOf(user);
        var indexArrayPasswords = passwords.indexOf(password);
        if(validateUser(user) && validatePass(password)){
            if(indexArrayUsers == indexArrayPasswords){
                var answer = confirm("Información completa");
                if(answer)
                    document.forma01.submit();
            }else{
                alert("datos incorrectos");
            }
        }else{
            alert(" datos incorrectos");
        }

    }else{
        if(user == "")
            alert("Llene el campo usuario");
        else if(password == "")
            alert("Llene la contraseña");
        else if(email == "")
            alert("correo es necesario");
        else if(rol == 0)
            alert(" rol es necesario");
    }
}

function validateUser(user){
    for(var i = 0; i < usuarios.length; i++){
        if(usuarios[i] == user)
            return true;
    }
    return false;
}

function validatePass(password){
    for(var i = 0; i < passwords.length; i++){
        if(passwords[i] == password)
            return true;
    }
    return false;
}
