<!DOCTYPE html>

<html lang="es" data-bs-theme="">
<head >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PCB DE MÉXICO S DE RL MI </title> 
    <link rel="icon" type="image/x-icon" href="assets\imagenes\logoSinFondo.png ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="assets/js/JavaScript.js"></script>
    <link href="assets/css/Estilos.css" rel="stylesheet" />
    <script src="assets/js/ModoDL.js" > </script>
    include("Envio.php")
</head>
<body>
        <nav class="navbar navbar-expand-sm sticky-top" style="font-size:large ;background-color: black;">
            <div class="  container-fluid">                    
              <img src="assets\imagenes\logoSinFondo.png "  style="width:10%;">
               <div class="container ">
                   <ul class="nav nav-pills nav-tabs nav-justified">                         
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle material-symbols-outlined "href="index.html ">home</a>
                                   <ul class="dropdown-menu dropdown-content">
                                       <li><a class="dropdown-item" href="index.html#SMision">Misión </a></li>
                                       <li><a class="dropdown-item" href="index.html#Svision">Visión</a></li>
                                       <li><a class="dropdown-item" href="index.html#SNosotros">¿Quiénes somos? </a></li>
                                   </ul>        
                       </li>
                       <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle "  href="Servicios.html">Servicios</a>
                                    <ul class="dropdown-menu dropdown-content ">
                                        <li><a class="dropdown-item" href="Servicios.html#Fabricacion1">Fabricación de PCB´s            </a></li>                                            
                                        <li><a class="dropdown-item" href="Servicios.html#Ensamble">Ensamble de PCB´s                   </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Impresion">Impresión 3D                       </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Ingenieria">Ingeniería                        </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Stencil">Fabricacion de stencil               </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Proyectos">Desarrollo de proyectos            </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Prototipos">Fabricación de prototipos         </a></li>
                                        <li><a class="dropdown-item" href="Servicios.html#Iluminacion"> Iluminación y Retrofit          </a></li>
                               </ul>
                           </li>
                      <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="Productos.html">Productos</a>
                                   <ul class="dropdown-menu dropdown-content">
                                       <li><a class="dropdown-item" href="Productos.html#seccion1P" style="text-align:center;">Placas      </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion2P" style="text-align:center;">Brocas      </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion3P" style="text-align:center;">Tintas      </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion4P" style="text-align:center;">Flux        </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion5P" style="text-align:center;">Solvente   </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion6P" style="text-align:center;">Barniz      </a></li>
                                       <li><a class="dropdown-item" href="Productos.html#seccion7P" style="text-align:center;">Componentes </a></li>                                       
                                 </ul>
                            </li>
                           <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle " href="Cursos.html">Cursos</a>
                                     <ul class="dropdown-menu dropdown-content ">
                                          <li><a class="dropdown-item" href="Cursos.html#DirigiadoA" style="text-align:center;">¿Para quién está dirigido? </a></li>
                                          <li><a class="dropdown-item" href="Cursos.html#Kits" style="text-align:center;">Kits educativos</a></li>
                                          <li><a class="dropdown-item" href="Cursos.html" style="text-align:center;">¿Necesitas un curso?</a></li>
                                  </ul>
                           </li>
                       <li class="nav-item  " >
                       <a class="nav-link  " href="Contacto.html">Contacto </a>                                                                                          
                       </li>
                       <li class="nav-item dropdown" ><a class="nav-link dropdown-toggle" href="cotizador.html">Cotizador</a>
                           <ul class="dropdown-menu dropdown-content">
                               <li><a class="dropdown-item" href="cotizador.html#SecPCB">PCB´s </a></li>
                               <li><a class="dropdown-item" href="cotizador.html#CoImp">Impresion 3D</a></li>
                           </ul>
                       </li>
                       <li class="nav-item">
                      
                        <!-- aqui modo  -->
          <div class="dropdown   bd-mode-toggle">
           <a class="material-symbols-outlined nav-link"
                   id="bd-theme"             
                   aria-expanded="false"
                   data-bs-toggle="dropdown"
                   aria-label="Toggle theme (auto)">    settings_night_sight
             <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
             <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
          </a>
           <ul class="dropdown-menu dropdown-menu-end shadow dropdown-menu dropdown-content" aria-labelledby="bd-theme-text">
             <li>
               <a  class="dropdown-item  material-symbols-outlined" data-bs-theme-value="light" aria-pressed="false">
                 <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
                 light_mode
                 <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
               </a>
             </li>
             <li>
               <a  class="dropdown-item  material-symbols-outlined" data-bs-theme-value="dark" aria-pressed="false" style="align-items: center;">
                 <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
                 dark_mode
                 <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
               </a>
             </li>
             <li>
               <a  class="dropdown-item  active " data-bs-theme-value="auto" aria-pressed="true" style="align-items: center;">
                 <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
                 <i class="bi bi-circle-half" style="padding: 25%;"></i>
                 <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
               </a>
             </li>
           </ul>
         </div>
     
