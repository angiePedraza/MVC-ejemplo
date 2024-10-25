(function (){

    var forms = document.querySelectorAll('#formLogin')
    
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault()
          if (!form.checkValidity()) {
            event.stopPropagation()
            form.classList.add('was-validated')
          }else{
            let nombres = document.getElementById('txt-nombre').value;
            let apellidos = document.getElementById('txt-apellido').value;
            let  email = document.getElementById('txt-usuario').value;
            let telefono =document.getElementById('txt-celular').value;
            let  password = document.getElementById('txt-password').value;
            let objData = {"Guardar: ": "ok", "nombres": nombres, "apellidos":apellidos, "email": email, "telefono": telefono, "password": password,};
            objUsuario =  new guardar(objData);
            objUsuario.save();
          }
    
    
        }, false)
      });
    
    
    
    
    
    
    })()