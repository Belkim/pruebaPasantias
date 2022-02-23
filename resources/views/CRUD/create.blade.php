Creando personas
<form action="{{ url('/CRUD')}}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="name">Nombre </label>
    <input type="text" name="name" id="name"> 
    <br>

    <label for="edad">Edad </label>
    <input type="text" name="edad" id="edad">
    <br> 

    <label for="email">Email </label>
    <input type="text" name="email" id="email">
    <br>

    <label for="cedula">Cedula </label>
    <input type="text" name="cedula" id="cedula">
    <br>

    <label for="password">Pasword </label>
    <input type="text" name="password" id="password">
    <br>

    <label for="foto">Foto </label>
    <input type="File" name="foto" id="foto">
    <br>

    <input type="submit" name="Enviar">
    <br>
</form>
