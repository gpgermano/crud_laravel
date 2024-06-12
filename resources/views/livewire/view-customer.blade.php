<div>
    <div class="card offset-4 col-6">
        <h5 class="card-header">Visualizar</h5>
        <div class="card-body">
            <h5 class="card-title">Nome: {{ $customer->nome }}</h5>
            <p class="card-text">Email: {{ $customer->email }}</p>
            <p class="card-text">Telefone: {{ $customer->telefone }}</p>
            <p class="card-text">
                @if ($customer->estrangeiro)
                    Estrangeiro: Sim
                @else
                    Estrangeiro: Não
                @endif
            </p>
            <a wire:navigate href="/customizar" class="btn btn-primary container align-items-start">Voltar</a>
        </div>
    </div>
</div>
