class guardar{
    constructor (objData){
        this._objGuardar = objData;

    }

    save(){
        let objData = new FormData();
        objData.append("nombres",this._objGuardar.nombres);
        objData.append("apellidos",this._objGuardar.apellidos);
        objData.append("email",this._objGuardar.email);
        objData.append("telefono",this._objGuardar.telefono);
        objData.append("password",this._objGuardar.password);
        objData.append("Guardar",this._objGuardar.guardar);
       
        fetch("Control/usuarioGuardar.php",{
            method: 'POST',
            body: objData
        })
        .then(response => response.json()).catch(error =>{
            console.log(error);
           
        })
        .then(response => {
            if (response ["codigo"] == "200") {

                window.location = "usuarios";

            } else {
                Toastify({
                    text: response["mensaje"],
                    gravity: "bottom", // top or bottom
                    position: "right",
                    duration: 3000,
                    style: { background: "linear-gradient(to right, #ff5f6d, #ffc371)" }
                }).showToast(); 
            }
        });
    }
}