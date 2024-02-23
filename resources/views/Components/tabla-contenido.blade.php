<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="modal fade" id="modal-filtro" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="modal-filtro" aria-hidden="true">
        <div class="modal-dialog modal-center" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-filtro">FILTRADO</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="container-filtro">
                  <div class="container-filtrado-1">
                      <div class="elemento-filtro">
                            <label class="form-label" for="fechaInicio">Fecha Inicio</label>
                            <input type="date" name="fechaInicio" id="fechaInicio">
                      </div>
                      <div class="elemento-filtro"> 
                        <label class="form-label" for="fechaFin">Fecha Fin</label>
                        <input type="date" name="fechaFin" id="fechaFin"> 
                    </div>
                  </div>
              </div>
              <div class="container-filtro">
                <div class="container-filtrado-1">
                    <div class="elemento-filtro">
                          <label class="form-label" for="semestre">Semestre</label>
                          <select id="semestre" class="form-control">
                            <option>No</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                          </select>
                    </div>
                    <div class="elemento-filtro"> 
                        <label class="form-label" for="carrera">Carrera</label>
                        <select id="carrera" class="form-control">
                          <option>No</option>
                          <option>Ing. Informatica</option>
                          <option>Ing. Sistemas Automotrices</option>
                          <option>Ing. Gestion Empresarial</option>
                          <option>Ing. Sistemas Computacionales</option>
                          <option>Ing. Industrial</option>
                          <option>Ing. Electromecanica</option>
                          <option>Ing. Electronica</option>
                        </select>
                  </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-accion2" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-accion1">Filtrar</button>
            </div>
          </div>
        </div>
      </div>
    <div class="card">

        <div class="card-body">
            <div id="example1_wrapper" class="tabla-datos dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="tabla-component col-lg-12">
                        <table id="example1" class="table table-hover table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">ID
                                </th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                    style="">Nombre</th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="Platform(s): activate to sort column ascending"
                                    style="">Apellidos
                                </th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="Engine version: activate to sort column ascending"
                                    style="">No. Control</th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Carrera</th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Articulos</th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Descripcion</th>
                                <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Fecha</th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Status</th>
                                    <th class="" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                    style="">Accion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">1</td>
                                <td style="">Alan</td>
                                <td style="">Cuevas Melendez</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                    style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                    aria-hidden="true"></a></td>
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">2</td>
                                <td style="">Sebastian</td>
                                <td style="">Alcantar Rangel</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                    style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                    aria-hidden="true"></a></td>
                                
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">3</td>
                                <td style="">Jose Alfredo</td>
                                <td style="">Galvan Medrano</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                    style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                    aria-hidden="true"></a></td>
                                
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">4</td>
                                <td style="">Guadalupe</td>
                                <td style="">Torres Caballeros</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                    style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                    aria-hidden="true"></a></td>
                                
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">5</td>
                                <td style="">Karen Daniela</td>
                                <td style="">Pena Estala</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                    style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                    aria-hidden="true"></a></td>
                                
                            </tr>
                            <tr class="odd">
                                <td class="dtr-control sorting_1" tabindex="0">6</td>
                                <td style="">Monica Guadalupe</td>
                                <td style="">Reyes Ornelas</td>
                                <td style="">192310781</td>
                                <td style="">Ing. Informatica</td>
                                <td>5</td>
                                <td>
                                    <select class="form-control">
                                        <option>Cautin</option>
                                        <option>Multimetro</option>
                                        <option>Pinzas</option>
                                        <option>Cables caiman</option>
                                        <option>Resistencias</option>
                                    </select>
                                </td>
                                <td>26-04-2022</td>
                                <td>Activo</td>
                                <td><a class="fa fa-trash" aria-hidden="true"
                                        style="color: red; margin-right:25px;"></a><a class="fa fa-cog"
                                        aria-hidden="true"></a></td>
                            </tr>

                        </tbody>

                    </table>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of
                            57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#"
                                        aria-controls="example1" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2"
                                        tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3"
                                        tabindex="0" class="page-link">3</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4"
                                        tabindex="0" class="page-link">4</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5"
                                        tabindex="0" class="page-link">5</a></li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6"
                                        tabindex="0" class="page-link">6</a></li>
                                <li class="paginate_button page-item next" id="example1_next"><a href="#"
                                        aria-controls="example1" data-dt-idx="7" tabindex="0"
                                        class="page-link">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        
    </div>
    <p> </p>
</body>
</html>