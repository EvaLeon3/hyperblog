<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>prueba</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
    <body>
        <form action="{{ route('users.store')}}" method="POST">
            <div class="row mb-3">
                 <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                     <div class="col-sm-10">
                        <input type="name" class="form-control" id="inputName">
                    </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                       <input type="email" class="form-control" id="inputEmail">
                   </div>
           </div>
           <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            @csrf
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
          <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>ho</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('users.destroy')}}" method="POST">
                            @method('DELETE')
                            <input
                                type="submit"
                                value="Eliminar"
                                >
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>
                </tr>     
                @endforeach
            </tbody>
          </table>
    </body>
</html>
