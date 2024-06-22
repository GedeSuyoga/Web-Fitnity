<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Css/Event.css">
    <title>FITNITY</title>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img src="img/core-img/logoputihpolos.png" width="72" alt="Logo">
                <a href="#"><h2>FITNITY</h2></a>
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
                    <input type="text" placeholder="Search here">
                </div>
            </header>

            <div class="title">
                <h2>Events</h2>
            </div>

            <div class="tabbar">
                <div class="tabcontent">
                    @foreach ($event as $item)
                        <div class="eventbox">
                            <div class="eventimg">
                              <img src="{{ asset('storage/public/gambar/' . $item->gambar) }}" alt="{{ $item->nama }}">
                            </div>
                            <div class="detailevent">
                                <p class="tgl">{{ $item->tanggal }}</p>
                                <h2>{{ $item->nama }}</h2>
                                <p>{{ $item->deskripsi }}</p>
                                <p>{{ $item->tempat }}</p>
                                <div class="event_btn">
                                  <a href="{{ $item->link }}" target= "_blank">More info</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
