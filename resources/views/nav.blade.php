<div class="bg-black text-white mb-5">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <h3 class="text-white">Gerenciador de Produtos</h3>
            </div>
            <div class="col p-3 text-end">
                <span class="me-4">Olá, {{ session()->get('username') }}</span>
                <span><i class="bi bi-person-fill fs-4 me-2"></i></span>
                <span class="mx-3 opacity-50"><i class="bi bi-grip-vertical"></i></span>
                <a href="{{ route('logout') }}" class="btn btn-outline-danger"><i class="bi bi-box-arrow-right me-2"></i>Sair</a>
            </div>
        </div>
    </div>
</div>