<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Ventanilla</title>
    <link rel="stylesheet" href="assets/css/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <table class="tableh">
            <tr>
              <th style="width: 25%;border: 0px;">
                <div id="logo">
                  <img src="assets/images/logo.jpg">
                </div>
              </th>
              <th style="width: 50%;border: 0px">
                <h3><b>MUTUAL DE SERVICIOS AL POLICÍA<br>
                    DIRECCIÓN DE BENEFICIOS ECONÓMICOS<br>
                    UNIDAD DE FONDO DE RETIRO POLICIAL INDIVIDUAL<br>
                    GESTIÓN 2016</b></h3>
              </th>
              <th style="width: 25%;border: 0px">
                <div id="logo2">
                  <img src="assets/images/escudo.jpg">
                </div>
              </th>
            </tr>
      </table>

      <h1><b>VENTANILLA DE ATENCIÓN AL AFILIADO<br>FONDO DE RETIRO POLICIAL INDIVIDUAL</b></h1>
      
      <table class="tablet">
        <tr>
          <td style="width: 60%;border: 0px;">
            <div class="title"><b>I. DATOS GENERALES</b></div>
          </td>
          <td style="width: 40%;border: 0px;text-align:right;">
            <div class="title">Fecha de Emisión: La Paz, {!! $date !!}</div>
          </td>
        </tr>
      </table>

      <div id="project">
        <table>
            <tr>
              <th class="service">SOLICITANTE</th>
              <td class="info">{!! $solicitante->getFullNametoPrint() !!}</td>
            </tr>
            <tr>
              <th class="service">TITULAR</th>
              <td class="info">{!! $afiliado->getFullNametoPrint() !!}</td>
            </tr>
            <tr>
              <th class="service">PARENTESCO DEL TITULAR</th>
              <td class="info">{!! $solicitante->getParentesco() !!}</td>
            </tr>
            <tr>
              <th class="service">CARNET DE IDENTIDAD</th>
              <td class="info">{!! $solicitante->ci !!}</td>
            </tr>
            <tr>
              <th class="service">FECHA DE NACIMIENTO</th>
              <td class="info">{!! $solicitante->getFullDateNactoPrint() !!}</td>
            </tr>
            <tr>
              <th class="service">DIRECCIÓN DE DOMICILIO</th>
              <td class="info">{!! $solicitante->getFullDireccDomitoPrint() !!}</td>
            </tr>
            <tr>
              <th class="service">TELEFONO DOMICILIO</th>
              <td class="info">{!! $solicitante->tele_domi !!}</td>
            </tr>
            <tr>
              <th class="service">TELEFONO CELULAR</th>
              <td class="info">{!! $solicitante->celu_domi !!}</td>
            </tr>
            <tr>
              <th class="service">CIUDAD</th>
              <td class="info"></td>
            </tr>
          </table>
      </div>

     <table class="tablet">
        <tr>
          <td style="width: 60%;border: 0px;">
            <div class="title"><b>II. REQUISITOS PRESENTADOS</b></div>
          </td>
         
        </tr>
      </table>

      <div id="project">
          <table>
           <tr>
              <th class="grand service">NRO</th>
              <th class="grand service">REQUISITO</th>
              <th class="grand service">PRESENTADO</th>
              <th class="grand service">FECHA DE PRESENTACIÓN</th>
            </tr>
            <?php $i=1; ?>
             @foreach ($documentos as $item)
            <tr>
              <td class="info">{!! $i !!}</td>  
              <td class="info">{!! $item->requisito->name !!}</td>
               @if ($item->est == 1)
                  <td class="info">a{!! Form::checkbox('name', 'value', true) !!}

               @else
                  <td class="info">{!! Form::checkbox('name', 'value', false) !!}
               @endif
              <td class="info">{!! $item->fech_pres !!}
           
            </tr>
            <?php $i++; ?>
            @endforeach
            
          </table>
      </div>


    </header>
    <footer>
      MUTUAL DE SERVICIOS AL POLICIA
    </footer>
  </body>
</html>