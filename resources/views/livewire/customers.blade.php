<div class="container text-center">
    <livewire:flash-mensagem/>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Estrangeiro</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <th scope="row">{{ $customer->id }}</th>
                    <td>{{ $customer->nome }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->telefone }}</td>
                    <td>
                        @if ($customer->estrangeiro)
                            Sim
                        @else
                            Não
                        @endif
                    </td>
                    <td>
                        <button wire:navigate href="/customizar/{{ $customer->id }}" class="btn btn-primary btn-sm">Ver</button>
                        <button wire:navigate href="/customizar/{{ $customer->id }}/edit" class="btn btn-secondary btn-sm">Editar</button>
                        <button wire:click="deletaCustomizacao({{ $customer->id }})" class="btn btn-danger btn-sm">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a wire:navigate href="/customizar/cria" class="btn btn-primary container align-items-start">Cria</a>
</div>
