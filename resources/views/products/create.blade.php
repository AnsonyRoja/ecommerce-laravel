<!-- resources/views/products/create.blade.php -->
@extends('voyager::master')

@section('content')
<div class="container-fluid">
    <div class="page-content">
        <div class="panel panel-bordered">
            <div class="panel-heading">
                <h1 class="page-title">
                    <i class="voyager-basket"></i> Crear Nuevo Producto
                </h1>
            </div>
            <div class="panel-body">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" class="form-control" placeholder="Ingrese el nombre del producto">
                    </div>

                    <div class="form-group">
                        <label for="description_short">Descripción Corta:</label>
                        <input type="text" name="description_short" class="form-control" placeholder="Ingrese la descripción corta del producto">
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción:</label>
                        <textarea name="description" class="form-control" placeholder="Ingrese la descripción completa del producto"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="price">Precio:</label>
                        <input type="number" name="price" class="form-control" placeholder="Ingrese el precio del producto">
                    </div>
                    <div class="form-group">
                        <label for="stores_id">Tienda:</label>
                        <select name="stores_id" class="form-control">
                            @foreach($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Agrega los campos restantes según los requerimientos de tu aplicación -->

                    <button type="submit" class="btn btn-primary">Crear Producto</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
