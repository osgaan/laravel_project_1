@extends('layout')

@section('products')
<br>
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Detalle de Productos</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive ">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th></th>
                    </tr>
					        @foreach ($products as $product)
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">{{ $product->id }}</a></td>
                      <td>{{ $product->name }}</td>
                      <td><span >{{ $product->detail }}</span></td>
                      <td>

                <form action="{{ route('products.show',$product->id) }}" method="POST">

                    @csrf

                    <button class="btn btn-info btn-sm" data-toggle="modal" data-toggle="modal" data-target="#showModal" id="modalA"><i class="fa fa-eye"></i>  Mostrar</button>
					<!--<a class="btn btn-info" href="{{ route('products.show',$product->id) }}" data-toggle="modalA" data-target="#modalShow" id="modalA">Mostrar</a>-->



                    <!--<a class="btn btn-success" href="">Editar</a>-->
                             <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm">Accion</button>
                    <button type="button" class="btn btn-default btn-sm dropdown-toggle dropdown-icon" data-toggle="dropdown">
                      <span class="sr-only">Toggle Dropdown</span>
                      <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="#">Editar</a>
                        <a class="dropdown-item" href="#">Eliminar</a>
                      </div>
                    </button>
                  </div>


                    <!--<button type="submit" class="btn btn-danger">Eliminar</button>-->
                </form>
            </td>

                    </tr>

                    </tbody>
					    @endforeach
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Nuevo Producto</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver Productos</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

 {!! $products->links() !!}

@endsection

<script>
$(document).ready( function () {
    $('.tabla_datos').DataTable();
} );
</script>
