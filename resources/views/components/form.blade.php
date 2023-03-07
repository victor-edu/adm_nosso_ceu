    <form action="{{$action}}" method="POST">
        @csrf
        @if($update)
            @method('PUT') 
        @endif
        
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" @isset($nome) value="{{$nome}}"  @endisset>
            </div>

            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" @isset($email) value="{{$email}}"  @endisset>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="Cpf">CPF</label>
                <input type="text" class="form-control" id="Cpf" name="cpf" @isset($cpf) value="{{$cpf}}"  @endisset>
            </div>

            <div class="form-group col-md-3">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" name="password" @isset($senha) value="{{$senha}}"  @endisset>
            </div>

            <div class="form-group col-md-3">
                <label for="Perfil">Perfil</label>
                <select id="Perfil" class="form-control" name="perfil_id">
                <option value="1" selected>Adm</option>
                <option value="2">Funcionario</option>
                <option value="3">Usuario</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" @isset($endereco) value="{{$endereco}}"  @endisset>
        </div>

        <div class="form-group">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" @isset($complemento) value="{{$complemento}}"  @endisset>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="City">Cidade</label>
                <input type="text" class="form-control" id="City" @isset($cidade) value="{{$cidade}}"  @endisset>
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
                <input type="text" class="form-control" id="CEP" @isset($cep) value="{{$cep}}"  @endisset>
            </div>
        </div>
       
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
