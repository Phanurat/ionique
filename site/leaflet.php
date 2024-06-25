<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leaflet with Geolocation and User Input</title>
  <!-- เรียกใช้ Leaflet ผ่าน CDN -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <!-- สไตล์ CSS สำหรับกำหนดความสูงของแผนที่ -->
  <style>
    #map { height: 400px; }
  </style>
</head>
<body>
  <!-- สร้างตัวแผนที่ใน div ที่มี id="map" -->
  <div id="map"></div>

  <script>
    // สร้างแผนที่ในตำแหน่งละติจูด ลองจิจูด เริ่มต้น และระดับซูม
    var mymap = L.map('map').setView([13.7563, 100.5018], 12);
    var currentMarker = null; // เก็บตัวแปร marker สำหรับตำแหน่งปัจจุบัน
    var userMarker = null; // เก็บตัวแปร marker สำหรับตำแหน่งที่ผู้ใช้คลิก

    // เพิ่มแผนที่ฐานจาก OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      maxZoom: 18,
    }).addTo(mymap);

    // ตรวจสอบว่า GPS สามารถใช้งานได้หรือไม่
    if ('geolocation' in navigator) {
      console.log('GPS is available.');

      // ติดตามการเปลี่ยนแปลงตำแหน่งและแสดงบนแผนที่
      var watchId = navigator.geolocation.watchPosition(function(position) {
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;

        // ถ้ายังไม่มี Marker สำหรับตำแหน่งปัจจุบัน
        if (!currentMarker) {
          // สร้าง Marker แสดงตำแหน่งปัจจุบันบนแผนที่
          var redIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
          });

          currentMarker = L.marker([lat, lng], { icon: redIcon }).addTo(mymap)
            .bindPopup("คุณอยู่ที่นี่").openPopup();
        } else {
          // อัปเดตตำแหน่งของ Marker ตำแหน่งปัจจุบัน
          currentMarker.setLatLng([lat, lng]).update();
        }

        // เลื่อนแผนที่ไปที่ตำแหน่งปัจจุบัน
        mymap.setView([lat, lng], 15);

        // ส่งการแจ้งเตือนหรือประมวลผลต่อไปตามที่ต้องการ
        // เช่นการแสดงข้อความหรือการประมวลผลต่างๆ
      }, function(error) {
        console.error('Error getting position:', error.message);
      });

      // รับตำแหน่งจากผู้ใช้และเพิ่มเครื่องหมาย (marker) ใหม่
      mymap.on('click', function(e) {
        var userLat = e.latlng.lat;
        var userLng = e.latlng.lng;

        // ถ้ายังไม่มี Marker สำหรับตำแหน่งที่ผู้ใช้คลิก
        if (!userMarker) {
          // สร้าง Marker ใหม่ที่ตำแหน่งที่ผู้ใช้คลิก
          var blueIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
          });

          userMarker = L.marker([userLat, userLng], { icon: blueIcon }).addTo(mymap)
            .bindPopup("ตำแหน่งที่คุณเลือก").openPopup();
        } else {
          // ถ้ามี Marker แล้ว ให้ลบ Marker เดิมออกและสร้างใหม่ที่ตำแหน่งใหม่
          mymap.removeLayer(userMarker);
          var blueIcon = L.icon({
            iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
          });
          userMarker = L.marker([userLat, userLng], { icon: blueIcon }).addTo(mymap)
            .bindPopup("ตำแหน่งที่คุณเลือก").openPopup();
        }

        // แสดงพิกัดที่ผู้ใช้คลิกใน console เพื่อทดสอบ
        console.log('User clicked at:', userLat, userLng);
      });
    } else {
      console.log('GPS is not available.');
    }
  </script>
</body>
</html>
