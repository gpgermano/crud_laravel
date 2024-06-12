<div class="card text-bg-dark mb-3 container center" style="max-width: 18rem;">
    <div class="card-header">
        Create
    </div>
    <div class="card-body">
      <form wire:submit="salvaCustom">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input wire:model="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp">
          <div>
            @error('nome')
                <span class="text-danger">Informe seu nome..</span>
            @enderror
          </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input wire:model="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            <div>
                @error('email')
                    <span class="text-danger">Informe seu email..</span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Telefone</label>
          <input wire:model="telefone" type="text" class="form-control" id="telefone">
          <div>
            @error('telefone')
                <span class="text-danger">Informe o telefone..</span>
            @enderror
        </div>
        </div>
        <div class="mb-3">
          <input wire:model="estrangeiro" type="checkbox" class="form-check-input" id="entrangeiro">
          <label class="form-check-label" for="exampleCheck1">Estrangeiro</label>
        </div>
        <button wire:navigate href="/customizar" class="btn btn-secondary btn-sm">Voltar</button>
        <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
    </form>
    </div>
</div>


