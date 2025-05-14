@extends('templates/main_layout')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h4>Novo Produto</h4>
                <hr>
                <form action="{{ route('new_product_submit') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="text_product_name" class="form-table">Nome do produto</label>
                        <input type="text" name="text_product_name" id="text_product_name" class="form-control"
                            placeholder="Nome do produto" required value="{{ old('text_product_name') }}">
                        @error('text_product_name')
                            <div class="text-warning">{{ $errors->get('text_product_name')[0] }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text_product_description" class="form-table">Descrição do produto</label>
                        <textarea name="text_product_description" id="text_product_description" class="form-control" placeholder="Digite a descrição do produto..." rows="5">{{ old('text_product_description') }}</textarea>
                        @error('text_product_description')
                            <div class="text-warning">{{ $errors->get('text_product_description')[0] }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="text_product_price" class="form-table">Preço do produto</label>
                        <input type="number" name="text_product_price" id="text_product_price" class="form-control"
                            placeholder="99.00" required step="0.01" min="0"
                            value="{{ old('text_product_price') }}">
                        @error('text_product_price')
                            <div class="text-warning">{{ $errors->get('text_product_price')[0] }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-center">
                        <a href="{{ route('index') }}" class="btn btn-dark px-5 m-1">Cancelar</a>
                        <button type="submit" class="btn btn-secondary pc-5 m-1">Adicionar</button>
                    </div>
                </form>
                @if (session()->has('product_error'))
                    <div class="alert alert-danger text-center p-1">
                        {{ session()->get('product_error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