<!-- fin modo -->      
                       </li>
                 </ul>
           </div>
     </div>
</nav>
<form id="form1" method="post">
<div class="row" id="SecPCB" style=" padding-bottom:10%;padding-top:7%">

<p class="p3" style="font-size:48px;text-align:center;">Cotiza tus PCB's Aqui !! </p>
    <div class="col-sm-3"></div>
    <div class="col-sm-6"> 
       <label>Sube aquí tu archivo </label>
      <label for="btn-file" class=" contenedor-btn-file  material-symbols-outlined form-control "  data-bs-toggle="tooltip" title="Clic para cargar archivo" data-bs-placement="top"  style="text-align: center">
          upload
  <input type="file" id="btn-file" name="Archivo_PCB" class="contenedor-btn-file" accept=".pcbDoc,.zip,.rar,.cam,.g,.grbl" required/>
      </label>
  
        <label>Nombre:  </label>
        <input type="text" class="form-control" id="nombrePCB" placeholder="Ingresa tu nombre:" required/> 
       
        <label>
            Email:
        </label>
     <div class="input-group ">
       <input type="text" class="form-control " color="black" placeholder="Escriba aquí su Email" id="EmailUsuPCB" name="EmailUsu" required>
            <div class="input-group-append">
                <span class="input-group-text">@example.com</span>
            </div>
        </div>
        <label> Empresa:</label>
        <input type="text"class="form-control" id="Empresa" name="EmpresaPCB" placeholder="Ejemplo: PCB de México"  />
        <label> Teléfono de contacto:</label>
        <input type="number" id="NCel" name="TELPCB" class="form-control" placeholder="5555555555" required />
        <label>Cantidad de piezas:</label>
        <input type="number" class="form-control" id="CantidadP" name="CantidadPCB" placeholder="Ingrese cantidad"  min="1"required>

        <br />
        <div class="row">                  
            <a  data-bs-toggle="modal" data-bs-target="#MMaterial" style="text-align: justify-all;text-decoration:none;">
                <span data-bs-toggle="tooltip"title="Mas info" data-bs-placement="top"  class="material-symbols-outlined" >help </span> Material </a>
             <br />

    <div class="col-sm-2"> 
        <div class="form-check-inline ">
           <label class="form-check-label" for="rdCEM1">
               CEM-1<br />
                <input type="radio" onclick="desactivarFR4()" class="form-check-input p2" id="rdCEM1" name="rdMaterial" value="CEM-1" checked>
             </label>
       </div>
  </div>
     <div class="col-sm-2"> 
            <div class="form-check-inline" style="text-align: center;">
             <label class="form-check-label" for="rdFR4">
                         FR4 <br />
                    <input type="radio" class="form-check-input " onclick="activarFR4()" id="rdFR4" name="rdMaterial" value="FR4" >                 
                    </label>
                </div>
        </div>
   <div class="col-sm-2"> 
        <div class="form-check-inline ">
           <label class="form-check-label" for="rdAlu">
               Aluminio<br />
                <input type="radio" class="form-check-input p2" id="rdAlu" name="rdMaterial" value="Aluminio" onclick="Alum()">
             </label>
       </div>
  </div>

   </div>        
        <br />
      <div class="row">
            <label>Color de máscara antisoldante </label>
<div class="col-sm-2">
<div class="form-check-inline  "  >
  <label class="form-check-label" for="rdVerde"  >
      <a  data-bs-toggle="modal" data-bs-target="#PCBVerde">
          <span class="material-symbols-outlined"  title="Muestra de color Verde" data-bs-toggle="tooltip" data-bs-placement="top" >info </span></a>
      <br />Verde
      <input type="radio" class="form-check-input p1" id="rdVerde" name="rdColor" value="Verde" checked>
  </label>
</div>

</div>
<div class="col-sm-2"> 
<div class="form-check-inline ">
  <label class="form-check-label" for="rdAzul">
      <a data-bs-toggle="modal" data-bs-target="#PCBAzul">
          <span data-bs-toggle="tooltip"title="Muestra de color Azul"  data-bs-placement="top"class="material-symbols-outlined" >info </span></a>
      <br />Azul
      <input type="radio" class="form-check-input p2" id="rdAzul" name="rdColor" value="Azul">
  </label>
</div>
</div>
<div class="col-sm-2">
 <div class="form-check-inline ">
     <label class="form-check-label" for="rdblanco">
         <a  data-bs-toggle="modal" data-bs-target="#PCBBlanco">
          <span class="material-symbols-outlined"title="Muestra de color blanco " data-bs-toggle="tooltip" data-bs-placement="top">info </span></a>
         <br />Blanco
      <input type="radio" class="form-check-input p3" id="rdblanco" name="rdColor" value="Blanco">
  </label>
