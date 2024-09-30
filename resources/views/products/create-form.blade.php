@extends('layouts.main')

@section('title', 'Publicar Producto')

@section('content')

<div class="my-10">
    <h2 class="text-3xl font-bold text-center">Publicar un nuevo producto</h2>
    @if ($errors->any())
                <div class="bg-red-100 text-red-600 p-3 rounded mb-6">
                    hay errores en los datos del formulario. Por favor, revisalos y volvé a intentar.
                </div>
            @endif
        <form action="{{ route('product.create.process') }}" method="POST" enctype="multipart/form-data" class="my-10 mx-20">
            @csrf
            <div class="grid grid-cols-2 gap-4 my-3.5">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Título</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                @error('name')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Imagen</label>
                <input type="file" id="image" name="image" value="{{ old('image') }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                @error('image')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            </div>
            <div class="grid grid-cols-2 gap-4 my-3.5">
            <div>
                <label for="brand" class="block text-sm font-medium text-gray-700">Marca</label>
                <input type="text" id="brand" name="brand" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                @error('brand')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
                <input type="text" id="category" name="category" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                @error('category')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea name="description" id="description" class="mt-1 block w-full p-2 border border-gray-300 rounded-md"></textarea>
                @error('description')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
            </div>

            <div class="col-span-2 flex justify-center mt-4">
            <button type="submit" class="px-6 py-2 bg-red-800 text-white rounded-md hover:bg-red-900 hover:text-white font-semibold">Publicar</button>
            </div>
        </form>
</div>
@endsection