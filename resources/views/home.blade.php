<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js')}}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Tienda</title>
</head>
<body>
    {{--  filtro fecha  --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center display-4">Filtros</h2>
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Filtro por fecha</h3>    
                        <form method="POST" action="{{route('filtro')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="desde" class="form-label">Desde</label>
                                <input type="date" class="form-control" name="desde" id="desde" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="hasta" class="form-label">Hasta</label>
                                <input type="date" class="form-control" name="hasta" id="hasta" required>
                            </div>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-dark pull-right">Filtrar</button>
                        <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{--  filtro fecha  --}}
     {{--  filtro codigo producto   --}}
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Filtro por Producto</h3> 
                    <form method="POST" action="{{route('filtro_pro')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group text-center">
                            <label for="desde" class="form-label text-center">Codigo Producto</label>
                            <input type="text" class="form-control" name="cod_prod" required placeholder="Codigo Producto">
                        </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-dark pull-right">Filtrar</button>
                    <div class="clearfix"></div>
                    </form>
                </div>
                </div>
            </div>
        </div>
     {{--  filtro codigo producto   --}}
    {{--  crear venta     --}}
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center display-4">Ventas</h1> 
                <button type="button" class="btn w-100 btn-info btn-lg" data-toggle="modal" data-target="#myModal">Crear Venta</button>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Crear Venta</h4>
                      </div>
                      <div class="modal-body">
                            <form class="" method="POST" action="{{route('insertar')}}" class="col-12">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Codigo del producto</label>
                                    <input type="text" class="form-control" name="cod_prod" aria-describedby="emailHelp" placeholder="codigo prodcuto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre Cliente</label>
                                    <input type="text" class="form-control" name="cliente" aria-describedby="emailHelp" placeholder="nombre cliente">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre Producto</label>
                                    <input type="text" class="form-control" name="producto" aria-describedby="emailHelp" placeholder="nombre producto">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Total</label>
                                    <input type="text" class="form-control" name="total" aria-describedby="emailHelp" placeholder="Total">
                                </div>
                      </div>
                      <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Registrar Venta</button>
                            </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    {{--  crear venta     --}}
    {{--  tabla   --}}
        <div class="row mt-5 mb-5">
            <div class="col-md-12 col-sm-12">
                <div class="card card-stats">
                    <div class="card-footer">
                        <div class="w-100 table-responsive">
                                <table class= "table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Codigo del producto</th>
                                            <th class="text-center">Cliente</th>
                                            <th class="text-center">Producto</th>
                                            <th class="text-center">Total</th>
                                            <th class="text-center">Fecha Compra</th>
                                            <th class="text-center">Editar</th>
                                            <th class="text-center">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                            @foreach($ventas as $venta)
                                        <tr>
                                            <td class="text-center">{{$venta->id}}</td>
                                            <td class="text-center">{{$venta->cod_prod}}</td>
                                            <td class="text-center">{{$venta->cliente}}</td>
                                            <td class="text-center">{{$venta->producto}}</td>
                                            <td class="text-center">{{$venta->total}}</td>
                                            <td class="text-center">{{$venta->fecha_compra}}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myModal1{{$venta->id}}"> Editar</a>
                                            </td>
                                            {{--  editar   --}}
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="myModal1{{$venta->id}}" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Editar Venta</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                    <form class="" method="POST" action="{{ route('actualizar_venta') }}" class="col-12">
                                                                        @csrf
                                                                        <div class="form-group">
                                                                            <input value="{{$venta->id}}" type="hidden" class="form-control" name="id">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Codigo del producto</label>
                                                                            <input type="text" class="form-control" name="cod_prod"  value="{{$venta->cod_prod}}" placeholder="codigo prodcuto">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Nombre Cliente</label>
                                                                            <input type="text" class="form-control" name="cliente"  value="{{$venta->cliente}}" placeholder="nombre cliente">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Nombre Producto</label>
                                                                            <input type="text" class="form-control" name="producto"  value="{{$venta->producto}}" placeholder="nombre producto">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Total</label>
                                                                            <input type="text" class="form-control" name="total"  value="{{$venta->total}}" placeholder="Total">
                                                                        </div>
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Editar</button>
                                                                </form>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--  editar   --}}
                                            <td class="text-center">
                                                <form action="{{route('destroy',$venta->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Eliminar  </button>
                                                </form>
                                            </td>
                                        </tr>
                            @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  tabla   --}}

</body>
</html>
