<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

body {

    background-image: url('fotinhas/quad.jpg'); 
    background-size: cover; 
    background-position: center; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
}
h1, label {
    color: #ffffff; 
}

.navbar {
    padding-top: 1rem;
    padding-bottom: 1rem;
}
.navbar .navbar-brand {
    font-size: 1.8rem;
}

.navbar .nav-link {
    font-size: 1.2rem;
    margin-right: 1.5rem; 
}
.navbar a {
    position: relative;
    color: black; /* Ajuste para a cor do texto desejada */
    text-decoration: none;
    padding: 8px 16px;
}

.navbar a:hover::after, .navbar a:focus::after, .navbar a.active::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background-color: black; 
}

.navbar a:hover, .navbar a:focus, .navbar a.active {
    text-decoration: none;
}

input[type="text"],
input[type="email"],
input[type="password"],
input[type="date"] {
    background-color: rgba(0, 0, 0, 0.2); 
    color: #ffffff; 
    border: 1px solid #ccc;
    padding: 8px;
    border-radius: 4px;
}
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus,
input[type="date"]:focus {
    background-color: rgba(0, 0, 0, 0.3); 
    color: #ffffff;
    outline: none; 
}

table.table {
    width: 100%;
    background-color: rgba(255, 255, 255, 0.8) !important;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden;
}

table.table th {
    background-color: rgba(0, 0, 0, 0.6) !important; 
    color: #ffffff !important; 
    text-align: left;
    padding: 12px;
}

table.table td {
    background-color: rgba(255, 255, 255, 0.3) !important; 
    color: #000000 !important; 
    padding: 12px;
    border-bottom: 1px solid #ddd;
}

button.btn-success {
    background-color: #28a745 !important; 
    color: #ffffff !important;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

button.btn-danger {
    background-color: #dc3545 !important; 
    color: #ffffff !important;
    border: none;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}


    
</style>

</head>
<body   >

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cadastros</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo Usuario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Usuarios</a>
            </li>
        </ul>
    </div>
</nav>
<div class = "container">
  <div class = "row">
    <div class = "col mt-5">

    
        
        

    <?php
    include("config.php");
switch (@$_REQUEST["page"]) {
  case "novo":
    include ("novo-usuario.php");
    break;
  case "listar":
    include ("listar-usuario.php");
    break;
    case "salvar":
        include("salvar-usuario.php");
        break;
        case "editar":
            include("editar-usuario.php");
            break;
    default:
    print"<h1>Apresentação Crud</h1>";
}
?>


    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
