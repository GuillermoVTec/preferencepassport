
     
 @if(@Auth::user()->hasRole('Administrador'))
 <div class="container-xxl flex-grow-1 container-p-y">
      <table class="table table-striped">                
        <thead>                  
          <tr>                    
            <th scope="col">Razón social</th>              
            <th scope="col">Representante legal</th>       
            <th scope="col">RFC</th>                    
            <th scope="col">Direccion</th>                
            <th scope="col">Ciudad</th>                    
            <th scope="col">Pais</th>
            <th scope="col">Codigo Postal</th> 
            <th scope="col">Correo</th>
            <th scope="col">Telefono</th>
            <th scope="col">Fechade Ingreso</th>
            <th scope="col">Matricula ID</th>
            <th scope="col">Matricula ID2</th>
             <th>.</th>
            </tr>                
        </thead>                
        <tbody class="mt-2 table-responsive-md">                    
         @foreach ($distribuidoress as $distribuidores)  
        
            <tr>                                           
              <td>{{ $distribuidores->razonsocial }}</td>  
              <td>{{ $distribuidores->representantelegal }}</td> 
              <td>{{ $distribuidores->rfc }}</td>           
              <td>{{ $distribuidores->direccion }} </td> 
              <td>{{ $distribuidores->ciudad }} </td>
              <td>{{ $distribuidores->pais }} </td> 
              <td>{{ $distribuidores->cp }}</td>
              <td>{{ $distribuidores->correo }}</td>
              <td>{{ $distribuidores->telefono }}</td>
              <td>{{ $distribuidores->date }}</td>
              <td>{{ $distribuidores->matriculaid }}</td> 
              <td>{{ $distribuidores->matriculaid2 }}</td>   
                            <td>      
                <button type="button" class="btn btn-success" wire:click='edit({{ $distribuidores->id }})'>Editar</button>                          
                                         
              </td>                            
              <td>                                
                <button type="button" class="btn btn-danger" wire:click='destroy({{ $distribuidores->id }})'>Borrar</button>                            
              </td> 
            </tr> 
        
          @endforeach                
        </tbody>            
       </table>                      
    </div>
     

         
       {{ $distribuidoress->links('pagination::Bootstrap-4') }}        
     </div> 

   </div>    

</div>
            <div class="container">    
                @include("livewire.$view"); 
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