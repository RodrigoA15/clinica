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
                <th scope="col">Sintomas paciente</th>
                <th scope="col">diagnostico Paciente</th>
                <th scope="col">tratamiento</th>
                <th scope="col">Recomendacion</th>
                <th scope="col">Autorizacion</th>
                <th scope="col">Numero Autorizacion</th>
                <th scope="col">Historia clinica No</th>
                <th scope="col">Acciones</th>


                

              </tr>
            </thead>
            <tbody>
             @foreach ($atencion as $a )
             <tr>
                <th scope="row">{{ $a->id}}</th>
                <td scope="row">{{$a->sintomas_paciente }}</td>
                <td scope="row">{{ $a->diagnostico_paciente }}</td>
                <td scope="row">{{$a->tratamiento_paciente }}</td 
                <td scope="row">{{$a->recomendacion_medico}}</td>
                <td scope="row">{{$a->requiere_autorizacion}}</td>
                <td scope="row">{{$a->numero_autorizacion}}</td>
                <td scope="row">{{$a->id_historiaclinica}}</td>

                <td>
                    <a href="{{route('atencion.edit', $a )}}" class="btn btn-warning">Editar</a>


                    {{-- <form action="{{ route('pacientes.destroy', $ )}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form> --}}

                </td>

                

                
              </tr>
              
             @endforeach
            </tbody>
          </table>
          {{-- <div class="d-flex justify-content-center">{{ $paciente->links() }}</div> --}}
    </div>
</body>
</html>