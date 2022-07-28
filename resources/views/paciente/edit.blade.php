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
        <form action="{{route('pacientes.update', $paciente) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label  class="form-label">Nombre Paciente</label>
              <input type="text" class="form-control" id="nombre_paciente" name="nombre_paciente" value="{{ $paciente->nombre_paciente }}" placeholder=">
            </div>
            <div class="mb-3">
                <label  class="form-label">Apellido Paciente</label>
                <input type="text" class="form-control" id="apellido_paciente" name="apellido_paciente" value="{{ $paciente->apellido_paciente }}">
              </div> <div class="mb-3">
                <label  class="form-label">Tipo Documento</label>
                <input type="text" class="form-control" id="tipo_documento" name="tipo_documento" value="{{ $paciente->tipo_documento }}">
              </div> <div class="mb-3">
                <label  class="form-label">Telefono Paciente</label>
                <input type="text" class="form-control" id="telefono_paciente" name="telefono_paciente" value="{{$paciente->telefono_paciente }}">
              </div> <div class="mb-3">
                <label  class="form-label">Direccion Paciente</label>
                <input type="text" class="form-control" id="direccion_paciente" name="direccion_paciente" value="{{ $paciente->direccion_paciente }}">
              </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
