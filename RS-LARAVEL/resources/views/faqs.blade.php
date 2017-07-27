<!DOCTYPE html>
<html>
<head>
	<title>Faqs</title>
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/faqs.css') }}">

	<link rel="icon" type="image/png" href="grafica/icono.png">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<!--     HEADER    -->

@include('header')

<!--     SECTION   -->


 <div class="container">

  <div class="col-md-4">
  <h1>PREGUNTAS FRECUENTES</h1>
  </div>
  <div class="col-md-8">
    <div class="tab-content panels-faq">
      <div class="tab-pane active" id="tab1">
        <div class="panel-group" id="help-accordion-1">
          <div class="panel panel-default panel-help">
            <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Como me registro?</h3>
              </div>
            </a>
            <div id="opret-produkt" class="collapse">
              <div class="panel-body">
                <p>Para registrarte en elroperosolidario.com, sólo tenés que completar el siguiente <a href="registro" style="color: blue">formulario</a>. De esta manera el sistema generará un usuario y contraseña con los que podrás ingresar en las visitas futuras. Una vez que seas usuario registrado de elroperosolidario.com podrás seleccionar productos como favoritos y recibir información sobre nuestros descuentos y promociones.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Cuentan con Políticas de Seguridad que garanticen mi compra?</h3>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>En elroperosolidario.com te garantizamos la seguridad de todas tus compras online, manteniendo tus datos bajo la más estricta confidencialidad.<br>Gracias al respaldo de SSL (Secure Socket Layer) el sistema de seguridad utilizado por elroperosolidario.com, te aseguramos cada transacción electrónica que realices en nuestra página web. Tu información personal será cifrada y no podrá ser leída ni utilizada por terceros mientras realices una compra. A su vez, elroperosolidario.com te asegura que dichos datos no saldrán de la compañía, manejándolos con total responsabilidad, de manera absolutamente confidencial y conforme a lo dispuesto por la legislación vigente.</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#ret-pris" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Cómo comprar online?</h3>
              </div>
            </a>
            <div id="ret-pris" class="collapse">
              <div class="panel-body">
                <ol>Para realizar una compra desde elroperosolidario.com deberás seguir los siguientes pasos: <br><br>

                  <li>Seleccioná el producto y hacé clic en el botón de "Comprar". Serás redireccionado al carrito de compras.</li>
                  <li>En el caso de que el producto cuente con el beneficio de la garantía de reparación tendrás la opción de sumarla también. Dicho costo se adicionará al monto ya acumulado dentro del total de tu compra.</li>
                  <li>Completa la direccion de entrega.</li>
                  <li>Completá los datos de forma de pago, seleccionando entre las diferentes tarjetas de crédito habilitadas con sus respectivas cuotas y promociones.</li>
                  <li>Completá los datos del titular de la tarjeta de crédito y el domicilio de facturación (si seleccionaste como método de entrega “Envío a domicilio”, podés la misma dirección si necesidad de completar los datos).</li>
                  <li>Si seleccionaste como método de entrega “Envío a domicilio”, deberás completar el formulario para validar tu identidad.</li>
                  <li>Tu compra se ha realizado con éxito. ¡Sólo resta que recibas o retires tu pedido, según la modalidad de entrega que hayas elegido!.</li>

                </ol>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#slet-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Puedo obtener una factura A de mi compra?</h3>
              </div>
            </a>
            <div id="slet-produkt" class="collapse">
              <div class="panel-body">
                <p>Las compras en elroperosolidario.com se emiten con Factura B a consumidor final. Si necesitas realizar una compra donde la factura sea con comprobante A te recomendamos que te contactes con el centro de ventas telefónicas llamando al 0810-222-4272.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#opret-kampagne" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Cuales son las condiciones de entrega?</h3>
              </div>
            </a>
            <div id="opret-kampagne" class="collapse">
              <div class="panel-body">
                <p>La entrega se realizará en el día, horario y domicilio elegidos durante la compra. Para modificar alguno de estos datos, te podes comunicar con el Centro de Atención a Clientes. <br>
                  Recepción del pedido: el receptor deberá ser mayor de 18 años, exhibir DNI y la factura de compra. Para compras vía web, podrá recibirlo el titular o un autorizado registrado durante la compra. <br>
                  En todos los envíos a domicilio es necesario que el receptor firme el remito de entrega en papel y/o en la aplicación móvil. <br>
                  Desde que recibís tu pedido, contás con cinco días hábiles para realizar una devolución o un cambio a través de: </p>
                  <ul>
                  <li>Nuestro Centro de Atención a Clientes Online</li>
                  <li>Llamando al 4588-7000</li>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#prob-ent" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Que pasa si ocurre algun problema con la entrega?</h3>
              </div>
            </a>
            <div id="prob-ent" class="collapse">
              <div class="panel-body">
                <p>Si no podemos concretar la entrega, te contactaremos para pactar una nueva visita. <br> Recordá que si el producto no se encuentra en condiciones o no cumple con tus expectativas podés rechazarlo en el momento de la entrega. Va a ser necesario que firmes el remito indicando los motivos del rechazo, y luego te contactaremos para coordinar una nueva entrega.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#cas-prod" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Debo estar en mi casa para cuando llegue el producto?</h3>
              </div>
            </a>
            <div id="cas-prod" class="collapse">
              <div class="panel-body">
                <p>No es necesario, el producto podrá recibirlo cualquier persona mayor de 18 años, exhibiendo DNI y la CONFIRMACIÓN DE LA COMPRA enviada por correo electrónico – (podes mostrarla en formato digital)
                </p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#pag-hab" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Se puede pagar mitad crédito y otra parte en débito o efectivo?</h3>
              </div>
            </a>
            <div id="pag-hab" class="collapse">
              <div class="panel-body">
                <p>No, solo se puede comprar con un medio de pago habilitado.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#loc-cal" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Tienen algun local a la calle?</h3>
              </div>
            </a>
            <div id="loc-cal" class="collapse">
              <div class="panel-body">
                <p>No, elroperosolidario.com es una tienda unicamente online. Todos los productos son comprados a traves de esta pagina y enviados al domicilio que el comprador indique.</p>
              </div>
            </div>
          </div>

          <div class="panel panel-default panel-help">
            <a href="#env-pai" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading">
                <h3>¿Hacen envios a todo el pais?</h3>
              </div>
            </a>
            <div id="env-pai" class="collapse">
              <div class="panel-body">
                <p>Si, hacemos envios a todo el pais. Tambien hacemos envios a Chile, Uruguay y Brasil.
                </p>
              </div>
            </div>
          </div>
        </div>



    </div>
    </div>
  </div>
</div>

<script type="text/javascript">

</script>

<!--     FOOTER   -->

@include('footer')

</body>

</html>
