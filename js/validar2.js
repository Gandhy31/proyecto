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
function valUser(){
    usuario = document.getElementById("usuario").value;
    if(usuario.length<4){
        alert("Usuario muy corto: su nombre de usuario debe tener entre 4 y 15 digitos");
        return false;
    }else if(usuario.length>15){
        alert("Usuario muy extenso: su nombre de usuario debe tener entre 4 y 15 digitos");
        return false;
    } 
}

function valPass(){
    pass = document.getElementById("pass").value;
    if(pass.length<8){
        alert("Contraseña muy corta: su contraseña debe tener entre 8 y 15 digitos");
        return false;
    }else if(pass.length>15){
        alert("Contraseña muy extensa: su contraseña debe tener entre 8 y 15 digitos");
        return false;
    } 
}

function valNombre(){
    nombre = document.getElementById("nombre").value;
    if(nombre.length<3){
        alert("Nombres muy cortos: sus nombres deben tener entre 3 y 15 digitos");
        return false;
    }else if(nombre.length>15){
        alert("Nombres muy extensos: sus nombres deben tener entre 3 y 15 digitos");
        return false;
    }
}

function valApellido(){
    apellido = document.getElementById("apellido").value;
    if(apellido.length<3){
        alert("Apellidos muy cortos: sus apellidos deben tener entre 3 y 15 digitos");
        return false;
    }else if(apellido.length>15){
        alert("Apellidos muy extensos: sus apellidos deben tener entre 3 y 15 digitos");
        return false;
    }
}

function valFec(){
    fechaF = new Date(document.getElementById("fecha").value);
    fechaA = new Date();
    var edad = fechaA.getFullYear() - fechaF.getFullYear();
    m = fechaA.getMonth() - fechaF.getMonth();
    if(m < 0 || (m === 0 && fechaA.getDate() < fechaF.getDate())){
        edad=edad-1;
    }
    if(edad<16){
        alert("Ingrese una fecha menor: la edad mínima es de 16 años");
        return false;
    }
}

function valCorr(){
    correo = document.getElementById("correo").value;
    if(correo.length>30){
        alert("Correo electrónico muy extenso: su correo electrónico debe tener menos de 30 digitos");
        return false;
    }
}