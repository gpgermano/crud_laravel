
<div class="card offset-3 col-5 mt-4">
    <div class="card-header">
        Registro
    </div>
    <div class="card-body">
        <form wire:submit="lojaUsuario">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input wire:model="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp">
                <div>
                @error('nome')
                    <span class="text-danger">Informe seu Nome..</span>
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
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input wire:model="password" type="password" class="form-control" id="password">
                <div>
                @error('password')
                    <span class="text-danger">Informe sua Senha..</span>
                @enderror
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button wire:navigate href="/customizar" class="btn btn-secondary">Voltar</button>
        </form>
        <div class="mb-3">
            você ja possui um cadastro? <button wire:navigate href="/login" class="btn btn-success">Login</button>
        </div>
    </div>
</div>

