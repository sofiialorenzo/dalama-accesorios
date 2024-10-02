@extends('layouts.main')
@section('title', $product->name)
@section('content')
<section class="min-h-dvh flex justify-center items-center">
  <div class="flex items-center justify-start gap-8 flex-col sm:flex-row sm:ml-52">
    <figure class="aspect-square border-gray border-2 w-1/2 sm:w-2/5">
    @if($product->image && file_exists(public_path('img/' . $product->image)))
          <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-contain">
          @else
          <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="h-full w-full object-contain">
    @endif
    </figure>
    <article class="flex flex-col gap-2 w-full p-4 sm:w-96">
      <h1 class="text-2xl font-bold sm:text-4xl">{{ $product->name }}</h1>
      <p class="text-gray-700 text-lg font-bold sm:text-2xl">{{ $product->brand }}</p>
      <span 
        class=" d-block bg-black text-white rounded-full px-4 py-1 font-bold w-fit"
        >
        {{ $product->category}}
      </span>
      <p class="text-gray-700">{{ $product->description }}</p>
      <div>
        <div class="mb-4">
          <a
              href="{{ route('products.edit.form',['id' => $product->product_id])}}" 
              class="bg-red-800 rounded p-1.5 text-white font-semibold hover:bg-red-900">
              Editar
          </a>
        </div>
        <form 
          action="{{ route('products.delete.process', ['id' => $product->product_id]) }}"
          method="post" class="mt-4">
          @csrf
          @method('DELETE')
          <input 
            type="submit"
            value="Borrar" 
            onclick="return confirm('Estas seguro que queres borrar el producto')" 
            class="bg-red-800 rounded p-1.5 text-white font-semibold my-5 hover:bg-red-900">
        </form>
      </div>
    </article>
  </div>
</section>
@endsection