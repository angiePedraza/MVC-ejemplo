<div class="container">
        <div class="row">
            
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form id="formLogin" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <h5>Iniciar Sesión</h5>
                      <label for="txt-usuario" class="form-label">Usuario</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><mask id="lineMdPersonSearchTwotone0"><g fill-opacity="0" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><g fill="#fff" stroke="#fff"><path stroke-dasharray="20" stroke-dashoffset="20" d="M10 5C11.66 5 13 6.34 13 8C13 9.65685 11.6569 11 10 11C8.3431 11 7 9.65685 7 8C7 6.34315 8.3431 5 10 5z"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.4s" values="20;0"/></path><path stroke-dasharray="36" stroke-dashoffset="36" d="M10 15C14 15 17 17 17 18V19H3V18C3 17 6 15 10 15z" opacity="0"><set attributeName="opacity" begin="0.5s" to="1"/><animate fill="freeze" attributeName="stroke-dashoffset" begin="0.5s" dur="0.4s" values="36;0"/></path><animate fill="freeze" attributeName="fill-opacity" begin="0.9s" dur="0.15s" values="0;0.3"/></g><circle cx="16" cy="16" r="6"><animate fill="freeze" attributeName="fill-opacity" begin="1.2s" dur="0.15s" values="0;1"/></circle><path fill="#fff" stroke="#fff" stroke-dasharray="30" stroke-dashoffset="30" d="M16 19C14.34 19 13 17.66 13 16C13 14.34 14.34 13 16 13C 17.66 13 19 14.34 19 16C19 17.66 17.66 19 16 19v4z" transform="rotate(-45 16 16)"><animate fill="freeze" attributeName="stroke-dashoffset" begin="1.2s" dur="0.4s" values="30;0"/><animate fill="freeze" attributeName="fill-opacity" begin="1.6s" dur="0.15s" values="0;0.3"/></path></g></mask><rect width="24" height="24" fill="currentColor" mask="url(#lineMdPersonSearchTwotone0)"/></svg></span>
                        <input type="text" class="form-control" id="txt-usuario" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                          Este campo es requerido.
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                        <label for="txt-password" class="form-label">Contraseña</label>
                        <div class="input-group has-validation">
                          <input type="password" class="form-control" id="txt-password" aria-describedby="inputGroupPrepend" required>
                          <span class="input-group-text" id="inputGroupPrepend">🔐</span>
                          <div class="invalid-feedback">
                            Este campo es requerido.
                          </div>
                        </div>
                      </div>
                    <div class="col-12 text-center">
                      <button class="btn btn-info" type="submit">Iniciar Sesión</button>
                    </div>
                  </form>
                 
            </div>
            <div class="col-md-4">
            </div>

        </div>
    </div>
    <script src='Vista/js/cl_ususario.js'></script>
    <script src='Vista/js/main.js'></script>