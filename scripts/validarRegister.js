/* creamos la variables del registro*/
const validarRegister = () => {
    let name, apellidos, mail, nickname, password, confirm_password, expresion, letras, conPass;
    name = $("#name").val();
    apellidos = $("#apellidos").val();
    mail = $("#mail").val();
    nickname = $("#nickname").val();
    password = $("#password").val();
    confirm_password = $("#confirm_password").val();
    expresion = /\w+@\w+\.+[a-z]/;
    letras = /^[A-Z]+$/i;
    conPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&.])[A-Za-z\d$@$!%*?&.]{8, 16}/

    /* Obligatoriedad de los campos de registro*/
    if(name == null || name.length == 0 || 
        apellidos == null || apellidos.length  == 0 || 
        mail == null || mail.length == 0 || 
        nickname == null || nickname.length == 0 || 
        password == null || password.length == 0 || 
        confirm_password == null || confirm_password.length == 0 ){
        alert("todos los campos son obligatorios");
        return false;
    }
    /* condiciones del nombre */
    else if(!letras.test(name)){
        alert("El valor debe ser letras");
        return false;
    }    
    else if(name.length<2 || name.maxLength>50){
        alert("el nombre debe ser entre  2 y 50 carcateres");
        return false;
    }
    /* condiciones del apellido */
    else if(!letras.test(apellidos)){
        alert("El valor debe ser letras");
        return false;
    }
    else if(apellidos.length<2 || apellidos.length>75){
        alert("el apellido debe ser entre  2 y 75 carcateres");
        return false;
    }
    /* condiciones del nickname */
    else if(nickname.length<6 || nickname.length>12){
        alert("el nickname debe ser entre  6 y 12 carcateres");
        return false;
    }
    /* condiciones del correo electronico */
    else if(!expresion.test(mail)){
        alert("El email debe ser una dirección válida");
        return false;
    }
    /* condiciones del password */
    else if(!conPass.test(password)){
        alert("La contraseña debe contener al menos una letra mayúscula, un número y un carácter especial");
        return false;
    }
    if(password != confirm_password){
        alert("Las passwords deben de coincidir");
        return false;
    }
}