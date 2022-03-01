<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulários</title>
  </head>
  <body class="container">    
    <h1>Formulário de cadastro 2</h1>
    <form>
        <div class="row mt-1">
            <div class="col-1">
                <label for="cod" class="label-control">
                    Código:
                </label>
                <input type="number" name="cod"
                id="cod" class="form-control"/>
            </div>
            <div class="col-5">
                <label for="name" class="label-control">
                    Nome:
                </label>
                <input type="text" name="name"
                id="name" class="form-control"/>
            </div>
            <div class="col-3">
                <label for="email" class="label-control">
                    E-mail:
                </label>
                <input type="email" class="form-control" 
                id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="col-3">
                <label for="cpf" class="label-control">
                    CPF:
                </label>
                <input type="number" name="cpf"
                id="cpf" class="form-control"/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-2">
                <label for="cel" class="label-control">
                    Nº celular:
                </label>
                <input type="phone" name="cel"
                id="cel" class="form-control"/>
            </div>
            <div class="col-2">
                <label for="fone" class="label-control">
                    Nº telefone fixo:
                </label>
                <input type="phone" name="fone"
                id="fone" class="form-control"/>
            </div>
            <div class="col-2">
                <label for="cep" class="label-control">
                    CEP:
                </label>
                <input type="number" name="cep"
                id="cep" class="form-control"/>
            </div>
            <div class="col-2">
                <label for="logradouro" class="label-control">
                    Lougradouro:
                </label>
                <input type="text" name="logradouro"
                id="logradouro" class="form-control"/>
            </div>
            <div class="col-1">
                <label for="num" class="label-control">
                    Nº:
                </label>
                <input type="number" name="num"
                id="num" class="form-control"/>
            </div>
            <div class="col-3">
                <label for="bairro" class="label-control">
                    Bairro:
                </label>
                <input type="text" name="bairro"
                id="bairro" class="form-control"/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-4">
                <label for="cidade" class="label-control">
                    Cidade:
                </label>
                <input type="text" name="cidade"
                id="cidade" class="form-control"/>
            </div>
            <div class="col-1">
                <label for="uf" class="label-control">
                    UF:
                </label>
                <input type="texte" name="uf"
                id="uf" class="form-control"/>
            </div>
            <div class="col-2">
                <label for="situacao" class="label-control">
                    Situação:
                </label>
                <select class="form-select" aria-label="situacao">
                    <option selected value="1">Solteiro</option>
                    <option value="2">Casado</option>
                    <option value="3">Divorciado</option>
                    <option value="4">Viúvo</option>
                </select>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-danger me-md-2" type="button">Reset</button>
                <button class="btn btn-success" type="button">Next</button>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>