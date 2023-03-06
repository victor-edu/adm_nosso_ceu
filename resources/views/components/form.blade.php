    <form action="{{$action}}" method="POST">
        @csrf
        @if($update)
            @method('PUT') 
        @endif
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="Cpf">CPF</label>
                <input type="text" class="form-control" id="Cpf" name="cpf">
            </div>
{{-- 
            <div class="form-group col-md-4">
                <label for="Perfil">Perfil</label>
                <select id="Perfil" class="form-control">
                <option selected></option>
                <option>Adm</option>
                <option>Funcionario</option>
                <option>CLiente</option>
                </select>
            </div>
        </div> --}}

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco">
        </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="City">Cidade</label>
                <input type="text" class="form-control" id="City">
            </div>

            <div class="form-group col-md-4">
                <label for="Estado">Estado</label>
                <select id="Estado" class="form-control">
                <option selected>Escolher...</option>
                <option>...</option>
                </select>
            </div>

            <div class="form-group col-md-2">
                <label for="CEP">CEP</label>
                <input type="text" class="form-control" id="CEP">
            </div>
        </div>
       
        <input type="hidden" name="password" value="123456">

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
