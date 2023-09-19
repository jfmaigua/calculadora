          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Usuarios/</span> Agregar Nuevo</h4>

              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4">
                    <h5 class="card-header">Profile Details</h5>
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4 text-center">
                        <img
                          src="../../../public/assets/img/avatars/avatar.png"
                          alt="user-avatar"
                          class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar" />

                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="userCreate" method="POST" >
                        
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="Jonathan"
                              autofocus />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="jonathan@example.com"
                              placeholder="john.doe@example.com" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Contraseña</label>
                            <input
                              type="password"
                              class="form-control"
                              id="password"
                              name="password"
                              value="ThemeSelection" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="cellphone">Telefono</label>
                            <div class="input-group input-group-merge">
                              <input
                                type="text"
                                id="cellphone"
                                name="cellphone"
                                class="form-control"
                                placeholder="202 555 0111" />
                            </div>
                          </div>
                      
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="rol">Rol</label>
                            <select id="rol" class="select2 form-select">
                              <option value="">Seleccionar</option>
                              <option value="1">Administrador</option>
                              <option value="2">Supervisor</option>
                            </select>
                          </div>
                        </div>
                        <div class="mt-2">
                          <input class="btn btn-primary me-2" type="submit"/>
                          
                          <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                        </div>
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->