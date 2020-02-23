<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
      integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
      crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
      integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
      crossorigin=""></script>
    <title>Задание</title>
  </head>
  <body>
    <div id="map" style="height: 500px; margin-bottom:10px;"></div>
    <form class="" action="add.php" method="post">
      <div class="" align="center">
        <table>
          <tr>
            <td>
              <label for="lat">Широта</label>
            </td>
            <td>
              <label for="lng">Долгота</label>
            </td>
          </tr>
          <tr>
            <td>
              <input type="text" name="lat" value="" id="lat" style="width: 200px; margin-bottom:10px;">
            </td>
            <td>
              <input type="text" name="lng" value="" id="lng" style="width: 200px; margin-bottom:10px;">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="comment">Комментарий</label><br>
            </td>
          </tr>
          <tr>
            <td  colspan="2">
              <input type="text" name="comment" value="" id="comment" style="width: 408px; margin-bottom:10px;"><br>
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" name="" value="Добавить в базу" style="width: 200px; margin-bottom:10px;">
            </td>
          </tr>
        </table>
      </div>
    </form>
    <script type="text/javascript">
      var map = L.map('map').setView([45.52875, -122.6632], 15);
      L.tileLayer('http://tiles.mapc.org/basemap/{z}/{x}/{y}.png',
      {
        attribution: 'Tiles by <a href="http://mapc.org">MAPC</a>, Data by <a href="http://mass.gov/mgis">MassGIS</a>',
        maxZoom: 17,
        minZoom: 5
      }).addTo(map);
      var popup = L.popup();
      function onMapClick(e) {
          popup
               .setLatLng(e.latlng)
               .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
          document.getElementById('lat').value=e.latlng.lat;
          document.getElementById('lng').value=e.latlng.lng;
          L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
      }
      map.on('click', onMapClick);
      <?php
      require_once('db-connector.php');
      $query = "SELECT * FROM coordinates";
      $allmarkers = $pdo->query($query);
      while ($marker = $allmarkers->fetch()){
        echo 'L.marker(['.$marker['latitude'].', '.$marker['longitude'].'], alt = \''.$marker['comment'].'\', riseOnHover = \'True\').addTo(map);'."\n";
      }
      ?>
    </script>
  </body>
</html>
