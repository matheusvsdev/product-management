@extends('templates/main_layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h4>Produtos</h4>
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th class="w-30 text-center">Produto</th>
                        <th class="w-35 text-center">Descrição</th>
                        <th class="w-10 text-center">Preço</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

            <p class="text-center opacity-50 my-3">Não existem produtos cadastrados</p>
        </div>
    </div>
</div>

@endsection

