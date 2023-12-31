<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Top navbar example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link href="{{url("")}}/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url("")}}/navbar-top.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">
        <a href="{{url('pengguna/form')}}" class="btn btn-primary">tambah</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID_Pengguna</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">E-mail</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $show)
    <tr>
      <th scope="row">{{$show->ID_Pengguna}}</th>
      <td>{{$show->Username}}</td>
      <td>{{$show->Password}}</td>
      <td>{{$show->Email}}</td>
      <td>
        <a href="{{url('pengguna/form/'.base64_encode($show->ID_Pengguna))}}">edit</a>
        |
        <a href="{{url('pengguna/hapus/'.base64_encode($show->ID_Pengguna))}}">hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="{{url("")}}/assets/js/vendor/popper.min.js"></script>
    <script src="{{url("")}}/dist/js/bootstrap.min.js"></script>
  </body>
</html>
