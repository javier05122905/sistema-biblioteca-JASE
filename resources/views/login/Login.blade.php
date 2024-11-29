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

    <section class="fondo">
        <div class="capa-fondo">

            <main class="contenedor">

                <div class="contenido">

                    <h1>Bienvenido nuevo usuario </h1>

                    <form class="formulario">

                        <div class="campo1"><label class="campo__label email" for="email">Correo Electrónicoo</label></div>
                        <div class="campo2"><input class="campo__field email-field" type="email" placeholder="Ingresa tu correco electrónico"
                                id="email"></div>
                        <div class="campo1"><label class="campo__label contraseña" for="password">Contraseña</label>
                        </div>
                        <div class="campo2"><input class="campo__field contraseña-field" type="password"
                                placeholder="Ingresa tu contraseña" id="password"></div>
                        <div class="campo3"><a href="{{ route('registro') }}" class="boton boton--secundario">Crear-cuenta</a></div>
                        <div class="campo4"><a href="{{ route('inicio2') }}" class="boton boton--primario">INGRESAR</a></div>
                        

                    </form>
                </div> <!-- Fin div contendio-->
            </main><!-- Fin div main-->
        </div><!-- Fin div capa de fondo-->
    </section><!-- Fin fondo-->






</body>
</html>