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
    <h1>Formulário de cadastro 1</h1>
    <form>
        <div class="row mt-1">
            <div class="col auto">
                <label for="f_name" class="label-control">
                    First name:
                </label>
                <input type="text" name="f_name"
                id="f_name" class="form-control"/>
            </div>
            <div class="col auto">
                <label for="l_name" class="label-control">
                    Last name:
                </label>
                <input type="text" name="l_name"
                id="l_name" class="form-control"/>
            </div>
            <div class="col auto">
                <label for="user" class="label-control">
                    Username:
                </label>
                <input type="email" name="user"
                id="user" class="form-control"/>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <label for="city" class="label-control">
                    City:
                </label>
                <input type="text" name="city"
                id="city" class="form-control"/>
            </div>
            <div class="col-3">
                <label for="state" class="label-control">
                    State:
                </label>
                <input type="text" name="state"
                id="state" class="form-control"/>
            </div>
            <div class="col-3">
                <label for="zip" class="label-control">
                    Zip:
                </label>
                <input type="text" name="zip"
                id="zip" class="form-control"/>
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="agree_terms">
            <label class="form-check-label" for="flexCheckDefault">
                Agree to terms and conditions
            </label>
        </div>
        <div class="row mt-3">
            <div class="col">
                    <button type="submit" class="btn btn-info">
                       Submit form
                    </button>
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