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
        <form action="{{route('atencion.update', $atencion) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label  class="form-label">sintomas_paciente</label>
              <input type="text" class="form-control" id="sintomas_paciente" name="sintomas_paciente" value="{{ $atencion->sintomas_paciente }}">
            </div>
            <div class="mb-3">
                <label  class="form-label">diagnostico_paciente</label>
                <input type="text" class="form-control" id="diagnostico_paciente" name="diagnostico_paciente" value="{{ $atencion->diagnostico_paciente }}">
              </div>
               <div class="mb-3">
                <label  class="form-label">tratamiento_paciente</label>
                <input type="text" class="form-control" id="tratamiento_paciente" name="tratamiento_paciente" value="{{ $atencion->tratamiento_paciente }}">
              </div> 
              <div class="mb-3">
                <label  class="form-label">recomendacion_medico</label>
                <input type="text" class="form-control" id="recomendacion_medico" name="recomendacion_medico" value="{{ $atencion->recomendacion_medico }}">
              </div> 
              <div class="mb-3">
                <label  class="form-label">requiere_autorizacion</label>
                <input type="text" class="form-control" id="requiere_autorizacion" name="requiere_autorizacion" value="{{ $atencion->requiere_autorizacion }}">
              </div>
              <div class="mb-3">
                <label  class="form-label">numero_autorizacion</label>
                <input type="text" class="form-control" id="numero_autorizacion" name="numero_autorizacion" value="{{ $atencion->numero_autorizacion }}">
              </div>
              <div class="mb-3">
                <label  class="form-label">id_historiaclinica</label>
                <input type="text" class="form-control" id="id_historiaclinica" name="id_historiaclinica" value="{{ $atencion->id_historiaclinica }}"">
              </div>
            
           
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
