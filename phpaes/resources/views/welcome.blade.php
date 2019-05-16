<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet"> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
        <thead>
            
        </thead>
        <tbody>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/admin/cadastrarproduto">Cadastrar Produto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/cadastrarreceita">Cadastrar Receita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/cadastrardesconto">Cadastrar Cupom de Desconto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Cadastrar Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/cadastrarcategoria">Cadastrar Categoria</a>
              </li>
            </ul>
            <br><br>
          </nav>
            <div class="container">
                @yield('conteudo')
            </div>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/listarproduto">Listar Produto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listarreceita">Listar Receita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listarcupomdesconto">Listar Cupom de Desconto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listarusuario">Listar Usuário</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/listarcategoria">Listar Categoria</a>
              </li>
            </ul>
          </nav>
        </tbody>
    </body>
</html>