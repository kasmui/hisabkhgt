
<!DOCTYPE html>
<html>
    <head>
        <title>Kalkulasi Penentuan Awal Bulan KHGT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=1024"> <link rel="shortcut icon" href="https://hisabmu.com/images/kalender.png">
        <script src="https://hisabmu.com/js/astronomy.browser.js"></script>
        <script src="https://momentjs.com/downloads/moment.js"></script>
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyAATj04FZVxMmpwYZm05sLxKzUd7YVb8Jw&sensor=false"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
        <link rel="stylesheet" href="https://hisabmu.com/css/hisab.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="hitungan.css"> <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
        <link href="https://webspace.science.uu.nl/~gent0113/islam/stylefiles/islamstyle.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="https://webspace.science.uu.nl/~gent0113/islam/addfiles/extra.js"></script>
    
      <!-- Gaya Internal -->
      <style>
            body {
              font-family: Arial, sans-serif;
              margin: 0; padding: 0;
              font-weight: bold;
              height: 100%;
              margin-bottom: 100px;
            }
            header {
              background-color: #4CAF50;
              color: white;
              padding: 5px;
              text-align: center;
            }
            nav {
              display: flex;
              justify-content: center;
              background-color: #f1f1f1;
              padding: 0.5rem 0;
              border-bottom: 1px solid #ccc;
            }
            nav a {
              color: black;
              margin: 0 1rem;
              text-decoration: none;
              cursor: pointer;
              font-weight: bold;
            }
            nav a.active {
              color: blue; /* Warna saat aktif */
              font-weight: bold;
            }        
            nav a:hover {
              text-decoration: underline;
            }
            #content {
              padding: 2rem;
            }
            .hidden {
              display: none;
            }
            
            h4 {
                margin-left: 5px;
            }
            
            fieldset {
                border: 0px;
                width: 100%;
            }
            
            
            .boundary-line {
                position: absolute;
                top: 0;
                bottom: 0;
                width: 2px;
                background-color: yellow;
                z-index: 1000;
            }  
            
            .red-marker, .black-marker, .blue-marker {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            
            .info.legend {
                background: white;
                padding: 10px;
                border-radius: 5px;
                box-shadow: 0 0 15px rgba(0,0,0,0.2);
            }
            
            label {
                margin-right: 10px;
                font-weight: bold;
            }
            
            select {
                padding: 5px;
                border-radius: 4px;
                border: 1px solid #ccc;
            }   
            
            .elegant-button {
              background-color: #28a745;
              color: white;
              padding: 10px 20px;
              height: 40px;
              border: none;
              border-radius: 5px;
              font-size: 16px;
              font-weight: bold;
              cursor: pointer;
              transition: background-color 0.3s ease, transform 0.3s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .elegant-button:hover {
              background-color: #218838;
              transform: translateY(-2px);
            }
            .elegant-button:active {
              background-color: #1e7e34;
              transform: translateY(0);
            }      
            
            .elegant-button2 {
              background-color: darkblue;
              color: white;
              padding: 10px 20px;
              height: 40px;
              border: none;
              border-radius: 5px;
              font-size: 16px;
              font-weight: bold;
              cursor: pointer;
              transition: background-color 0.3s ease, transform 0.3s ease;
              box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }
            .elegant-button2:hover {
              background-color: #218838;
              transform: translateY(-2px);
            }
            .elegant-button2:active {
              background-color: #1e7e34;
              transform: translateY(0);
            }   
            
            #mapTypeSelector {
                background-color: #f8f9fa;
                padding: 10px;
                border-radius: 5px;
                margin-bottom: 10px;
            }
            
            #googleMapContainer {
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            
            .gm-style .gm-style-iw {
                font-weight: normal;
            }    
            
            #mapStyleSelect {
                width: 150px;
                display: inline-block;
                margin-left: 10px;
            }
            
            #googleMapTypeSelector {
                text-align: center;
                margin-top: 5px;
            }  
            .content-section {
                text-align: left;
        </style>
        
    </head>
<body background="https://webspace.science.uu.nl/~gent0113/islam/images/surat_al_ikhlas.gif" bgproperties="fixed" oncontextmenu="return false;">
      <script>
        // Mencegah klik kanan
        document.addEventListener('contextmenu', function(e) {
          e.preventDefault();
        });
        
        // Mencegah shortcut keyboard (Ctrl+U, Ctrl+Shift+I, dll)
        document.addEventListener('keydown', function(e) {
          if (e.ctrlKey && (e.keyCode === 85 || e.keyCode === 73 || e.keyCode === 74 || e.keyCode === 83)) {
            e.preventDefault();
          }
        });
      </script>
      
    <header>
      <h2 style="color: white">Kalkulasi Penentuan Awal Bulan KHGT</h2>
    </header>
    
    <nav>
      <a onclick="showContent('input')">INPUT</a>
      <a onclick="showContent('output')">OUTPUT</a>
      <a onclick="showContent('tabel')">TABEL</a>
      <a onclick="showContent('peta')">PETA</a>
      <a onclick="showContent('uq')">UMMUL QURA</a>
      <a onclick="showContent('cara')">TUTORIAL</a>
    </nav>

    <div id="content">
        <fieldset id="cara" style="background-color: #ffffff; margin-top: 20px;" class="content-section">
            <!--a href="logout.php" class="btn btn-danger mt-3"><button class="elegant-button">Logout</button></a-->
            <legend>TUTORIAL</legend>
             <p style="padding: 10px; background-color:yellow; text-align: justify; color: blue;"><strong><em>Aplikasi PETA HILAL ini </strong></em> menggunakan pendekatan TOPOSENTRIS dengan library Astronomy Engine yang dirancang agar kecil, cepat, dan akurat hingga ±1 menit busur. Mesin ini didasarkan pada model VSOP87 dan NOVAS C 3.1 yang terpercaya dan teruji . Library ini diuji secara ketat terhadap NOVAS, JPL Horizons, dan sumber data ephemeris terpercaya lainnya. Perhitungan juga diverifikasi agar identik di antara semua bahasa pemrograman yang didukung. </p>
             <hr/>            
            <div style="font-size: 0.95em; margin-left: 10px; color: darkblue;">
                 <p><b>CARA 1 (Rekomendasi): menentukan KOTA PERTAMA YANG MEMENUHI KRITERIA</b></p>
                 <ol>
                    <li>Buang tanda centang <b>Automatic</b>, lalu isikan <b>tanggal</b>, <b>bulan</b> dan <b>tahun</b> New Moon atau konjungsi atau ijtimak yang diinginkan.</li>
                     <li>Pada bagian <b>Data Astronomi</b> Klik tanggal pada <b>New Moon 1, 2, atau 3</b> (format: YYYY-MM-DD HH:MM:SS WIB) sesuai bulan yang ingin dicek, agar <b>jam:menit:detik</b> sesuai New Moon yang dipilih. Kotak <b>DateTimeBox</b> akan terisi otomatis.</li> 
                     <li>Lihat bagian <b>Info Kota Pertama Memenuhi Kriteria</b> di bawah tabel <b>Data Astronomi</b>. Bagian ini akan menunjukkan kota paling timur (berdasarkan urutan sunset) yang memenuhi kriteria tinggi hilal ≥ 5° dan elongasi ≥ 8° pada tanggal tersebut.</li>
                     <li>Jika tidak ada kota yang memenuhi, akan muncul pesan. Periksa juga <b>TABEL LENGKAP</b> di bawah untuk melihat detail semua kota.</li>
                     <li>Lihat bagian <b>Data Detail per Kota:</b> Klik tombol "TABEL LENGKAP". Perhatikan kolom "Sunset UTC" (urut Timur ke Barat). Baris dengan teks merah memenuhi kriteria.</li>
                     <li>Lihat bagian <b>PETA HILAL TITIK KOTA:</b> Klik tombol "SCATTERPLOT" untuk visualisasi MAP SCATTERPLLOT kota sampel. <b>Titik biru</b> adalah kota pertama yang memenuhi kriteria, merah juga memenuhi, hitam tidak. (Peta ini hanya sampel, bukan visibilitas riil).</li>
                     <li>Lihat bagian <b>Info Kota Pertama Memenuhi Kriteria</b>, Gunakan tombol "Analisis AI" atau "Analisis Manual" pada Info Kota Pertama untuk interpretasi KHGT.</li>
                 </ol>
                  <p><b>CARA 2 (Fokus Satu Kota)</b></p>
                  <ol>
                     <li>Buang tanda centang <b>Automatic</b>, lalu isikan <b>tanggal</b>, <b>bulan</b> dan <b>tahun</b> New Moon atau konjungsi atau ijtimak yang diinginkan.</li>
                     <li>Pada bagian <b>Data Astronomi</b> Klik tanggal pada <b>New Moon 1, 2, atau 3</b> (format: YYYY-MM-DD HH:MM:SS WIB) sesuai bulan yang ingin dicek, agar <b>jam:menit:detik</b> sesuai New Moon yang dipilih. Kotak <b>DateTimeBox</b> akan terisi otomatis.</li> 
                      <li>Pilih kota dari dropdown <b>Pilih Kota</b>.</li>
                      <li>Klik tanggal <b>Sunset (WIB)</b> pada tabel data Sun/Moon untuk mengisi DateTimeBox dengan waktu sunset kota tersebut.</li>
                      <li>Lihat nilai <b>Altitude</b> dan <b>Elongation</b> Bulan pada baris Moon. Jika ≥ 5° dan ≥ 8°, kriteria terpenuhi di kota itu pada saat sunsetnya.</li>
                  </ol>   
                 
                 <!--p><b>CARA 3 (Manual Input): Mengisi koordinat</b></p>
                 <ol>
                     <li>Buang tanda centang <b>Automatic</b>.</li>
                     <li>Masukkan tanggal dan waktu (WIB) yang diinginkan pada kotak <b>DateTimeBox</b> (format: YYYY-MM-DDTHH:MM:SS).</li>
                     <li>Pilih kota dari dropdown <b>Pilih Kota</b> atau masukkan Latitude/Longitude manual.</li>
                     <li>Lihat hasil perhitungan (Altitude, Elongation, Rise/Set) pada tabel di bawah input.</li>
                     <li>Lihat <b>Tabel Lengkap</b> dan <b>Scatterplot</b> untuk perbandingan antar kota pada waktu yang Anda input.</li>
                 </ol-->
                </div>
        </fieldset>

        <fieldset id="input" style="background-color: #ffffff; margin-top: 20px; padding: 5px;"  class="content-section hidden">
            <legend>INPUT DATA</legend>
            <p style="padding: 10px; background-color:yellow; text-align: justify; color: blue;"><strong><em>Aplikasi PETA HILAL ini </strong></em> menggunakan pendekatan TOPOSENTRIS dengan library Astronomy Engine yang dirancang agar kecil, cepat, dan akurat hingga ±1 menit busur. Mesin ini didasarkan pada model VSOP87 dan NOVAS C 3.1 yang terpercaya dan teruji . Library ini diuji secara ketat terhadap NOVAS, JPL Horizons, dan sumber data ephemeris terpercaya lainnya. Perhitungan juga diverifikasi agar identik di antara semua bahasa pemrograman yang didukung. </p>
             <hr/>
            <p>Hilangkan tanda centang <b>Automatic</b> dan isikan <b>tanggal/bulan/tahun</b> yang dikehendaki, lalu klik data <b>New Moon</b> 1 atau 2 atau 3 yang sesuai.</p>
            <table border="0px" style="text-align: left;  width: 100%; margin-top: 10px;">
                <tr>
                    <td style="width: 65%; vertical-align: top;">
                        <input type="checkbox" id="AutoTimeCheckBox" onchange="OnToggleAutoTime()"  style="background-color: lightgreen;" >
                        <label for="AutoTimeCheckBox">Automatic</label>
                        <span id="automaticLabel" style="color: yellow; background-color: black; padding: 3px 6px; font-weight: bold; border-radius: 3px; font-size: 0.9em;">(WIB)</span>
                        <br/>
                        <input type="datetime-local" step="1" id="DateTimeBox" class="datetimebox-input" onchange="updateDateTimeBoxChanged()"  style="background-color: lightgreen;" >
                        <button title="Set Waktu ke 00:00:00 WIB" class="midnight-btn" onclick="setMidnight()"><i class="fas fa-moon"></i> 00</button>
                        <button title="Set Waktu ke 07:00:00 WIB (00:00 UTC)" class="utc-btn" onclick="setUTC()"><i class="fas fa-globe"></i> 07</button>
                    </td>

                </tr>
            </table>
    
            <table cellpadding="5" id="InputTable" width="100%">
                <thead>
                    <tr> <th width="25%">Latitude</th> <th width="25%">Longitude</th> <th width="25%">Elevation (m)</th> <th width="25%" id="localTimeHeader">Local Time</th> </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input width="100%" type="text" value="51.482" id="EditLatitude" onchange="triggerManualUpdate()" style="background-color: white;"></td>
                        <td><input width="100%" type="text" value="0.008" id="EditLongitude" onchange="triggerManualUpdate()" style="background-color: white;"></td>
                        <td><input width="100%" type="text" value="0" id="EditElevation" onchange="triggerManualUpdate()"></td>
                        <td><input width="100%" type="text" id="LocalTime" readonly style="background-color: #eee;"></td>
                    </tr>
                </tbody>
            </table>
            
            <h4>DATA ASTRONOMI (Waktu WIB)</h4>
            <table cellpadding="5" id="AstroDataTable" width="100%">
              <thead>
                <tr>
                  <th class="tengah">Illumination</th>
                  <th class="tengah">Moon Phase</th>
                  <th class="tengah">New Moon 1 <span style="color: yellow;">(WIB)</span></th>
                  <th class="tengah">New Moon 2 <span style="color: yellow;">(WIB)</span></th>
                  <th class="tengah">New Moon 3 <span style="color: yellow;">(WIB)</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td id="illumination" class="tengah"></td>
                  <td id="moonPhaseDeg" class="tengah"></td>
                  <td id="newMoonData1" onclick="updateDateTimeBoxWithKonjungsi(this.innerText, 1)" class="pointer Numeric tengah tebal" style="background-color: lightgreen;" ></td>
                  <td id="newMoonData2" onclick="updateDateTimeBoxWithKonjungsi(this.innerText, 2)" class="pointer Numeric tengah tebal" style="background-color: lightgreen;" ></td>
                  <td id="newMoonData3" onclick="updateDateTimeBoxWithKonjungsi(this.innerText, 3)" class="pointer Numeric tengah tebal" style="background-color: lightgreen;" ></td>
                </tr>
              </tbody>
            </table>            
        </fieldset>
    
        <fieldset id="output" style="background-color: #ffffff; margin-top: 20px; padding: 5px;"  class="content-section hidden"> 
            <legend>OUTPUT DATA ASTRONOMI</legend>
             <p style="padding: 10px; background-color:yellow; text-align: justify; color: blue;"><strong><em>Aplikasi PETA HILAL ini </strong></em> menggunakan pendekatan TOPOSENTRIS dengan library Astronomy Engine yang dirancang agar kecil, cepat, dan akurat hingga ±1 menit busur. Mesin ini didasarkan pada model VSOP87 dan NOVAS C 3.1 yang terpercaya dan teruji . Library ini diuji secara ketat terhadap NOVAS, JPL Horizons, dan sumber data ephemeris terpercaya lainnya. Perhitungan juga diverifikasi agar identik di antara semua bahasa pemrograman yang didukung. </p>
             <hr/>
            <p>Boleh pilih <b>KOTA</b> boleh tidak, tapi jika pilih KOTA maka harus juga klik angka pada <b>SET (WIB)</b></p>
            <div style="vertical-align: top;">
                        <label for="citySelect">Pilih Kota:</label>
                        <select class="select-input" id="citySelect" onchange="updateLocation()">
                            <option value="" selected>Pilih Kota</option>
                        </select>
            </div>
            <div style="margin-top: 20px; padding: 5px;"><b><span style="color: red;">CATATAN:</span></b> Hitungan Tinggi Hilal atau Matahari Berdasarkan <span style="color: red;">TOPOSENTRIS</span></div>
            <table cellpadding="5" id="AstroDataTable" width="100%">  
              <thead>
                <tr>
                  <th class="tengah">Body</th>
                  <th class="tengah">Altitude</th>
                  <th class="tengah">Elongation</th>
                  <th class="tengah">R. Ascension</th>
                  <th class="tengah">Declination</th>
                  <th class="tengah">Azimuth</th>
                  <th class="tengah">Rise <span style="color: yellow;">(WIB)</span></th>
                  <th class="tengah">Set <span style="color: yellow;">(WIB)</span></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tebal kiri dp tengah">Sun</td>
                  <td id="Sun_alt" class="Numeric dp2 tengah"></td>
                  <td rowspan="2" id="elongation" class="Numeric dp2 tengah"  style="color:red; background-color: lightblue; font-size: 17px;">></td>
                  <td id="Sun_ra" class="Numeric dp2 tengah"></td>
                  <td id="Sun_dec" class="Numeric dp2 tengah"></td>
                  <td id="Sun_az" class="Numeric dp2 tengah"></td>
                  <td id="Sunrise" class="Numeric dp2 tengah" onclick="updateDateTimeBoxWithEvent(this.innerText, 'SUNRISE')" style="text-decoration: none;"></td> 
                  <td style="background-color: lightgreen;" id="Sunset" class="Numeric3 pointer tengah tebal" onclick="updateDateTimeBoxWithEvent(this.innerText, 'SUNSET')"></td>
                </tr>
                <tr>
                  <td class="tebal kiri dp tengah" style="color:red;">Moon</td>
                  <td id="Moon_alt" class="Numeric tebal dp2 tengah" style="color:red; background-color: lightblue;  font-size: 17px;"></td>
                  <td id="Moon_ra" class="Numeric dp2 tengah"></td>
                  <td id="Moon_dec" class="Numeric dp2 tengah"></td>
                  <td id="Moon_az" class="Numeric dp2 tengah"></td>
                  <td id="Moonrise" class="Numeric dp2 tengah" style="text-align: center; text-decoration: none;"></td>
                  <td id="Moonset" class="Numeric dp2 tengah" style="text-align: center; text-decoration: none;"></td>
                </tr>
              </tbody>
            </table>

            <div><b><span style="color: red;">CATATAN:</span></b> Hitungan Tinggi Hilal atau Matahari Berdasarkan <span style="color: red;">GEOSENTRIS</span></div>
            <table cellpadding="5" id="AstroDataTable" width="100%">  
              <thead>
                <tr>
                  <th class="tengah">Body</th>
                  <th class="tengah">Altitude</th>
                  <th class="tengah">R. Ascension</th>
                  <th class="tengah">Declination</th>
                  <th class="tengah">Azimuth</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="tebal kiri dp tengah">Sun</td>
                  <td id="Sun_alt_geo" class="Numeric dp2 tengah"></td>
                  <td id="Sun_ra_geo" class="Numeric dp2 tengah"></td>
                  <td id="Sun_dec_geo" class="Numeric dp2 tengah"></td>
                  <td id="Sun_az_geo" class="Numeric dp2 tengah"></td>                
                 </tr>
                <tr>
                  <td class="tebal kiri dp tengah" style="color:red;">Moon</td>
                  <td id="Moon_alt_geo" class="Numeric tebal dp2 tengah" style="color:red; background-color: lightblue;  font-size: 17px;"></td>
                  <td id="Moon_ra_geo" class="Numeric dp2 tengah"></td>
                  <td id="Moon_dec_geo" class="Numeric dp2 tengah"></td>
                  <td id="Moon_az_geo" class="Numeric dp2 tengah"></td>                
                 </tr>
              </tbody>
            </table>            
            

            <div id="firstCityInfoContainer" style="background-color: #e9f5ff; margin-left: 5px; margin-top: 50px; margin-bottom: 10px; font-size: 1em; color: darkblue; padding: 5px 15px; border-radius: 8px;">
                <span id="firstCityInfo">
                         <span style="margin-left: 5px; font-size: 1.2em; font-weight: bold; color: blue; padding: 10px;">INFO KOTA PERTAMA MEMENUHI KRITERIA</spana><span style="font-size: 15px; color: orange;">Menghitung data...</span>
                </span>
            </div>
        </fieldset>
    
        <fieldset id="tabel" style="background-color: #ffffff; margin-top: 20px;"  class="content-section hidden">
            <legend>CATATAN TABEL</legend>
            <span style="font-size: 0.9em; color: darkblue; text-align: justify;">
                <ul style="font-size: 1.3em; margin-bottom: 5px;">
                    <li>Header <b>TABEL LENGKAP</b> dapat diklik untuk pengurutan data (<i class="fas fa-arrow-up"></i> / <i class="fas fa-arrow-down"></i> menunjukkan kolom aktif).</li>
                    <li>Teks <span style="color: red">merah</span> / <i class="fas fa-check" style="color:green;"></i> Memenuhi pada <b>TABEL LENGKAP</b> menandakan kriteria terpenuhi (tinggi ≥ 5°, elongasi ≥ 8°).</li>
                    <li>Jangan lupa untuk klik header tabel "<b>SUNSET UTC</b>" untuk pengurutan dari waktu terlama ke terbaru (urutan bawah ke atas)</li>
                    <li>Di bagian bawah tabel ada fitur <b>Download Excel</b> dan <b>Download Json</b>.</li>
                </ul>
            </span>
    
            <br/>
            <legend>DATA DETIL PER KOTA</legend>
            <div id="toggleTable" style="text-align: center;">
                 <button type="button" class="btn btn-warning" id="toggleButton" style="margin-bottom: 10px; font-size: 1.1em; height: auto; padding: 8px 15px;" title="Klik untuk melihat/menyembunyikan tabel data lengkap semua kota!">
                     <i class="fas fa-table"></i> &nbsp; TABEL LENGKAP
                 </button>
            </div>
            <table id="locationTable" border="1" style="width: 100%; margin-top: 10px; font-size: 12px; display: none;">
                <thead>
                    <tr> <th onclick="sortTable(0)">No</th> <th onclick="sortTable(1)">Nama Tempat</th> <th onclick="sortTable(2)">Latitude</th> <th onclick="sortTable(3)">Longitude</th> <th onclick="sortTable(4)">Zona</th> <th onclick="sortTable(5)">Sunset <span style="color: yellow">(WIB)</span></th> <th onclick="sortTable(6)">Sunset UTC</th> <th onclick="sortTable(7)">Sunrise UTC</th> <th onclick="sortTable(8)">Tinggi Hilal</th> <th onclick="sortTable(9)">Elongation</th> <th class="tengah">Aksi</th> <th class="tengah">Status</th> </tr>
                </thead>
                <tbody> </tbody>
                <tfoot>
                    <tr>
                      <td colspan="12" style="text-align: center;">
                        <button class="download-button elegant-button" onclick="downloadExcel()">
                          <i class="fas fa-file-excel"></i> Download Excel
                        </button>
                        &nbsp;&nbsp;
                        <button class="download-button elegant-button" onclick="downloadJSON()">
                          <i class="fas fa-file-code"></i> Download JSON
                        </button>
                      </td>
                    </tr>
                </tfoot>
            </table>
        </fieldset>
    
        <fieldset id="peta" style="background-color: #ffffff; margin-top: 20px;"  class="content-section hidden">
            <legend>PETA HILAL TITIK KOTA</legend>
                <div style="text-align: center; margin-top: 10px; margin-bottom: 10px;">
                    <button type="button" id="scatterBtn" class="btn btn-primary" title="Tampilkan peta sampel kota terdaftar">
                        <i class="fas fa-map-marker-alt"></i> TAMPILKAN PETA
                    </button>
                    <div id="mapTypeSelector" style="margin-top: 10px; display: none;">
                        <!--button class="btn btn-sm btn-info" onclick="showPlotlyMap()">Plotly Map</button-->
                        <button class="btn btn-sm btn-success" onclick="showGoogleMap()">Google Map</button>
                        <div id="googleMapTypeSelector" style="margin-top: 5px; display: none;">
                            <select id="mapStyleSelect" class="form-control" onchange="changeMapType()">
                                <option value="terrain" selected>Terrain</option>
                                <option value="satellite">Satellite</option>
                            </select>
                        </div>
                    </div>
                </div>
    
            <legend>SCATTERPLOT KOTA</legend>
            <p style="margin-left: 10px;">Klik pada marker/penanda untuk melihat data.</p>
            <div id="scatterplot" style="display: none;"></div>
            <div id="googleMapContainer" style="display: none; width: 100%; height: 500px;"></div>
        
            <table id="boundaryTable" class="hidden" style="display:none; margin-top:15px;">
                <caption>Hasil Scan Titik Batas Visibilitas (≥5°, ≥8°)</caption> <thead>
                    <tr> <th class="tengah">No</th> <th class="tengah">Latitude</th> <th class="tengah">Longitude</th> <th class="tengah">Tinggi Hilal</th> <th class="tengah">Elongation</th> <th class="tengah">Meets Criteria</th> <th class="tengah">Sunset UTC (Time)</th> </tr>
                </thead>
                <tbody> </tbody>
            </table>
            
            <p style="margin-top: 10px; margin-left: 10px; padding: 10px; opacity: 0.8;">
                <hr/>
                <a target="_blank" href="https://www.moonsighting.com/visibility.html"><button class="elegant-button btn-sm">MOONSIGHTING</button></a>&nbsp;&nbsp;
                <a target="_self" href="https://hisabmu.com/petadiyanet.html"><button class="elegant-button btn-sm">PETA DIYANET</button></a>&nbsp;&nbsp;
                <a target="_self" href="https://hisabmu.com/fcna.html"><button class="elegant-button btn-sm">HISAB FCNA </button></a>&nbsp;&nbsp;
                <a target="_self" href="https://hisabmu.com/visibilitas/index.php"><button class="elegant-button btn-sm">SCANNING VISIBILITAS HILAL</button></a>
            
            </p>
        </fieldset>
        
        <fieldset id="uq" style="background-color: #ffffff; margin-top: 10px; padding: 10px; opacity: 0.8;"  class="content-section hidden">
            <h1><a name="top">PENYESUAIAN KALENDER UMMUL QURA</a></h1>
            
            <p>Secara ketat, kalender Umm al-Qura dimaksudkan hanya untuk tujuan sipil. Pembuatnya menyadari fakta bahwa penglihatan visual pertama 
            hilal bulan sabit (<i>hil&#257;l</i>) dapat terjadi hingga dua hari setelah tanggal yang diprediksi oleh kalender Umm al-Qura.</p>
            
            <p>Sejak 1419&nbsp;H (1998/99&nbsp;M), beberapa komite resmi pengamatan hilal telah dibentuk oleh pemerintah Arab Saudi untuk menentukan 
            penglihatan visual pertama bulan sabit di awal setiap bulan lunar. Namun, otoritas agama Arab Saudi juga menerima kesaksian dari pengamat 
            yang kurang berpengalaman dan terkadang mengumumkan penglihatan hilal pada malam ketika tidak satu pun komite resmi dapat mengamati hilal 
            atau bahkan pada malam ketika hilal sebenarnya terbenam sebelum matahari terbenam.</p>
            
            <p>Hal ini sering menimbulkan kebingungan ketika tanggal-tanggal acara keagamaan penting di bulan Muharram, bulan puasa (Ramadhan) atau 
            bulan haji (Dzulhijjah) diubah. Dalam hampir semua kasus ini, analisis retrospektif menunjukkan bahwa laporan penglihatan hilal yang sangat 
            awal ini tidak mungkin dan didasarkan pada penglihatan yang salah. Sebagian besar penglihatan salah ini mungkin disebabkan oleh bintang atau 
            planet terang (seperti Venus) atau jejak pesawat terbang yang terlihat di dekat cakrawala barat.</p>
            
            <p>Sebuah studi terhadap 42&nbsp;laporan penglihatan hilal Ramadhan, seperti yang diumumkan oleh Majelis Kehakiman Tinggi Arab Saudi 
            (Majlis al-Qad&#257;&#702; al-A&#703;l&#257;) antara tahun 1962 hingga 2001 (1381&nbsp;H hingga 1422&nbsp;H), mengkonfirmasi bahwa lebih 
            dari setengahnya terlalu awal dan didasarkan pada penglihatan hilal yang salah (Kordi, 2003). Hasil serupa dicapai oleh studi selanjutnya 
            yang mencakup tahun 1380&nbsp;H hingga 1425&nbsp;H (Gadi, 2007).</p>
            
            <p>Tabel berikut membandingkan tanggal Umm al-Qura untuk awal bulan Muharram, Ramadhan, Syawal, dan Dzulhijjah dengan tanggal yang diumumkan 
            oleh Majelis Kehakiman Tinggi Arab Saudi (sumber: 
            <a href="https://www.fatwa-online.com/category/news/" target="_blank">Fatwa-Online</a>):</p>
            
            <table align="center" border="1" cellspacing="1" cellpadding="5" bgcolor="#CCFFCC" cols="9">
              <tr align="center">
            	<td rowspan="2" bgcolor="#80FF80"><small><b>year</b></small></td>
            	<td colspan="2" bgcolor="#80FF80"><small><b>1&nbsp;Mu&#7717;arram</b></small></td>
                <td colspan="2" bgcolor="#80FF80"><small><b>1&nbsp;Rama&#7693;&#257;n</b></small></td>
            	<td colspan="2" bgcolor="#80FF80"><small><b>1&nbsp;Shaww&#257;l</b></small></td>
            	<td colspan="2" bgcolor="#80FF80"><small><b>1&nbsp;Dhu&nbsp;&#702;l-&#7716;ijja</b></small></td>
            	<td colspan="2" bgcolor="#80FF80"><small><b>10&nbsp;Dhu&nbsp;&#702;l-&#7716;ijja</b></small></td>
              </tr>
              <tr align="center">
            	<td bgcolor="#80FF80"><small><b>computed</b></small></td>
            	<td bgcolor="#80FF80"><small><b>announced</b></small></td>
            	<td bgcolor="#80FF80"><small><b>computed</b></small></td>
            	<td bgcolor="#80FF80"><small><b>announced</b></small></td>
            	<td bgcolor="#80FF80"><small><b>computed</b></small></td>
            	<td bgcolor="#80FF80"><small><b>announced</b></small></td>
            	<td bgcolor="#80FF80"><small><b>computed</b></small></td>
            	<td bgcolor="#80FF80"><small><b>announced</b></small></td>
            	<td bgcolor="#80FF80"><small><b>computed</b></small></td>
            	<td bgcolor="#80FF80"><small><b>announced</b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1422</b></small></td>
            	<td><small><b>26&nbsp;Mar&nbsp;2001</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>16&nbsp;Nov&nbsp;2001</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1422-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">16&nbsp;Nov&nbsp;2001</a></b></small></td>
            	<td><small><b>16&nbsp;Dec&nbsp;2001</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1422-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">16&nbsp;Dec&nbsp;2001</a></b></small></td>
            	<td><small><b>13&nbsp;Feb&nbsp;2002</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1422-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">13&nbsp;Feb&nbsp;2002</a></b></small></td>
            	<td><small><b>22&nbsp;Feb&nbsp;2002</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1422-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">22&nbsp;Feb&nbsp;2002</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1423</b></small></td>
            	<td><small><b>15&nbsp;Mar&nbsp;2002</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>6&nbsp;Nov&nbsp;2002</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1423-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">6&nbsp;Nov&nbsp;2002</a></b></small></td>
            	<td><small><b>5&nbsp;Dec&nbsp;2002</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1423-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">5&nbsp;Dec&nbsp;2002</a></b></small></td>
            	<td><small><b>2&nbsp;Feb&nbsp;2003</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1423-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">2&nbsp;Feb&nbsp;2003</a></b></small></td>
            	<td><small><b>11&nbsp;Feb&nbsp;2003</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1423-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Feb&nbsp;2003</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1424</b></small></td>
            	<td><small><b>&nbsp;&nbsp;4&nbsp;Mar&nbsp;2003</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>26&nbsp;Oct&nbsp;2003</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/ramadhaan-1424-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">27&nbsp;Oct&nbsp;2003</a></b></small></td>
            	<td><small><b>25&nbsp;Nov&nbsp;2003</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1424-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">25&nbsp;Nov&nbsp;2003</a></b></small></td>
            	<td><small><b>23&nbsp;Jan&nbsp;2004</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1424-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">23&nbsp;Jan&nbsp;2004</a></b></small></td>
            	<td><small><b>1&nbsp;Feb&nbsp;2004</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1424-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">1&nbsp;Feb&nbsp;2004</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1425</b></small></td>
            	<td><small><b>21&nbsp;Feb&nbsp;2004</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>15&nbsp;Oct&nbsp;2004</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1425-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">15&nbsp;Oct&nbsp;2004</a></b></small></td>
            	<td><small><b>14&nbsp;Nov&nbsp;2004</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-fitr-1425-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">13&nbsp;Nov&nbsp;2004</a></b></small></td>
            	<td><small><b>12&nbsp;Jan&nbsp;2005</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1423-high-judiciary-council-of-saudi-arabia-2/" 
            	  target="_blank">11&nbsp;Jan&nbsp;2005</a></b></small></td>
            	<td><small><b>21&nbsp;Jan&nbsp;2005</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1423-high-judiciary-council-of-saudi-arabia-2/" 
            	  target="_blank">20&nbsp;Jan&nbsp;2005</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1426</b></small></td>
            	<td><small><b>10&nbsp;Feb&nbsp;2005</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>&nbsp;&nbsp;4&nbsp;Oct&nbsp;2005</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1426-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;4&nbsp;Oct&nbsp;2005</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;3&nbsp;Nov&nbsp;2005</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1426-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;3&nbsp;Nov&nbsp;2005</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;1&nbsp;Jan&nbsp;2006</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1426-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;1&nbsp;Jan&nbsp;2006</a></b></small></td>
            	<td><small><b>10&nbsp;Jan&nbsp;2006</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1426-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">10&nbsp;Jan&nbsp;2006</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1427</b></small></td>
            	<td><small><b>31&nbsp;Jan&nbsp;2006</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>24&nbsp;Sep&nbsp;2006</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/ramadhaan-1427-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">23&nbsp;Sep&nbsp;2006</a></b></small></td>
            	<td><small><b>23&nbsp;Oct&nbsp;2006</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1427-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">23&nbsp;Oct&nbsp;2006</a></b></small></td>
            	<td><small><b>22&nbsp;Dec&nbsp;2006</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1427-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">21&nbsp;Dec&nbsp;2006</a></b></small></td>
            	<td><small><b>31&nbsp;Dec&nbsp;2006</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1427-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Dec&nbsp;2006</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1428</b></small></td>
            	<td><small><b>20&nbsp;Jan&nbsp;2007</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>13&nbsp;Sep&nbsp;2007</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1428-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">13&nbsp;Sep&nbsp;2007</a></b></small></td>
            	<td><small><b>13&nbsp;Oct&nbsp;2007</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-fitr-1428-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">12&nbsp;Oct&nbsp;2007</a></b></small></td>
            	<td><small><b>11&nbsp;Dec&nbsp;2007</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1428-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">10&nbsp;Dec&nbsp;2007</a></b></small></td>
            	<td><small><b>20&nbsp;Dec&nbsp;2007</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1428-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">19&nbsp;Dec&nbsp;2007</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1429</b></small></td>
            	<td><small><b>10&nbsp;Jan&nbsp;2008</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>&nbsp;&nbsp;1&nbsp;Sep&nbsp;2008</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1429-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;1&nbsp;Sep&nbsp;2008</a></b></small></td>
            	<td><small><b>1&nbsp;Oct&nbsp;2008</b></small></td>
            	<td bgcolor="#FFCC99"><small><b><a href="https://www.fatwa-online.com/eed-fitr-1429-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Sep&nbsp;2008</a></b></small></td>
            	<td><small><b>29&nbsp;Nov&nbsp;2008</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1429-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">29&nbsp;Nov&nbsp;2008</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;8&nbsp;Dec&nbsp;2008</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1429-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;8&nbsp;Dec&nbsp;2008</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1430</b></small></td>
            	<td><small><b>29&nbsp;Dec&nbsp;2008</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>22&nbsp;Aug&nbsp;2009</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1430-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">22&nbsp;Aug&nbsp;2009</a></b></small></td>
            	<td><small><b>20&nbsp;Sep&nbsp;2009</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-fitr-1430-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">20&nbsp;Sep&nbsp;2009</a></b></small></td>
            	<td><small><b>18&nbsp;Nov&nbsp;2009</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1430-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">18&nbsp;Nov&nbsp;2009</a></b></small></td>
            	<td><small><b>27&nbsp;Nov&nbsp;2009</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1430-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">27&nbsp;Nov&nbsp;2009</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1431</b></small></td>
            	<td><small><b>18&nbsp;Dec&nbsp;2009</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1431-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">18&nbsp;Dec&nbsp;2009</a></b></small></td>
            	<td><small><b>11&nbsp;Aug&nbsp;2010</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1431-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Aug&nbsp;2010</a></b></small></td>
            	<td><small><b>10&nbsp;Sep&nbsp;2010</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1431-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">10&nbsp;Sep&nbsp;2010</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;7&nbsp;Nov&nbsp;2010</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1431-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">7&nbsp;Nov&nbsp;2010</a></b></small></td>
            	<td><small><b>16&nbsp;Nov&nbsp;2010</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1431-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">16&nbsp;Nov&nbsp;2010</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1432</b></small></td>
            	<td><small><b>&nbsp;&nbsp;7&nbsp;Dec&nbsp;2010</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>&nbsp;&nbsp;1&nbsp;Aug&nbsp;2011</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1432-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">1&nbsp;Aug&nbsp;2011</a></b></small></td>
            	<td><small><b>30&nbsp;Aug&nbsp;2011</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1432-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Aug&nbsp;2011</a></b></small></td>
            	<td><small><b>28&nbsp;Oct&nbsp;2011</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1432-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">28&nbsp;Oct&nbsp;2011</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Nov&nbsp;2011</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1432-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;6&nbsp;Nov&nbsp;2011</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1433</b></small></td>
            	<td><small><b>26&nbsp;Nov&nbsp;2011</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/aashooraa-1433-shaykh-abdul-azeez-aal-shaykh/" 
            	  target="_blank">27&nbsp;Nov&nbsp;2011</a></b></small></td>
            	<td><small><b>20&nbsp;Jul&nbsp;2012</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1433-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">20&nbsp;Jul&nbsp;2012</a></b></small></td>
            	<td><small><b>19&nbsp;Aug&nbsp;2012</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1433-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">19&nbsp;Aug&nbsp;2012</a></b></small></td>
            	<td><small><b>17&nbsp;Oct&nbsp;2012</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1433-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">17&nbsp;Oct&nbsp;2012</a></b></small></td>
            	<td><small><b>26&nbsp;Oct&nbsp;2012</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1433-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">26&nbsp;Oct&nbsp;2012</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1434</b></small></td>
            	<td><small><b>15&nbsp;Nov&nbsp;2012</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>&nbsp;&nbsp;9&nbsp;Jul&nbsp;2013</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/ramadhaan-1434-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">10&nbsp;Jul&nbsp;2013</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;8&nbsp;Aug&nbsp;2013</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1434-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;8&nbsp;Aug&nbsp;2013</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Oct&nbsp;2013</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1434-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">&nbsp;&nbsp;6&nbsp;Oct&nbsp;2013</a></b></small></td>
            	<td><small><b>15&nbsp;Oct&nbsp;2013</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1434-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">15&nbsp;Oct&nbsp;2013</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1435</b></small></td>
                <td><small><b>&nbsp;&nbsp;4&nbsp;Nov&nbsp;2013</b></small></td>
                <td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/aashooraa-1435-high-judiciary-council-of-saudi-arabia/" 
                  target="_blank">&nbsp;&nbsp;5&nbsp;Nov&nbsp;2013</a></b></small></td>
            	<td><small><b>28&nbsp;Jun&nbsp;2014</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/ramadhaan-1435-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">29&nbsp;Jun&nbsp;2014</a></b></small></td>
            	<td><small><b>28&nbsp;Jul&nbsp;2014</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1435-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">28&nbsp;Jul&nbsp;2014</a></b></small></td>
            	<td><small><b>25&nbsp;Sep&nbsp;2014</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1435-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">25&nbsp;Sep&nbsp;2014</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;4&nbsp;Oct&nbsp;2014</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1435-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;4&nbsp;Oct&nbsp;2014</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1436</b></small></td>
            	<td><small><b>25&nbsp;Oct&nbsp;2014</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>18&nbsp;Jun&nbsp;2015</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1436-high-judiciary-council-saudi-arabia/" 
            	  target="_blank">18&nbsp;Jun&nbsp;2015</a></b></small></td>
            	<td><small><b>17&nbsp;Jul&nbsp;2015</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1436-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">17&nbsp;Jul&nbsp;2015</a></b></small></td>
            	<td><small><b>14&nbsp;Sep&nbsp;2015</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1436-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">15&nbsp;Sep&nbsp;2015</a></b></small></td>
            	<td><small><b>23&nbsp;Sep&nbsp;2015</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1436-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">24&nbsp;Sep&nbsp;2015</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1437</b></small></td>
            	<td><small><b>14&nbsp;Oct&nbsp;2015</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/aashooraa-1437-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">15&nbsp;Oct&nbsp;2015</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Jun&nbsp;2016</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1437-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;6&nbsp;Jun&nbsp;2016</b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Jul&nbsp;2016</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1437-high-judiciary-council-of-saudi-arabia/" 
            	 target="_blank">&nbsp;&nbsp;6&nbsp;Jul&nbsp;2016</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;2&nbsp;Sep&nbsp;2016</b></small></td>
            	<td bgcolor="66FFCC"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1437-high-judiciary-council-of-saudi-arabia/" 
            	 target="_blank">&nbsp;&nbsp;3&nbsp;Sep&nbsp;2016</a></b></small></td>
            	<td><small><b>11&nbsp;Sep&nbsp;2016</b></small></td>
            	<td bgcolor="66FFCC"><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1437-high-judiciary-council-of-saudi-arabia/" 
            	 target="_blank">12&nbsp;Sep&nbsp;2016</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1438</b></small></td>
            	<td><small><b>&nbsp;&nbsp;2&nbsp;Oct&nbsp;2016</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1438-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;2&nbsp;Oct&nbsp;2016</a></b></small></td>
            	<td><small><b>27&nbsp;May&nbsp;2017</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1438-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">27&nbsp;May&nbsp;2017</a></b></small></td>
            	<td><small><b>25&nbsp;Jun&nbsp;2017</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1438-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">25&nbsp;Jun&nbsp;2017</a></b></small></td>
            	<td><small><b>23&nbsp;Aug&nbsp;2017</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1438-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">23&nbsp;Aug&nbsp;2017</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;1&nbsp;Sep&nbsp;2017</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1438-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;1&nbsp;Sep&nbsp;2017</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1439</b></small></td>
            	<td><small><b>21&nbsp;Sep&nbsp;2017</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1439-high-judiciary-council-of-saudi-arabia/"
            	  target="_blank">21&nbsp;Sep&nbsp;2017</a></b></small></td>
            	<td><small><b>16&nbsp;May&nbsp;2018</b></small></td>
            	<td bgcolor="66FFCC"><small><b><a href="https://www.fatwa-online.com/ramadhaan-1439-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">17&nbsp;May&nbsp;2018</a></b></small></td>
            	<td><small><b>15&nbsp;Jun&nbsp;2018</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-fitr-1439-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">15&nbsp;Jun&nbsp;2018</a></b></small></td>
            	<td><small><b>12&nbsp;Aug&nbsp;2018</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1439-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">12&nbsp;Aug&nbsp;2018</a></b></small></td>
            	<td><small><b>21&nbsp;Aug&nbsp;2018</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1439-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">21&nbsp;Aug&nbsp;2018</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1440</b></small></td>
            	<td><small><b>11&nbsp;Sep&nbsp;2018</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1440-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Sep&nbsp;2018</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;May&nbsp;2019</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1440-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;6&nbsp;May&nbsp;2019</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;4&nbsp;Jun&nbsp;2019</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-fitr-1440-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;4&nbsp;Jun&nbsp;2019</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;2&nbsp;Aug&nbsp;2019</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1440-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;2&nbsp;Aug&nbsp;2019</a></b></small></td>
            	<td><small><b>11&nbsp;Aug&nbsp;2019</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1440-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Aug&nbsp;2019</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1441</b></small></td>
            	<td><small><b>31&nbsp;Aug&nbsp;2019</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1441-high-judiciary-council-of-saudi-arabia/" 
            	  target="_blank">31&nbsp;Aug&nbsp;2019</a></b></small></td>
            	<td><small><b>24&nbsp;Apr&nbsp;2020</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1441-supreme-court-of-saudi-arabia/"
            	  target="_blank">24&nbsp;Apr&nbsp;2020</a></b></small></td>
            	<td><small><b>24&nbsp;May&nbsp;2020</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-fitr-1441-supreme-court-of-saudi-arabia/"
            	  target="_blank">24&nbsp;May&nbsp;2020</a></b></small></td>
            	<td><small><b>22&nbsp;Jul&nbsp;2020</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1441-supreme-court-of-saudi-arabia/"
            	  target="_blank">22&nbsp;Jul&nbsp;2020</a></b></small></td>
            	<td><small><b>31&nbsp;Jul&nbsp;2020</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1441-supreme-court-of-saudi-arabia/"
            	  target="_blank">31&nbsp;Jul&nbsp;2020</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1442</b></small></td>
            	<td><small><b>20&nbsp;Aug&nbsp;2020</b></small></td>
            	<td><small><b><a href="https://www.spa.gov.sa/2123917" 
            	  target="_blank">20&nbsp;Aug&nbsp;2020</a></b></small></td>
            	<td><small><b>13&nbsp;Apr&nbsp;2021</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1442-supreme-court-of-saudi-arabia/"
            	  target="_blank">13&nbsp;Apr&nbsp;2021</a></b></small></td>
            	<td><small><b>13&nbsp;May&nbsp;2021</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-fitr-1442-supreme-court-of-saudi-arabia/" 
            	  target="_blank">13&nbsp;May&nbsp;2021</a></b></small></td>
            	<td><small><b>11&nbsp;Jul&nbsp;2021</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1442-supreme-court-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Jul&nbsp;2021</a></b></small></td>
            	<td><small><b>20&nbsp;Jul&nbsp;2021</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1442-supreme-court-of-saudi-arabia/" 
            	  target="_blank">20&nbsp;Jul&nbsp;2021</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1443</b></small></td>
            	<td><small><b>&nbsp;&nbsp;9&nbsp;Aug&nbsp;2021</b></small></td>
            	<td bgcolor="#66FFCC"><small><b><a href="https://www.fatwa-online.com/aashooraa-1443-supreme-court-of-saudi-arabia/" 
            	  target="_blank">10&nbsp;Aug&nbsp;2021</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;2&nbsp;Apr&nbsp;2022</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1443-supreme-court-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;2&nbsp;Apr&nbsp;2022</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;2&nbsp;May&nbsp;2022</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-fitr-1443-supreme-court-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;2&nbsp;May&nbsp;2022</a></b></small></td>
            	<td><small><b>30&nbsp;Jun&nbsp;2022</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1443-supreme-court-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Jun&nbsp;2022</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;9&nbsp;Jul&nbsp;2022</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1443-supreme-court-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;9&nbsp;Jul&nbsp;2022</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1444</b></small></td>
            	<td><small><b>30&nbsp;Jul&nbsp;2022</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1444-supreme-court-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Jul&nbsp;2022</a></b></small></td>
            	<td><small><b>23&nbsp;Mar&nbsp;2023</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1444-supreme-court-of-saudi-arabia/"
            	  target="_blank">23&nbsp;Mar&nbsp;2023</a></b></small></td>
            	<td><small><b>21&nbsp;Apr&nbsp;2023</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-alfitr-1444-supreme-court-of-saudi-arabia/" 
            	  target="_blank">21&nbsp;Apr&nbsp;2023</a></b></small></td>
            	<td><small><b>19&nbsp;Jun&nbsp;2023</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1444-supreme-court-of-saudi-arabia/" 
            	  target="_blank">19&nbsp;Jun&nbsp;2023</a></b></small></td>
            	<td><small><b>28&nbsp;Jun&nbsp;2023</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-adhaa-1444-supreme-court-of-saudi-arabia/" 
            	  target="_blank">28&nbsp;Jun&nbsp;2023</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1445</b></small></td>
            	<td><small><b>19&nbsp;Jul&nbsp;2023</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1445-supreme-court-of-saudi-arabia/" 
            	  target="_blank">19&nbsp;Jul&nbsp;2023</a></b></small></td>
            	<td><small><b>11&nbsp;Mar&nbsp;2024</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/ramadhaan-1445-supreme-court-of-saudi-arabia/" 
            	  target="_blank">11&nbsp;Mar&nbsp;2024</a></b></small></td>
            	<td><small><b>10&nbsp;Apr&nbsp;2024</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-alfitr-1445-supreme-court-of-saudi-arabia/" 
            	  target="_blank">10&nbsp;Apr&nbsp;2024</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;7&nbsp;Jun&nbsp;2024</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-adhaa-1445-supreme-court-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;7&nbsp;Jun&nbsp;2024</a></b></small></td>
            	<td><small><b>16&nbsp;Jun&nbsp;2024</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-adhaa-1445-supreme-court-of-saudi-arabia/" 
            	  target="_blank">16&nbsp;Jun&nbsp;2024</a></b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1446</b></small></td>
            	<td><small><b>&nbsp;&nbsp;7&nbsp;Jul&nbsp;2024</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1446-supreme-court-of-saudi-arabia/" 
            	  target="_blank">&nbsp;&nbsp;7&nbsp;Jul&nbsp;2024</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;1&nbsp;Mar&nbsp;2025</b></small></td>
            	<td><small><b>&nbsp;&nbsp;<a href="https://www.fatwa-online.com/ramadhaan-1446-supreme-court-of-saudi-arabia/" 
            	  target="_blank">1&nbsp;Mar&nbsp;2025</a></b></small></td>
            	<td><small><b>30&nbsp;Mar&nbsp;2025</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-alfitr-1446-supreme-court-of-saudi-arabia/" 
            	  target="_blank">30&nbsp;Mar&nbsp;2025</a></b></small></td>
                <td><small><b>28&nbsp;May&nbsp;2025</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/eed-al-adhaa-1446-supreme-court-of-saudi-arabia/" target="_blank">28&nbsp;May&nbsp;2025</a></b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Jun&nbsp;2025</b></small></td>
            	<td><small><b>&nbsp;&nbsp;6&nbsp;Jun&nbsp;2025</b></small></td>
              </tr>
              <tr align="right">
            	<td align="center" bgcolor="#80FF80"><small><b>1447</b></small></td>
            	<td><small><b>26&nbsp;Jun&nbsp;2025</b></small></td>
            	<td><small><b><a href="https://www.fatwa-online.com/aashooraa-1447-supreme-court-of-saudi-arabia/" 
            	  target="_blank">26&nbsp;Jun&nbsp;2025</a></b></small></td>
            	<td><small><b>18&nbsp;Feb&nbsp;2026</b></small></td>
            	<td><small><b>&nbsp;&nbsp;</b></small></td>
            	<td><small><b>20&nbsp;Mar&nbsp;2026</b></small></td>
            	<td><small><b>&nbsp;&nbsp;</b></small></td>
            	<td>1<small><b>8&nbsp;May&nbsp;2026</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
            	<td><small><b>27&nbsp;May&nbsp;2026</b></small></td>
            	<td><small><b>&nbsp;</b></small></td>
              </tr>              
            </table>
            <br/>
            <img src="ummulqura.png" width="100%">
            <br/><br/>
            <p>Cek link: <a href="https://www.fatwa-online.com/eed-al-adhaa-1446-supreme-court-of-saudi-arabia/" target="_blank">https://www.fatwa-online.com/eed-al-adhaa-1446-supreme-court-of-saudi-arabia/</a></p>
            
            <p>Dalam sepuluh kasus (Ramadhan 1424&nbsp;H, Muharram 1433&nbsp;H, Ramadhan 1434&nbsp;H, Muharram &amp; 
            Ramadhan 1435&nbsp;H, Dzulhijjah 1436&nbsp;H, Muharram &amp; Dzulhijjah 1437&nbsp;H, 
            Ramadhan 1439&nbsp;H dan Muharram 1443&nbsp;H) hilal pertama kali terlihat pada malam <u><b>setelah</b></u> 
            malam yang diprediksi oleh kalender Umm al-Qura.</p>
            
            <p>Namun, dalam tujuh kasus (Syawal &amp; Dzulhijjah 1425&nbsp;H, Ramadhan &amp; Dzulhijjah 
            1427&nbsp;H, Syawal &amp; Dzulhijjah 1428&nbsp;H dan Syawal 1429&nbsp;H) hilal dikatakan 
            pertama kali terlihat pada malam <u><b>sebelum</b></u> malam yang diprediksi oleh kalender Umm al-Qura dengan bulan terbenam tepat sebelum atau bahkan 
            jauh sebelum matahari terbenam.</p>
            
            <p>Dalam beberapa kasus, pemajuan bulan dapat mengakibatkan panjang bulan 31&nbsp;hari yang tidak lazim karena tradisi Islam hanya mengizinkan 
            panjang bulan 29 atau 30&nbsp;hari. Dalam kasus seperti itu, salah satu hari dalam bulan dihitung dua kali. Misalnya, baik Jumat 28&nbsp;Desember 
            maupun Sabtu 29&nbsp;Desember 2007 dihitung sebagai 19&nbsp;Dzulhijjah 1428&nbsp;H.</p>
            <hr>
            <p>Sumber:https://webspace.science.uu.nl/~gent0113/islam/ummalqura.htm </p>
        </fieldset>
        
    </div>

    <script>
    
        document.addEventListener('DOMContentLoaded', function() {
          // Aktifkan menu pertama secara default
          const defaultNavLink = document.querySelector('nav a:first-child');
          if (defaultNavLink) {
            defaultNavLink.classList.add('active');
          }
        });     
                // --- Variabel Global ---
        let boundaryPoints = []; let firstCityName = null; let waktuKonjungsiTerpilih = "";
        let firstCityObj = null; let isScatterVisible = false; let boundaryScanned = false;
        let sortDirections = {}; let Options = {}; const StorageKey = 'AstroDemo.KHGT.Options_v2';
        let updateTimeoutId = null;

        // Definisikan 'pilihan' di sini jika tidak menggunakan locations.js eksternal
    var pilihan = [
        { nama: "Auckland, UTC+12", latitude: -36.8485, longitude: 174.7633, elevation: 8, gmt: 12 },
        { nama: "Gisborne, UTC+12", latitude: -38.6623, longitude: 178.018, elevation: 4, gmt: 12 },
        { nama: "Wellington, UTC+12", latitude: -41.287, longitude: 174.776, elevation: 13, gmt: 12 },
        { nama: "Magadan, UTC+11", latitude: 59.5682, longitude: 150.8086, elevation: 23, gmt: 11 },
        { nama: "Noumea, UTC+11", latitude: -22.267, longitude: 166.448, elevation: 6, gmt: 11 },
        { nama: "Honiara, UTC+11", latitude: -9.4280, longitude: 159.9552, elevation: 29, gmt: 11 },
        { nama: "Port Moresby, UTC+11", latitude: -9.4438, longitude: 147.1803, elevation: 35, gmt: 11 },
        { nama: "Guadalcanal, UTC+11", latitude: -9.6457, longitude: 160.2089, elevation: 14, gmt: 11 },
        { nama: "Lae, UTC+11", latitude: -6.7323, longitude: 146.9970, elevation: 2, gmt: 11 },
        { nama: "Kokopo, UTC+11", latitude: -4.3450, longitude: 152.2637, elevation: 2, gmt: 11 },
        { nama: "Nauru, UTC+11", latitude: -0.5228, longitude: 166.9315, elevation: 10, gmt: 11 },
        { nama: "Yaren, UTC+11", latitude: -0.5477, longitude: 166.9209, elevation: 25, gmt: 11 },
        { nama: "Pohnpei, UTC+11", latitude: 6.8545, longitude: 158.2624, elevation: 2, gmt: 11 },
        { nama: "Chuuk, UTC+11", latitude: 7.1387, longitude: 151.5030, elevation: 2, gmt: 11 },
        { nama: "Gold Coast, UTC+10", latitude: -28.0167, longitude: 153.4000, elevation: 4, gmt: 10 },
        { nama: "Wollongong, UTC+10", latitude: -34.4278, longitude: 150.8931, elevation: 19, gmt: 10 },
        { nama: "Geelong, UTC+10", latitude: -38.1499, longitude: 144.3617, elevation: 12, gmt: 10 },
        { nama: "Cairns, UTC+10", latitude: -16.9203, longitude: 145.7700, elevation: 6, gmt: 10 },
        { nama: "Townsville, UTC+10", latitude: -19.2589, longitude: 146.8169, elevation: 4, gmt: 10 },
        { nama: "Toowoomba, UTC+10", latitude: -27.5606, longitude: 151.9539, elevation: 691, gmt: 10 },
        { nama: "Hobart, UTC+10", latitude: -42.8821, longitude: 147.3272, elevation: 54, gmt: 10 },
        { nama: "Ballarat, UTC+10", latitude: -37.5622, longitude: 143.8503, elevation: 435, gmt: 10 },
        { nama: "Bendigo, UTC+10", latitude: -36.7570, longitude: 144.2794, elevation: 217, gmt: 10 },
        { nama: "Launceston, UTC+10", latitude: -41.4545, longitude: 147.1441, elevation: 15, gmt: 10 },
        { nama: "Mackay, UTC+10", latitude: -21.1411, longitude: 149.1860, elevation: 6, gmt: 10 },
        { nama: "Rockhampton, UTC+10", latitude: -23.3819, longitude: 150.4752, elevation: 13, gmt: 10 },
        { nama: "Coffs Harbour, UTC+10", latitude: -30.2963, longitude: 153.1135, elevation: 5, gmt: 10 },
        { nama: "Bundaberg, UTC+10", latitude: -24.8662, longitude: 152.3489, elevation: 14, gmt: 10 },
        { nama: "Hervey Bay, UTC+10", latitude: -25.2894, longitude: 152.8312, elevation: 3, gmt: 10 },
        { nama: "Wagga Wagga, UTC+10", latitude: -35.1080, longitude: 147.3598, elevation: 147, gmt: 10 },
        { nama: "Port Moresby, UTC+10", latitude: -9.4438, longitude: 147.1803, elevation: 35, gmt: 10 },
        { nama: "Melbourne, UTC+10", latitude: -37.8, longitude: 144.96, elevation: 31, gmt: 10 },
        { nama: "Brisbane, UTC+10", latitude: -27.4698, longitude: 153.0251, elevation: 31, gmt: 10 },
        { nama: "Canberra, UTC+10", latitude: -35.2809, longitude: 149.1300, elevation: 578, gmt: 10 },
        { nama: "Sydney, UTC+10", latitude: -33.8651, longitude: 151.2093, elevation: 6, gmt: 10 },
        { nama: "Darwin, UTC+9.5", latitude: -12.4634, longitude: 130.8456, elevation: 30, gmt: 9.5 },
        { nama: "Adelaide, UTC+9.5", latitude: -34.9285, longitude: 138.6007, elevation: 47, gmt: 9.5 },
        { nama: "Seoul, UTC+9", latitude: 37.5665, longitude: 126.978, elevation: 38, gmt: 9 },
        { nama: "Tokyo, UTC+9", latitude: 35.6762, longitude: 139.6503, elevation: 40, gmt: 9 },
        { nama: "Merauke, UTC+9", latitude: -8.49, longitude: 140.398, elevation: 3, gmt: 9 },
        { nama: "Ambon, UTC+9", latitude: -3.6956, longitude: 128.181, elevation: 10, gmt: 9 },
        { nama: "Jayapura, UTC+9", latitude: -2.5914, longitude: 140.6678, elevation: 11, gmt: 9 },
        { nama: "Perth, UTC+8", latitude: -31.9505, longitude: 115.8605, elevation: 17, gmt: 8 },
        { nama: "Denpasar, UTC+8", latitude: -8.65, longitude: 115.2167, elevation: 4, gmt: 8 },
        { nama: "Mataram, UTC+8", latitude: -8.5833, longitude: 116.1167, elevation: 14, gmt: 8 },
        { nama: "Kupang, UTC+8", latitude: -10.1628, longitude: 123.5975, elevation: 64, gmt: 8 },
        { nama: "Banjarmasin, UTC+8", latitude: -3.3194, longitude: 114.5908, elevation: 16, gmt: 8 },
        { nama: "Samarinda, UTC+8", latitude: -0.49, longitude: 117.1475, elevation: 14, gmt: 8 },
        { nama: "Manado, UTC+8", latitude: 1.4933, longitude: 124.8413, elevation: 14, gmt: 8 },
        { nama: "Makassar, UTC+8", latitude: -5.148, longitude: 119.433, elevation: 8, gmt: 8 },
        { nama: "Kendari, UTC+8", latitude: -3.989, longitude: 122.513, elevation: 10, gmt: 8 },
        { nama: "Palu, UTC+8", latitude: -0.8917, longitude: 119.8707, elevation: 10, gmt: 8 },
        { nama: "Gorontalo, UTC+8", latitude: 0.538, longitude: 123.0595, elevation: 14, gmt: 8 },
        { nama: "Beijing, UTC+8", latitude: 39.9121, longitude: 116.40425, elevation: 43, gmt: 8 },
        { nama: "Taipei, UTC+8", latitude: 25.0330, longitude: 121.5654, elevation: 10, gmt: 8 },
        { nama: "Tangshan, UTC+8", latitude: 39.6392, longitude: 118.1765, elevation: 22, gmt: 8 },
        { nama: "Bunbury, UTC+8", latitude: -33.3271, longitude: 115.6413, elevation: 2, gmt: 8 },
        { nama: "Bangkok, UTC+7", latitude: 13.7568, longitude: 100.5019, elevation: 5, gmt: 7 },
        { nama: "Pontianak, UTC+7", latitude: -0.0225, longitude: 109.33, elevation: 3, gmt: 7 },
        { nama: "Palangkaraya, UTC+7", latitude: -2.2097, longitude: 113.9092, elevation: 17, gmt: 7 },
        { nama: "Semarang, UTC+7", latitude: -7.067, longitude: 110.4, elevation: 10, gmt: 7 },
        { nama: "Yogyakarta, UTC+7", latitude: -7.797, longitude: 110.371, elevation: 113, gmt: 7 },
        { nama: "Sabang, UTC+7", latitude: 5.893, longitude: 95.32, elevation: 2, gmt: 7 },
        { nama: "Magelang, UTC+7", latitude: -7.470, longitude: 110.217, elevation: 432, gmt: 7 },
        { nama: "Kendal, UTC+7", latitude: -7.043, longitude: 110.211, elevation: 6, gmt: 7 },
        { nama: "Pekalongan, UTC+7", latitude: -6.889, longitude: 109.675, elevation: 8, gmt: 7 },
        { nama: "Pemalang, UTC+7", latitude: -6.891, longitude: 109.377, elevation: 16, gmt: 7 },
        { nama: "Tegal, UTC+7", latitude: -6.866, longitude: 109.140, elevation: 3, gmt: 7 },
        { nama: "Slawi, UTC+7", latitude: -6.983, longitude: 109.139, elevation: 48, gmt: 7 },
        { nama: "Brebes, UTC+7", latitude: -6.965, longitude: 109.050, elevation: 10, gmt: 7 },
        { nama: "Cirebon, UTC+7", latitude: -6.722, longitude: 108.556, elevation: 4, gmt: 7 },
        { nama: "Indramayu, UTC+7", latitude: -6.335, longitude: 108.325, elevation: 1, gmt: 7 },
        { nama: "Sukamandi, UTC+7", latitude: -6.578, longitude: 107.822, elevation: 46, gmt: 7 },
        { nama: "Bogor, UTC+7", latitude: -6.595, longitude: 106.816, elevation: 243, gmt: 7 },
        { nama: "Bandung, UTC+7", latitude: -6.917, longitude: 107.619, elevation: 768, gmt: 7 },
        { nama: "Banten, UTC+7", latitude: -6.405, longitude: 106.064, elevation: 31, gmt: 7 },
        { nama: "Tangerang, UTC+7", latitude: -6.178, longitude: 106.629, elevation: 12, gmt: 7 },
        { nama: "Jakarta, UTC+7", latitude: -6.2088, longitude: 106.8456, elevation: 8, gmt: 7 },
        { nama: "Serang, UTC+7", latitude: -6.1177, longitude: 106.1501, elevation: 1, gmt: 7 },
        { nama: "Demak, UTC+7", latitude: -6.889, longitude: 110.638, elevation: 1, gmt: 7 },
        { nama: "Jepara, UTC+7", latitude: -6.578, longitude: 110.678, elevation: 1, gmt: 7 },
        { nama: "Kudus, UTC+7", latitude: -6.804, longitude: 110.840, elevation: 5, gmt: 7 },
        { nama: "Pati, UTC+7", latitude: -6.755, longitude: 111.038, elevation: 7, gmt: 7 },
        { nama: "Rembang, UTC+7", latitude: -6.716, longitude: 111.406, elevation: 6, gmt: 7 },
        { nama: "Ngawi, UTC+7", latitude: -7.367, longitude: 111.464, elevation: 62, gmt: 7 },
        { nama: "Klaten, UTC+7", latitude: -7.705, longitude: 110.609, elevation: 82, gmt: 7 },
        { nama: "Surakarta, UTC+7", latitude: -7.556, longitude: 110.831, elevation: 91, gmt: 7 },
        { nama: "Madiun, UTC+7", latitude: -7.629, longitude: 111.523, elevation: 99, gmt: 7 },
        { nama: "Magetan, UTC+7", latitude: -7.644, longitude: 111.375, elevation: 85, gmt: 7 },
        { nama: "Malang, UTC+7", latitude: -7.979, longitude: 112.630, elevation: 458, gmt: 7 },
        { nama: "Kediri, UTC+7", latitude: -7.823, longitude: 112.017, elevation: 69, gmt: 7 },
        { nama: "Wonogiri, UTC+7", latitude: -7.848, longitude: 110.928, elevation: 53, gmt: 7 },
        { nama: "Pacitan, UTC+7", latitude: -8.129, longitude: 111.155, elevation: 44, gmt: 7 },
        { nama: "Banyuwangi, UTC+7", latitude: -8.224, longitude: 114.357, elevation: 33, gmt: 7 },
        { nama: "Surabaya, UTC+7", latitude: -7.2575, longitude: 112.7521, elevation: 4, gmt: 7 },
        { nama: "Almaty, UTC+6", latitude: 43.2220, longitude: 76.8512, elevation: 839, gmt: 6 },
        { nama: "Dhaka, UTC+6", latitude: 23.8103, longitude: 90.4125, elevation: 8, gmt: 6 },
        { nama: "Bishkek, UTC+6", latitude: 42.8746, longitude: 74.5698, elevation: 760, gmt: 6 },
        { nama: "Thimphu, UTC+6", latitude: 27.4712, longitude: 89.6339, elevation: 2320, gmt: 6 },
        { nama: "Omsk, UTC+6", latitude: 54.9885, longitude: 73.3242, elevation: 91, gmt: 6 },
        { nama: "Tashkent, UTC+6", latitude: 41.2995, longitude: 69.2401, elevation: 455, gmt: 6 },
        { nama: "Qyzylorda, UTC+6", latitude: 44.8488, longitude: 65.4823, elevation: 127, gmt: 6 },
        { nama: "Ashgabat, UTC+6", latitude: 37.9601, longitude: 58.3261, elevation: 219, gmt: 6 },
        { nama: "Karaganda, UTC+6", latitude: 49.8028, longitude: 73.0877, elevation: 552, gmt: 6 },
        { nama: "Urumqi, UTC+6", latitude: 43.8256, longitude: 87.6168, elevation: 910, gmt: 6 },
        { nama: "Mumbai, UTC+5.30", latitude: 19.076, longitude: 72.8777, elevation: 14, gmt: 5.5 },
        { nama: "Delhi, UTC+5.30", latitude: 28.6139, longitude: 77.209, elevation: 216, gmt: 5.5 },
        { nama: "Islamabad, UTC+5", latitude: 33.6844, longitude: 73.0479, elevation: 507, gmt: 5 },
        { nama: "Dubai, UTC+4", latitude: 25.2048, longitude: 55.2708, elevation: 14, gmt: 4 },
        { nama: "Abu Dhabi, UTC+4", latitude: 24.4539, longitude: 54.3773, elevation: 14, gmt: 4 },
        { nama: "Muscat, UTC+4", latitude: 23.5859, longitude: 58.4059, elevation: 10, gmt: 4 },
        { nama: "Baku, UTC+4", latitude: 40.4093, longitude: 49.8671, elevation: -28, gmt: 4 },
        { nama: "Tbilisi, UTC+4", latitude: 41.7151, longitude: 44.8271, elevation: 410, gmt: 4 },
        { nama: "Yerevan, UTC+4", latitude: 40.1792, longitude: 44.4991, elevation: 989, gmt: 4 },
        { nama: "Samara, UTC+4", latitude: 53.2415, longitude: 50.2212, elevation: 84, gmt: 4 },
        { nama: "Izhevsk, UTC+4", latitude: 56.8526, longitude: 53.2045, elevation: 147, gmt: 4 },
        { nama: "Saratov, UTC+4", latitude: 51.5336, longitude: 46.0343, elevation: 55, gmt: 4 },
        { nama: "Astrakhan, UTC+4", latitude: 46.3497, longitude: 48.0408, elevation: -15, gmt: 4 },
        { nama: "Kabul, UTC+3.5", latitude: 34.555, longitude: 69.208, elevation: 1791, gmt: 3.5 },
        { nama: "Makkah, UTC+3", latitude: 21.4225, longitude: 39.8262, elevation: 277, gmt: 3 },
        { nama: "Madinah, UTC+3", latitude: 24.525, longitude: 39.569, elevation: 620, gmt: 3 },
        { nama: "Doha, UTC+3", latitude: 25.285, longitude: 51.531, elevation: 10, gmt: 3 },
        { nama: "Riyadh, UTC+3", latitude: 24.7455, longitude: 46.6916, elevation: 612, gmt: 3 },
        { nama: "Al-Hariq, UTC+3", latitude: 23.6258, longitude: 46.5130006, elevation: 612, gmt: 3 },
        { nama: "Damaskus, UTC+3", latitude: 33.514, longitude: 36.277, elevation: 680, gmt: 3 },
        { nama: "Istanbul, UTC+3", latitude: 41.0082, longitude: 28.9784, elevation: 39, gmt: 3 },
        { nama: "Ankara, UTC+3", latitude: 39.933, longitude: 32.86, elevation: 938, gmt: 3 },
        { nama: "Moskow, UTC+3", latitude: 55.75, longitude: 37.62, elevation: 156, gmt: 3 },
        { nama: "Mogadishu, UTC+3", latitude: 2.0469, longitude: 45.3182, elevation: 9, gmt: 3 },
        { nama: "Nairobi, UTC+3", latitude: -1.286389, longitude: 36.817223, elevation: 1795, gmt: 3 },
        { nama: "Addis Ababa, UTC+3", latitude: 9.03, longitude: 38.74, elevation: 2355, gmt: 3 },
        { nama: "Kampala, UTC+3", latitude: 0.3476, longitude: 32.5825, elevation: 1190, gmt: 3 },
        { nama: "Khartoum, UTC+2", latitude: 15.5007, longitude: 32.5599, elevation: 382, gmt: 2 },
        { nama: "Johannesburg, UTC+2", latitude: -26.2041, longitude: 28.0473, elevation: 1753, gmt: 2 },
        { nama: "Rome, UTC+2", latitude: 41.9028, longitude: 12.4964, elevation: 21, gmt: 2 },
        { nama: "Cairo, UTC+2", latitude: 30.0444, longitude: 31.2357, elevation: 23, gmt: 2 },
        { nama: "Athens, UTC+2", latitude: 37.984, longitude: 23.728, elevation: 70, gmt: 2 },
        { nama: "Cape Town, UTC+2", latitude: -33.9249, longitude: 18.4241, elevation: 20, gmt: 2 },
        { nama: "Paris, UTC+2", latitude: 48.857, longitude: 2.352, elevation: 35, gmt: 2 },
        { nama: "Munich, UTC+2", latitude: 48.1351, longitude: 11.5820, elevation: 520, gmt: 2 },
        { nama: "Lagos, UTC+1", latitude: 6.5244, longitude: 3.3792, elevation: 41, gmt: 1 },
        { nama: "Abuja, UTC+1", latitude: 9.0579, longitude: 7.4951, elevation: 360, gmt: 1 },
        { nama: "Algiers, UTC+1", latitude: 36.7372, longitude: 3.0863, elevation: 34, gmt: 1 },
        { nama: "Innsbruck, UTC+1", latitude: 47.269, longitude: 11.404, elevation: 574, gmt: 1 },
        { nama: "Casablanca, UTC+1", latitude: 33.5731, longitude: -7.5898, elevation: 20, gmt: 1 },
        { nama: "Luanda, UTC+1", latitude: -8.8383, longitude: 13.2344, elevation: 6, gmt: 1 },
        { nama: "Yaoundé, UTC+1", latitude: 3.8480, longitude: 11.5021, elevation: 726, gmt: 1 },
        { nama: "Douala, UTC+1", latitude: 4.0511, longitude: 9.7679, elevation: 13, gmt: 1 },
        { nama: "Libreville, UTC+1", latitude: 0.4162, longitude: 9.4673, elevation: 4, gmt: 1 },
        { nama: "Malabo, UTC+1", latitude: 3.7500, longitude: 8.7833, elevation: 55, gmt: 1 },
        { nama: "Kinshasa, UTC+1", latitude: -4.4419, longitude: 15.2663, elevation: 240, gmt: 1 },
        { nama: "Brazzaville, UTC+1", latitude: -4.2634, longitude: 15.2429, elevation: 300, gmt: 1 },
        { nama: "--- TITIK (0,0) ---", latitude: 0, longitude: 0, elevation: 0, gmt: 0 },
        { nama: "Greenwich, GMT", latitude: 51.482, longitude: 0.008, elevation: 46, gmt: 0 },
        { nama: "Casablanca, UTC+0", latitude: 33.5731, longitude: -7.5898, elevation: 20, gmt: 0 },
        { nama: "Rabat, UTC+0", latitude: 34.0209, longitude: -6.8416, elevation: 79, gmt: 0 },
        { nama: "Accra, UTC+0", latitude: 5.6037, longitude: -0.1870, elevation: 61, gmt: 0 },
        { nama: "Freetown, UTC+0", latitude: 8.4657, longitude: -13.2317, elevation: 26, gmt: 0 },
        { nama: "Lomé, UTC+0", latitude: 6.1725, longitude: 1.2314, elevation: 19, gmt: 0 },
        { nama: "Ouagadougou, UTC+0", latitude: 12.3714, longitude: -1.5197, elevation: 305, gmt: 0 },
        { nama: "London, UTC", latitude: 51.507, longitude: -0.128, elevation: 35, gmt: 0 },
        { nama: "Dakar, UTC", latitude: 14.6928, longitude: -17.4467, elevation: 24, gmt: 0 },
        { nama: "Azores, UTC", latitude: 37.7412, longitude: -25.6752, elevation: 23, gmt: 0 },
        { nama: "Fernando de Noronha, UTC-2", latitude: -3.8400, longitude: -32.4200, elevation: 43, gmt: -2 },
        { nama: "Nuuk, UTC-2", latitude: 64.1835, longitude: -51.7216, elevation: 18, gmt: -2 },
        { nama: "Godthåb, UTC-2", latitude: 64.1835, longitude: -51.7216, elevation: 18, gmt: -2 },
        { nama: "Stanley, UTC-2", latitude: -51.6977, longitude: -57.8517, elevation: 11, gmt: -2 },
        { nama: "South Georgia, UTC-2", latitude: -54.2833, longitude: -36.5000, elevation: 4, gmt: -2 },
        { nama: "Ittoqqortoormiit, Greenland (UTC-2)", latitude: 70.4853, longitude: -21.9667, elevation: 28, gmt: -2 },
        { nama: "Tasiilaq, UTC-2", latitude: 65.6145, longitude: -37.6368, elevation: 17, gmt: -2},
        { nama: "Rio de Janeiro, Brazil (UTC-3)", latitude: -22.9068, longitude: -43.1729, elevation: 2, gmt: -3 },
        { nama: "Paramaribo, Suriname (UTC-3)", latitude: -5.8662, longitude: -55.1668, elevation: 4, gmt: -3 },
        { nama: "Brasilia, Brazil (UTC-3)", latitude: -15.8267, longitude: -47.9218, elevation: 1172, gmt: -3 },
        { nama: "Buenos Aires, Argentina (UTC-3)", latitude: -34.6037, longitude: -58.3816, elevation: 25, gmt: -3 },
        { nama: "Montevideo, Uruguay (UTC-3)", latitude: -34.9011, longitude: -56.1645, elevation: 13, gmt: -3 },
        { nama: "São Paulo, Brazil (UTC-3)", latitude: -23.5505, longitude: -46.6333, elevation: 760, gmt: -3 },
        { nama: "Salvador, Brazil (UTC-3)", latitude: -12.9714, longitude: -38.5014, elevation: 8, gmt: -3 },
        { nama: "Córdoba, Argentina (UTC-3)", latitude: -31.4135, longitude: -64.1811, elevation: 400, gmt: -3 },
        { nama: "Rosario, Argentina (UTC-3)", latitude: -32.9468, longitude: -60.6393, elevation: 25, gmt: -3 },
        { nama: "Fortaleza, Brazil (UTC-3)", latitude: -3.7304, longitude: -38.5269, elevation: 27, gmt: -3 },
        { nama: "Miami, USA (UTC-4)", latitude: 25.7617, longitude: -80.1918, elevation: 2, gmt: -4 },
        { nama: "Orlando, USA (UTC-4)", latitude: 28.5383, longitude: -81.3792, elevation: 25, gmt: -4 },
        { nama: "Atlanta, USA (UTC-4)", latitude: 33.7490, longitude: -84.3880, elevation: 330, gmt: -4 },
        { nama: "Washington, D.C., USA (UTC-4)", latitude: 38.9072, longitude: -77.0369, elevation: 25, gmt: -4 },
        { nama: "Boston, USA (UTC-4)", latitude: 42.3601, longitude: -71.0589, elevation: 43, gmt: -4 },
        { nama: "Philadelphia, USA (UTC-4)", latitude: 39.9526, longitude: -75.1652, elevation: 39, gmt: -4 },
        { nama: "Baltimore, USA (UTC-4)", latitude: 39.2904, longitude: -76.6122, elevation: 29, gmt: -4 },
        { nama: "Detroit, USA (UTC-4)", latitude: 42.3314, longitude: -83.0458, elevation: 190, gmt: -4 },
        { nama: "Cleveland, USA (UTC-4)", latitude: 41.4993, longitude: -81.6944, elevation: 199, gmt: -4 },
        { nama: "Pittsburgh, USA (UTC-4)", latitude: 40.4406, longitude: -79.9959, elevation: 373, gmt: -4 },
        { nama: "Charlotte, USA (UTC-4)", latitude: 35.2271, longitude: -80.8431, elevation: 229, gmt: -4 },
        { nama: "New York City, USA (UTC-4)", latitude: 40.7128, longitude: -74.0060, elevation: 10, gmt: -4 },
        { nama: "Indianapolis, USA (UTC-4)", latitude: 39.7684, longitude: -86.1581, elevation: 231, gmt: -4 },
        { nama: "Columbus, USA (UTC-4)", latitude: 39.9612, longitude: -82.9988, elevation: 275, gmt: -4 },
        { nama: "Jacksonville, USA (UTC-4)", latitude: 30.3322, longitude: -81.6557, elevation: 8, gmt: -4 },
        { nama: "Caracas, Venezuela (UTC-4)", latitude: 10.4806, longitude: -66.9036, elevation: 900, gmt: -4 },
        { nama: "La Paz, Bolivia (UTC-4)", latitude: -16.5000, longitude: -68.1500, elevation: 3650, gmt: -4 },
        { nama: "Manaus, Brazil (UTC-4)", latitude: -3.1190, longitude: -60.0217, elevation: 92, gmt: -4 },
        { nama: "Santiago, Chile (UTC-4)", latitude: -33.4489, longitude: -70.6693, elevation: 520, gmt: -4 },
        { nama: "Louisville, USA (UTC-4)", latitude: 38.2527, longitude: -85.7585, elevation: 142, gmt: -4 },
        { nama: "Toronto, Canada (UTC-4)", latitude: 43.6532, longitude: -79.3832, elevation: 76, gmt: -4 },
        { nama: "Montreal, Canada (UTC-4)", latitude: 45.5017, longitude: -73.5673, elevation: 35, gmt: -4 },
        { nama: "Ottawa, Canada (UTC-4)", latitude: 45.4215, longitude: -75.6972, elevation: 79, gmt: -4 },
        { nama: "Kap Hoorn, Chili (UTC-4)", latitude: -55.9833, longitude: -67.2667, elevation: 4, gmt: -4 },
        { nama: "Omaha, USA (UTC-5)", latitude: 41.2565, longitude: -95.9345, elevation: 334, gmt: -5 },
        { nama: "Memphis, USA (UTC-5)", latitude: 35.1495, longitude: -90.0490, elevation: 103, gmt: -5 },
        { nama: "Bogotá, Colombia (UTC-5)", latitude: 4.7110, longitude: -74.0721, elevation: 2640, gmt: -5 },
        { nama: "Lima, Peru (UTC-5)", latitude: -12.0464, longitude: -77.0428, elevation: 154, gmt: -5 },
        { nama: "Quito, Ecuador (UTC-5)", latitude: -0.1807, longitude: -78.4678, elevation: 2850, gmt: -5 },
        { nama: "Milwaukee, USA (UTC-5)", latitude: 43.0389, longitude: -87.9065, elevation: 205, gmt: -5 },
        { nama: "Chicago, USA (UTC-5)", latitude: 41.8781, longitude: -87.6298, elevation: 181, gmt: -5 },
        { nama: "Minneapolis, USA (UTC-5)", latitude: 44.9778, longitude: -93.2650, elevation: 259, gmt: -5 },
        { nama: "Nashville, USA (UTC-5)", latitude: 36.1627, longitude: -86.7816, elevation: 183, gmt: -5 },
        { nama: "New Orleans, USA (UTC-5)", latitude: 29.9511, longitude: -90.0715, elevation: -2, gmt: -5 },
        { nama: "Havana, Cuba (UTC-5)", latitude: 23.1136, longitude: -82.3666, elevation: 59, gmt: -5 },
        { nama: "Medellín, Colombia (UTC-5)", latitude: 6.2442, longitude: -75.5736, elevation: 1495, gmt: -5 },
        { nama: "Cali, Colombia (UTC-5)", latitude: 3.4372, longitude: -76.5225, elevation: 1018, gmt: -5 },
        { nama: "Kingston, Jamaica (UTC-5)", latitude: 18.0179, longitude: -76.8099, elevation: 9, gmt: -5 },
        { nama: "Kansas City, USA (UTC-5)", latitude: 39.0997, longitude: -94.5786, elevation: 277, gmt: -5 },
        { nama: "Houston, USA (UTC-6)", latitude: 29.7604, longitude: -95.3698, elevation: 25, gmt: -6 },
        { nama: "Denver, USA (UTC-6)", latitude: 39.7392, longitude: -104.9903, elevation: 1609, gmt: -6 },
        { nama: "Dallas, USA (UTC-6)", latitude: 32.7767, longitude: -96.7970, elevation: 131, gmt: -6 },
        { nama: "Austin, USA (UTC-6)", latitude: 30.2672, longitude: -97.7431, elevation: 149, gmt: -6 },
        { nama: "Fort Worth, USA (UTC-6)", latitude: 32.7555, longitude: -97.3308, elevation: 206, gmt: -6 },
        { nama: "San Antonio, USA (UTC-6)", latitude: 29.4241, longitude: -98.4936, elevation: 200, gmt: -6 },
        { nama: "El Paso, USA (UTC-6)", latitude: 31.7619, longitude: -106.4850, elevation: 1140, gmt: -6 },
        { nama: "Albuquerque, USA (UTC-6)", latitude: 35.0844, longitude: -106.6504, elevation: 1619, gmt: -6 },
        { nama: "Santa Fe, USA (UTC-6)", latitude: 35.6870, longitude: -105.9378, elevation: 2194, gmt: -6 },
        { nama: "Las Cruces, USA (UTC-6)", latitude: 32.3199, longitude: -106.7637, elevation: 1191, gmt: -6 },
        { nama: "Roswell, USA (UTC-6)", latitude: 33.3943, longitude: -104.5230, elevation: 1093, gmt: -6 },
        { nama: "Carlsbad, USA (UTC-6)", latitude: 32.4207, longitude: -104.2288, elevation: 1002, gmt: -6 },
        { nama: "Hobbs, USA (UTC-6)", latitude: 32.7026, longitude: -103.1360, elevation: 1116, gmt: -6 },
        { nama: "Artesia, USA (UTC-6)", latitude: 32.8423, longitude: -104.4036, elevation: 1024, gmt: -6 },
        { nama: "Alamogordo, USA (UTC-6)", latitude: 32.8995, longitude: -105.9603, elevation: 1332, gmt: -6 },
        { nama: "Clovis, USA (UTC-6)", latitude: 34.4048, longitude: -103.2052, elevation: 1300, gmt: -6 },
        { nama: "Socorro, USA (UTC-6)", latitude: 34.0584, longitude: -106.8914, elevation: 1406, gmt: -6 },
        { nama: "Portales, USA (UTC-6)", latitude: 34.1862, longitude: -103.3533, elevation: 1222, gmt: -6 },
        { nama: "Tucumcari, USA (UTC-6)", latitude: 35.1717, longitude: -103.7240, elevation: 1260, gmt: -6 },
        { nama: "Lovington, USA (UTC-6)", latitude: 32.9448, longitude: -103.3486, elevation: 1205, gmt: -6 },
        { nama: "Grants, USA (UTC-6)", latitude: 35.1473, longitude: -107.8512, elevation: 1968, gmt: -6 },
        { nama: "Deming, USA (UTC-6)", latitude: 32.2687, longitude: -107.7586, elevation: 1321, gmt: -6 },
        { nama: "Ruidoso, USA (UTC-6)", latitude: 33.3317, longitude: -105.6664, elevation: 2002, gmt: -6 },
        { nama: "Silver City, USA (UTC-6)", latitude: 32.7701, longitude: -108.2803, elevation: 1759, gmt: -6 },
        { nama: "Los Lunas, USA (UTC-6)", latitude: 34.8062, longitude: -106.7334, elevation: 1475, gmt: -6 },
        { nama: "Belen, USA (UTC-6)", latitude: 34.6623, longitude: -106.7769, elevation: 1475, gmt: -6 },
        { nama: "Mexico City, Mexico (UTC-6)", latitude: 19.4326, longitude: -99.1332, elevation: 2240, gmt: -6 },
        { nama: "Guadalajara, Mexico (UTC-6)", latitude: 20.6757, longitude: -103.3496, elevation: 1566, gmt: -6 },
        { nama: "Monterrey, Mexico (UTC-6)", latitude: 25.6866, longitude: -100.3161, elevation: 537, gmt: -6 },
        { nama: "Edmonton, Canada (UTC-7)", latitude: 53.5461, longitude: -113.4938, elevation: 671, gmt: -7 },
        { nama: "Tucson, USA (UTC-7)", latitude: 32.2226, longitude: -110.9747, elevation: 759, gmt: -7 },
        { nama: "Fresno, USA (UTC-7)", latitude: 36.7378, longitude: -119.7871, elevation: 94, gmt: -7 },
        { nama: "Mesa, USA (UTC-7)", latitude: 33.4152, longitude: -111.8315, elevation: 378, gmt: -7 },
        { nama: "Sacramento, USA (UTC-7)", latitude: 38.5816, longitude: -121.4944, elevation: 8, gmt: -7 },
        { nama: "Long Beach, USA (UTC-7)", latitude: 33.7701, longitude: -118.1937, elevation: 10, gmt: -7 },
        { nama: "Phoenix, USA (UTC-7)", latitude: 33.4484, longitude: -112.0740, elevation: 331, gmt: -7 },
        { nama: "Vancouver, Canada (UTC-8)", latitude: 49.2827, longitude: -123.1207, elevation: 13, gmt: -8 },
        { nama: "Seattle, USA (UTC-8)", latitude: 47.6062, longitude: -122.3321, elevation: 52, gmt: -8 },
        { nama: "Portland, USA (UTC-8)", latitude: 45.5051, longitude: -122.6750, elevation: 19, gmt: -8 },
        { nama: "San Francisco, USA (UTC-8)", latitude: 37.7749, longitude: -122.4194, elevation: 16, gmt: -8 },
        { nama: "Los Angeles, USA (UTC-8)", latitude: 34.0522, longitude: -118.2437, elevation: 88, gmt: -8 },
        { nama: "San Diego, USA (UTC-8)", latitude: 32.7157, longitude: -117.1611, elevation: 13, gmt: -8 },
        { nama: "Las Vegas, USA (UTC-8)", latitude: 36.1699, longitude: -115.1398, elevation: 620, gmt: -8 },
        { nama: "Oakland, USA (UTC-8)", latitude: 37.8044, longitude: -122.2711, elevation: 12, gmt: -8 },
        { nama: "San Jose, USA (UTC-8)", latitude: 37.3382, longitude: -121.8863, elevation: 30, gmt: -8 },
        { nama: "Anchorage, USA (UTC-8)", latitude: 61.2181, longitude: -149.9003, elevation: 31, gmt: -8 },
        { nama: "Juneau, USA (UTC-8)", latitude: 58.3019, longitude: -134.4197, elevation: 17, gmt: -8 },
        { nama: "Fairbanks, USA (UTC-8)", latitude: 64.8378, longitude: -147.7164, elevation: 136, gmt: -8 },   
        { nama: "Alaska-Pusat, USA (UTC-8)", latitude: 63.8, longitude: -152.0, elevation: 200, gmt: -8 },
        { nama: "Gambier Islands, French Polynesia (UTC-9)", latitude: -23.1324, longitude: -134.9703, elevation: 4, gmt: -9 },
        { nama: "Hawai, USA (UTC-10)", latitude: 19.8968, longitude: -155.5828, elevation: 13, gmt: -10 },
        { nama: "Midway Atoll, USA (UTC-11)", latitude: 28.2019, longitude: -177.3785, elevation: 4, gmt: -11 },
        { nama: "Samoa (UTC-11)", latitude: -13.7590, longitude: -172.1046, elevation: 7, gmt: -11 },
        { nama: "Baker Island, USA (UTC-12)", latitude: 0.1936, longitude: -176.4760, elevation: 2, gmt: -12 }
    ];

        // --- Fungsi Tampilan & Interaksi UI ---
        function toggleContent() { var content = document.getElementById("caranyaContent"); content.classList.toggle("hidden"); }
        function toggleSpecialTable() { /* ... implementasi jika diperlukan ... */ }
        document.addEventListener('DOMContentLoaded', (event) => {
             const scatterBtn = document.getElementById('scatterBtn');
             if (scatterBtn) {
                 scatterBtn.addEventListener('click', function () {
                    const scatterDiv = document.getElementById('scatterplot');
                    isScatterVisible = !isScatterVisible;
                    if (isScatterVisible) {
                        scatterDiv.style.display = 'block'; this.innerHTML = '<i class="fas fa-eye-slash"></i> SEMBUNYIKAN PLOT';
                         if (typeof pilihan !== 'undefined') { drawScatterPlot(pilihan); }
                         else { scatterDiv.innerHTML = "<p style='color:red'>Data kota belum dimuat.</p>" }
                    } else { scatterDiv.style.display = 'none'; this.innerHTML = '<i class="fas fa-map-marker-alt"></i> SCATTERPLOT'; }
                });
             }
             const toggleBtn = document.getElementById('toggleButton');
             if (toggleBtn) {
                 toggleBtn.addEventListener('click', function() {
                     var table = document.getElementById('locationTable');
                     if (table.style.display === 'none') { table.style.display = 'table'; if (typeof pilihan !== 'undefined') { populateLocationTable(); } }
                     else { table.style.display = 'none'; }
                 });
             }
             document.addEventListener('click', function(event) { var table = document.getElementById('locationTable'); var button = document.getElementById('toggleButton'); if (table && button && !button.contains(event.target) && !table.contains(event.target) && table.style.display !== 'none') { /* table.style.display = 'none'; */ } });
             window.batasTable = async function() {
                 const table = document.getElementById("boundaryTable"); const tableBody = table ? table.querySelector('tbody') : null; if (!table || !tableBody) return;
                 if (table.style.display === 'none') {
                     table.style.display = 'table';
                     if (!boundaryScanned) {
                         tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: blue; padding: 10px;"><i class="fas fa-spinner fa-spin"></i> Scanning titik batas... Mohon tunggu.</td></tr>';
                         await new Promise(resolve => setTimeout(resolve, 50));
                         try { await executeBoundaryScan(); boundaryScanned = true; } catch (error) { console.error("Error during boundary scan:", error); tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: red;">Error saat scanning batas.</td></tr>'; }
                     } else { if (tableBody.rows.length === 0) { tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: orange;">Tidak ada titik batas ditemukan pada scan sebelumnya.</td></tr>'; } }
                 } else { table.style.display = 'none'; }
             }
             Init(); // Panggil Init di akhir DOMContentLoaded
         });

        // --- Fungsi Update Waktu & Lokasi ---
         function updateDateTimeBoxWithKonjungsi(newTimeWIB, konjungsiNum) { const dateTimeBox = document.getElementById('DateTimeBox'); const timeString = newTimeWIB.replace(/<\/?u>/g, ''); const timeMoment = moment(timeString, 'YYYY-MM-DD HH:mm:ss'); if (timeMoment.isValid()) { waktuKonjungsiTerpilih = timeString; dateTimeBox.value = timeMoment.format('YYYY-MM-DDTHH:mm:ss'); triggerManualUpdate(); checkSunsetMatch(); } else { console.error("Format waktu New Moon tidak valid:", newTimeWIB); } }
         function updateDateTimeBoxWithEvent(timeWIB, eventType) { const dateTimeBox = document.getElementById('DateTimeBox'); const timeString = timeWIB.replace(/<\/?u>/g, ''); const timeMoment = moment(timeString, 'YYYY-MM-DD HH:mm:ss'); if (timeMoment.isValid()) { dateTimeBox.value = timeMoment.format('YYYY-MM-DDTHH:mm:ss'); triggerManualUpdate(); checkSunsetMatch(); } else { console.error("Format waktu event tidak valid:", timeWIB); } }
         function updateDateTimeBoxChanged() { triggerManualUpdate(); }
        function triggerManualUpdate() {
            const autoTimeCheckBox = document.getElementById('AutoTimeCheckBox');
            if (autoTimeCheckBox) autoTimeCheckBox.checked = false;
            OnToggleAutoTime(); // Ini akan clear timeout jika ada
            updateLocalTimeBasedOnDateTimeBox();
            updateSunMoonData(); // Hitung Alt, Az, Elong, dll.
            updateRiseSetTimes(); // !!! PANGGIL FUNGSI BARU DI SINI !!!
            updateNewMoonData();
            populateLocationTable(); // Ini menghitung sunset/sunrise untuk tabel detail
            checkSunsetMatch();
            SaveOptions();
        }
         function OnToggleAutoTime() { const checkbox = document.getElementById('AutoTimeCheckBox'); const editbox = document.getElementById('DateTimeBox'); if (!editbox || !checkbox) return; if (checkbox.checked) { editbox.setAttribute('readonly', true); UpdateScreen(); } else { editbox.removeAttribute('readonly'); if (updateTimeoutId) clearTimeout(updateTimeoutId); } checkSunsetMatch(); }
         function updateLocalTime(longitudeStr, dateTimeWIB) { const localTimeBox = document.getElementById('LocalTime'); if (!localTimeBox) return; const longitude = parseFloat(longitudeStr); const dateTimeMomentWIB = moment(dateTimeWIB, 'YYYY-MM-DD HH:mm:ss'); if (isNaN(longitude) || !dateTimeMomentWIB.isValid()) { localTimeBox.value = 'Invalid Input'; return; } const gmtOffsetHours = Math.round(longitude / 15); const localTime = dateTimeMomentWIB.clone().subtract(7, 'hours').add(gmtOffsetHours, 'hours').format('YYYY-MM-DD HH:mm:ss'); localTimeBox.value = localTime; }
         function updateLocalTimeBasedOnDateTimeBox() { const lonStr = document.getElementById('EditLongitude').value; const dtStr = document.getElementById('DateTimeBox').value.replace('T', ' '); updateLocalTime(lonStr, dtStr); }
         function checkSunsetMatch() { const label = document.getElementById('automaticLabel'); if (!label) return; const sunsetWIB = document.getElementById('Sunset').innerText.replace(/<\/?u>/g, ''); const sunriseWIB = document.getElementById('Sunrise').innerText.replace(/<\/?u>/g, ''); const dateTimeBoxValue = document.getElementById('DateTimeBox').value; const dateTimeFormatted = moment(dateTimeBoxValue).format('YYYY-MM-DD HH:mm:ss'); let statusLabel = '(WIB)'; if (sunsetWIB !== 'N/A' && sunsetWIB === dateTimeFormatted) { statusLabel = '(WIB) <span style="color: yellow;">SUNSET</span>'; } else if (sunriseWIB !== 'N/A' && sunriseWIB === dateTimeFormatted) { statusLabel = '(WIB) <span style="color: yellow;">SUNRISE</span>'; } else if (dateTimeFormatted.endsWith(" 00:00:00")) { statusLabel = '(WIB) <span style="color: yellow;">MIDNIGHT</span>'; } else if (dateTimeFormatted.endsWith(" 07:00:00")) { statusLabel = '(WIB) <span style="color: yellow;">UTC 00</span>'; } else if (waktuKonjungsiTerpilih && waktuKonjungsiTerpilih === dateTimeFormatted) { statusLabel = '(WIB) <span style="color: yellow;">KONJUNGSI</span>'; } label.innerHTML = statusLabel; }
         function setMidnight() { const dateTimeBox = document.getElementById('DateTimeBox'); const currentMoment = moment(dateTimeBox.value).startOf('day'); dateTimeBox.value = currentMoment.format('YYYY-MM-DDTHH:mm:ss'); triggerManualUpdate(); }
         function setUTC() { const dateTimeBox = document.getElementById('DateTimeBox'); const currentMoment = moment(dateTimeBox.value).set({ hour: 7, minute: 0, second: 0, millisecond: 0 }); dateTimeBox.value = currentMoment.format('YYYY-MM-DDTHH:mm:ss'); triggerManualUpdate(); }

        // --- Fungsi Perhitungan & Update Data Astronomi ---
         function updateNewMoonData() { const dateTimeBox = document.getElementById('DateTimeBox'); const date = new Date(dateTimeBox.value); const nm1Cell = document.getElementById('newMoonData1'); const nm2Cell = document.getElementById('newMoonData2'); const nm3Cell = document.getElementById('newMoonData3'); if (!nm1Cell || !nm2Cell || !nm3Cell) return; if (isNaN(date.getTime())) { nm1Cell.innerHTML = 'Invalid Date'; nm2Cell.innerHTML = 'Invalid Date'; nm3Cell.innerHTML = 'Invalid Date'; return; } const startOfMonth = new Date(date.getFullYear(), date.getMonth(), 1); const newMoon1 = Astronomy.SearchMoonPhase(0, startOfMonth, 35); let nextSearchStart1 = newMoon1 && newMoon1.date ? new Date(newMoon1.date.getTime() + 86400000) : new Date(date.getFullYear(), date.getMonth() + 1, 1); const newMoon2 = Astronomy.SearchMoonPhase(0, nextSearchStart1, 35); let nextSearchStart2 = newMoon2 && newMoon2.date ? new Date(newMoon2.date.getTime() + 86400000) : new Date(date.getFullYear(), date.getMonth() + 2, 1); const newMoon3 = Astronomy.SearchMoonPhase(0, nextSearchStart2, 35); const formatWIB = 'YYYY-MM-DD HH:mm:ss'; nm1Cell.innerHTML = newMoon1 && newMoon1.date ? `<u>${moment(newMoon1.date).utcOffset(7*60).format(formatWIB)}</u>` : 'N/A'; nm2Cell.innerHTML = newMoon2 && newMoon2.date ? `<u>${moment(newMoon2.date).utcOffset(7*60).format(formatWIB)}</u>` : 'N/A'; nm3Cell.innerHTML = newMoon3 && newMoon3.date ? `<u>${moment(newMoon3.date).utcOffset(7*60).format(formatWIB)}</u>` : 'N/A'; if (newMoon1 && newMoon1.date) { let nm1WIB = moment(newMoon1.date).utcOffset(7*60).format(formatWIB); if (!waktuKonjungsiTerpilih || !moment(waktuKonjungsiTerpilih, formatWIB).isSame(nm1WIB, 'day')) { waktuKonjungsiTerpilih = nm1WIB; } } }
         
         
function updateSunMoonData() {
    const dateTime = document.getElementById('DateTimeBox').value;
    const latStr = document.getElementById('EditLatitude').value;
    const lonStr = document.getElementById('EditLongitude').value;
    const elevStr = document.getElementById('EditElevation').value || '0';

    // Tambahkan semua target termasuk _geo
    const targets = {
        // Topocentric
        Sun_alt: null, Sun_ra: null, Sun_dec: null, Sun_az: null,
        Moon_alt: null, Moon_ra: null, Moon_dec: null, Moon_az: null,

        // Geocentric
        Sun_alt_geo: null, Sun_ra_geo: null, Sun_dec_geo: null, Sun_az_geo: null,
        Moon_alt_geo: null, Moon_ra_geo: null, Moon_dec_geo: null, Moon_az_geo: null,

        elongation: null, illumination: null, moonPhaseDeg: null
    };

    // Get all target elements
    let allElementsExist = true;
    for (const id in targets) {
        targets[id] = document.getElementById(id);
        if (!targets[id]) {
            console.error(`Element with ID '${id}' not found.`);
            allElementsExist = false;
        }
    }
    if (!allElementsExist) return;

    if (!IsValidNumber(latStr) || !IsValidNumber(lonStr) || !IsValidNumber(elevStr)) {
        for (const id in targets) targets[id].innerText = 'Err';
        return;
    }

    const latitude = parseFloat(latStr);
    const longitude = parseFloat(lonStr);
    const elevation = parseFloat(elevStr);
    const date = new Date(dateTime);

    if (isNaN(date.getTime())) {
        for (const id in targets) targets[id].innerText = 'Err';
        return;
    }

    const observer = new Astronomy.Observer(latitude, longitude, elevation);

    try {
        // SUN - Topocentric
        const sunEquTopo = Astronomy.Equator('Sun', date, observer, true, true);
        const sunHorTopo = Astronomy.Horizon(date, observer, sunEquTopo.ra, sunEquTopo.dec, 'normal');

        // SUN - Geocentric
        const sunEquGeo = Astronomy.Equator('Sun', date, observer, false, true);
        const sunHorGeo = Astronomy.Horizon(date, observer, sunEquGeo.ra, sunEquGeo.dec, 'normal');

        // Output Sun Topo
        /*targets.Sun_alt.innerText = formatDMS(sunHorTopo.altitude);*/
        targets.Sun_alt.innerText = sunHorTopo.altitude.toFixed(2);
        targets.Sun_ra.innerText = formatHMS(sunEquTopo.ra);
        targets.Sun_dec.innerText = formatDMS(sunEquTopo.dec, true);
        targets.Sun_az.innerText = formatDMS(sunHorTopo.azimuth);

        // Output Sun Geo
        targets.Sun_alt_geo.innerText = sunHorGeo.altitude.toFixed(2);
        targets.Sun_ra_geo.innerText = formatHMS(sunEquGeo.ra);
        targets.Sun_dec_geo.innerText = formatDMS(sunEquGeo.dec, true);
        targets.Sun_az_geo.innerText = formatDMS(sunHorGeo.azimuth);

        // MOON - Topocentric
        const moonEquTopo = Astronomy.Equator('Moon', date, observer, true, true);
        const moonHorTopo = Astronomy.Horizon(date, observer, moonEquTopo.ra, moonEquTopo.dec, 'normal');

        // MOON - Geocentric
        const moonEquGeo = Astronomy.Equator('Moon', date, observer, false, true);
        const moonHorGeo = Astronomy.Horizon(date, observer, moonEquGeo.ra, moonEquGeo.dec, 'normal');

        // Output Moon Topo
        targets.Moon_alt.innerText = formatDMS(moonHorTopo.altitude);
        targets.Moon_ra.innerText = formatHMS(moonEquTopo.ra);
        targets.Moon_dec.innerText = formatDMS(moonEquTopo.dec, true);
        targets.Moon_az.innerText = formatDMS(moonHorTopo.azimuth);

        // Output Moon Geo
        targets.Moon_alt_geo.innerText = formatDMS(moonHorGeo.altitude);
        targets.Moon_ra_geo.innerText = formatHMS(moonEquGeo.ra);
        targets.Moon_dec_geo.innerText = formatDMS(moonEquGeo.dec, true);
        targets.Moon_az_geo.innerText = formatDMS(moonHorGeo.azimuth);

        // Other data
        const elongationValue = Astronomy.AngleFromSun(Astronomy.Body.Moon, date);
        targets.elongation.innerText = formatDMS(elongationValue); // Elongation in DMS

        const illuminationValue = Astronomy.Illumination(Astronomy.Body.Moon, date);
        targets.illumination.innerHTML = (illuminationValue.phase_fraction * 100).toFixed(4) + '%';

        const moonPhaseDegValue = Astronomy.MoonPhase(date);
        targets.moonPhaseDeg.innerHTML = formatDMS(moonPhaseDegValue); // Moon phase in DMS

    } catch (error) {
        console.error("Error calculating astronomical data:", error);
        for (const id in targets) targets[id].innerText = 'Calc Err';
    }
}       

        // !!! FUNGSI BARU UNTUK RISE/SET TIMES !!!
        function updateRiseSetTimes() {
            const dateTime = document.getElementById('DateTimeBox').value;
            const latStr = document.getElementById('EditLatitude').value;
            const lonStr = document.getElementById('EditLongitude').value;
            const elevStr = document.getElementById('EditElevation').value || '0';
            const date = new Date(dateTime);
        
            const srElem = document.getElementById('Sunrise');
            const ssElem = document.getElementById('Sunset');
            const mrElem = document.getElementById('Moonrise');
            const msElem = document.getElementById('Moonset');
        
            if (!srElem || !ssElem || !mrElem || !msElem) {
                 console.error("One or more Rise/Set elements not found.");
                 return; // Exit if elements don't exist
            }
        
            // Reset ke N/A atau Err jika input tidak valid
            if (isNaN(date.getTime()) || !IsValidNumber(latStr) || !IsValidNumber(lonStr) || !IsValidNumber(elevStr)) {
                 srElem.innerText = 'Err';
                 ssElem.innerText = 'Err';
                 mrElem.innerText = 'Err';
                 msElem.innerText = 'Err';
                 return;
            }
        
            const latitude = parseFloat(latStr);
            const longitude = parseFloat(lonStr);
            const elevation = parseFloat(elevStr);
            const observer = new Astronomy.Observer(latitude, longitude, elevation);
        
            try { // Tambahkan try-catch untuk penanganan error
                const sunrise = Astronomy.SearchRiseSet('Sun', observer, +1, date, 300);
                const sunset = Astronomy.SearchRiseSet('Sun', observer, -1, date, 300);
                const moonrise = Astronomy.SearchRiseSet('Moon', observer, +1, date, 300);
                const moonset = Astronomy.SearchRiseSet('Moon', observer, -1, date, 300);
        
                const formatWIB = 'YYYY-MM-DD HH:mm:ss';
        
                // Perbarui elemen HTML
                srElem.innerHTML = sunrise && sunrise.date ? `<u class="">${moment(sunrise.date).utcOffset(7*60).format(formatWIB)}</u>` : 'N/A';
                ssElem.innerHTML = sunset && sunset.date ? `<u class="pointer">${moment(sunset.date).utcOffset(7*60).format(formatWIB)}</u>` : 'N/A';
        
                 // Buat Moonrise/Moonset juga bisa diklik dan style konsisten
                 if (moonrise && moonrise.date) {
                    mrElem.innerHTML = `<u class="" onclick="updateDateTimeBoxWithEvent(this.innerText, 'MOONRISE')">${moment(moonrise.date).utcOffset(7*60).format(formatWIB)}</u>`;
                    mrElem.className = 'Numeric3'; // Samakan class
                 } else {
                    mrElem.innerText = 'N/A';
                    mrElem.className = 'Numeric dp2'; // Reset class jika N/A
                 }
        
                 if (moonset && moonset.date) {
                    msElem.innerHTML = `<u class="" onclick="updateDateTimeBoxWithEvent(this.innerText, 'MOONSET')">${moment(moonset.date).utcOffset(7*60).format(formatWIB)}</u>`;
                    msElem.className = 'Numeric3'; // Samakan class
                 } else {
                     msElem.innerText = 'N/A';
                     msElem.className = 'Numeric dp2'; // Reset class jika N/A
                 }
        
            } catch (error) {
                 console.error("Error calculating Rise/Set times:", error);
                 srElem.innerText = 'Calc Err';
                 ssElem.innerText = 'Calc Err';
                 mrElem.innerText = 'Calc Err';
                 msElem.innerText = 'Calc Err';
            }
        }
                
         
         function hitungFajarNZ_UTC(date) { if (typeof pilihan === 'undefined') { console.error("Variabel 'pilihan' (daftar kota) tidak ditemukan."); return 'Data Kota Error'; } const kotaNZ = pilihan.find(kota => kota.nama.includes("Gisborne")) || pilihan.find(kota => kota.nama.includes("Auckland")) || pilihan.find(kota => kota.nama.includes("Wellington")); if (kotaNZ) { let elevNZ = kotaNZ.elevation !== undefined ? kotaNZ.elevation : 0; const observerNZ = new Astronomy.Observer(kotaNZ.latitude, kotaNZ.longitude, elevNZ); const sunriseNZ = Astronomy.SearchRiseSet('Sun', observerNZ, +1, date, 300); return sunriseNZ && sunriseNZ.date ? new Date(sunriseNZ.date).toISOString() : 'N/A'; } else { return 'Data NZ tidak ditemukan'; } }

        // Populate Tabel Lengkap (Sudah termasuk Fajar NZ di Info Kota Pertama)
        function populateLocationTable() {
            const table = document.getElementById('locationTable'); 
            const tableBody = table ? table.getElementsByTagName('tbody')[0] : null; 
            if (!tableBody) { 
                console.error("Table body 'locationTable > tbody' not found."); 
                return; 
            } 
            tableBody.innerHTML = '';
            
            if (typeof pilihan === 'undefined') { 
                console.error("Variabel 'pilihan' tidak ditemukan. Memuat default."); 
                pilihan = [ 
                    { nama: "Tbilisi, Georgia (UTC+4)", latitude: 41.715, longitude: 44.827, elevation: 491, gmt: 4 }, 
                    { nama: "Jakarta, ID (WIB/UTC+7)", latitude: -6.2088, longitude: 106.8456, elevation: 8, gmt: 7 } 
                ]; 
                populateCitySelect(); 
            }
            
            var dateTime = document.getElementById('DateTimeBox').value; 
            var date = new Date(dateTime);
            
            if (isNaN(date.getTime())) { 
                var row = tableBody.insertRow(); 
                var cell = row.insertCell(0); 
                cell.colSpan = 12; 
                cell.innerText = 'Tanggal tidak valid.'; 
                cell.style.textAlign = 'center'; 
                cell.style.color = 'red'; 
                document.getElementById('firstCityInfo').innerHTML = '<fieldset><span style="font-size: 15px; color: orange;">Masukkan tanggal yang valid.</span></fieldset>'; 
                firstCityName = null; 
                firstCityObj = null; 
                if(isScatterVisible) drawScatterPlot([]); 
                return; 
            }
            
            // Reset variabel kota pertama
            firstCity = null; 
            firstCityName = null; 
            firstCityDateGMT = null; 
            firstCityDateWIB = null; 
            firstCityTinggiHilal = null; 
            firstCityElongation = null; 
            firstCitySunsetUTC = null; 
            firstCityObj = null;
            
            let sortedPilihan = [...pilihan];
            
            // Pengurutan berdasarkan waktu sunset (dari timur ke barat)
            sortedPilihan.sort(function (a, b) {
                let elevA = a.elevation !== undefined ? a.elevation : 0;
                let elevB = b.elevation !== undefined ? b.elevation : 0;
                var observerA = new Astronomy.Observer(a.latitude, a.longitude, elevA);
                var sunsetA = Astronomy.SearchRiseSet('Sun', observerA, -1, date, 300);
                var observerB = new Astronomy.Observer(b.latitude, b.longitude, elevB);
                var sunsetB = Astronomy.SearchRiseSet('Sun', observerB, -1, date, 300);
                let dateA = sunsetA && sunsetA.date ? new Date(sunsetA.date) : null;
                let dateB = sunsetB && sunsetB.date ? new Date(sunsetB.date) : null;
                if (!dateA && !dateB) return 0;
                if (!dateA) return 1;
                if (!dateB) return -1;
                return dateA - dateB;
            });
        
            const fajarNZ_UTC_global = hitungFajarNZ_UTC(date); 
            const formattedFajarNZ_UTC_global = fajarNZ_UTC_global !== 'N/A' && fajarNZ_UTC_global !== 'Data NZ tidak ditemukan' && fajarNZ_UTC_global !== 'Data Kota Error' ? 
                moment.utc(fajarNZ_UTC_global).format('YYYY-MM-DD HH:mm:ss') : fajarNZ_UTC_global;
        
            sortedPilihan.forEach(function (location, index) {
                let elev = location.elevation !== undefined ? location.elevation : 0; 
                var observer = new Astronomy.Observer(location.latitude, location.longitude, elev); 
                var sunset = Astronomy.SearchRiseSet('Sun', observer, -1, date, 300); 
                var sunrise = Astronomy.SearchRiseSet('Sun', observer, +1, date, 300); 
                var row = tableBody.insertRow();
                
                if (!sunset || !sunset.date || !sunrise || !sunrise.date) {
                    // Handle error jika sunset/sunrise tidak ditemukan
                    row.insertCell(0).innerText = index + 1;
                    row.insertCell(1).innerText = location.nama;
                    row.insertCell(2).innerText = location.latitude.toFixed(3);
                    row.insertCell(3).innerText = location.longitude.toFixed(3);
                    row.insertCell(4).innerText = location.gmt !== undefined ? 'UTC' + (location.gmt >= 0 ? '+' : '') + location.gmt : 'N/A';
                    row.insertCell(5).innerText = 'N/A'; // Sunset WIB
                    row.insertCell(6).innerText = 'N/A'; // Sunset UTC
                    row.insertCell(7).innerText = 'N/A'; // Sunrise UTC
                    // Dalam fungsi populateLocationTable(), ubah bagian berikut:
                    row.insertCell(8).innerText = formatDMS(parseFloat(location.tinggiHilal)); // Tinggi Hilal
                    row.insertCell(9).innerText = formatDMS(parseFloat(location.elongation)); // Elongation
                    row.insertCell(10).innerHTML = '-'; // Aksi
                    row.insertCell(11).innerText = 'T/T Error';
                    row.style.color = 'gray';
                    return; // Lanjut ke lokasi berikutnya
                }
                
                // Hitung data astronomi
                var elongation = Astronomy.AngleFromSun(Astronomy.Body.Moon, sunset.date); 
                var moonEqu = Astronomy.Equator('Moon', sunset.date, observer, true, true); 
                var moonHor = Astronomy.Horizon(sunset.date, observer, moonEqu.ra, moonEqu.dec, 'normal');
                
                // Simpan data ke objek lokasi
                location.tinggiHilal = moonHor.altitude.toFixed(2); 
                location.elongation = elongation.toFixed(2); 
                location.sunsetUTC = sunset.date; 
                location.sunriseUTC = sunrise.date; 
                location.formattedFajarNZ_UTC = formattedFajarNZ_UTC_global;
                
                // Isi tabel
                row.insertCell(0).innerText = index + 1; 
                row.insertCell(1).innerText = location.nama; 
                row.insertCell(2).innerText = location.latitude.toFixed(3); 
                row.insertCell(3).innerText = location.longitude.toFixed(3); 
                row.insertCell(4).innerText = location.gmt !== undefined ? 'UTC' + (location.gmt >= 0 ? '+' : '') + location.gmt : 'N/A'; 
                row.insertCell(5).innerText = moment(sunset.date).utcOffset(7*60).format('YYYY-MM-DD HH:mm:ss'); 
                row.insertCell(6).innerText = moment.utc(sunset.date).format('YYYY-MM-DD HH:mm:ss'); 
                row.insertCell(7).innerText = moment.utc(sunrise.date).format('YYYY-MM-DD HH:mm:ss'); 
                row.insertCell(8).innerText = location.tinggiHilal + "°"; 
                row.insertCell(9).innerText = location.elongation + "°";
                
                var aksiCell = row.insertCell(10); 
                let konjungsiToSend = waktuKonjungsiTerpilih || "Belum ditentukan"; 
                aksiCell.innerHTML = `<button class="elegant-button btn-sm" onclick="kirimKeChatGPT('${location.nama.replace(/'/g, "\\'")}', ${location.latitude}, ${location.longitude}, '${moment.utc(sunrise.date).format('YYYY-MM-DD HH:mm:ss')}', '${moment.utc(sunset.date).format('YYYY-MM-DD HH:mm:ss')}', '${location.formattedFajarNZ_UTC}', ${location.tinggiHilal}, ${location.elongation}, '${konjungsiToSend.replace(/'/g, "\\'")}' )" title="Analisis KHGT AI untuk ${location.nama}">AI</button>`;
                
                var infoCell = row.insertCell(11);
                
                // Cek kriteria visibilitas KHGT (5° tinggi, 8° elongasi)
                if (parseFloat(location.tinggiHilal) >= 5 && parseFloat(location.elongation) >= 8) {
                    row.style.color = 'red'; 
                    infoCell.innerHTML = '<i class="fas fa-check" style="color:green;"></i> Memenuhi'; 
                    infoCell.style.fontWeight = 'bold';
                    
                    // Simpan data kota pertama yang memenuhi kriteria
                    if (!firstCity) {
                        firstCity = location.nama; 
                        firstCityName = location.nama; 
                        firstCityDateGMT = moment.utc(sunset.date).format('YYYY-MM-DD HH:mm:ss'); 
                        firstCityDateWIB = moment(sunset.date).utcOffset(7*60).format('YYYY-MM-DD HH:mm:ss'); 
                        firstCityTinggiHilal = location.tinggiHilal; 
                        firstCityElongation = location.elongation; 
                        firstCitySunsetUTC = sunset.date; 
                        firstCityObj = location;
                    }
                } else {
                    row.style.color = 'black'; 
                    infoCell.innerHTML = '<i class="fas fa-times" style="color:red;"></i> Belum';
                }
            });
        
            var firstCityInfoContainer = document.getElementById('firstCityInfoContainer');
            var firstCityInfoSpan = document.getElementById('firstCityInfo');
        
            if (firstCity && firstCitySunsetUTC && firstCityObj) {
                let sunsetUTC_KotaPertama = firstCitySunsetUTC; // Date object UTC
                let momentSunsetUTC_KP = moment.utc(sunsetUTC_KotaPertama);
                let tglRefMoment = momentSunsetUTC_KP.clone().startOf('day');
                let Tgl_Ref_Formatted = tglRefMoment.format('YYYY-MM-DD');
                
                // Persiapan data untuk analisis
                let konjungsiUTCFormatted = 'N/A';
                if (waktuKonjungsiTerpilih) {
                    let kMoment = moment(waktuKonjungsiTerpilih, 'YYYY-MM-DD HH:mm:ss');
                    if (kMoment.isValid()) {
                        konjungsiUTCFormatted = kMoment.utcOffset(0).format('YYYY-MM-DD HH:mm:ss');
                    }
                }
                
                let sunriseUTC_Date = firstCityObj.sunriseUTC;
                let sunriseUTCFormatted = sunriseUTC_Date ? moment.utc(sunriseUTC_Date).format('YYYY-MM-DD HH:mm:ss') : 'N/A';
                
                // --- IMPLEMENTASI 4 KRITERIA KHGT ---
                let awalBulanMoment = null;
                let alasan = "";
                
                // Kriteria 1: Visibilitas sebelum 00:00 UTC hari berikutnya
                const batasWaktuUTC = tglRefMoment.clone().add(1, 'day').startOf('day'); // 00:00 UTC hari berikutnya
                
                if (momentSunsetUTC_KP.isBefore(batasWaktuUTC)) {
                    // Kasus 1: Visibilitas sebelum 00:00 UTC hari berikutnya
                    awalBulanMoment = tglRefMoment.clone().add(1, 'day');
                    alasan = `Visibilitas pertama (${firstCity}) terjadi pada ${momentSunsetUTC_KP.format('HH:mm:ss')} UTC (${Tgl_Ref_Formatted}), yaitu SEBELUM batas 00:00 UTC hari berikutnya. Awal bulan jatuh pada H+1 dari Tgl_Ref.`;
                } 
                else {
                    // Kasus 2: Visibilitas pada atau setelah 00:00 UTC hari berikutnya
                    // Periksa apakah lokasi di Benua Amerika (Kriteria 3 KHGT)
                    const isInAmerica = (firstCityObj.longitude < -20 && firstCityObj.longitude > -180);
                    
                    if (isInAmerica) {
                        // Kriteria 3: Lokasi di Amerika DAN konjungsi sebelum fajar NZ
                        let fajarNZMoment = formattedFajarNZ_UTC_global !== 'N/A' ? 
                            moment.utc(formattedFajarNZ_UTC_global) : null;
                        
                        let konjungsiMoment = waktuKonjungsiTerpilih ? 
                            moment(waktuKonjungsiTerpilih, 'YYYY-MM-DD HH:mm:ss').utc() : null;
                        
                        if (fajarNZMoment && konjungsiMoment && konjungsiMoment.isBefore(fajarNZMoment)) {
                            // Memenuhi Kriteria 3 KHGT
                            awalBulanMoment = tglRefMoment.clone().add(1, 'day');
                            alasan = `Visibilitas pertama (${firstCity}) terjadi pada ${momentSunsetUTC_KP.format('HH:mm:ss')} UTC (${Tgl_Ref_Formatted}), yaitu SETELAH 00:00 UTC hari berikutnya. Namun karena lokasi di Benua Amerika (${firstCityObj.longitude.toFixed(3)}°) DAN konjungsi (${konjungsiUTCFormatted}) sebelum fajar NZ (${formattedFajarNZ_UTC_global}), maka awal bulan tetap H+1 dari Tgl_Ref.`;
                        } else {
                            // Tidak memenuhi Kriteria 3 KHGT
                            awalBulanMoment = tglRefMoment.clone().add(2, 'days');
                            alasan = `Visibilitas pertama (${firstCity}) terjadi pada ${momentSunsetUTC_KP.format('HH:mm:ss')} UTC (${Tgl_Ref_Formatted}), yaitu SETELAH 00:00 UTC hari berikutnya. Walaupun lokasi di Benua Amerika (${firstCityObj.longitude.toFixed(3)}°), tetapi konjungsi (${konjungsiUTCFormatted}) TIDAK sebelum fajar NZ (${formattedFajarNZ_UTC_global}), maka awal bulan H+2 dari Tgl_Ref (istikmal).`;
                        }
                    } else {
                        // Visibilitas SETELAH 00:00 UTC dan TIDAK di Benua Amerika
                        awalBulanMoment = tglRefMoment.clone().add(2, 'days');
                        alasan = `Visibilitas pertama (${firstCity}) terjadi pada ${momentSunsetUTC_KP.format('HH:mm:ss')} UTC (${Tgl_Ref_Formatted}), yaitu SETELAH 00:00 UTC hari berikutnya dan TIDAK di Benua Amerika (${firstCityObj.longitude.toFixed(3)}°). Maka awal bulan H+2 dari Tgl_Ref (istikmal).`;
                    }
                }
                
                let awalBulanText = `<br><b><span style="color: red;  font-size: 15px; margin-left: 5px;">Estimasi Awal Bulan (KHGT):</span></b> <span style="color: blue;">${awalBulanMoment.format('DD-MM-YYYY')}</span><br><small><span style="color: black;  font-size: 10px; margin-left: 5px;"><i>Alasan: ${alasan}</i></span></small>`;
        
                // Tampilkan info lengkap
                firstCityInfoSpan.innerHTML = `
                        <legend>INFO KOTA PERTAMA MEMENUHI KRITERIA (≥ 5°, ≥ 8°)</legend>
                        <span style="font-size: 15px; margin-left: 5px;">
                            <b>Kota (Timur ke Barat):</b> <span style="color: red;">${firstCity}</span> 
                            (<span style="color: red;">${firstCityObj.latitude.toFixed(3)}</span>, 
                            <span style="color: red;">${firstCityObj.longitude.toFixed(3)}</span>).
                            <br>
                            <ul>
                                <li><b>Konjungsi Terpilih (WIB):</b> <span style="color: red;">${waktuKonjungsiTerpilih || 'N/A'}</span></li>
                                <li><b>Konjungsi Terpilih (UTC):</b> <span style="color: red;">${konjungsiUTCFormatted}</span></li>
                                <li><span style="color: red;"><b>Sunset Kota Ini (UTC) [Tgl_Ref: ${Tgl_Ref_Formatted}]:</b> ${momentSunsetUTC_KP.format('YYYY-MM-DD HH:mm:ss')}</span></li>
                                <li><b>Sunrise Kota Ini (UTC):</b> ${sunriseUTCFormatted}</li>
                                <li><b>Tinggi Hilal:</b> <span style="color: red; font-weight: bold;">${decimalToDMS(firstCityTinggiHilal)} (${firstCityTinggiHilal}°)</span>, 
                                    <b>Elongasi:</b> <span style="color: red; font-weight: bold;">${decimalToDMS(firstCityElongation)} (${firstCityElongation}°)</span></li>
                            </ul>
                            <span style="color: red;  font-size: 15px; margin-left: 5px;"><b>Sunrise (Terbit Fajar) New Zealand (UTC):</b></span> ${formattedFajarNZ_UTC_global}
                            <br/>
                            ${awalBulanText} 
                            <div style="margin-top: 10px; ">
                                <button style="margin-bottom: 10px;" title="Analisis data dan pengambilan kesimpulan menggunakan ChatGPT!" 
                                        class="elegant-button btn-sm" 
                                        onclick="kirimKeChatGPT('${firstCity.replace(/'/g, "\\'")}', 
                                        ${firstCityObj.latitude}, 
                                        ${firstCityObj.longitude}, 
                                        '${sunriseUTCFormatted}', 
                                        '${momentSunsetUTC_KP.format('YYYY-MM-DD HH:mm:ss')}', 
                                        '${formattedFajarNZ_UTC_global}', 
                                        ${firstCityTinggiHilal}, 
                                        ${firstCityElongation}, 
                                        '${(waktuKonjungsiTerpilih || "Belum ditentukan").replace(/'/g, "\\'")}')">
                                    Analisis AI
                                </button>
                                <button style="margin-bottom: 10px;" title="Analisis manual berdasarkan kriteria KHGT" 
                                        class="elegant-button2 btn-sm" 
                                        onclick="analisisManual()">
                                    Analisis Manual
                                </button>
                            </div>
                            <div id="dialogManual" class="dialogBox">
                                <div class="dialog-header">
                                    <h3>Kesimpulan Manual KHGT</h3>
                                    <span class="close-btn" onclick="closeDialogManual()">&times;</span>
                                </div>
                                <div id="isiDialogManual" style="margin-top:10px; font-size: 16px; color: darkblue;"></div>
                            </div>
                        </span>
                    `;
                firstCityInfoContainer.style.display = 'block';
            }
            else {
                // Kondisi Fallback: Tidak ada kota yang memenuhi kriteria awal
                let inputDateMoment = moment(date).utc().startOf('day');
                let tanggalFallback = inputDateMoment.clone().add(2, 'days'); // Tgl Input + 2 (istikmal)
        
                let awalBulanText_Fallback = `
                    <br><b><span style="color: red;  font-size: 15px; margin-left: 5px;">Estimasi Awal Bulan (KHGT):</span></b> <span style="color: blue;">${tanggalFallback.format('DD-MMMM-YYYY')}</span>
                    <br><small><span style="color: black;  font-size: 10px; margin-left: 5px;"><i>Alasan: Tidak ada lokasi yang memenuhi kriteria visibilitas (≥5°, ≥8°). 
                    Awal bulan jatuh pada H+2 dari tanggal input (istikmal).</i></span></small>`;
        
                firstCityInfoSpan.innerHTML = `
                    <fieldset>
                        <legend>INFO KOTA PERTAMA MEMENUHI KRITERIA (≥ 5°, ≥ 8°)</legend>
                        <span style="font-size: 15px; color: orange;">
                            Belum ada kota yang memenuhi kriteria visibilitas awal (≥5°, ≥8°) pada tanggal input. 
                            ${awalBulanText_Fallback}
                        </span>
                    </fieldset>`;
                firstCityName = null; 
                firstCityObj = null;
                firstCityInfoContainer.style.display = 'block';
            }
        
            if (isScatterVisible) { 
                drawScatterPlot(sortedPilihan); 
            }
        }
                
                // --- Fungsi Analisis & Lainnya ---
                 function kirimKeChatGPT(nama, lat, lon, sunriseUTC, sunsetUTC, formattedFajarNZ_UTC, tinggiHilal, elongasi, konjungsiWIB) { let konjungsiUTCFormatted = 'N/A'; if (konjungsiWIB && konjungsiWIB !== "Belum ditentukan") { let kMoment = moment(konjungsiWIB, 'YYYY-MM-DD HH:mm:ss'); if (kMoment.isValid()) konjungsiUTCFormatted = kMoment.subtract(7, 'hours').utc().format('YYYY-MM-DD HH:mm:ss'); } const prompt = `**Instruksi:** Analisis penentuan awal bulan Kamariah berdasarkan Kriteria KHGT Muhammadiyah (elongasi ≥ 8°, tinggi hilal ≥ 5°) menggunakan data berikut. Jelaskan langkah analisis sesuai kriteria KHGT dan tentukan tanggal awal bulan baru (dalam format Tanggal Bulan Tahun Masehi).\n\n**Kriteria KHGT (Ringkasan):**\n1. Jika visibilitas hilal (elongasi ≥ 8° DAN tinggi ≥ 5°) terpenuhi di mana saja di Bumi SEBELUM pukul 00:00 UTC hari berikutnya, maka bulan baru dimulai pada hari setelah tanggal lokal pengamatan tersebut.\n2. Jika visibilitas hilal terpenuhi PADA ATAU SETELAH pukul 00:00 UTC hari berikutnya, bulan baru tetap dimulai pada hari setelah tanggal lokal pengamatan JIKA:\n   a. Visibilitas terjadi di daratan benua Amerika (barat ~-20° hingga ~-180°).\n   b. DAN Konjungsi (Ijtima') terjadi SEBELUM matahari terbit ("fajar") di Selandia Baru.\n3. Jika visibilitas terpenuhi setelah 00:00 UTC tetapi syarat poin 2 tidak terpenuhi, maka awal bulan ditunda satu hari lagi (istikmal).\n4. Jika kriteria visibilitas tidak terpenuhi sama sekali, maka awal bulan dimulai lusa (istikmal). Perhatikan betul bahwa jika visibilitas jatuh TIDAK di daratan benua Amerika, maka Awal bulan jatuh pada (Tgl_Ref + 1). Contoh titik koordinat bagian barat yang tidak termasuk daratan benua Amerika adalah Hawai (USA), Samoa (UTC-11), Gambier Islands (French Polynesia, UTC-9), Baker Island (USA, UTC-12), dan Midwal Atolll (USA) \n\n**Data untuk Analisis:**\n* Nama Tempat Pengamatan (Pertama Memenuhi): ${nama}\n* Latitude: ${lat}°\n* Longitude: ${lon}°\n* Waktu Sunset di Lokasi (UTC): ${sunsetUTC}\n* Waktu Sunrise di Lokasi (UTC): ${sunriseUTC}\n* Tinggi Hilal saat Sunset: ${tinggiHilal}°\n* Elongasi saat Sunset: ${elongasi}°\n* Waktu Konjungsi (UTC): ${konjungsiUTCFormatted}\n* Perkiraan Sunrise New Zealand (UTC): ${formattedFajarNZ_UTC}\n\n**Analisis & Kesimpulan:**\n(Lakukan analisis langkah demi langkah sesuai Kriteria KHGT dan simpulkan tanggal awal bulan baru dalam format DD MMMM YYYY). Tolong juga bisa buatkan tabel ringkasan langkah-langkahnya supaya lebih rapi. Tolong juga bisa buatkan bagan visual alur keputusan ini supaya makin jelas!`; const chatGPTUrl = `https://chat.openai.com/?q=${encodeURIComponent(prompt)}`; window.open(chatGPTUrl, '_blank'); }
                 
        function analisisManual() {
            const dialog = document.getElementById("dialogManual");
            const isiDialog = document.getElementById("isiDialogManual");
            if (!dialog || !isiDialog) return;
        
            // 1. Validasi Ketersediaan Data Esensial
            if (!firstCityObj || !firstCitySunsetUTC || typeof firstCityTinggiHilal === 'undefined' || typeof firstCityElongation === 'undefined' || !firstCityName) {
                isiDialog.innerHTML = "<p style='color:orange;'>Data kota pertama (nama, sunset, tinggi hilal, elongasi) tidak lengkap atau tidak tersedia.</p>";
                dialog.classList.add("active");
                return;
            }
        
            const nama = firstCityName;
            const lat = firstCityObj.latitude;
            const lon = firstCityObj.longitude;
            // Konversi ke float untuk perhitungan dan perbandingan
            const tinggiHilal = parseFloat(firstCityTinggiHilal);
            const elongasi = parseFloat(firstCityElongation);
            const sunsetUTC_Date = firstCitySunsetUTC; // Asumsi ini adalah objek Date atau string ISO valid
            const formattedFajarNZ_UTC = firstCityObj.formattedFajarNZ_UTC || 'N/A'; // Waktu Fajar NZ UTC (string)
            let sunriseUTC_Formatted = firstCityObj.sunriseUTC ? moment.utc(firstCityObj.sunriseUTC).format('YYYY-MM-DD HH:mm:ss') : 'N/A';
            let konjungsiWIB_Formatted = waktuKonjungsiTerpilih || 'N/A'; // Waktu Konjungsi WIB (string)
        
            // 2. Validasi Input Numerik
            if (isNaN(tinggiHilal) || isNaN(elongasi)) {
                 isiDialog.innerHTML = "<p style='color:red;'>Error: Data tinggi hilal atau elongasi tidak valid (bukan angka).</p>";
                 dialog.classList.add("active");
                 return;
            }
        
            // 3. Hitung Konjungsi dalam UTC
            let konjungsiUTC_Formatted = 'N/A';
            let konjungsiMomentUTC = null; // Objek Moment untuk perbandingan
            if (waktuKonjungsiTerpilih && waktuKonjungsiTerpilih !== 'N/A') {
                // Asumsi format 'YYYY-MM-DD HH:mm:ss' dalam WIB (UTC+7)
                let kMomentWIB = moment(waktuKonjungsiTerpilih, 'YYYY-MM-DD HH:mm:ss');
                if (kMomentWIB.isValid()) {
                    konjungsiMomentUTC = kMomentWIB.subtract(7, 'hours').utc(); // Konversi WIB ke UTC
                    konjungsiUTC_Formatted = konjungsiMomentUTC.format('YYYY-MM-DD HH:mm:ss');
                } else {
                     console.error("Format waktu konjungsi WIB tidak valid:", waktuKonjungsiTerpilih);
                     // Bisa ditambahkan pesan error ke pengguna jika diperlukan
                }
            }
        
            // 4. Analisis Berdasarkan Kriteria KHGT
            let kesimpulanText = "";
            let awalBulan = "";
            const sunsetMomentUTC = moment.utc(sunsetUTC_Date);
            const tanggalSunsetUTCStr = sunsetMomentUTC.format('YYYY-MM-DD'); // String tanggal sunset UTC
        
            // Kriteria Visibilitas (diterapkan lokal di `firstCity` sebagai sampel)
            // KHGT sejati memerlukan pengecekan global. Angka 5°/8° diambil dari kode asli.
            const memenuhiKriteriaVisibilitasLokal = tinggiHilal >= 5 && elongasi >= 8;
        
            if (memenuhiKriteriaVisibilitasLokal) {
                // Visibilitas terpenuhi di lokasi ini. Cek waktu relatif terhadap 00:00 UTC.
                // batasWaktuUTC adalah pukul 00:00 UTC pada HARI SETELAH sunset.
                const batasWaktuUTC = moment.utc(tanggalSunsetUTCStr).add(1, 'day').startOf('day');
        
                if (sunsetMomentUTC.isBefore(batasWaktuUTC)) {
                    // Skenario 1: Visibilitas terpenuhi SEBELUM 00:00 UTC hari berikutnya.
                    // Ini memenuhi syarat utama KHGT (jika terjadi di mana saja di dunia).
                    awalBulan = moment.utc(tanggalSunsetUTCStr).add(1, 'day').format('DD MMMM YYYY');
                    kesimpulanText = `Di ${nama} (${lon.toFixed(3)}°), kriteria visibilitas (Tinggi: ${tinggiHilal.toFixed(2)}°, Elongasi: ${elongasi.toFixed(2)}°) terpenuhi saat sunset (${sunsetMomentUTC.format('HH:mm:ss')} UTC pada ${tanggalSunsetUTCStr}). Waktu ini terjadi SEBELUM batas pergantian hari global (00:00 UTC hari berikutnya). Berdasarkan kriteria KHGT, jika ini adalah titik visibilitas pertama di dunia, maka awal bulan jatuh pada <b>${awalBulan}</b>.`;
                } else {
                    // Skenario 2: Visibilitas terpenuhi SETELAH atau TEPAT PADA 00:00 UTC hari berikutnya.
                    // Memerlukan pengecekan Kriteria 3 KHGT.
                    let k3OK = false;
                    let alasanKriteria3 = [];
                    let fajarNZMomentUTC = null;
        
                    // Coba parsing waktu Fajar NZ UTC
                    if (formattedFajarNZ_UTC !== 'N/A' && formattedFajarNZ_UTC.includes('-')) { // Cek dasar format
                         try {
                            // Pastikan format sesuai, misal 'YYYY-MM-DD HH:mm:ss'
                            fajarNZMomentUTC = moment.utc(formattedFajarNZ_UTC);
                            if (!fajarNZMomentUTC.isValid()) fajarNZMomentUTC = null;
                         } catch(e) {
                             console.error("Error parsing Fajar NZ UTC:", formattedFajarNZ_UTC, e);
                             fajarNZMomentUTC = null;
                         }
                    }
        
                    // Pengecekan Komponen Kriteria 3:
                    // a) Lokasi di Benua Amerika (Bujur Barat antara -20° dan -180° sesuai kode asli)
                    const inAmericaZone = lon < -20 && lon > -180;
                    if (inAmericaZone) {
                        alasanKriteria3.push("Lokasi berada di Benua Amerika (antara -20° dan -180° BB)");
        
                        // b) Waktu Konjungsi sebelum Fajar NZ pada hari yang sama (UTC)
                        if (konjungsiMomentUTC && fajarNZMomentUTC) {
                            // Penting: Pastikan perbandingan waktu valid
                            if (konjungsiMomentUTC.isBefore(fajarNZMomentUTC)) {
                                alasanKriteria3.push(`Konjungsi (${konjungsiUTC_Formatted} UTC) terjadi SEBELUM Fajar New Zealand (${fajarNZMomentUTC.format('YYYY-MM-DD HH:mm:ss')} UTC)`);
                                k3OK = true; // Kedua syarat K3 terpenuhi
                            } else {
                                alasanKriteria3.push(`Konjungsi (${konjungsiUTC_Formatted} UTC) terjadi TIDAK sebelum Fajar New Zealand (${fajarNZMomentUTC.format('YYYY-MM-DD HH:mm:ss')} UTC)`);
                            }
                        } else {
                            alasanKriteria3.push(`Data waktu Konjungsi UTC (${konjungsiUTC_Formatted}) atau Fajar NZ UTC (${formattedFajarNZ_UTC}) tidak valid atau tidak tersedia untuk perbandingan.`);
                        }
                    } else {
                        alasanKriteria3.push(`Lokasi (${lon.toFixed(3)}°) TIDAK berada di Benua Amerika (antara -20° dan -180° BB)`);
                    }
        
                    // Kesimpulan berdasarkan Kriteria 3:
                    if (k3OK) {
                        // Skenario 2a: Kriteria 3 TERPENUHI
                        awalBulan = moment.utc(tanggalSunsetUTCStr).add(1, 'day').format('DD MMMM YYYY');
                        kesimpulanText = `Di ${nama} (${lon.toFixed(3)}°), visibilitas terpenuhi (Tinggi: ${tinggiHilal.toFixed(2)}°, Elongasi: ${elongasi.toFixed(2)}°) saat sunset (${sunsetMomentUTC.format('HH:mm:ss')} UTC pada ${tanggalSunsetUTCStr}), yaitu SETELAH batas pergantian hari global (00:00 UTC). Namun, Kriteria 3 KHGT terpenuhi: (${alasanKriteria3.join('; ')}). Maka awal bulan jatuh pada <b>${awalBulan}</b>.`;
                    } else {
                        // Skenario 2b: Kriteria 3 TIDAK TERPENUHI
                        awalBulan = moment.utc(tanggalSunsetUTCStr).add(2, 'days').format('DD MMMM YYYY'); // Istikmal
                        kesimpulanText = `Di ${nama} (${lon.toFixed(3)}°), visibilitas terpenuhi (Tinggi: ${tinggiHilal.toFixed(2)}°, Elongasi: ${elongasi.toFixed(2)}°) saat sunset (${sunsetMomentUTC.format('HH:mm:ss')} UTC pada ${tanggalSunsetUTCStr}), yaitu SETELAH batas pergantian hari global (00:00 UTC). Akan tetapi, Kriteria 3 KHGT TIDAK terpenuhi: (${alasanKriteria3.join('; ')}). Maka bulan digenapkan (Istikmal), dan awal bulan jatuh pada <b>${awalBulan}</b>.`;
                    }
                }
            } else {
                // Skenario 3: Kriteria Visibilitas TIDAK terpenuhi di lokasi ini pada hari ini.
                // Menurut KHGT, jika tidak ada tempat lain di dunia yang memenuhi visibilitas sebelum 00:00 UTC, maka Istikmal.
                awalBulan = moment.utc(tanggalSunsetUTCStr).add(2, 'days').format('DD MMMM YYYY'); // Istikmal
                kesimpulanText = `Di ${nama} (${lon.toFixed(3)}°), kriteria visibilitas (Tinggi: ${tinggiHilal.toFixed(2)}°, Elongasi: ${elongasi.toFixed(2)}°) pada saat sunset (${sunsetMomentUTC.format('HH:mm:ss')} UTC pada ${tanggalSunsetUTCStr}) TIDAK memenuhi ambang batas yang ditetapkan (misal: 5°/8°). Jika kondisi ini berlaku global hingga batas 00:00 UTC, maka bulan digenapkan (Istikmal), dan awal bulan jatuh pada <b>${awalBulan}</b>.`;
            }
        
            // 5. Format HTML Output
            const isiHtml = `
                <p><b>Analisis Penentuan Awal Bulan (Interpretasi Lokal Berdasarkan KHGT)</b></p>
                <ul>
                    <li><b>Tempat Observasi:</b> ${nama} (Lat: ${lat.toFixed(3)}, Lon: ${lon.toFixed(3)})</li>
                    <li><b>Tanggal Sunset (UTC):</b> ${tanggalSunsetUTCStr}</li>
                    <li><b>Waktu Sunset (UTC):</b> ${sunsetMomentUTC.format('HH:mm:ss')}</li>
                    <li><b>Waktu Sunrise (UTC):</b> ${sunriseUTC_Formatted}</li>
                    <li><b>Tinggi Hilal (saat sunset):</b> ${tinggiHilal.toFixed(2)}°</li>
                    <li><b>Elongasi (saat sunset):</b> ${elongasi.toFixed(2)}°</li>
                    <li><b>Perkiraan Konjungsi (WIB):</b> ${konjungsiWIB_Formatted}</li>
                    <li><b>Perkiraan Konjungsi (UTC):</b> ${konjungsiUTC_Formatted}</li>
                    <li><b>Perkiraan Fajar New Zealand (UTC):</b> ${formattedFajarNZ_UTC}</li>
                </ul>
                <p><b>Kesimpulan Analisis:</b><br>${kesimpulanText}</p>
                <p style="font-size: smaller; color: grey;"><i>Catatan: Analisis ini didasarkan pada data di ${nama} dan interpretasi kriteria Kalender Hijriah Global Tunggal (KHGT). Keputusan akhir KHGT bergantung pada pemenuhan kriteria secara global. Ambang batas visibilitas 5° tinggi dan 8° elongasi digunakan sesuai kode awal.</i></p>`;
        
            isiDialog.innerHTML = isiHtml;
            dialog.classList.add("active");
        }
         
         
         function closeDialogManual() { document.getElementById("dialogManual").classList.remove("active"); }
         
         function downloadExcel() { var table = document.getElementById('locationTable'); if (!table) return; try { var wb = XLSX.utils.table_to_book(table, { sheet: "Data Koordinat" }); XLSX.writeFile(wb, 'Data_Koordinat_Waktu_Posisi.xlsx'); } catch (e) { console.error("Excel export error:", e); alert("Gagal ekspor Excel."); } }
         
        function downloadJSON() {
          var table = document.getElementById("locationTable");
          if (!table) return;
        
          try {
            // Ambil header
            const headers = Array.from(table.rows[0].cells).map(cell => cell.innerText.trim());
        
            // Ambil baris data
            const data = [];
            for (let i = 1; i < table.rows.length - 1; i++) { // skip footer
              const row = table.rows[i];
              const rowData = {};
              Array.from(row.cells).forEach((cell, idx) => {
                let key = headers[idx] || `kolom_${idx}`;
                rowData[key] = cell.innerText.trim();
              });
              data.push(rowData);
            }
        
            // Buat blob JSON dan trigger download
            const jsonStr = JSON.stringify(data, null, 2);
            const blob = new Blob([jsonStr], { type: "application/json" });
            const a = document.createElement("a");
            a.href = URL.createObjectURL(blob);
            a.download = "data.json";
            a.click();
          } catch (e) {
            console.error("Gagal menghasilkan file JSON:", e);
            alert("Gagal membuat file JSON.");
          }
        }         
                 
                 function populateCitySelect() { var citySelect = document.getElementById("citySelect"); if (!citySelect) return; citySelect.innerHTML = '<option value="" selected>Pilih Kota</option>'; if (typeof pilihan === 'undefined' || pilihan.length === 0) return; let sorted = [...pilihan].sort((a, b) => a.nama.localeCompare(b.nama)); sorted.forEach(function(city) { var option = document.createElement("option"); option.value = JSON.stringify(city); option.text = city.nama; citySelect.add(option); }); }
                 
                 function updateLocation() { var citySelect = document.getElementById("citySelect"); var selData = citySelect.value; var latIn = document.getElementById('EditLatitude'); var lonIn = document.getElementById('EditLongitude'); var elIn = document.getElementById('EditElevation'); var localHdr = document.getElementById("localTimeHeader"); var localTimeIn = document.getElementById('LocalTime'); if (!latIn || !lonIn || !elIn || !localHdr || !localTimeIn) return; if (!selData) { latIn.value = '51.482'; lonIn.value = '0.008'; elIn.value = '0'; localHdr.textContent = `Local Time`; localTimeIn.value = ''; } else { try { var city = JSON.parse(selData); latIn.value = city.latitude; lonIn.value = city.longitude; elIn.value = city.elevation !== undefined ? city.elevation : 0; localHdr.textContent = `Local Time ${city.nama.split(",")[0]}`; updateLocalTimeBasedOnDateTimeBox(); } catch (e) { console.error("City data parse error:", e); latIn.value = '51.482'; lonIn.value = '0.008'; elIn.value = '0'; localHdr.textContent = `Local Time`; localTimeIn.value = ''; } } triggerManualUpdate(); }
                 
                 
                 function sortTable(columnIndex) { var table = document.getElementById('locationTable'); if (!table) return; var tbody = table.getElementsByTagName('tbody')[0]; var rows = Array.from(tbody.rows); var headerCell = table.querySelector(`thead th:nth-child(${columnIndex + 1})`); var ascending = sortDirections[columnIndex] === undefined ? true : !sortDirections[columnIndex]; sortDirections[columnIndex] = ascending; Object.keys(sortDirections).forEach(key => { if (parseInt(key) !== columnIndex) sortDirections[key] = undefined; }); rows.sort(function (rowA, rowB) { var cellA = rowA.cells[columnIndex] ? rowA.cells[columnIndex].innerText.trim() : ''; var cellB = rowB.cells[columnIndex] ? rowB.cells[columnIndex].innerText.trim() : ''; if ([5, 6, 7].includes(columnIndex)) { let dateA = moment(cellA, 'YYYY-MM-DD HH:mm:ss', true); let dateB = moment(cellB, 'YYYY-MM-DD HH:mm:ss', true); if (dateA.isValid() && dateB.isValid()) { if (dateA.isBefore(dateB)) return ascending ? -1 : 1; if (dateA.isAfter(dateB)) return ascending ? 1 : -1; return 0; } else { return cellA.localeCompare(cellB) * (ascending ? 1 : -1); } } else if ([0, 2, 3, 4, 8, 9].includes(columnIndex)) { cellA = cellA.replace(/[°%UTC\+]/g, ''); cellB = cellB.replace(/[°%UTC\+]/g, ''); let numA = parseFloat(cellA); let numB = parseFloat(cellB); if (!isNaN(numA) && !isNaN(numB)) { if (numA < numB) return ascending ? -1 : 1; if (numA > numB) return ascending ? 1 : -1; return 0; } } return cellA.localeCompare(cellB, undefined, { sensitivity: 'base' }) * (ascending ? 1 : -1); }); tbody.innerHTML = ''; rows.forEach(row => tbody.appendChild(row)); table.querySelectorAll('thead th').forEach((th, index) => { th.classList.remove('sort-asc', 'sort-desc'); let arrow = th.querySelector('.sort-arrow'); if (arrow) arrow.remove(); if (index === columnIndex && headerCell) { th.classList.add(ascending ? 'sort-asc' : 'sort-desc'); let arrowSpan = document.createElement('span'); arrowSpan.className = 'sort-arrow'; arrowSpan.innerHTML = ascending ? ' <i class="fas fa-arrow-up"></i>' : ' <i class="fas fa-arrow-down"></i>'; th.appendChild(arrowSpan); } }); }
        
        function drawScatterPlot(dataToDraw = pilihan) {
            const scatterDiv = document.getElementById('scatterplot');
            if (!scatterDiv) return;
            
            // Hapus konten sebelumnya
            scatterDiv.innerHTML = '';
            
            const validData = (dataToDraw || []).filter(loc => 
                loc && typeof loc.latitude === 'number' && typeof loc.longitude === 'number'
            );
            
            // Kelompokkan data berdasarkan kriteria
            const meetsCriteria = [];
            const notMeetsCriteria = [];
            
            validData.forEach(loc => {
                const t = parseFloat(loc.tinggiHilal);
                const e = parseFloat(loc.elongation);
                if (!isNaN(t) && !isNaN(e) && t >= 5 && e >= 8) {
                    meetsCriteria.push(loc);
                } else {
                    notMeetsCriteria.push(loc);
                }
            });
            
            // Jika Plotly tersedia, gunakan Plotly
            if (typeof Plotly !== 'undefined') {
                drawWithPlotly(scatterDiv, meetsCriteria, notMeetsCriteria);
            } 
            // Jika tidak, gunakan Leaflet.js (OpenStreetMap)
            else {
                drawWithLeaflet(scatterDiv, meetsCriteria, notMeetsCriteria);
            }
        }
        
        function drawWithPlotly(container, meetsCriteria, notMeetsCriteria) {
            // Hapus garis pembatas sebelumnya jika ada
            const oldLines = container.querySelectorAll('.boundary-line');
            oldLines.forEach(line => line.remove());
            
            // Jika ada data yang memenuhi kriteria dan ada yang tidak, buat garis pembatas
            if (meetsCriteria.length > 0 && notMeetsCriteria.length > 0) {
                const minLonMeet = Math.min(...meetsCriteria.map(loc => loc.longitude));
                const maxLonNotMeet = Math.max(...notMeetsCriteria.map(loc => loc.longitude));
                const boundaryLon = (minLonMeet + maxLonNotMeet) / 2;
                
                const boundaryLine = document.createElement('div');
                boundaryLine.className = 'boundary-line boundary-line-vertical';
                const xPos = ((boundaryLon + 180) / 360 * 100);
                boundaryLine.style.left = `${xPos}%`;
                boundaryLine.style.transform = 'translateX(-50%)';
                container.appendChild(boundaryLine);
            }
            
            // Buat trace untuk Plotly
            const traces = [];
            
        // Trace untuk titik yang memenuhi kriteria (merah)
        if (meetsCriteria.length > 0) {
            traces.push({
                x: meetsCriteria.map(l => l.longitude),
                y: meetsCriteria.map(l => l.latitude),
                mode: 'markers',
                type: 'scatter',
                name: 'Memenuhi Kriteria (≥5°, ≥8°)',
                marker: {
                    color: 'red',
                    size: 10,
                    symbol: 'cross'
                },
                hoverinfo: 'text',
                text: meetsCriteria.map(l => 
                    `<b>${l.nama}</b><br>Lat: ${l.latitude.toFixed(3)}°, Lon: ${l.longitude.toFixed(3)}°<br>` +
                    `Tinggi: ${l.tinggiHilal || 'N/A'}°, Elongasi: ${l.elongation || 'N/A'}°<br>` +
                    `Sunset UTC: ${l.sunsetUTC ? moment.utc(l.sunsetUTC).format('YYYY-MM-DD HH:mm:ss') : 'N/A'}<br>` +
                    `Fajar New Zealand UTC: ${l.formattedFajarNZ_UTC || 'N/A'}`
                )
            });
        }
            
            // Trace untuk titik yang tidak memenuhi kriteria (hitam)
            if (notMeetsCriteria.length > 0) {
                traces.push({
                    x: notMeetsCriteria.map(l => l.longitude),
                    y: notMeetsCriteria.map(l => l.latitude),
                    mode: 'markers',
                    type: 'scatter',
                    name: 'Belum Memenuhi',
                    marker: {
                        color: 'black',
                        size: 10,
                        symbol: 'circle'
                    },
                    hoverinfo: 'text',
                    text: notMeetsCriteria.map(l => 
                        `<b>${l.nama}</b><br>Lat: ${l.latitude.toFixed(3)}°, Lon: ${l.longitude.toFixed(3)}°<br>` +
                        `Tinggi: ${l.tinggiHilal || 'N/A'}°, Elongasi: ${l.elongation || 'N/A'}°`
                    )
                });
            }
            
            // Trace khusus untuk kota pertama yang memenuhi kriteria (biru)
            if (firstCityObj) {
                traces.push({
                    x: [firstCityObj.longitude],
                    y: [firstCityObj.latitude],
                    mode: 'markers',
                    type: 'scatter',
                    name: 'Kota Pertama Memenuhi',
                    marker: {
                        color: 'blue',
                        size: 12,
                        symbol: 'star'
                    },
                    hoverinfo: 'text',
                    text: [
                        `<b>${firstCityObj.nama}</b><br>Lat: ${firstCityObj.latitude.toFixed(3)}°, Lon: ${firstCityObj.longitude.toFixed(3)}°<br>` +
                        `Tinggi: ${firstCityObj.tinggiHilal || 'N/A'}°, Elongasi: ${firstCityObj.elongation || 'N/A'}°`
                    ]
                });
            }
            
            // Layout plot
            const layout = {
                title: 'SCATTERPLOT TITIK KOORDINAT KOTA',
                xaxis: {
                    title: 'LONGITUDE',
                    range: [-180, 180],
                    zeroline: true,
                    gridcolor: '#ddd'
                },
                yaxis: {
                    title: 'LATITUDE',
                    range: [-90, 90],
                    zeroline: true,
                    gridcolor: '#ddd'
                },
                images: [{
                    source: 'images/Dunia2.jpg',
                    xref: 'x',
                    yref: 'y',
                    x: -180,
                    y: 105,
                    sizex: 360,
                    sizey: 300,
                    opacity: 0.6,
                    layer: 'below'
                }],
                width: container.clientWidth > 0 ? container.clientWidth : 800,
                height: (container.clientWidth > 0 ? container.clientWidth : 800) * 0.5,
                margin: { l: 50, r: 100, t: 50, b: 50 },
                legend: {
                    orientation: "h",
                    yanchor: "bottom",
                    y: -0.2,
                    xanchor: "center",
                    x: 0.5
                },
                hovermode: 'closest'
            };
            
            // Render plot
            Plotly.react('scatterplot', traces, layout, { responsive: true });
        }
        
        function drawWithLeaflet(container, meetsCriteria, notMeetsCriteria) {
            console.log("Menggunakan Leaflet.js sebagai alternatif");
            
            // Buat elemen container untuk peta
            const mapContainer = document.createElement('div');
            mapContainer.style.width = '100%';
            mapContainer.style.height = '500px';
            container.appendChild(mapContainer);
            
            // Inisialisasi peta Leaflet
            const map = L.map(mapContainer).setView([20, 0], 2);
            
            // Tambahkan tile layer OpenStreetMap
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            
            // Tambahkan marker untuk titik yang memenuhi kriteria (merah)
            meetsCriteria.forEach(loc => {
                const marker = L.marker([loc.latitude, loc.longitude], {
                    icon: L.divIcon({
                        className: 'red-marker',
                        html: '<div style="color:red;font-size:20px;">+</div>',
                        iconSize: [20, 20]
                    })
                }).addTo(map);
                
                marker.bindPopup(
                    `<b>${loc.nama}</b><br>Lat: ${loc.latitude.toFixed(3)}°, Lon: ${loc.longitude.toFixed(3)}°<br>` +
                    `Tinggi: ${loc.tinggiHilal || 'N/A'}°, Elongasi: ${loc.elongation || 'N/A'}°`
                );
            });
            
            // Tambahkan marker untuk titik yang tidak memenuhi kriteria (hitam)
            notMeetsCriteria.forEach(loc => {
                const marker = L.marker([loc.latitude, loc.longitude], {
                    icon: L.divIcon({
                        className: 'black-marker',
                        html: '<div style="color:black;font-size:20px;">•</div>',
                        iconSize: [20, 20]
                    })
                }).addTo(map);
                
                marker.bindPopup(
                    `<b>${loc.nama}</b><br>Lat: ${loc.latitude.toFixed(3)}°, Lon: ${loc.longitude.toFixed(3)}°<br>` +
                    `Tinggi: ${loc.tinggiHilal || 'N/A'}°, Elongasi: ${loc.elongation || 'N/A'}°`
                );
            });
            
            // Tambahkan marker khusus untuk kota pertama yang memenuhi kriteria (biru)
            if (firstCityObj) {
                const marker = L.marker([firstCityObj.latitude, firstCityObj.longitude], {
                    icon: L.divIcon({
                        className: 'blue-marker',
                        html: '<div style="color:blue;font-size:24px;">★</div>',
                        iconSize: [24, 24]
                    })
                }).addTo(map);
                
                marker.bindPopup(
                    `<b>${firstCityObj.nama}</b><br>Lat: ${firstCityObj.latitude.toFixed(3)}°, Lon: ${firstCityObj.longitude.toFixed(3)}°<br>` +
                    `Tinggi: ${firstCityObj.tinggiHilal || 'N/A'}°, Elongasi: ${firstCityObj.elongation || 'N/A'}°`
                );
            }
            
            // Tambahkan legenda
            const legend = L.control({position: 'bottomright'});
            legend.onAdd = function(map) {
                const div = L.DomUtil.create('div', 'info legend');
                div.style.backgroundColor = 'white';
                div.style.padding = '10px';
                div.style.borderRadius = '5px';
                
                let labels = ['<strong>Legenda</strong>'];
                
                if (firstCityObj) {
                    labels.push('<div><span style="color:blue;font-size:20px; margin-top: 50px;">★</span> Kota Pertama Memenuhi</div>');
                }
                labels.push('<div><span style="color:red;font-size:20px; margin-top: 50px;">+</span> Memenuhi Kriteria (≥5°, ≥8°)</div>');
                labels.push('<div><span style="color:black;font-size:20px; margin-top: 50px;">•</span> Belum Memenuhi</div>');
                
                div.innerHTML = labels.join('<br>');
                return div;
            };
            legend.addTo(map);
        }
                 async function scanBoundaryCoordinates(startLat, endLat, startLon, endLon, date, step = 1) { let boundaries = []; const totalStepsLon = Math.abs(endLon - startLon) / step; const totalStepsLat = Math.abs(endLat - startLat) / step; const totalPoints = Math.max(1, totalStepsLon * totalStepsLat); let pointsProcessed = 0; const progressInterval = Math.max(1, Math.floor(totalPoints / 100)); const tableBody = document.getElementById('boundaryTable').querySelector('tbody'); console.log(`Scanning boundary... Points: ~${Math.round(totalPoints)}`); function wrapLon(l) { while (l > 180) l -= 360; while (l <= -180) l += 360; return l; } for (let lon = startLon; lon <= endLon; lon += step) { for (let lat = startLat; lat <= endLat; lat += step) { if (lat > 90 || lat < -90) continue; let currentLon = wrapLon(lon); let observer = new Astronomy.Observer(lat, currentLon, 0); let sunset = Astronomy.SearchRiseSet('Sun', observer, -1, date, 300); pointsProcessed++; if (pointsProcessed % progressInterval === 0) { let percent = Math.round((pointsProcessed / totalPoints) * 100); if(tableBody) tableBody.innerHTML = `<tr><td colspan="7" style="text-align:center; color: blue;"><i class="fas fa-spinner fa-spin"></i> Scanning... ${percent}%</td></tr>`; await new Promise(resolve => setTimeout(resolve, 0)); } if (!sunset || !sunset.date) continue; let moonEqu = Astronomy.Equator('Moon', sunset.date, observer, true, true); let moonHor = Astronomy.Horizon(sunset.date, observer, moonEqu.ra, moonEqu.dec, 'normal'); let elongation = Astronomy.AngleFromSun(Astronomy.Body.Moon, sunset.date); let meetsCriteria = moonHor.altitude >= 5 && elongation >= 8; let isBoundary = false; const neighbors = [ { lt: lat + step, ln: currentLon }, { lt: lat - step, ln: currentLon }, { lt: lat, ln: currentLon + step }, { lt: lat, ln: currentLon - step } ]; for (const neighbor of neighbors) { if (neighbor.lt > 90 || neighbor.lt < -90) continue; let wrappedNeighborLon = wrapLon(neighbor.ln); let neighborObserver = new Astronomy.Observer(neighbor.lt, wrappedNeighborLon, 0); let neighborSunset = Astronomy.SearchRiseSet('Sun', neighborObserver, -1, date, 300); if (!neighborSunset || !neighborSunset.date) { if (meetsCriteria) { isBoundary = true; break; } continue; } let neighborMoonEqu = Astronomy.Equator('Moon', neighborSunset.date, neighborObserver, true, true); let neighborMoonHor = Astronomy.Horizon(neighborSunset.date, neighborObserver, neighborMoonEqu.ra, neighborMoonEqu.dec, 'normal'); let neighborElongation = Astronomy.AngleFromSun(Astronomy.Body.Moon, neighborSunset.date); let neighborCriteria = neighborMoonHor.altitude >= 5 && neighborElongation >= 8; if (meetsCriteria !== neighborCriteria) { isBoundary = true; break; } } if (isBoundary) { boundaries.push({ latitude: lat.toFixed(2), longitude: currentLon.toFixed(2), meetsCriteria, tinggiHilal: moonHor.altitude.toFixed(2), elongation: elongation.toFixed(2), sunsetUTC: sunset.date.toISOString() }); } } await new Promise(resolve => setTimeout(resolve, 0)); } console.log(`Scanning complete. Found ${boundaries.length} boundary points.`); return boundaries; }
                 async function executeBoundaryScan() { const date = new Date(document.getElementById('DateTimeBox').value); const tableBody = document.querySelector('#boundaryTable tbody'); if (!tableBody) return; if (isNaN(date.getTime())) { alert("Tanggal tidak valid."); tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: red;">Tanggal tidak valid.</td></tr>'; return; } if (!firstCityObj) { alert("Kota pertama belum terdeteksi."); tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: orange;">Kota pertama belum terdeteksi.</td></tr>'; return; } const centerLat = firstCityObj.latitude; const centerLon = firstCityObj.longitude; const scanRadius = 30; const step = 0.5; const latMin = Math.max(-90, centerLat - scanRadius); const latMax = Math.min(90, centerLat + scanRadius); const lonMin = centerLon - scanRadius; const lonMax = centerLon + scanRadius; boundaryPoints = await scanBoundaryCoordinates(latMin, latMax, lonMin, lonMax, date, step); tableBody.innerHTML = ''; if (boundaryPoints.length === 0) { tableBody.innerHTML = '<tr><td colspan="7" style="text-align:center; color: red;">Tidak ada titik batas ditemukan.</td></tr>'; } else { boundaryPoints.sort((a, b) => parseFloat(a.longitude) - parseFloat(b.longitude)); boundaryPoints.forEach((boundary, index) => { const row = tableBody.insertRow(); row.insertCell(0).innerText = index + 1; row.insertCell(1).innerText = boundary.latitude; row.insertCell(2).innerText = boundary.longitude; row.insertCell(3).innerText = boundary.tinggiHilal + "°"; row.insertCell(4).innerText = boundary.elongation + "°"; row.insertCell(5).innerText = boundary.meetsCriteria ? 'Ya' : 'Tidak'; row.insertCell(6).innerText = moment.utc(boundary.sunsetUTC).format('HH:mm:ss'); }); } if (isScatterVisible && typeof pilihan !== 'undefined') { drawScatterPlot(pilihan); } }
        
                // --- Inisialisasi Saat Halaman Load ---
                 function IsValidNumber(s) { return typeof s === 'string' && /^\s*[\-\+]?\d+(\.\d*)?\s*$/.test(s.trim()); }
                 function IsValidDate(s) { return moment(s).isValid(); }
                 function LoadOptions() { let o = {}; try { const s = window.localStorage.getItem(StorageKey); if (s) o = JSON.parse(s); } catch (e) { console.error("LS Load Error:", e); } if (!IsValidNumber(o.latitude)) o.latitude = '51.482'; if (!IsValidNumber(o.longitude)) o.longitude = '0.008'; if (!IsValidNumber(o.elevation)) o.elevation = '0'; if (typeof o.automatic !== 'boolean') o.automatic = false; if (!o.date || !moment(o.date).isValid()) o.date = moment().format('YYYY-MM-DDTHH:mm:ss'); o.date = moment(o.date).format('YYYY-MM-DDTHH:mm:ss'); return o; }
                 function SaveOptions() { try { const o = { latitude: document.getElementById('EditLatitude').value, longitude: document.getElementById('EditLongitude').value, elevation: document.getElementById('EditElevation').value, automatic: document.getElementById('AutoTimeCheckBox').checked, date: document.getElementById('DateTimeBox').value }; window.localStorage.setItem(StorageKey, JSON.stringify(o)); } catch (e) { console.error("LS Save Error:", e); } }
                 function Init() { 
                    Options = LoadOptions();
                    const latIn = document.getElementById('EditLatitude'); if(latIn) latIn.value = Options.latitude;
                    const lonIn = document.getElementById('EditLongitude'); if(lonIn) lonIn.value = Options.longitude;
                    const elIn = document.getElementById('EditElevation'); if(elIn) elIn.value = Options.elevation;
                    const dtBox = document.getElementById('DateTimeBox'); if(dtBox) dtBox.value = Options.date;
                    const autoChk = document.getElementById('AutoTimeCheckBox'); if(autoChk) autoChk.checked = Options.automatic;
                
                    populateCitySelect();
                    OnToggleAutoTime(); // Panggil ini sebelum update data
                    updateLocation(); // Ini akan memanggil triggerManualUpdate -> updateRiseSetTimes
                
                    // Panggilan di bawah ini mungkin redundant karena updateLocation sudah memanggilnya,
                    // tapi aman untuk memastikan data terisi saat load awal jika updateLocation tidak dipanggil
                    updateSunMoonData();
                    updateNewMoonData();
                    updateRiseSetTimes(); // !!! PANGGIL FUNGSI BARU DI SINI !!!
                    populateLocationTable();
                    checkSunsetMatch();
                
                    if (Options.automatic && autoChk && autoChk.checked) {
                         UpdateScreen(); // Mulai loop otomatis jika diperlukan
                    }
                    const scatterDiv = document.getElementById('scatterplot');
                    const scatterBtn = document.getElementById('scatterBtn');
        
                     if (scatterDiv && scatterBtn) { 
                         if (!isScatterVisible) { scatterDiv.style.display = 'none'; scatterBtn.innerHTML = '<i class="fas fa-map-marker-alt"></i> SCATTERPLOT'; } 
                         else { 
                             scatterDiv.style.display = 'block'; scatterBtn.innerHTML = '<i class="fas fa-eye-slash"></i> SEMBUNYIKAN PLOT'; if (typeof pilihan !== 'undefined') drawScatterPlot(pilihan); 
                         } 
                     } 
                 }
                         
                 function FormatCoord(x) { return typeof x === 'number' ? x.toFixed(2) : 'N/A'; }
        
                // --- Loop Update Otomatis ---
                function UpdateScreen() {
                    if (updateTimeoutId) clearTimeout(updateTimeoutId);
                    const autotime = document.getElementById('AutoTimeCheckBox').checked;
                    if (!autotime) return;
                
                    const timebox = document.getElementById('DateTimeBox');
                    let latStr = document.getElementById('EditLatitude').value;
                    let lonStr = document.getElementById('EditLongitude').value;
                    let elevStr = document.getElementById('EditElevation').value || '0';
                    let currentMoment = moment(); let date = currentMoment.toDate();
                
                    if(timebox) timebox.value = currentMoment.format('YYYY-MM-DDTHH:mm:ss');
                    updateLocalTime(lonStr, currentMoment.format('YYYY-MM-DD HH:mm:ss'));
                
                    // Validasi dipindahkan ke dalam fungsi updateRiseSetTimes dan updateSunMoonData
                    // Tidak perlu duplikasi di sini
                
                    updateSunMoonData(); // Hitung Alt, Az, Elong, dll.
                    updateRiseSetTimes(); // !!! PANGGIL FUNGSI BARU DI SINI !!!
                
                    // Cek perubahan hari untuk update New Moon
                    let currentDay = currentMoment.format('YYYY-MM-DD');
                    let lastDay = moment(Options.date).format('YYYY-MM-DD');
                    if (currentDay !== lastDay) updateNewMoonData();
                
                    checkSunsetMatch();
                    if (document.getElementById('AutoTimeCheckBox').checked) {
                        updateTimeoutId = setTimeout(UpdateScreen, 1000);
                    }
                }
                // Fungsi untuk mengkonversi derajat ke format DMS (Derajat Menit Detik)
                function formatDMS(degrees, isLatitude = false) {
                    if (typeof degrees !== 'number' || isNaN(degrees)) return 'N/A';
                    
                    const absDeg = Math.abs(degrees);
                    const deg = Math.floor(absDeg);
                    const minFloat = (absDeg - deg) * 60;
                    const min = Math.floor(minFloat);
                    const sec = Math.round((minFloat - min) * 60 * 100) / 100;
                    
                    let direction = '';
                    if (isLatitude) {
                        direction = degrees >= 0 ? 'N' : 'S';
                    } else {
                        direction = degrees >= 0 ? 'E' : 'W';
                    }
                    
                    return `${deg}° ${min}' ${sec.toFixed(2)}" ${direction}`;
                }
                
                // Fungsi untuk mengkonversi jam ke format HMS (Jam Menit Detik)
                function formatHMS(hours) {
                    if (typeof hours !== 'number' || isNaN(hours)) return 'N/A';
                    
                    const absHours = Math.abs(hours);
                    const h = Math.floor(absHours);
                    const minFloat = (absHours - h) * 60;
                    const m = Math.floor(minFloat);
                    const s = Math.round((minFloat - m) * 60 * 100) / 100;
                    
                    return `${h}h ${m}m ${s.toFixed(2)}s`;
                }
                
                function decimalToDMS(decimal) {
                    const degrees = Math.floor(decimal);
                    const minutes = Math.floor((Math.abs(decimal - degrees)) * 60);
                    const seconds = Math.round((((Math.abs(decimal - degrees)) * 60) - minutes) * 60);
                    return `${degrees}° ${minutes}′ ${seconds}″`;
                }        
            </script>
            <script>
                function showContent(id) {
                  // Sembunyikan semua bagian konten
                  const sections = document.querySelectorAll('.content-section');
                  sections.forEach(section => section.classList.add('hidden'));
                  
                  // Hapus kelas 'active' dari semua link navigasi
                  const navLinks = document.querySelectorAll('nav a');
                  navLinks.forEach(link => link.classList.remove('active'));
                  
                  // Tampilkan bagian yang diminta dan tandai link sebagai aktif
                  const target = document.getElementById(id);
                  if (target) {
                    target.classList.remove('hidden');
                    // Temukan link yang sesuai dan tambahkan kelas 'active'
                    const activeLink = document.querySelector(`nav a[onclick="showContent('${id}')"]`);
                    if (activeLink) {
                      activeLink.classList.add('active');
                    }
                  }
                }
                
            let currentMapType = 'plotly'; // 'plotly' atau 'google'
            
            function showPlotlyMap() {
                currentMapType = 'plotly';
                document.getElementById('googleMapContainer').style.display = 'none';
                document.getElementById('googleMapTypeSelector').style.display = 'none';
                document.getElementById('scatterplot').style.display = 'block';
                drawScatterPlot(pilihan);
            }
            
            let googleMap; // Variabel global untuk menyimpan instance peta
            
            function showGoogleMap() {
                currentMapType = 'google';
                document.getElementById('scatterplot').style.display = 'none';
                document.getElementById('googleMapContainer').style.display = 'block';
                document.getElementById('googleMapTypeSelector').style.display = 'block';
                
                // Inisialisasi peta dengan tipe default (terrain)
                const mapContainer = document.getElementById('googleMapContainer');
                mapContainer.innerHTML = ''; // Clear previous map
                
                googleMap = new google.maps.Map(mapContainer, {
                    center: {lat: 20, lng: 0},
                    zoom: 2,
                    mapTypeId: document.getElementById('mapStyleSelect').value
                });
            
                drawMarkersOnGoogleMap();
            }
            
            function changeMapType() {
                if (!googleMap) return;
                
                const selectedType = document.getElementById('mapStyleSelect').value;
                googleMap.setMapTypeId(selectedType);
            }
            
            function drawMarkersOnGoogleMap() {
                if (!googleMap) return;
                
                // Clear existing markers
                if (window.googleMarkers) {
                    window.googleMarkers.forEach(marker => marker.setMap(null));
                }
                window.googleMarkers = [];
            
                // Add markers for all locations
                pilihan.forEach(location => {
                    const t = parseFloat(location.tinggiHilal);
                    const e = parseFloat(location.elongation);
                    const meetsCriteria = !isNaN(t) && !isNaN(e) && t >= 5 && e >= 8;
                    
                    let markerColor;
                    if (location.nama === firstCityObj?.nama) {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
                    } else if (meetsCriteria) {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
                    } else {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
                    }
            
                    const marker = new google.maps.Marker({
                        position: {lat: location.latitude, lng: location.longitude},
                        map: googleMap,
                        title: location.nama,
                        icon: markerColor
                    });
            
                    const contentString = `
                        <div style="min-width:200px">
                            <h4>${location.nama}</h4>
                            <p>Lat: ${location.latitude.toFixed(3)}°, Lon: ${location.longitude.toFixed(3)}°</p>
                            <p>Tinggi: ${location.tinggiHilal || 'N/A'}°</p>
                            <p>Elongasi: ${location.elongation || 'N/A'}°</p>
                            <p>Sunset UTC: ${location.sunsetUTC ? moment.utc(location.sunsetUTC).format('YYYY-MM-DD HH:mm:ss') : 'N/A'}</p>
                            <p>Fajar NZ UTC: ${location.formattedFajarNZ_UTC || 'N/A'}</p>
                        </div>
                    `;
            
                    const infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
            
                    marker.addListener('click', () => {
                        // Close all other info windows first
                        window.googleMarkers.forEach(m => {
                            if (m.infoWindow) m.infoWindow.close();
                        });
                        
                        infowindow.open(googleMap, marker);
                        marker.infoWindow = infowindow;
                    });
            
                    window.googleMarkers.push(marker);
                });
            
                // Add legend if not exists
                if (!window.legend) {
                    const legend = document.createElement('div');
                    legend.style.backgroundColor = 'white';
                    legend.style.padding = '10px';
                    legend.style.borderRadius = '5px';
                    legend.style.boxShadow = '0 0 10px rgba(0,0,0,0.2)';
                    legend.innerHTML = `
                        <h4 style="margin:0 0 5px 0">Legenda</h4>
                        <div><img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png"> Kota Pertama</div>
                        <div><img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png"> Memenuhi Kriteria</div>
                        <div><img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png"> Belum Memenuhi</div>
                    `;
                    
                    googleMap.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
                    window.legend = legend;
                }
            }
            
            function drawGoogleMap() {
                const mapContainer = document.getElementById('googleMapContainer');
                mapContainer.innerHTML = ''; // Clear previous map
                
                const map = new google.maps.Map(mapContainer, {
                    center: {lat: 20, lng: 0},
                    zoom: 2,
                    mapTypeId: 'terrain'
                });
            
                // Add markers for all locations
                pilihan.forEach(location => {
                    const t = parseFloat(location.tinggiHilal);
                    const e = parseFloat(location.elongation);
                    const meetsCriteria = !isNaN(t) && !isNaN(e) && t >= 5 && e >= 8;
                    
                    let markerColor;
                    if (location.nama === firstCityObj?.nama) {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
                    } else if (meetsCriteria) {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/green-dot.png';
                    } else {
                        markerColor = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
                    }
            
                    const marker = new google.maps.Marker({
                        position: {lat: location.latitude, lng: location.longitude},
                        map: map,
                        title: location.nama,
                        icon: markerColor
                    });
            
                    const contentString = `
                        <div style="min-width:200px">
                            <h4>${location.nama}</h4>
                            <p>Lat: ${location.latitude.toFixed(3)}°, Lon: ${location.longitude.toFixed(3)}°</p>
                            <p>Tinggi: ${location.tinggiHilal || 'N/A'}°</p>
                            <p>Elongasi: ${location.elongation || 'N/A'}°</p>
                            <p>Sunset UTC: ${location.sunsetUTC ? moment.utc(location.sunsetUTC).format('YYYY-MM-DD HH:mm:ss') : 'N/A'}</p>
                            <p>Fajar NZ UTC: ${location.formattedFajarNZ_UTC || 'N/A'}</p>
                        </div>
                    `;
            
                    const infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
            
                    marker.addListener('click', () => {
                        infowindow.open(map, marker);
                    });
                });
            
                // Add legend
                const legend = document.createElement('div');
                legend.style.backgroundColor = 'white';
                legend.style.padding = '10px';
                legend.style.borderRadius = '5px';
                legend.style.boxShadow = '0 0 10px rgba(0,0,0,0.2)';
                legend.innerHTML = `
                    <h4 style="margin:0 0 5px 0">Legenda</h4>
                    <div><img src="http://maps.google.com/mapfiles/ms/icons/blue-dot.png"> Kota Pertama</div>
                    <div><img src="http://maps.google.com/mapfiles/ms/icons/green-dot.png"> Memenuhi Kriteria</div>
                    <div><img src="http://maps.google.com/mapfiles/ms/icons/red-dot.png"> Belum Memenuhi</div>
                `;
                
                map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(legend);
            }
            
            // Update fungsi toggle button
            document.getElementById('scatterBtn').addEventListener('click', function() {
                const mapTypeSelector = document.getElementById('mapTypeSelector');
                const isVisible = mapTypeSelector.style.display !== 'none';
                
                if (isVisible) {
                    mapTypeSelector.style.display = 'none';
                    document.getElementById('scatterplot').style.display = 'none';
                    document.getElementById('googleMapContainer').style.display = 'none';
                    this.innerHTML = '<i class="fas fa-map-marker-alt"></i> TAMPILKAN PETA';
                } else {
                    mapTypeSelector.style.display = 'block';
                    if (currentMapType === 'plotly') {
                        showPlotlyMap();
                    } else {
                        showGoogleMap();
                    }
                    this.innerHTML = '<i class="fas fa-eye-slash"></i> SEMBUNYIKAN PETA';
                }
            });
            
            // Inisialisasi awal
            function initMap() {
                // Default to Plotly
                currentMapType = 'plotly';
                document.getElementById('mapTypeSelector').style.display = 'none';
                document.getElementById('googleMapContainer').style.display = 'none';
                
                // Jika ingin default ke Google Maps, ganti dengan:
                // currentMapType = 'google';
                // showGoogleMap();
            }
            
            // Panggil initMap saat halaman selesai dimuat
            document.addEventListener('DOMContentLoaded', initMap);            
                    </script>
                    
            <!-- Script JavaScript - letakkan setelah semua elemen HTML terdefinisi -->
            <script>
            function updateCityNamesDisplay(city) {
              const topoCitySpan = document.getElementById("topoCityName");
              const geoCitySpan = document.getElementById("geoCityName");
            
              if (city && city.nama) {
                topoCitySpan.textContent = city.nama;
                geoCitySpan.textContent = city.nama;
              } else {
                topoCitySpan.textContent = "WORLD";
                geoCitySpan.textContent = "WORLD";
              }
            }
            
            document.addEventListener("DOMContentLoaded", function () {
              populateCitySelect();
              OnToggleAutoTime();
              updateLocation();
            
              // Tampilkan WORLD saat halaman dimuat
              updateCityNamesDisplay(null);
            });
            
            function handleCityChange(selectedCityJSON) {
              let selectedCity = null;
            
              try {
                selectedCity = JSON.parse(selectedCityJSON);
              } catch (e) {
                console.error("Format kota tidak valid:", e);
                selectedCity = null;
              }
            
              // Update nama kota di TOPOSENTRIS dan GEOSENTRIS
              updateCityNamesDisplay(selectedCity);
            
              // Lanjutkan proses lain seperti update lokasi
              Options.longitude = selectedCity.longitude;
              Options.latitude = selectedCity.latitude;
              Options.elevation = selectedCity.elevation;
              updateLocation();
            }
            </script>        
    </body>
</html>