</div>
</div>          
 <div class="col-sm-2">
        <div class="form-check-inline ">
             <label class="form-check-label" for="rdnegro">
                <a  data-bs-toggle="modal" data-bs-target="#PCBNegro">
                    <span data-bs-toggle="tooltip" title="Muestra de color Negro "data-bs-placement="top" class="material-symbols-outlined" >info </span></a>
                 <br />Negro
            <input type="radio" class="form-check-input" id="rdnegro" name="rdColor" value="Negro">
            </label>
                 </div>
            </div>
    <div class="col-sm-4">
        <div class="form-check-inline ">
             <label class="form-check-label" for="rdSinM">
                <a  data-bs-toggle="modal" data-bs-target="#PCBSin">
                    <span data-bs-toggle="tooltip" title="Sin  mascara anti-soldante"data-bs-placement="top" class="material-symbols-outlined" >info </span></a>
                 <br />Sin máscara.
            <input type="radio" class="form-check-input" id="rdSinM" name="rdColor" value="Sin Mascara">
            </label>
                 </div>
            </div>
        </div>
        <br />
        <div class="row">
            <label>Serigrafia </label>
            <div class="col-sm-3">
               <div class="form-check-inline " >
                    <label class="form-check-label" for="rdBo">
                            <a  data-bs-toggle="modal" data-bs-target="#PCBSBo">
                            <span data-bs-toggle="tooltip" title="Muestra de serigrafia Bottom "data-bs-placement="top" class="material-symbols-outlined" >info </span></a>
                            <br />Bottom
                            <input type="checkbox" class="form-check-input" id="rdBo" name="rdSER" onchange="SerigrafiaN()" value="Serigrafia Bottom">
                    </label>
                 </div>
            </div>
            <div class="col-sm-2">
               <label class="form-check-label" for="rdTop">
                            <a  data-bs-toggle="modal" data-bs-target="#PCBSTop">
                            <span data-bs-toggle="tooltip" title="Muestra de serigrafia Top "data-bs-placement="top" class="material-symbols-outlined" >info </span></a>
                            <br />Top
                            <input type="checkbox" class="form-check-input" id="rdTop" name="rdSER" value="Serigrafia Top " onchange="SerigrafiaN()" checked>
                    </label>
                 </div>
            
            <div class="col-sm-4">
                         <label class="form-check-label" for="rdSinS">
                            <a  data-bs-toggle="modal" data-bs-target="#PCBNSSin">
                            <span data-bs-toggle="tooltip" title="Muestra de PCB sin serigrafia  "data-bs-placement="top" class="material-symbols-outlined" >info </span></a>
                            <br />Sin Serigrafia
                            <input type="checkbox" class="form-check-input" id="rdSinS" name="rdSER" value="Sin Serigrafia " onchange="SinSerigrafia() ">
                    </label>
                 </div>
            </div>
        
        <br />
        <div class="row"> 
            
                  <a title="Caras" data-bs-toggle="modal" data-bs-target="#Ncaras" style="text-align: justify">
<span data-bs-toggle="tooltip"title="Mas info" data-bs-placement="top"  class="material-symbols-outlined">help </span>
Numero de caras
</a>
<br />
<div class="col-sm-2">
<div class="form-check-inline">
<label class="form-check-label" for="rd1Cara">
    1 Cara                                      
    <input type="radio" class="form-check-input " id="rd1Cara" name="rdCaras" value="1 Cara" checked>
</label>
</div>
</div>
  <div class="col-sm-3">
        <div class="form-check-inline">
            <label class="form-check-label" for="rd2Caras">
            2 Caras 
            <input type="radio" class="form-check-input " id="rd2Caras" name="rdCaras" value="2 Caras" disabled >
            </label>
        </div>
     </div>
  </div>
        <br />
<div class="row">
    <a title="Espesor" data-bs-toggle="modal" data-bs-target="#Espesor" style="text-align: justify">
            <span data-bs-toggle="tooltip"title="Mas info" data-bs-placement="top"  class="material-symbols-outlined" >help </span>
        Elija el Espesor del material
        </a>
        <br />
    <div class="col-sm-3">             
        <div class="form-check-inline">
            <label class="form-check-label" for="rdG0.8">
                0.8mm                                     
                 <input type="radio" class="form-check-input " id="rdG0.8" name="rdG" value="0.8mm" disabled>
            </label>
        </div>
       </div>
    <div class="col-sm-3">
        <div class="form-check-inline">
            <label class="form-check-label" for="rdG1">
                1mm
                <input type="radio" class="form-check-input " id="rdG1" name="rdG" value="1mm" disabled >
            </label>
        </div>
        </div>
    <div class="col-sm-3">
        <div class="form-check-inline">
            <label class="form-check-label" for="rdG1.6">
                1.6mm
                <input type="radio" class="form-check-input " id="rdG1.6" name="rdG" value="1.6mm" checked>
            </label>
        </div>
     </div>
   <div class="col-sm-3">
       <div class="form-check-inline">
           <label class="form-check-label" for="rdG2.3">
               2.3mm
               <input type="radio" class="form-check-input " id="rdG2.3" name="rdG" value="2.3mm" disabled>
           </label>
       </div>
    </div>
