<div class="m-4 p-5 mx-auto" >
   
    <h5 class="text-center " >Endereço</h5>
    <form >
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Cep</label>
            <div class="col-sm-10">
                <input type="text" wire:model.lazy="cep" name="cep" class="form-control-plaintext rounded border" id="staticEmail">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Logradouro</label>
            <div class="col-sm-10">
                <input type="text" name="logradouro" wire:model="logradouro"  class="form-control-plaintext rounded border " id="staticEmail">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Localidade</label>
            <div class="col-sm-10">
                <input type="text" name="localidade" wire:model="localidade"  class="form-control-plaintext rounded border" id="staticEmail">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Estado</label>
            <div class="col-sm-10">
                <input type="text" name="estado" wire:model="estado"  class="form-control-plaintext rounded border" id="staticEmail">
            </div>
        </div>

        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label text-secondary">Bairro</label>
            <div class="col-sm-10">
                <input type="text" name="bairro" wire:model="bairro"  class="form-control-plaintext rounded border" id="staticEmail">
            </div>
        </div>

        <button type="button" wire:click="save" class="btn btn-primary">Salvar</button>

    </form>
</div>