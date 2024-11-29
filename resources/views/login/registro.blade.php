<html>

<head>
   
    <title>Login2</title>
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+10+Charted&display=swap" rel="stylesheet">
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="css/styles.css">
    <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet" />
</head>
<body>
<section class="fondo fondo--registro">
        <div class="capa-fondo">

            <main class="contenedor">

                <div class="contenido">

                    <h1>Crea tu cuenta</h1>

                    <form class="formulario-registro">

                        <div class="campoIzq nombre">
                            <input class="registro__field  nombre-field" type="name" placeholder="Nombre" id="name">
                        </div>

                        <div class="campoDer apellido">
                            <input class="registro__field apellido-field" type="name" placeholder="Apellido" id="lastname">
                        </div>


                        <div class="campoIzq email1">
                            <input class="registro__field email-field" type="email" placeholder="Matricula" id="email">
                        </div>

                        <div class="campoDer email2">
                            <input class="registro__field email-field" type="email" placeholder="Carrera" id="email">
                        </div>


                        <div class="campoIzq contraseña1">
                            <input class="registro__field contraseña-field" type="password" placeholder="Correo Electronico"
                                id="password">
                        </div>

                        <div class="campoDer contraseña2">
                            <input class="registro__field contraseña-field" type="password" placeholder="Contraseña"
                                id="password">
                        </div>

                        <div class="campoIzq boton1">
                            
                            <a href= "{{ route('inicio2') }}" class="boton boton--secundario">Login</a>
                        </div>

                        <div class="campoDer boton2">
                            
                            <a href= "{{ route('inicio2') }}" class="boton boton--primario">Crear Cuenta</a>
                        </div>

                    </form>
                    
                </div> <!-- Fin div contendio-->
            </main><!-- Fin div main-->
        </div><!-- Fin div capa de fondo-->
    </section><!-- Fin fondo-->
</body>
</html>


