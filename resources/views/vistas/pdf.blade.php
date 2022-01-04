<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cotizacion</title>
    <!-- ESTILOS -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/pdf.css" type="text/css" />

</head>
<body> 

  <header>
    <table style="width: 100%">
      <tr>
       <th rowspan="2" style="text-align: center"><img src="images/PDF/alanpdf.jpg" alt="" width="150px" height="70px"></th>
       <th rowspan="2" class="titulo"><b>COTIZACIÓN DE SERVICIO DE ENSAYO </b></th>
       <th colspan="3" class="texto">Código: <br> <p class="textodos"> ALAN-PRDC-06.01 </p></th>
      </tr>
       
       <tr>
         <td class="texto">No. Rev. <br> <p class="textodos">04</p></td>
         <td class="texto">Fecha de emisión: <br><p class="textodos">05 Jun 2021</p></td>
         <td class="texto">pág: <br> <p class="textodos">1 de 2</p></td>
       </tr>
     </table>
</header>

<footer>
  <p id="pie">
    C. MUNICIPIO DE CALVILLO NO. 129, ESQUINA CIRCUITO AGUASCALIENTES NORTE, PARQUE INDUSTRIAL DEL VALLE DE AGUASCALIENTES (PIVA), C.P. 20355. 
    SAN FRANCISCO DE LOS ROMO, AGUASCALIENTES, MÉXICO
    TEL. (449) 973-53-31 Y 973-54-17, E-MAIL: laboratorio@alanfunciona.com
    “QUEDA PROHIBIDA LA REPRODUCCIÓN TOTAL O PARCIAL DE ESTE DOCUMENTO SIN LA PREVIA AUTORIZACION DEL LABORATORIO DE INVESTIGACIÓN ALAN”
  </p>
</footer>

