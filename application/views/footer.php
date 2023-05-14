      <div class="row">
        <div class="container" style="background-color: white;">
          <div class="col-md-3">
            <h3><b>Dirección</b></h3>
            Av. Simón Rodríguez s/n Barrio El Ejido Sector San Felipe.<br>
            Latacunga - Ecuador.
          </div>
          <div class="col-md-9 text-right" >
              <div id="mapaDireccion" style="width:100%; height: 600px;"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="container" style="background-color: white;">
          <div class="col-md-6 text-center">
            <h3><b>Contacto</b></h3>
            0999999999<br>
            (00)000-0000
          </div>
          <div class="col-md-6 text-center" >
            <h3><b>Horario</b></h3>
            lun:	07:00–17:30<br>
            mar:	07:00–17:30<br>
            mié:	07:30–17:30<br>
            jue:	07:30–17:30<br>
            vie:	07:30–16:30<br>
            <br>
          </div>
        </div>
        <hr>
      </div>

      <div class="row"
      style="background-color:#333333; color:white; padding:20px">
        <div class="col-md-6 text-center">
          <h4>
            <b>UNIVERSIDAD TECNICA DE COTOPAXI</b>
          </h4>
        </div>
        <div class="col-md-6 text-center">
          <h4>
            Desarrollado por JavAsan
          </h4>
        </div>
        <div class="col-md-12 text-center">
          <hr>
        </div>
        <div class="col-md-12 text-center">
          <h4>
            Todos los derechos reservados &copy;
          </h4>
        </div>
      </div>
    </div>
    <script type="text/javascript">
              function initMap(){
                  // CREANDO EL PUNTO CENTRAL DEL MAPA
                  // importar la latitud y longitus de google maps
                  var coordenadaCentral = new google.maps.LatLng(-0.91764, -78.63303);
                  //creando el mapa
                  var mapa1=new google.maps.Map(
                      document.getElementById('mapaDireccion'),
                      {
                          center:coordenadaCentral,
                          zoom:15,
                          //ROADMAP para el camino puedo probar con terrine para ver terreno
                          mapTypeId: google.maps.MapTypeId.ROADMAP
                      }
                  );
              }
    </script>
  </body>
</html>
