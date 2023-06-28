<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>
    <style>
        html{
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            text-align: center;
        }
        .pagination{
            text-align: center;
        }
        a{
            padding: 5px;
            text-decoration: none;
            color: #000;
            background-color: #eee;
            border: 1px solid #ddd;
            margin:  20px 10px;
        }
table {
    width: 100%;
    border-collapse: collapse;
  }
  
  table th,
  table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  /* Estilo do cabeçalho da tabela */
  table th {
    background-color: #f5f5f5;
    font-weight: bold;
  }
  
  /* Estilo das linhas alternadas */
  table tr:nth-child(even) {
    background-color: #f9f9f9;
  }
  
  /* Estilo quando o mouse está sobre a linha */
  table tr:hover {
    background-color: #e9e9e9;
  }
  
  /* Estilo para a primeira coluna (opcional) */
  table td:first-child {
    font-weight: bold;
    color: #333;
  }  
    </style>
</head>
<body>
    <h1>Lista de Usuários</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['age'] }}</td>
                <td>{{ $user['email'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
       <!-- Setas de navegação -->
       <br />
       <br />
       <br />
    <div class="pagination">
        <a href="?page={{ $users->currentPage() - 1 }}">
            Anterior
        </a>
        <a href="?page={{ $users->currentPage() + 1 }}">
            Próxima
        </a>
        
    </div>
    
</body>
</html>