<main>
   <div class="cuerpo">
    <?php
      //$hoy = date ( format [timestamp] );
      //setlocale(LC_ALL,"es_ES");  
      $dia = date("d"); 
      $mes = date("m"); 
      $año = date("Y"); 
    ?>
      <p id = "fecha"> Aguascalientes, Ags. a <?php echo $dia ?> de <?php echo $mes ?> de <?php echo $año ?></p>

      <p><b>Atención: {{$nombre}}</b></p>

      <p><b>{{$empresa}} <br> {{$pais}}</b> <!--<br> RFC--></p>

      <p><b> P R E S E N T E</b></p>

      <p id ="asunto"> Asunto: Cotización No. XXXXXXXXX <!--<br> No. Cliente ####--> </p>

      <p>En Atención a su escrito con fecha del <b>XX</b> de <b>MES</b> del año en curso donde amablemente solicita a la 
        evaluación de <b>NOMBRE DEL PRODUCTO</b> bajo la <b>NOM-XXX-CONAGUA-AÑO “{{$norma}}”</b> le envío la siguiente 
        cotización.</p>

        <table style="width: 100%">
          <tr>
            <th scope="col"><B>CLAVE</B></th>
            <th scope="col"><B>SERVICIO</B></th>
            <th scope="col"><B>COSTO</B></th>
            <th scope="col"><B>PRODUCTO</B></th>
            <th scope="col"><B>TIPO</B></th>
            <th scope="col"><B>MARCA</B></th>
            <th scope="col"><B>MODELO</B></th>
            <th scope="col"><B>PAIS DE ORIGEN</B></th>
            <th scope="col"><B>COSTO TOTAL</B></th>
          </tr>
          
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>

        <table id = "importe">
          <tr>
            <th class="textodos" colspan="2"><B>IMPORTE</B></th>
          </tr>

          <tr>
            <td class="sinborde" style="padding-right: 90px;"><b>SUBTOTAL</b></td>
            <td class="sinborde"><b>$ 00,000</b></td>
          </tr>

          <tr>
            <td class="sinborde"><b>IVA 16%</b></td>
            <td class="sinborde"><b>$ 00,000</b></td>
          </tr>

          <tr>
            <td class="sinborde"><b>TOTAL</b></td>
            <td class="sinborde"><b>$ 00,000</b></td>
          </tr>
        </table>

        <p class="textodos">NOTAS</p>
        <p> <b>Nota 1:</b> Esta cotización aplica para Regaderas en Inicio, Renovación o Vigilancia de Certificación (5 piezas por modelo), así mismo aplica para Válvulas Grifos y Monomandos para Inicio de Certificación (3 pieza por modelo), para Válvulas Grifos y Monomandos para Vigilancia o Renovación (1 pieza por modelo), para Fluxómetros en Inicio y Renovación de certificación (3 piezas por modelo), para vigilancia (5 piezas por modelo) . La fecha de entrega de resultados se calculará a partir de la entrega de las muestras en las instalaciones del Laboratorio de ensayo. 
          <br><b>Nota 2:</b> el cliente solicite una declaración de conformidad con los requisitos o especificaciones que requiera, debe indicar la especificación particular y si hace referencia a una Norma especifica. En este caso es necesario documentar la regla de decisión aplicada por parte del Laboratorio, teniendo en cuenta el nivel de riesgo asociado y especificar a qué resultados aplica.
          <br><b>Nota 3:</b> Una vez elaboradas las pruebas o los ensayos el Cliente dispone de 30 días hábiles para la reclamación de las muestras utilizadas o en su caso el Laboratorio dispondrá de ellas para los fines que más convengan.<b> El costo ocasionado por la devolución de las muestras correrá por cuenta del cliente.</b> 
          <br><b>Nota 4:</b> El Cliente debe estar consciente de que las pruebas o ensayos pueden dejar inutilizables las muestras tanto física como funcionalmente. Las muestras se regresan tal y como salen de las pruebas o ensayos (sin limpiar).
          <br><b>Nota 5:</b> El Laboratorio de Investigación Alan se compromete a asegurar en todo momento la Integridad y Confidencialidad de los documentos que proporciona el cliente, así como el de los resultados de las pruebas realizadas, y a garantizar que la información del proceso de ensayo es de uso Exclusivo del Laboratorio y para los efectos que el mismo proceso requiera y de su protección. En caso necesario, los resultados únicamente se dan a conocer a las Autoridades Normalizadoras y Entidad Involucrada en la vigilancia de la acreditación, situación que sedara a conocer al cliente en todo momento. Dichos compromisos establecidos por el Laboratorio de ensayo puede consultarlos en la Política de Privacidad, misma que está disponible para su consulta en el momento que el cliente lo considere necesario.
          <br><b>Nota 6:</b> Se comunica al cliente que tiene el derecho de presentar una queja ante el laboratorio de ensayo, vía telefónica, por escrito, vía correo electrónico o personalmente, alusiva al servicio recibido cuando así lo requiera. El laboratorio garantiza que dicha inconformidad será atendida y notificará al cliente las acciones procedentes, conforme a lo establecido en la Ley de Infraestructura de la Calidad Las partes aceptan que cualquier gasto que resulte de la investigación, deberá ser pagado por la parte que resulte responsable.
          <br><b>Nota 7:</b> Número de acreditación y vigencia, así como de la aprobación otorgado por CONAGUA. Laboratorio de ensayo acreditado por ema con acreditación No MM-0946-147/18, vigente a partir del 19 de Abril de 2018, Aprobado por la CONAGUA con No. de aprobación B00.4.005.-020 vigente a partir del 25 de Mayo de 2021.
          <br><b>Requerimientos:</b> una vez autorizada y firmada la cotización se le solicitará el envío de muestras, así como los documentos relativos al etiquetado, Instructivo y fotos del producto <b>vía electrónica (email).</b>
          <br><b>Nota 8:</b> En caso de que el Cliente cancele el servicio de Pruebas una vez  iniciado el proceso de ensayo, deberá pagar el 50% del costo total del Servicio.
          <br><b>Nota 9:El tiempo de entrega de resultados es de 30 a 45 días </b> partir de la entrega de las muestras y documentación completa, ya que en caso de no entregar información completa el tiempo de entrega se retrasa. Si la documentación comercial solicitada no es recibida antes o junto con las muestras, el Laboratorio no se compromete a iniciar con los ensayos y a enviar los informes de resultados al cliente.
          <br><b>Nota 10:</b> En caso de requerirse alguna modificación al alcance del servicio, se procederá a elaborar una cotización complementaria la cual debe revisarse y aceptarse por ambas partes y realizarse la revisión de contrato correspondiente.
          Agradeceré realice anticipadamente el pago correspondiente a la cuenta BANAMEX CLABE 002010065801054149 O BANCOMER CLABE 012010004424835055  y envíe el comprobante correspondiente al correo laboratorio@alanfunciona.com  para atender sus evaluaciones en el Laboratorio de Investigación Alan y poder entregar el informe de ensayo correspondiente, ubicado en C. Municipio de Calvillo No. 129, Esquina Circuito Aguascalientes Norte, Parque Industrial del Valle de Aguascalientes (PIVA), C.P. 20355. San Francisco de los Romo, Aguascalientes, México. En caso de no contar con el pago respectivo, no se hará entrega de los informes.
          
          <br>Vigencia de la Cotización: <b>XX de MES de AÑO</b>.
          </p>

          <div id="contenedor">

            <div>
              <p>ATENTAMENTE</p>
              <img src="images/PDF/alanfirma.png" alt="" width="110px" height="80px">
              <p>Ing. Juan de Dios Pérez Galván <br> Gerente Operativo <br> Laboratorio de Investigación Alan
                <br> Tels. (449) 973-54-17 <br> E-mail: laboratorio@alanfunciona.com</p>
              <!--  
              <table>
                <tr>
                  <td>ATENTAMENTE</td>
                </tr>
                <tr>
                  <td><img src="images/PDF/alanfirma.png" alt="" width="100px" height="150px"></td>
                </tr>
                <tr>
                  <td>
                    Ing. Juan de Dios Pérez Galván <br> Gerente Operativo <br> Laboratorio de Investigación Alan
                    <br> Tels. (449) 973-54-17 <br> E-mail: laboratorio@alanfunciona.com</td>
                </tr>
              </table>-->
            </div>


            <div class="fin">
              <p>Aceptación del cliente</p>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <p>NOMBRE <br> PUESTO Y FIRMA <br>FECHA</p>
             <!-- <table>
                <tr>
                  <td>Aceptación del cliente</td>
                </tr>
                <tr>
                  <td></td>
                </tr>
                <tr>
                  <td>NOMBRE <br> PUESTO Y FIRMA <br>FECHA</td>
                </tr>
              </table>-->
            </div>
        </div>

   </div>
  </main>
</body>
</html>