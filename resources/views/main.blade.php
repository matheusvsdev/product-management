@extends('templates/main_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="row align-items-center mb-3">
                <div class="col">
                    <h4>Produtos</h4>
                </div>
                <div class="col text-end">
                    <a href="{{ route('new_product') }}" class="btn btn-primary"><i class="bi bi-plus-square me-2"></i>Novo Produto</a>
                </div>
            </div>

            @if ($products->count() != 0)
            <table class="table table-striped table-bordered" id="table_products" width="100%">
                <thead class="table-dark">
                    <tr>
                        <th class="w-30">Produto</th>
                        <th class="w-35 text-center">Descrição</th>
                        <th class="w-10 text-center">Preço</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            @else
            <p class="text-center opacity-50 my-5">Não existem produtos cadastrados</p>

            @endif
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#table_products').DataTable({
            data: @json($products),
            columns: [
                { data: 'product_name' },
                { data: 'product_description' },
                { data: 'product_price' },
                { data: 'id' },
            ]
        });
    });
</script>

@endsection

