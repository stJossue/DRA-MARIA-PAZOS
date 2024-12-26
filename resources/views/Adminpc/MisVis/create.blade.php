<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <h2>Ingresar Mision y Vision</h2>


          <form action="" method="POST" enctype="multipar/form-data">
            @csrf
            @method('POST')
          <label for="">Nombre</label>
          <input name="name" type="text">

          <label for="">Imagen</label>
          <input name="imagen" type="file">


          <button type="submit">Guardar</button>


    </form>
</body>
</html>