</div>
        <br />
 <div class="row">
                 <a  data-bs-toggle="modal" data-bs-target="#Ozcobre" style="text-align: justify">
            <span data-bs-toggle="tooltip"title="Mas info" data-bs-placement="top"  class="material-symbols-outlined" >help </span>
            Elija las onzas de cobre
        </a>
        <br />
     <div class="col-sm-2">
        <div class="form-check-inline">
            <label class="form-check-label" for="rdOz.5">
                0.5 Oz                                     
                 <input type="radio" class="form-check-input " id="rdOz.5" name="rdOz" value="Opcion1" disabled>
            </label>
        </div>
     </div>
     <div class="col-sm-2">
        <div class="form-check-inline">
            <label class="form-check-label" for="rdOz1">
                1 Oz
                <input type="radio" class="form-check-input " id="rdOz1" name="rdOz" value="Opcion2" checked>
            </label>
        </div>
     </div>
     <div class="col-sm-2"> 
        <div class="form-check-inline">
            <label class="form-check-label" for="rdOz2">
                2 Oz
                <input type="radio" class="form-check-input " id="rdOz2" name="rdOz" value="Opcion3" disabled>
            </label>
        </div>
     </div>
    </div>
        <br />
        <div class="row">
             <a  data-bs-toggle="modal" data-bs-target="#PTHM" style="text-align: justify">
            <span data-bs-toggle="tooltip"title="Mas info" data-bs-placement="top"  class="material-symbols-outlined" >help </span>
            PTH
                </a>
   
        <select class="form-control" id="PTHS" name="PTHS">
            <option id="CSPTH" value="Sin PTH">Sin PTH</option>
            <option id="CPTH" disabled value="Con PTH">Con PTH</option>
            <option id="CMPTH" disabled value="Metalizado con plata">Metalizado con plata </option>
            <option id="OTPHT" value="Otro">Otro (Especifique en sección: Extras)</option>
        </select>
        </div>
            <div class="row ">    
                <label> Dimensiones del PCB:</label>
        <div class="col-sm-6">
           <label>X:</label> 
            <input class="form-control" type="number" id="LargoP" name="largoP" min="1"patter="^[0-9]+"  placeholder="Eje X " required/>
        </div>
        <div class="col-sm-6 ">
           <label>Y:</label>  
            <input type="number" id="AltoP" name="AltoP" class="form-control" min="1"patter="^[0-9]+"   placeholder="Eje Y"  required/>
        </div>
    </div>
        <div class="row">
             <label style="text-align:left "> Unidades</label><br />
            <div class="col-sm-2">
            <label class="form-check-label" for="Umm" > Cm </label>
            <input type="radio" class="form-check-input" name="Unidad"  id="Umm" checked value="Cm"/>
            </div>
            <div class="col-sm-2">
            <label class="form-check-label" for="Uin" > Inch </label>
            <input type="radio" class="form-check-input" name="Unidad" id="Uin" value="in" />
            </div>
        </div>
             <label for="sel1">Acabados mecánicos:</label>
        <select class="form-control" id="sel1" name="sellist1">
            <option value="Sin Acabados">Sin Acabado</option>
            <option value="Cortev-cut">corte v-cut</option>
            <option value="Router">Router </option>
            <option Value="Troquel">Troquel</option>
        </select>
         <label>Cantidad de diámetros a utilizar: </label>
        <input type="number" class="form-control " name="BrocasA" id="NDiametro"  placeholder="Ingrese cantidad:" min="1" pattern="^[0-9]+"/>
       <label >Cantidad de perforaciones:</label>
        <input type="number" class="form-control " id="Perf" name="Perforaciones" placeholder="Ingrese cantidad" min="1">
        <label >Especificaciones Extras:</label>
        <textarea class="form-control" id="lblExtras" name="SecExtras" type="text"  style=" border-radius: 12px" placeholder="Escriba Especificaciones Extras:"></textarea>
                    <br />
        <button onclick="NoCamposVaciosPCB()" name="BTN_ENVIAR_PCB" class="form-control"  style="vertical-align:50%;text-align:center;text-decoration:underline;background-color:#2e24b5;color:white"  role="button">Enviar  <i class="bi bi-send-check"></i>          </button>
</div>
</form>
</div>

<form id="Impresion"> 
<div class="row " Id="CoImp">
<p class="p3" style="text-align:center;font-size:48px">Cotiza tu Impresión 3D</p>
<div class="col-sm-3">

