<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Cadastro Cliente </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <a href="index.php" class="btn btn-warning">Voltar ao Menu</a> <br>
        <h2>Formulário de Cadastro de Usuário</h2>
        <hr>
        <form>
            <div class="row">
                <div class="col">
                    Nome Completo 
                    <input type="text" class="form-control">
                </div>


            <div class="row">
                <div class="col-4">
                    CPF 
                    <input type="text" class="form-control">
                </div>

                <div class="col-4">
                    RG 
                    <input type="text" class="form-control">
                </div>

                <div class="col-4">
                    Data de Nascimento
                    <input type="date" class="form-control">
                </div>


            </div>


            </div>


            <div class="row">
                <div class="col-8">
                    Endereço 
                    <input type="text" class="form-control">
                </div>

                <div class="col-2">
                    Número 
                    <input type="text" class="form-control">
                </div>

                <div class="col-2">
                    Complemento 
                    <input type="text" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        CEP 
                        <input type="text" class="form-control">
                    </div>

                    <div class="col">
                        Bairro 
                        <input type="text" class="form-control">
                    </div>

                    <div class="col-3">
                    Estado
                        <select class="form-select" name="fornecedores">
                        <option value="Selecionar">Selecionar</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MG">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minhas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RO">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                            <option value="DF">Distrito Federal</option>

                        </select>
                    </div>

                </div>

            </div>

            <div class="row mb-3">
                <div class="col">
                    Email 
                    <input type="email" class="form-control">
                </div>

                <div class="col">
                    Telefone
                    <input type="text" class="form-control">
                </div>

                <div class="col">
                    Celular 
                    <input type="text" class="form-control">
                </div>

            </div>


            <div class="row">
                <div class="col"></div>

                <div class="col ">
                    <button type="button" class="btn btn-primary">Cadastrar</button>
                </div>

                <div class="col"></div>


            </div>

        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>