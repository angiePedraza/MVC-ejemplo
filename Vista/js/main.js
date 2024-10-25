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
        let  email = document.getElementById('txt-usuario').value;
        let  password = document.getElementById('txt-password').value;
        let objData = {"iniciarSesion: ": "ok", "email": email, "password": password};
        objUsuario =  new usuario(objData)
        objUsuario.iniciarSesion();
      }


    }, false)
  });






})()