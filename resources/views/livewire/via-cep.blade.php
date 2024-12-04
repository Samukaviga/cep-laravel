<div class="m-4 p-5  mb-4">

    <h5 class="text-center ">Endereço</h5>
    <form class="container mx-auto">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Cep</label>
            <div class="col-sm-10">
                <input type="text" wire:model.lazy="cep" name="cep" class="form-control-plaintext rounded border" id="staticEmail">
                @error('cep')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Logradouro</label>
            <div class="col-sm-10">
                <input type="text" name="logradouro" wire:model="logradouro" class="form-control-plaintext rounded border " id="staticEmail">
                @error('lagradouro')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Localidade</label>
            <div class="col-sm-10">
                <input type="text" name="localidade" wire:model="localidade" class="form-control-plaintext rounded border" id="staticEmail">
                @error('localidade')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Estado</label>
            <div class="col-sm-10">
                <input type="text" name="uf" wire:model="uf" class="form-control-plaintext rounded border" id="staticEmail">
                @error('uf')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Bairro</label>
            <div class="col-sm-10">
                <input type="text" name="bairro" wire:model="bairro" class="form-control-plaintext rounded border" id="staticEmail">
                @error('bairro')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="button" wire:click="save" class="btn btn-primary">Salvar</button>

    </form>


    <div class="container mt-4">

        <h6>Anddress</h6>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cep</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">Localidade</th>
                    <th scope="col">UF</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($anddresses as $anddress)
                <tr>
                    <th scope="row">{{ $anddress['cep'] }}</th>
                    <td>{{ $anddress['logradouro'] }}</td>
                    <td>{{ $anddress['cidade'] }}</td>
                    <td>{{ $anddress['uf'] }}</td>
                    <td>{{ $anddress['bairro'] }}</td>
                    <td>
                        <button type="button" wire:click="edit" class="btn btn-primary">Editar</button>
                        <button type="button" wire:click="delete" class="btn btn-danger">Deletar</button>
                    </td>
                </tr>
                @endforeach
            
              
            </tbody>
        </table>
    </div>

</div>