</div>
<div class="col-sm-6">
               <label>Sube aquí tu archivo </label>
      <label for="btnFileImpresion" class=" contenedor-btn-file2  material-symbols-outlined form-control "  data-bs-toggle="tooltip" title="Clic para cargar archivo" data-bs-placement="top"  style="text-align: center">
          upload
  <input type="file" id="btnFileImpresion"  class="contenedor-btn-file2" accept=".stl,.zip,.rar,.g,.grbl.step" required>
      </label>
  
        <label>Nombre:  </label>
        <input type="text" class="form-control" id="NombreI" placeholder="Ingresa tu nombre:" required/> 
       
        <label>
            Email:
        </label>
     <div class="input-group ">
       <input type="text" class="form-control " placeholder="Escriba aqui su Email " id="EmailUsuI" name="EmailUsu" required>
            <div class="input-group-append">
                <span class="input-group-text">@example.com</span>
            </div>
        </div>
        <label> Telefono de contacto:</label>
        <input type="number" id="NCelI"  class="form-control" placeholder="5555555555" required/>
        <label>Cantidad de piezas:</label>
        <input type="number" class="form-control" id="CantidadI" name="Cantidad" placeholder="Ingrese cantidad"  min="1" required>

        <br />
        <label for="selMaterialI">Elige el material:</label>
        <select class="form-control" id="selMaterialI" name="sellist1">
            <option>PLA</option>
            <option>ABS</option>
            <option>Flexibles</option>
            <option>Madera</option>
            <option>PET</option>
            <option>Otro (Especifique en sección: Extras)</option>
        </select>
       <label for="ColorMI">Selecciona un color:</label>
        <select class="form-control" id="ColorMI" name="sellist1">
            <option>Blanco</option>
            <option>Rojo</option>
            <option>Naranja </option>
            <option>Azul</option>
            <option>Negro</option>
            <option>Otro (Especifique en sección: Extras)</option>
        </select>

    <br />

    <label>Extras:</label>
    <textarea placeholder="Coloque detalles adicionales" class="form-control"style="border-radius:12px" ></textarea>
    <br />
    <div class="row"> 
        <div class="col-sm-6" style="text-align:right">
            <label>Porcentaje de escalado:</label>
        </div>
        <div class="col-sm-6">
            <input type="number" class="form-control" placeholder="100%" />
        </div>
    </div>
    <br />
    <button class="form-control" onclick="NoCamposVaciosImpresion()" style="background-color:#6a2992">Enviar <i class="bi bi-send-check"></i></button>
</div>
</form>
</div>

<!-- Modal PCB blanco  -->
<div class="modal" id="PCBBlanco">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Muestra de PCB color blanco  </h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <img src="assets/imagenes/PCB_Blanco_B.jpg" class="img-fluid" />
                <p> Contamos con dos tonalidades de blanco, al seleccionar blanco se obtendrá el acabado de la imagen superior, 
                    en caso de solicitar el blanco de la imagen inferior deberá incluir en la sección de extras <b>blanco-beige</b>.  </p>
                <img class="img-fluid" src="assets/imagenes/PCB_Blanco.jpg" />
                 <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>
           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- Modal PCB negro -->
<div class="modal" id="PCBNegro">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Muestra de PCB color Negro</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <img src="assets/imagenes/PCB_Negro.jpg" class="img-fluid" />
                 <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>
          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PCB Azul -->
<div class="modal" id="PCBAzul">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Muestra de PCB color Azul</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <img src="assets/imagenes/PCB_Azul.jpg" class="img-fluid"/>
                <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>           
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal PCB Verde-->
<div class="modal" id="PCBVerde">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Muestra de PCB color Verde</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>               
            <div class="modal-body ">
                <img src="assets/imagenes/PCB_Verde.jpg" class="img-fluid"/>
                <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>               
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>  
    <!-- Modal PCB sin mascara  -->
