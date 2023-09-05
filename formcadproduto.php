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
        <h2>Formulário de Cadastro de Produto</h2>
        <hr>
        <form>
            <div class="row">
                <div class="col">
                    Produto 
                    <input type="text" class="form-control">
                </div>


            <div class="row">
                <div class="col-8">
                    Descrição 
                    <input type="text" class="form-control">
                </div>

                <div class="col-4">
                    Data de Cadastro
                    <input type="date" class="form-control">
                </div>


            </div>


            </div>


            <div class="row mb-3">
                <div class="col-8">
                    Código 
                    <input type="text" class="form-control">
                </div>

                <div class="col-2">
                    Custo por Unidade
                    <input type="text" class="form-control">
                </div>

                <div class="col-2">
                    Valor de Venda  
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