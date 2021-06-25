<?php
  include 'config.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" >
    <link href="css/style.css" rel="stylesheet">

    <title>Meu Website</title>
  </head>

  <body>

    <base base="<?php echo INCLUDE_PATH?>">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="home">Nat.Code</a>
        <button id="button-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a id="home-link" class="nav-link active" aria-current="page" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="#section-depoimento" href="">Depoimentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="#section-diferencial" href="">Diferencial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="#section-servico" href="">Serviços</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="section-banner">
      <div class="container">
          <h2 class="text-light fs-1">Nat.Code</h2>
          <p class="text-light fs-4">Empresa voltada para o desenvolvimento de WebSites</p>
          <button id="banner-button" class="btn btn-primary fs-5" target="#section-servico">Fale Conosco</button>
      </div>
    </section>

    <section id="section-email" class="bg-light bg-gradient pt-3 pb-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h4 class="display-6 fs-2 text-secondary">Entre na nossa lista!</h4>
          </div>
          <div class="col-md-6">
            <form class="input-group form-contact" method="post">
                <input type="email" class="form-control" placeholder="Insira seu email..." name="email">
                <button class="btn btn-primary button-contact" type="submit">Submit</button>
            </form>            
          </div>
        </div>
      </div>
    </section>

    <div class="divider-section"></div>

    <section id="section-depoimento" class="bg-light bg-gradient pt-3 pb-5">
      <div class="container">
        <h2 class="display-6 fs-2 text-secondary border-bottom pb-2 mb-4">Depoimentos</h2>
        <div class="row">
          <div class="col-md-4">
            <divc class="card shadow w-100 mb-4">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>A well-known quote, contained in a blockquote element.</p>
                  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
              </div>
            </div>
            <div class="col-md-4">
            <divc class="card shadow w-100 mb-4">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>A well-known quote, contained in a blockquote element.</p>
                  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
              </div>
            </div>
            <div class="col-md-4">
            <divc class="card shadow w-100 mb-4">
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>A well-known quote, contained in a blockquote element.</p>
                  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </section>

    <div class="divider-section"></div>

    <section id="section-diferencial" class="bg-light bg-gradient pt-3 pb-5">
      <div class="container">
        <h2 class="display-6 fs-2 border-bottom text-secondary pb-2 mb-4">Diferencial</h2>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="card shadow mb-4 bg-body rounded w-100" style="width: 18rem;">
              <h5 class="card-header">Card title</h5>
              <div class="card-body ">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>           
          </div>

          <div class="col-md-4 text-center">
            <div class="card shadow mb-4 bg-body rounded w-100" style="width: 18rem;">
              <h5 class="card-header">Card title</h5>
              <div class="card-body ">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>           
          </div>

          <div class="col-md-4 text-center">
            <div class="card shadow mb-4 bg-body rounded w-100" style="width: 18rem;">
              <h5 class="card-header">Card title</h5>
              <div class="card-body ">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>           
          </div>

        </div>
      </div>
    </section>

    <div class="divider-section"></div>

    <section id="section-servico" class="bg-light bg-gradient pt-3 pb-5">
      <div class="container">
        <h2 class="display-6 fs-2 border-bottom text-secondary pb-2">Serviços</h2>
        <p class="lead mt-4">
          Escolha um de nossos produtos e nos envie uma mensagem!
        </p>

        <div class="row mt-4">

          <div class="col-md-6">
            <div class="card w-100 mb-4 shadow">
              <div class="card-body">
                <form class="form-contact" method="post">
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seu nome..." name="name">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Nos enviei uma mensagem..." name="message"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary button-contact">Submit</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="card w-100 mb-4 shadow">
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">First</th>
                      <th scope="col">Last</th>
                      <th scope="col">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td colspan="2">Larry the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
      
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>


  </body>
</html>