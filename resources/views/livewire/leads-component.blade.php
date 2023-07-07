@if(@Auth::user()->hasRole('Administrador'))
<table class="table table-striped">                
        <thead>                  
          <tr>                    
            <th scope="col">👨🏻‍💻Nombre Titular</th>                    
            <th scope="col">Edad</th>                    
            <th scope="col">Estado Civil</th>                    
            <th scope="col">📱 Telefono 1</th>                    
            <th scope="col">📱 Telefono 2</th>                    
            <th scope="col">✉️Email</th>
            <th scope="col">🌐Pais</th> 
            <th scope="col">status</th>                      
            <th scope="col">Editar</th>                  
            </tr>                
        </thead>                
        <tbody class="mt-2 table-responsive-md">                    
                    @foreach ($leadss as $leads)     
            <tr>                                                      
              <td>{{ $leads->nombre }}</td>                            
              <td>{{ $leads->edad }}</td>                            
              <td>{{ $leads->estadocivil }}</td>                            
              <td>{{ $leads->telefono1 }} </td> 
              <td>{{ $leads->telefono2 }} </td>
              <td>{{ $leads->correo }} </td> 
              <td>{{ $leads->pais }}</td>
              <td><span class="badge bg-label-primary me-1">activar</span></td>                           
               <td>
                   <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="javascript:void(0);">
                    

                    <button class="bx bx-trash me-1" wire:click='destroy({{ $leads->id }})'></button> Delete</a>
                    
                    
                    </div>
                    </div>
                </td>                           
            </tr>                    
          @endforeach                
        </tbody>            
       </table> 
        {{ $leadss->links('pagination::Bootstrap-4') }}        
     </div>    
   </div>    
   <div class="col-md-4">  


   </div> 
</div>

              </div>
              <!--/ Basic Bootstrap Table -->
            </div>
                
          </div>
        </div>
          <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  VACATION CARDS
                </div>
                <div>
                 <a href="#" target="_blank" class="footer-link me-4"> <i class="menu-icon tf-icons bx bx-support"></i> Soporte</a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
   
  </body>
</html>
    @endif
