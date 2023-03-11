<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

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
        <div class="form-group col-md-9">
            <label for="Cpf">CPF</label>
            <input type="text" class="form-control" id="Cpf" name="cpf" @isset($cpf) value="{{$cpf}}"  @endisset>
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
    
    <div class="form-row">
        <div class="form-group col-md-2">
            <label for="cep">CEP</label>
            <input type="text" class="form-control" id="cep" @isset($cep) value="{{$cep}}"  @endisset>
        </div>
        <div class="form-group col-md-5">
            <label for="endereco">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" @isset($endereco) value="{{$endereco}}"  @endisset>
        </div>

        <div class="form-group col-md-5">
            <label for="complemento">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" @isset($complemento) value="{{$complemento}}"  @endisset>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="city">Cidade</label>
            <input type="text" class="form-control" id="city" @isset($cidade) value="{{$cidade}}"  @endisset>
        </div>
        
        <div class="form-group col-md-4">
            <label for="estado">Estado</label>
            <select id="estado" class="form-control">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </form>
        </div>
    </div>

    @if(!$update)
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="senha">Senha</label>
                <input type="password" id="senha" class="form-control" name="senha">
            </div>

            <div class="form-group col-md-6">
                <label for="confirmaSenha">Confirma Senha</label>
                <input type="password" id="confirmaSenha" class="form-control" name="confirmaSenha">
            </div>
        </div>
    @endif

    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
	

    <script type="text/javascript">
        $("#cep").focusout(function(){
        //Início do Comando AJAX
        $.ajax({
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            type: "GET",
            mode: "cors",
            //O campo URL diz o caminho de onde virá os dados
            //É importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/'+$(this).val()+'/json',
            //Aqui você deve preencher o tipo de dados que será lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS é referente a função que será executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O parâmetro dentro da função se refere ao nome da variável
            //que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
                    console.log(resposta);
					$("#endereco").val(resposta.logradouro);
					$("#complemento").val(resposta.complemento);
					$("#city").val(resposta.bairro);
					$("#estado").val(resposta.uf);
				
				}
			});
		});
	</script>