<div class="modal" id="PCBSin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PCB Sin Mascara</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">

                <p>Las placas electrónicas sin mascara no son recomendados en la actualidad a excepción de tratarse
                    de prototipos es cuando su uso puede ser omitido. </p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="MMaterial">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Elección de material</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
               <p>La elección del material para PCB´s sencillos suele tener relación al costo sin embargo para aplicaciones específicas es necesario elegir uno u otro 
                   por lo que deberá elegir el material adecuado a sus necesidades, en PCB de México manejamos 3 tipos de materiales

               </p> 
                <p><b >FR4:</b> se trata de resina epoxi reforzada con fibra de vidrio.</p>
                <p><b>CEM-1:  </b> consta de fibra de vidrio tejida y celulosa de papel entre la capa con refuerzo de resina epoxi de grado 1</p>
                <p><b>Aluminio</b> Es un sofisticado sustrato electrónico que combina una base metálica, normalmente de aluminio, con un FR-4 estándar</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="Ncaras">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Caras o capas de PCB.</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <p>las caras o capas de un PCB se tratan del número de laminados de cobre con los que cuenta, estas caras cuentan con las pistas y planos de señal
                    donde se conectarán los componentes por medio de soldadura.
                </p>
                <p>Las placas de 1 cara cuentan con un solo lado con laminado de cobre y el lado contrario únicamente está conformado por el material con el que está fabricada.</p>
                <p> Las placas doble cara cuentan con laminado de cobre en ambos lados y no dejan observar la composición sin embargo en placas doble cara solo se consiguen en material FR4</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
 
    <div class="modal" id="Espesor">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Espesor de material </h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
             <p> El espesor del material hace referencia en grosor del material con el que este compuesto.</p>
                <p>El espesor del material más utilizado suele ser en primer lugar el de 1.6mm seguido de valores como 0.8mm y 1mm aunque también se llegan a utilizar de 2.3mm </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="Ozcobre">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Onzas de cobre</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <p>
                 Las onzas de cobre hacen referencia al espesor del cobre por pie cuadrado (Oz/ft^2), el espesor del cobre se determina con la cantidad de corriente, tamaño de pistas, 
                    temperatura deseada, entre otros factores para placas más especializadas, sin embargo,
                    los valores habituales para placas en donde solo se manejan señales y corrientes bajas es de 1 Oz y 1/2 Oz                  
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="PTHM">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PTH</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <p>
                   El PTH (<b>Plating Through Hole</b>) proporciona conectividad confiable entre las capas del PCB promedio de metales altamente conductores como el cobre, oro y plata.                    </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="PCBSBo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PCB con serigrafia en lado Bottom</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
            <p>En el fascinante mundo de las PCB , algunas de una sola cara o incluso las de doble cara presentan una característica especial: la serigrafía Bottom Overlay.
                Aunque su uso no es tan común, desempeña un papel importante.<br />
                Inicialmente, esta serigrafía se emplea para identificar componentes SMT 
                (montaje en superficie) ubicados en la capa inferior de la PCB. Además, a veces se utilizan para añadir logotipos u otros elementos visuales.<br />
                Sin embargo, en los circuitos de potencia, la serigrafía Bottom Overlay adquiere un significado
                más profundo. En estos casos, se agrega como una capa aislante entre los terminales de alta tensión, como los que operan a 127 V o más.
                Esta precaución es crucial para garantizar la seguridad y el correcto funcionamiento de los circuitos.
                La imagen a continuación ilustra este concepto de manera visual:</p>
                <img class="img-fluid" src="assets/imagenes/SerigrafiaBotom.png" />
                <p>La omisión de esta capa es común, pero su costo no implica un gasto significativo. Sin embargo, su ausencia puede acortar el tiempo de entrega.</p>
                <img  class="img-fluid" src="assets/imagenes/SinSerigrafiabotom.png" />

               <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="PCBSTop">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PCB con serigrafia en lado Top</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
               <p> La serigrafía Top Overlay es ampliamente empleada debido a que exhibe la disposición de los componentes de tecnología True Hold en la mayoría de los casos. Además, se utiliza para marcar los componentes con sus designadores y proporcionar indicaciones relevantes. Asimismo, es común utilizarla para incorporar logotipos de la empresa, tal como se ilustra en la siguiente imagen.</p>
                <img class="img-fluid" src="assets/imagenes/Serigrafia%20topOverlay.png" />
                <p>En el caso de no ser necesaria se puede omitir, aunque no es recomendable ya que realmente el costo de fabricación cambiara muy poco y el resultado final es el de la imagen inferior </p>
                <img class="img-fluid" src="assets/imagenes/Sin%20SerigrafiaTopOverlay.png" />
                <p style="font-size:small" > <b style="text-decoration:underline">Nota:</b> El acabado final puede ser diferente al visto en pantalla debido a las especificaciones de cada monitor</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <div class="modal" id="PCBNSSin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">PCB sin Serigrafia</h4>
                <br />
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body ">
                <p>
                    Los PCB sin serigrafia no son recomendados en la actualidad a excepción de tratarse de prototipos es cuando su uso puede ser omitido. 
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
class CampoNumerico {
    constructor(selector) {
        this.nodo = document.querySelector(selector);
        this.valor = '';
        this.empezarAEscucharEventos();
    }

    empezarAEscucharEventos() {
        this.nodo.addEventListener('keydown', (evento) => {
            const teclaPresionada = evento.key;
            const teclaPresionadaEsUnNumero = Number.isInteger(parseInt(teclaPresionada));
            const sePresionoUnaTeclaNoAdmitida = !teclaPresionadaEsUnNumero && !['ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'Backspace', 'Delete', 'Enter'].includes(teclaPresionada);
            const comienzaPorCero = this.nodo.value.length === 0 && teclaPresionada === '0';

            if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                evento.preventDefault();
            } else if (teclaPresionadaEsUnNumero) {
                this.valor += String(teclaPresionada);
            }
        });

        this.nodo.addEventListener('input', () => {
            const cumpleFormatoEsperado = /^[0-9]+/.test(this.nodo.value);
            if (!cumpleFormatoEsperado) {
                this.nodo.value = this.valor;
            } else {
                this.valor = this.nodo.value;
            }
        });
    }
}

new CampoNumerico('#AltoP');
</script>

