<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre paciente</th>
                <th scope="col">Apellido Paciente</th>
                <th scope="col">Tipo documento</th>
                <th scope="col">Telefono Paciente</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>


                

              </tr>
            </thead>
            <tbody>
             @foreach ($paciente as $pacientes)
             <tr>
                <th scope="row">{{ $pacientes->id}}</th>

                <td scope="row">{{ $pacientes->nombre_paciente }}</td>
                <td scope="row">{{ $pacientes->apellido_paciente }}</td>
                <td scope="row">{{ $pacientes->tipo_documento}}</td>
                <td scope="row">{{ $pacientes->telefono_paciente }}</td>
                <td scope="row">{{ $pacientes->direccion_paciente }}</td>
                <td>
                    <a href="{{route('pacientes.edit', $pacientes)}}" class="btn btn-warning">Editar</a>


                    <form action="{{ route('pacientes.destroy', $pacientes)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>

                

                
              </tr>
              
             @endforeach
            </tbody>
          </table>
    </div>
</body>
</html>