@extends('templates/main_layout')

@section('content')
<div class="container mb-3">
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

            @if (count($products) != 0)
            <table class="table table-striped table-bordered" id="table_products" width="100%">
                <thead class="table-dark">
                    <tr>
                        <th class="w-20">Produto</th>
                        <th class="w-40 text-center">Descrição</th>
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
                { data: 'product_price', className: 'text-center' },
                { data: 'product_actions', className: 'text-center' },
            ],
            language: {
                "search": "Buscar:",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty": "Nenhum registro disponível",
                "paginate": {
                    "first": "Primeira",
                    "previous": "Anterior",
                    "next": "Próxima",
                    "last": "Última"
                }
            }
        });
    });
</script>

@endsection

