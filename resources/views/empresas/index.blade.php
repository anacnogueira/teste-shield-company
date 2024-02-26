<!DOCTYPE html>
<html lang="pt_Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <title>Empresas</title>
</head>
<body>
    <div class="container">
        <h1>Empresas</h1>
        <p>Filtrar</p>
        <div class="search">
            <form action="">
                <label for="zip_code">CEP:
                <input type="text" name="zip_Code" id="zip_Code">
            </form>
        </div>

        <table class="table" id="companies">
            <thead>
                <tr>
                    <th id="id">ID</th>
                    <th id="name">Nome</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>               
            </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
            </ul>
        </nav>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/env.js') }}" ></script>
    <script src="{{ asset('js/companies.js') }}" ></script>                
</body>
</html>