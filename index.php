<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Clima</title>
    <link rel="stylesheet" href="src/css/app.css">
</head>
<body>
<main>
    <div class="barra-busqueda">
        <form>
            <input class="barra" id="barraBusqueda" type="text" placeholder="Santiago de chile">
            <button type="submit" id="btnBuscar" class="btn buscar">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                    <path d="M21 21l-6 -6" />
                  </svg>
            </button>
        </form>
    </div>
    <div id="contenedor-mensaje">       
    </div>    
    <section class="clima-detalles">
        <div class="actual">
            <p id="ahora"></p>
            <h1 id="localización"></h1>
            <div class="detalles">
                <div class="detallesBasicos">
                    <img id="imagenClima" src="/src/img/loading-icon.gif" alt="logo clima">
                    <h2 id="descripciónClima"></h2>
                </div>
                <div class="detallesCompletos">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wind" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M5 8h8.5a2.5 2.5 0 1 0 -2.34 -3.24" />
                            <path d="M3 12h15.5a2.5 2.5 0 1 1 -2.34 3.24" />
                            <path d="M4 16h5.5a2.5 2.5 0 1 1 -2.34 3.24" />
                          </svg>
                          <h3 id="viento"></h3>
                    </div>                    
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-temperature" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M10 13.5a4 4 0 1 0 4 0v-8.5a2 2 0 0 0 -4 0v8.5" />
                            <path d="M10 9l4 0" />
                          </svg>
                          <h3 id="temperatura"></h3>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-droplet" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M7.502 19.423c2.602 2.105 6.395 2.105 8.996 0c2.602 -2.105 3.262 -5.708 1.566 -8.546l-4.89 -7.26c-.42 -.625 -1.287 -.803 -1.936 -.397a1.376 1.376 0 0 0 -.41 .397l-4.893 7.26c-1.695 2.838 -1.035 6.441 1.567 8.546z" />
                          </svg>
                        <h3 id="precipitaciones"></h3>
                   </div>
                    <div>
                        <h3>UV:</h3>
                         <h3 id="uv"></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="por-horas">
            <h2>Pronostico por horas</h2>
                <div id="horas" class="horas">
                </div>          
        </div>
    </section>  
    <section class="clima-dias">    
        <h2 class="titulo-dias">Pronostico por días</h2>   
            <section id="dias" class="contenedor-dias">
            </section>
    </section>
</main>    
<footer class="atribucion">
    <p>Sitio creado por <a target=”_blank” href="https://github.com/Pex-Dev">Pex-Dev</a></p>
</footer>
<script src="src/js/modernizr.js"></script>
<script src="src/js/obtenerPronostico.js"></script>
</body>
</html>