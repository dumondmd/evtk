<template>
<div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Teste</div>

               
            </div>
        </div>
        <div class="col-md-9">
            <form>           
              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputCPF">CPF</label>
                  <input type="text" class="form-control" id="inputCPF">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputNome">Nome</label>
                  <input type="text" class="form-control" id="inputNome">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">RG</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-3">
                  <label for="inputZip">Cartão do SUS</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputCPF">Sexo</label>
                  <select id="inputState" class="form-control">
                    <option selected>Masculino</option>
                    <option>Masculino</option>
                    <option>Feminino</option>
                  </select>
                </div>
                <div class="form-group col-md-3">
                  <label for="inputNome">Nascimento</label>
                  <input type="date" class="form-control" id="inputNome">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputZip">Nome da Mãe</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Telefone</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-2">
                  <label for="inputCPF">CEP</label>
                  <input type="text" class="form-control" id="inputCPF">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputCPF">Avenida/Rua</label>
                  <input type="text" class="form-control" id="inputCPF">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputNome">Número</label>
                  <input type="text" class="form-control" id="inputNome">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Quadra</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Lote</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-5">
                  <label for="inputCPF">Complemento</label>
                  <input type="text" class="form-control" id="inputCPF">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputNome">Bairro</label>
                  <input type="text" class="form-control" id="inputNome">
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip">Cidade</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="form-group col-md-1">
                  <label for="inputZip">UF</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
              </div>
              
            </form>
        </div>
    </div>
</div>

<hr>


<div class="container">
    


    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">CPF</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alex</td>      
          <td>25</td>
          <td>34312919187</td>
          <td>Editar|Excluir</td>
        </tr>
        <tr>
          <td>Júnior</td>        
          <td>36</td>
          <td>34312955187</td>
          <td>Editar|Excluir</td>
        </tr>
        <tr>
          <td>Fred J</td>        
          <td>56</td>
          <td>03312919166</td>
          <td>Editar|Excluir</td>
        </tr>
      </tbody>
    </table>

</div>

</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
body {
    margin-top: 5px;
}
</style>