<script>
    class CampoNumerico1 {
        constructor(selector) {
            this.nodo = document.querySelector(selector);
            this.valor = '';
            this.empezarAEscucharEventos();
        }

        empezarAEscucharEventos() {
            this.nodo.addEventListener('keydown', (evento) => {
                const teclaPresionada = evento.key;
                const teclaPresionadaEsUnNumero = Number.isInteger(parseInt(teclaPresionada));
                const sePresionoUnaTeclaNoAdmitida = !teclaPresionadaEsUnNumero && !['ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'Backspace', 'Delete', 'Enter'].includes(teclaPresionada);
                const comienzaPorCero = this.nodo.value.length === 0 && teclaPresionada === '0';

                if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                    evento.preventDefault();
                } else if (teclaPresionadaEsUnNumero) {
                    this.valor += String(teclaPresionada);
                }
            });

            this.nodo.addEventListener('input', () => {
                const cumpleFormatoEsperado = /^[0-9]+/.test(this.nodo.value);
                if (!cumpleFormatoEsperado) {
                    this.nodo.value = this.valor;
                } else {
                    this.valor = this.nodo.value;
                }
            });
        }
    }

    new CampoNumerico1('#LargoP');
</script>


<script>
    class CampoNumerico2 {
        constructor(selector) {
            this.nodo = document.querySelector(selector);
            this.valor = '';
            this.empezarAEscucharEventos();
        }

        empezarAEscucharEventos() {
            this.nodo.addEventListener('keydown', (evento) => {
                const teclaPresionada = evento.key;
                const teclaPresionadaEsUnNumero = Number.isInteger(parseInt(teclaPresionada));
                const sePresionoUnaTeclaNoAdmitida = !teclaPresionadaEsUnNumero && !['ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'Backspace', 'Delete', 'Enter'].includes(teclaPresionada);
                const comienzaPorCero = this.nodo.value.length === 0 && teclaPresionada === '0';

                if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                    evento.preventDefault();
                } else if (teclaPresionadaEsUnNumero) {
                    this.valor += String(teclaPresionada);
                }
            });

            this.nodo.addEventListener('input', () => {
                const cumpleFormatoEsperado = /^[0-9]+/.test(this.nodo.value);
                if (!cumpleFormatoEsperado) {
                    this.nodo.value = this.valor;
                } else {
                    this.valor = this.nodo.value;
                }
            });
        }
    }

    new CampoNumerico2('#CantidadP');
</script>

<script>
    class CampoNumerico3 {
        constructor(selector) {
            this.nodo = document.querySelector(selector);
            this.valor = '';
            this.empezarAEscucharEventos();
        }

        empezarAEscucharEventos() {
            this.nodo.addEventListener('keydown', (evento) => {
                const teclaPresionada = evento.key;
                const teclaPresionadaEsUnNumero = Number.isInteger(parseInt(teclaPresionada));
                const sePresionoUnaTeclaNoAdmitida = !teclaPresionadaEsUnNumero && !['ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'Backspace', 'Delete', 'Enter'].includes(teclaPresionada);
                const comienzaPorCero = this.nodo.value.length === 0 && teclaPresionada === '0';

                if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                    evento.preventDefault();
                } else if (teclaPresionadaEsUnNumero) {
                    this.valor += String(teclaPresionada);
                }
            });

            this.nodo.addEventListener('input', () => {
                const cumpleFormatoEsperado = /^[0-9]+/.test(this.nodo.value);
                if (!cumpleFormatoEsperado) {
                    this.nodo.value = this.valor;
                } else {
                    this.valor = this.nodo.value;
                }
            });
        }
    }

    new CampoNumerico3('#Perf');
</script>


<script>
    class CampoNumerico4 {
        constructor(selector) {
            this.nodo = document.querySelector(selector);
            this.valor = '';
            this.empezarAEscucharEventos();
        }

        empezarAEscucharEventos() {
            this.nodo.addEventListener('keydown', (evento) => {
                const teclaPresionada = evento.key;
                const teclaPresionadaEsUnNumero = Number.isInteger(parseInt(teclaPresionada));
                const sePresionoUnaTeclaNoAdmitida = !teclaPresionadaEsUnNumero && !['ArrowDown', 'ArrowUp', 'ArrowLeft', 'ArrowRight', 'Backspace', 'Delete', 'Enter'].includes(teclaPresionada);
                const comienzaPorCero = this.nodo.value.length === 0 && teclaPresionada === '0';

                if (sePresionoUnaTeclaNoAdmitida || comienzaPorCero) {
                    evento.preventDefault();
                } else if (teclaPresionadaEsUnNumero) {
                    this.valor += String(teclaPresionada);
                }
            });

            this.nodo.addEventListener('input', () => {
                const cumpleFormatoEsperado = /^[0-9]+/.test(this.nodo.value);
                if (!cumpleFormatoEsperado) {
                    this.nodo.value = this.valor;
                } else {
                    this.valor = this.nodo.value;
                }
            });
        }
    }

    new CampoNumerico4('#NDiametro');
</script>

    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>

<script src="assets\js\JavaScript.js"> </script>


