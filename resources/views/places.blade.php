<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Css/places.css" />
    <title>FITNITY</title>
  </head>
  <body>
    <div class="container">
      <aside class="sidebar">
        <div class="logo">
          <img src="img/core-img/logoputihpolos.png" width="72" />
          <a href="#">
            <h2>FITNITY</h2>
          </a>
        </div>

        <div class="tab1">
          <h3>Welcome Sporty People!</h3>
          <div class="tabcontent">
              <div class="gettab" id="gettab">
                  <i class="bx bxs-star"></i>
                  <a href="/index">Getting Started</a>
              </div>
              <div class="eventtab" id="eventtab">
                  <i class="bx bxs-castle"></i>
                  <a href="/event">Events</a>
              </div>
              <div class="placestab" id="placestab">
                  <i class="bx bxs-map"></i>
                  <a href="/places">Places</a>
              </div>
              <div class="tipstab" id="tipstab">
                  <i class="bx bxs-key"></i>
                  <a href="/tips">Tips & Tricks</a>
              </div>
              <div class="logouttab" id="logouttab">
                  <i class="bx bx-log-out"></i>
                  <a href="{{ route('doLogout') }}">Logout</a>
              </div>
          </div>
      </div>
        <div class="tab3">
          <div>
            <a href="#"></a>
          </div>
          
        </div>
      </aside>

      <main>
        <header>
          <div class="search">
            <i class="bx bx-search"></i>
            <input type="text" placeholder="Search here" />
          </div>

        </header>

        <div class="title">
          <h2>Places</h2>
        </div>

        <div class="tabbar">

          <div class="tabcontent">
            <div class="eventbox">
              <div class="eventimg">
                <img src="img/places/image1.jpg" />
              </div>
              <div class="detailevent">
                <p class="tgl">Futsal</p>
                <h1>Hokky Futsal</h1>
                <p>Jl. Nginden II No. 109</p>
                <div class="event_btn">
                  <a href="https://maps.app.goo.gl/mYaQNh4Ba7ZQgoZQ9" target="_blank">More info</a>
                </div>
              </div>
            </div>
            <div class="eventbox">
              <div class="eventimg">
                <img src="img/places/image8.jpg" />
              </div>
              <div class="detailevent">
                <p class="tgl">Futsal</p>
                <h1>Baskhara Futsal Arena</h1>
                <p>Jl. Manyar Jaya Praja I No. 47</p>
                <div class="event_btn">
                  <a href="https://maps.app.goo.gl/MFWhqvb7CJKZhprz7" target="_blank">More info</a>
                </div>
              </div>
            </div>
            <div class="eventbox">
              <div class="eventimg">
                <img src="img/places/image2.jpg" />
              </div>
              <div class="detailevent">
                <p class="tgl">Basket</p>
                <h1>Mayasi Basketball Court</h1>
                <p>Jl. Kenjeran No. 546, Kalijudan</p>
                <div class="event_btn">
                  <a href="https://maps.app.goo.gl/UocT66GfiYN1kPGm7" target="_blank">More info</a>
                </div>
              </div>
            </div>
            <div class="eventbox">
              <div class="eventimg">
                <img src="img/places/image6.jpg" />
              </div>
              <div class="detailevent">
                <p class="tgl">Basket</p>
                <h1>Royal Riverside Court</h1>
                <p>Jl. Kupang Jaya Indah No. 48, Simomulyo</p>
                <div class="event_btn">
                  <a href="https://maps.app.goo.gl/pe41EyWaB4zsojow5" target="_blank">More info</a>
                </div>
              </div>
            </div>
            <div class="eventbox">
              <div class="eventimg">
                <img src="img/places/image3.jpg" />
              </div>
              <div class="detailevent">
                <p class="tgl">Badminton</p>
                <h1>Lapangan STIESIA</h1>
                <p>Jl. Menur Pumpungan No. 28, Menur Pumpungan</p>
                <div class="event_btn">
                  <a href="https://maps.app.goo.gl/XhbqXS98rEpEEokE7" target="_blank">More info</a>
                </div>
              </div>
            </div>
          </div>
            
        </div>
        
      </main>
    </div>

    <script>
      // JavaScript for making tabs clickable
      document.getElementById('gettab').addEventListener('click', function() {
          window.location.href = '/index';
      });

      document.getElementById('eventtab').addEventListener('click', function() {
          window.location.href = '/event';
      });

      document.getElementById('placestab').addEventListener('click', function() {
          window.location.href = '/places';
      });

      document.getElementById('tipstab').addEventListener('click', function() {
          window.location.href = '/tips';
      });

      document.getElementById('logouttab').addEventListener('click', function() {
          window.location.href = '{{ route('doLogout') }}';
      });
  </script>
    
    
  </body>
</html>
