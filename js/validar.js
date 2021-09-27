function soloLetras(e){
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = "8-37-39-46";

    tecla_especial = false
    for(var i in especiales){
         if(key == especiales[i]){
             tecla_especial = true;
             break;
         }
     }

     if(letras.indexOf(tecla)==-1 && !tecla_especial){
         return false;
     }
 }

 function soloNumeros(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " 0123456789()+-";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
}


function validar(){
    fechaF = new Date(document.getElementById("fecha").value);
    fechaA = new Date();
    pass = document.getElementById("pass").value;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    numero = document.getElementById("numero").value;
    correo = document.getElementById("correo").value;
    usuario = document.getElementById("usuario").value;
    var edad = fechaA.getFullYear() - fechaF.getFullYear();
    m = fechaA.getMonth() - fechaF.getMonth();

    if(m < 0 || (m === 0 && fechaA.getDate() < fechaF.getDate())){
        edad=edad-1;
    }

    if(nombre.length<3){
        alert("Nombres muy cortos: Sus nombres deben tener entre 3 y 15 digitos");
        return false;
    }else if(nombre.length>15){
        alert("Nombres muy extensos: Sus nombres deben tener entre 3 y 15 digitos");
        return false;
    }

    if(apellido.length<3){
        alert("Apellidos muy cortos: Sus apellidos deben tener entre 3 y 15 digitos");
        return false;
    }else if(apellido.length>15){
        alert("Apellidos muy extensos: Sus apellidos deben tener entre 3 y 15 digitos");
        return false;
    }

    if(numero.length<8){
        alert("Número muy corto: Su número debe tener entre 8 y 15 digitos");
        return false;
    }else if(numero.length>15){
        alert("Número muy extenso: Su número debe tener entre 8 y 15 digitos");
        return false;
    }

    if(correo.length>30){
        alert("Correo electrónico muy extenso: Su correo electrónico debe tener menos de 30 digitos");
        return false;
    }

    
    if(edad<16){
        alert("Ingrese una fecha menor: Para registrarse requiere tener una edad mínima de 16 años");
        return false;
    }

    if(usuario.length<4){
        alert("Usuario muy corto: Su nombre de usuario debe tener entre 4 y 15 digitos");
        return false;
    }else if(usuario.length>15){
        alert("Usuario muy extenso: Su nombre de usuario debe tener entre 4 y 15 digitos");
        return false;
    } 

    if(pass.length<8){
        alert("Contraseña muy corta: Su contraseña debe tener entre 8 y 15 digitos");
        return false;
    }else if(pass.length>15){
        alert("Contraseña muy extensa: Su contraseña debe tener entre 8 y 15 digitos");
        return false;
    } 
}
