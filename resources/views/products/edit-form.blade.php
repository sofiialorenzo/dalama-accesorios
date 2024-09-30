@extends('layouts.main')

@section('title', 'editar el producto '.e($product->title))

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-3">Editar el producto {{ $product->title }}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    Hay errores en los datos del formulario. Por favor, revisalos y volvé a intentar.
                </div>
            @endif

            <form action="{{ route('products.edit.process', ['id' => $product->product_id]) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>

                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ old('name', $product->name) }}"
                    >
                    @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca</label>

                    <input
                        type="text"
                        class="form-control"
                        id="brand"
                        name="brand"
                        value="{{ old('brand', $product->brand) }}"
                    >
                    @error('brand')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>

                    <input
                        type="date"
                        class="form-control"
                        id="category"
                        name="category"
                        value="{{ old('category', $product->category) }}"
                    >
                    @error('category')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3>
                  <label for="image" class="form-label">Imagen</label>

                  <input
                    type="file"
                    class="form-control"
                    id="image"
                    name="image"
                  >
                  @error('image')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                  @endsection
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Descripción</label>

                    <textarea
                        class="form-control"
                        id="description"
                        name="description"
                    >{{ old('description', $product->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary" >Actualizar</button>

            </form>

        </div>
    </div>
</div>


@endsection
