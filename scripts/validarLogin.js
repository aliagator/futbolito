/* Se crean las variables del usuario y contraseña*/
const validarLogin = () => {
    let usuario, password, expresion
    let isValid = true

    usuario = $('#usuario').val() 
    password = $('#password').val() 
    expresion = /\w+@\w+\.+[a-z]/

    /* Se validan los requisitos de usuario y contraseña esten ingresados como obligatorios */
    if (usuario == null || usuario.length == 0){
        isValid = false
        alert("El campo usuario está vacío")        
    } 
    else if (password == null || password.length == 0){
        isValid = false
        alert("El campo password está vacío")     
    }
    /* usuario tener una direccion de correo valida */
    else if(!expresion.test(usuario)){
        isValid = false
        alert("el usuario no es un email")       
    }
    /* password caracteres entre 8 y 16 caracteres*/
    else if(password.length < 8){
        isValid = false
        alert("El password es muy corto")        
    }
    else if(password.length > 30){
        alert("El password es muy largo");
        isValid = false
    }
    
    if (isValid) {
        redirectHome()
    }

    return isValid
}

const redirectHome = () => {
    window.location.href = "home.html"
}