<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
<a  href="https://wa.me/525526908734" > <i class="bi bi-whatsapp boton-Flot-Wsp active " data-bs-toggle="tooltip" title="Te podemos ayudar?" data-bs-placement="right" style="font-size:400%;text-align:center;justify-content:center;"></i></a> 
        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
<br />
<div class="footer row p3 " style="background-image:url(assets\imagenes\logoSinFondo.png)" >
<div class="col-sm-4 " >
<div><a class="footext" href="index.html"        style="padding-left:5%" ><b>Inicio                 </b></a></div>    
<div><a class="footext" href="index.html#SMision"       style="padding-left:10%"> Misión                       </a></div> 
<div><a class="footext" href="index.html#Svision"       style="padding-left:10%">Visión                       </a></div>
<div><a class="footext" href="index.html#SNosotros"     style="padding-left:10%">Nosotros                      </a></div>        
<div><a class="footext" href="Servicios.html"        style="padding-left:5%"><b>Servicios              </b></a></div>
<div><a class="footext" href="Servicios.html#Fabricacion1"       style="padding-left:10%">Fabricación de PCB´s          </a></div>
<div><a class="footext" href="Servicios.html#Ensamble"           style="padding-left:10%">Ensamble de PCB´s             </a></div>
<div><a class="footext" href="Servicios.html#Impresion"          style="padding-left:10%">Impresión 3D                  </a></div>
<div><a class="footext" href="Servicios.html#Ingenieria"         style="padding-left:10%">Ingeniería                    </a></div>
<div><a class="footext" href="Servicios.html#Stencil"            style="padding-left:10%">Fabricacion de stencil        </a></div>
<div><a class="footext" href="Servicios.html#Proyectos"          style="padding-left:10%">Desarrollo de proyectos       </a></div>
<div><a class="footext" href="Servicios.html#Prototipos"         style="padding-left:10%">Fabricación de prototipos     </a></div>
<div><a class="footext" href="Servicios.html#Iluminacion"        style="padding-left:10%">Iluminación y Retrofit        </a></div>

</div>
<div class="col-sm-4">
<div><a class="footext" href="Productos.html" style="padding-left:5%"><b>Productos                  </b></a></div>
<div><a class="footext" href="Productos.html#seccion1P" style="padding-left:10%">Placas                 </a></div>
<div><a class="footext" href="Productos.html#seccion2P" style="padding-left:10%">Brocas                 </a></div>
<div><a class="footext" href="Productos.html#seccion3P" style="padding-left:10%">Tintas                 </a></div>
<div><a class="footext" href="Productos.html#seccion4P" style="padding-left:10%">Flux                   </a></div>
<div><a class="footext" href="Productos.html#seccion5P" style="padding-left:10%">Solvente               </a></div>
<div><a class="footext" href="Productos.html#seccion6P" style="padding-left:10%">Barniz                 </a></div>       
<div><a class="footext" href="Productos.html#seccion7P" style="padding-left:10%">Componentes            </a></div>
<div><a class="footext" href="Cursos.html" style="padding-left:5%"><b>Cursos                        </b></a></div>
<div><a class="footext" href="Cursos.html#DirigiadoA" style="padding-left:10%">¿Aquien estan dirigidos?            </a></div>

<div><a class="footext" href="Cursos.html#Kits" style="padding-left:10%"><b> Kits Educativos: </b>                       </a></div>      
</div>

<div class="col-sm-4">
<div><a class="footext" href="Contacto.html" style="padding-left:5%"><b>Contacto </b></a></div>
<div><a class="footext" href="mailto:ventas@pcbdemexico.com.mx" style="padding-left:10%">ventas@pcbdemexico.com.mx</a> </div>
<div><a class="footext" href="mailto:ventas@pcbdemexico.com.mx" style="padding-left:10%">compras@pcbdemexico.com.mx</a> </div>
<div><a class="footext" href="mailto:ventas@pcbdemexico.com.mx" style="padding-left:10%">ingenieria@pcbdemexico.com.mx</a></div>
<div><a class="footext" href="https://www.facebook.com/PCBdeMexicoSdeRLMI/about/" style="padding-left:10%"> <i class="bi-facebook" style="font-size:48px;padding-right:3%"></i></a>     
     <a class="footext" href="https://wa.me/525526908734"><i class="bi bi-whatsapp" style="font-size:48px;padding-right:1%"> </i></a>
     <a class="footext" href="https://maps.app.goo.gl/2eekTtnnNcKfZ3E16"><i class="bi bi-geo-alt-fill" style="font-size:48px;padding-right:2%"></i> </a></div>
<label style="padding-left:5%"> Fresa 37, Granjas Familiares, 55874 Tepexpan, Méx. </label>
</div>  
</div>
<div style="text-align:center; background-color:rgb(92, 109, 107);color:white;padding:1%"> © 2024  PCB de Mexico S DE RL MI | Todos los Derechos Reservados </div>



</body>
</html>