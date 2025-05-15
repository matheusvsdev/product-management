@extends('templates/main_layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h4>Excluir Produto</h4>
                <hr>
                <h4 class="text-info">{{ $product->product_name }}</h4>
                <p class="opacity-50">{{ $product->product_description }}</p>
                <p class="opacity-50">{{ $product->product_price }}</p>

                <p class="my-5 text-center">Deseja excluir esse produto?</p>

                <div class="my-4 text-center">
                    <a href="{{ route('index') }}" class="btn btn-dark px-5 m-1"><i class="">Cancelar</a>
                    
                    <form action="{{ route('delete_product_confirm', ['id' => Crypt::encrypt($product->id)]) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger px-5 m-1">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
