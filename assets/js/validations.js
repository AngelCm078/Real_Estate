function init() {

    let errorDataName = document.getElementById("errorDataName");
    errorDataName.style.display = "none";
    document.getElementById("name").style.borderColor = "inherit";

    let errorDataLastName = document.getElementById("errorDataLastName");
    errorDataLastName.style.display = "none";
    document.getElementById("lastname").style.borderColor = "inherit";

    let errorDataemail = document.getElementById("errorDataEmail");
    errorDataemail.style.display = "none";
    document.getElementById("email").style.borderColor = "inherit";

    let errorDataTypeId = document.getElementById("errorDataTypeId");
    errorDataTypeId.style.display = "none";
    document.getElementById("type_id").style.borderColor = "inherit";

    let errorDataIdentification = document.getElementById("errorDataIdentification");
    errorDataIdentification.style.display = "none";
    document.getElementById("identification").style.borderColor = "inherit";

    let errorDataPassword = document.getElementById("errorDataPassword");
    errorDataPassword.style.display = "none";
    document.getElementById("password_user").style.borderColor = "inherit";
}


function validate() {

    init();

    function sonLetrasSolamente(texto) {
        var regex = /^[a-zA-Z ]+$/;
        return regex.test(texto);
    }

    function correo(texto) {
        var regex = /\w+@+\w+\.+[a-z]/;
        return regex.test(texto);
    }

    function number(texto) {
        var regex = /^[0-9]$/;
        return regex.test(texto);
    }

    function password(texto) {
        var regex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{7,15}$/
        return regex.test(texto);
    }

    let name = document.getElementById("name").value;
    let lastname = document.getElementById("lastname").value;
    let email = document.getElementById("email").value;
    let type_id = document.getElementById("type_id").selectedIndex;
    let identification = document.getElementById("identification").value;
    let password_user = document.getElementById("password_user").value;

    let expName, expEmail;

    expName = /^([0-9])*$/; //Expresion que define caracteres especiales

    expEmail = /\w+@+\w+\.+[a-z]/;

    /*
    valida nombre obligatorio
    */

    if (name == "") {
        let errorDataName = document.getElementById("errorDataName");
        errorDataName.style.display = "block";
        document.getElementById("errorDataName").innerHTML = "Please enter your name";
        //$("#name").html("Please enter your name");
        document.getElementById("name").focus();
        document.getElementById("name").style.borderColor = "red";

        return false;
    }

    //valida nombre solo letras
    if (!sonLetrasSolamente(name)) {
        let errorDataName = document.getElementById("errorDataName");
        errorDataName.style.display = "block";
        document.getElementById("errorDataName").innerHTML = "Only letters are allowed in the name";
        document.getElementById("name").focus();
        document.getElementById("name").style.borderColor = "red";

        return false;
    }

    if (name.length > 40) {
        /*
        let errorDataName = document.getElementById("errorDataName");
        errorDataName.style.display="block";
        */

        let errorDataName = document.getElementById("errorDataName");
        errorDataName.style.display = "block";
        document.getElementById("errorDataName").innerHTML = "The name contains more than 40 characters";
        document.getElementById("name").focus();
        document.getElementById("name").style.borderColor = "red";

        /*alert("El nombre contiene mas de 40 caracteres")
        document.getElementById("name").focus();
        document.getElementById("name").style.borderColor="red";
        errorDataName.style.display="none";*/

        return false;
    }

    /*
    la validacion solo letras solo deja letras
    */

    if (lastname == "") {

        /*let errorDataLastName = document.getElementById("errorDataLastName");
        errorDataLastName.style.display="block";*/
        let errorDataLastName = document.getElementById("errorDataLastName");
        errorDataLastName.style.display = "block";
        document.getElementById("errorDataLastName").innerHTML = "The Surname is required";
        document.getElementById("lastname").focus();
        document.getElementById("lastname").style.borderColor = "red";

        return false;
    }


    //valida nombre solo letras
    if (!sonLetrasSolamente(lastname)) {
        let errorDataLastName = document.getElementById("errorDataLastName");
        errorDataLastName.style.display = "block";
        document.getElementById("errorDataLastName").innerHTML = "Middle name only letters allowed";
        document.getElementById("lastname").focus();
        document.getElementById("lastname").style.borderColor = "red";

        return false;
    }

    /*
    valida email obligatorio
    */

    if (email == "") {
        let errorDataemail = document.getElementById("errorDataEmail");
        errorDataemail.style.display = "block";
        document.getElementById("errorDataEmail").innerHTML = "Email is required";
        //$("#name").html("Please enter your name");
        document.getElementById("email").focus();
        document.getElementById("email").style.borderColor = "red";

        return false;
    }

    //valida Formato de email
    if (!correo(email)) {
        let errorDataemail = document.getElementById("errorDataEmail");
        errorDataemail.style.display = "block";
        document.getElementById("errorDataEmail").innerHTML = "The email is not in the proper format";
        document.getElementById("email").focus();
        document.getElementById("email").style.borderColor = "red";

        return false;
    }


    if (type_id == null || type_id == 0) {
        let errorDataTypeId = document.getElementById("errorDataTypeId");
        errorDataTypeId.style.display = "block";
        document.getElementById("errorDataTypeId").innerHTML = "Select the type of document";
        document.getElementById("type_id").focus();
        document.getElementById("type_id").style.borderColor = "red";

        return false;
    }

    if (identification == "") {
        let errorDataIdentification = document.getElementById("errorDataIdentification");
        errorDataIdentification.style.display = "block";
        document.getElementById("errorDataIdentification").innerHTML = "Identification is required";
        document.getElementById("identification").focus();
        document.getElementById("identification").style.borderColor = "red";

        return false;
    }

    //Valida que solo sea númerica

    if (number(identification)) {
        let errorDataIdentification = document.getElementById("errorDataIdentification");
        errorDataIdentification.style.display = "block";
        document.getElementById("errorDataIdentification").innerHTML = "Identification should only be numeric";
        document.getElementById("identification").focus();
        document.getElementById("identification").style.borderColor = "red";

        return false;
    }

    if (password_user == "") {
        let errorDataIdentification = document.getElementById("errorDataPassword");
        errorDataIdentification.style.display = "block";
        document.getElementById("errorDataPassword").innerHTML = "password required";
        document.getElementById("password_user").focus();
        document.getElementById("password_user").style.borderColor = "red";

        return false;
    }

    if (!password(password_user)) {
        let errorDataIdentification = document.getElementById("errorDataPassword");
        errorDataIdentification.style.display = "block";
        document.getElementById("errorDataPassword").innerHTML = "the password must have between 8 and 16 digits and at least 1 uppercase 1 lowercase 1 number 1 special character";
        document.getElementById("password_user").focus();
        document.getElementById("password_user").style.borderColor = "red";

        return false;
    }
}

