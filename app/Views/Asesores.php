<?=$cabecera?>

<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<h3 class="mb-3 mt-3">Asesores registrados</h3>

<button class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#AgregarAsesor">
    <i class="fa-solid fa-plus"></i> Agregar asesor
</button>

<!-- Modal -->
<div class="modal fade" id="AgregarAsesor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar asesor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?=site_url('/registrar')?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-tie"></i></span>
                        <input type="text" class="form-control" name="Nombre" placeholder="Nombre del asesor" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-address-card"></i></span>
                        <input type="number" class="form-control" name="Cedula" placeholder="Cédula" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                        <input type="number" class="form-control" name="Telefono" placeholder="Teléfono" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Fecha de nacimiento</span>
                        <input type="date" class="form-control" name="Fecha_Nac" id="Fecha_Nac" placeholder="Fecha de nacimiento" aria-label="Telefono" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Edad</span>
                        <input type="number" class="form-control" name="Edad" id="Edad_asesor" aria-label="Edad" aria-describedby="basic-addon1" readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-venus-mars"></i></span>
                        <select class="form-select" name="Genero" id="">
                            <option value="">-- Género --</option>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-handshake-simple"></i></span>
                        <input type="text" class="form-control" name="Cliente" placeholder="Cliente para el que trabaja" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-store"></i></span>
                        <select class="form-select" name="Sede_trabajo" id="">
                            <option value="">-- Sede de trabajo --</option>
                            <option value="Ruta N">Ruta N</option>
                            <option value="Puerto Seco">Puerto Seco</option>
                            <option value="Buro">Buro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    
                    <input type="hidden" class="form-control" name="Usuario_regis_id" aria-label="Cliente" aria-describedby="basic-addon1" value="<?php echo session('Id'); ?>">
                    
                </div>

                <div class="col-md-12">
                    
                    <input type="hidden" class="form-control" name="Fecha_registro"  value="<?php echo date('Y-m-d h:i:s a', time());?>">
                    
                </div>
                
            </div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar asesor</button>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

<table class="table mb-5 table-striped table-bordered" id="asesores">
        <thead >
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cédula</th>
                <th>Teléfono</th>
                <th>Fecha de nacimiento</th> 
                <th>Edad</th>
                <th>Género</th>
                <th>Detalles</th>
                <th>Fecha de registro</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($asesores as $asesor):?>
                <tr>
                    <td><?=$asesor['Id']?></td>
                    <td><?=$asesor['Nombre']?></td>
                    <td><?=$asesor['Cedula']?></td>
                    <td><?=$asesor['Telefono']?></td>
                    <td><?=$asesor['Fecha_Nacimiento']?></td>
                    <td><?=$asesor['Edad']?></td>
                    <td><?=$asesor['Genero']?></td>
                    <td>
                        <a href="<?=$asesor['Id']?>" data-bs-toggle="modal" data-bs-target="#DetallesAsesor<?=$asesor['Id']?>" class="btn btn-dark"><i class="fa-solid fa-eye"></i></a>

                        <div class="modal fade" id="DetallesAsesor<?=$asesor['Id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detalles del asesor <strong><?=$asesor['Nombre']?></strong> </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Cliente</th>
                                                    <th>Sede de trabajo</th>
                                                    <th>Usuario que hizo el registro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?=$asesor['Cliente']?></td>
                                                    <td><?=$asesor['Sede_trabajo']?></td>
                                                    <td><?=$asesor['Usuario_regis_id']?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                            
                                </div>
                            </div>
                        </div>

                    </td>
                    
                    <td><?=$asesor['Fecha_registro']?></td>
                    <td>
                        <a href="<?=$asesor['Id']?>" data-bs-toggle="modal" data-bs-target="#EditarAsesor<?=$asesor['Id']?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="<?=base_url('borrarAsesor/'.$asesor['Id']);?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>

                        <!-- Modal -->
                        <div class="modal fade" id="EditarAsesor<?=$asesor['Id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ediatr asesor</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?=site_url('/modificar')?>" method="post" enctype="multipart/form-data">

                                    <input type="hidden" class="form-control" name="Id" aria-label="Id" aria-describedby="basic-addon1" value="<?=$asesor['Id']?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-tie"></i></span>
                                                <input type="text" class="form-control" name="Nombre" placeholder="Nombre del asesor" aria-label="Nombre" value="<?=$asesor['Nombre']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-address-card"></i></span>
                                                <input type="number" class="form-control" name="Cedula" placeholder="Cédula" aria-label="Cedula" value="<?=$asesor['Cedula']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-phone"></i></span>
                                                <input type="number" class="form-control" name="Telefono" placeholder="Teléfono" aria-label="Telefono" value="<?=$asesor['Telefono']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fecha de nacimiento</span>
                                                <input type="date" class="form-control" name="Fecha_Nac" id="Fecha_Nac" placeholder="Fecha de nacimiento" value="<?=$asesor['Fecha_Nacimiento']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Edad</span>
                                                <input type="number" class="form-control" name="Edad" id="Edad_asesor" aria-label="Edad" aria-describedby="basic-addon1" value="<?=$asesor['Edad']?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-venus-mars"></i></span>
                                                <select class="form-select" name="Genero" id="">
                                                    <option value="<?=$asesor['Genero']?>"><?=$asesor['Genero']?></option>
                                                    <option value="Masculino">Masculino</option>
                                                    <option value="Femenino">Femenino</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-handshake-simple"></i></span>
                                                <input type="text" class="form-control" name="Cliente" placeholder="Cliente para el que trabaja" value="<?=$asesor['Cliente']?>">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-store"></i></span>
                                                <select class="form-select" name="Sede_trabajo" id="">
                                                    <option value="<?=$asesor['Sede_trabajo']?>"><?=$asesor['Sede_trabajo']?></option>
                                                    <option value="Ruta N">Ruta N</option>
                                                    <option value="Puerto Seco">Puerto Seco</option>
                                                    <option value="Buro">Buro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            
                                            <input type="hidden" class="form-control" name="Usuario_regis_id" aria-label="Cliente" aria-describedby="basic-addon1" value="<?php echo session('Id'); ?>">
                                            
                                        </div>

                                        <div class="col-md-12">
                                            
                                            <input type="hidden" class="form-control" name="Fecha_registro" aria-label="Cliente" aria-describedby="basic-addon1" value="<?php echo date('Y-m-d h:i:s a', time());?>">
                                            
                                        </div>
                                        
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar asesor</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                
                            </div>
                            </div>
                        </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table><br><br>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#asesores').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No hay resultados",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "<button class='btn btn-dark'>Buscar</button>",
                    "paginate":{
                        "next": "Siguiente",
                        "previous": "Anterior",
                    }
                }
            });
        });
    </script>
    <script>
        $(function(){
            $('#Fecha_Nac').on('change', calcularEdad);
        });
        function calcularEdad() {
            
            fecha = $(this).val();
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $('#Edad_asesor').val(edad);
        }



        
    </script>
<?=$pie?>