function clean() {

    let errorDatatitle = document.getElementById("errorDatatitle");
    errorDatatitle.style.display = "none";
    document.getElementById("title").style.borderColor = "inherit";

    let errorDataType = document.getElementById("errorDataType");
    errorDataType.style.display = "none";
    document.getElementById("Type").style.borderColor = "inherit";

    let errorDataaddress = document.getElementById("errorDataaddress");
    errorDataaddress.style.display = "none";
    document.getElementById("address").style.borderColor = "inherit";

    let errorDatarooms = document.getElementById("errorDatarooms");
    errorDatarooms.style.display = "none";
    document.getElementById("rooms").style.borderColor = "inherit";

    let errorDataprice = document.getElementById("errorDataprice");
    errorDataprice.style.display = "none";
    document.getElementById("price").style.borderColor = "inherit";

    let errorDataarea = document.getElementById("errorDataarea");
    errorDataarea.style.display = "none";
    document.getElementById("area").style.borderColor = "inherit";
}

function validate_propertie() {

    clean();

    let title = document.getElementById("title").value;
    let type = document.getElementById("type").value;
    let address = document.getElementById("address").value;
    let rooms = document.getElementById("rooms").selectedIndex;
    let price = document.getElementById("price").value;
    let area = document.getElementById("area").value;




    if (title == "") {
        let errorDatatitle = document.getElementById("errorDatatitle");
        errorDatatitle.style.display = "block";
        document.getElementById("errorDatatitle").innerHTML = "EL TITULO ES OBLIGATORIO";
        //$("#name").html("Please enter your name");
        document.getElementById("title").focus();
        document.getElementById("title").style.borderColor = "red";

        return false;
    }


    if (type == "") {
        let errorDatatype = document.getElementById("errorDatatype");
        errorDatatype.style.display = "block";
        document.getElementById("errorDatatype").innerHTML = "Seleccione el tipo ";
        //$("#name").html("Please enter your name");
        document.getElementById("type").focus();
        document.getElementById("type").style.borderColor = "red";

        return false;
    }

    if (address == "") {
        let errorDataaddress = document.getElementById("errorDataaddress");
        errorDataaddress.style.display = "block";
        document.getElementById("errorDataaddress").innerHTML = "INGRESE LA DIRECCIÓN ";
        //$("#name").html("Please enter your name");
        document.getElementById("address").focus();
        document.getElementById("address").style.borderColor = "red";

        return false;
    }

    if (rooms == "") {
        let errorDatarooms = document.getElementById("errorDatarooms");
        errorDatarooms.style.display = "block";
        document.getElementById("errorDatarooms").innerHTML = "Ingrese la cantidad de habitaciones ";
        //$("#name").html("Please enter your name");
        document.getElementById("rooms").focus();
        document.getElementById("rooms").style.borderColor = "red";

        return false;
    }

    if (price == "") {
        let errorDataprice = document.getElementById("errorDataprice");
        errorDataprice.style.display = "block";
        document.getElementById("errorDataprice").innerHTML = "Ingrese el precio ";
        //$("#name").html("Please enter your name");
        document.getElementById("price").focus();
        document.getElementById("price").style.borderColor = "red";

        return false;
    }


    if (area == "") {
        let errorDataarea = document.getElementById("errorDataarea");
        errorDataarea.style.display = "block";
        document.getElementById("errorDataarea").innerHTML = "Ingrese el área ";
        //$("#name").html("Please enter your name");
        document.getElementById("area").focus();
        document.getElementById("area").style.borderColor = "red";

        return false;
    }


}






