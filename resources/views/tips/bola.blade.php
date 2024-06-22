<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('css/tipsContent.css') }}" />
    <title>FITNITY</title>
  </head>
  <body>
    <div class="container">
      <aside class="sidebar">
        <div class="logo">
          <img src="{{ asset('img/core-img/logoputihpolos.png') }}" width="72" />
          <a href="#">
            <h2>FITNITY</h2>
          </a>
        </div>

        <div class="tab1">
            <h3>Welcome Sporty People!</h3>
            <div class="tabcontent">
              <a href="/index">  
                <div class="gettab">
                  <i class="bx bxs-star"></i>
                  <span>Getting Started</span>
                </div>
              </a>
              <a href="/event">
                <div class="eventtab">
                  <i class="bx bxs-castle"></i>
                  <span>Events</span>
                </div>
              </a>
              <a href="/places">
                <div class="placestab">
                  <i class="bx bxs-map"></i>
                  <span>Places</span>
                </div>
              </a>
              <a href="/tips">
                <div class="tipstab">
                  <i class="bx bxs-key"></i>
                  <span>Tips & Tricks</span>
                </div>
              </a>
              <div class="logouttab">
                <i class="bx bx-log-out"></i>
                <a href="{{route('doLogout')}}">Logout</a>
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
        <div class="tips">
            <h1>3 Cara Jaga Performa Tubuh ala Pesepakbola yang Bisa Diikuti</h1>
            <div class="imga">
                <img src="{{ asset('img/tips/bola.png') }}" alt="">
                <div class="sources">
                    <p>
                        https://sport.detik.com/sepakbola/sepakbola/d-6466710/3-cara-jaga-performa-tubuh-ala-pesepakbola-yang-bisa-diikuti
                    </p>
                </div>
            </div>
            <div class="content">
                <p>
                    Momen pesta bola dunia pastinya begitu dinanti-nanti oleh para pencinta sepakbola. Pasalnya hajatan sepakbola 4 tahun sekali itu menyuguhkan banyak bintang ternama dari berbagai negara.
                </p>
                <p>
                    Para atlet pun berlomba-lomba menunjukkan untuk kemampuan dan performa terbaik untuk membawa kemenangan bagi negara yang dibela. Dikutip dari Health Span, ada sejumlah cara yang dilakukan oleh para pemain bola agar performa mereka tetap terjaga saat bermain di lapangan.
                </p>
                <h2>
                    1. Berlatih dengan Cara Berbeda
                </h2>
                <p>
                    Southampton FC's Head of Sport Science Alek Gross mengatakan untuk memiliki kemampuan yang lebih unggul daripada pemain lain maka cara berlatih para atlet pun harus berbeda. Menurutnya, jika berlatih dengan cara yang sama maka kemampuan yang dimiliki pun akan sama.
                </p>
                <p>
                    Pelatihan pun harus menekankan pada sistem fisiologis tubuh. Selain itu dalam pelatihan pun harus ada hal-hal menarik dan bervariasi sehingga bisa mendapatkan hasil yang diinginkan.
                </p>
                <h2>
                    2. Latihan dan Fase Pemulihan Harus Seimbang
                </h2>
                <p>
                    Agar performa terjaga, menyeimbangkan fase latihan dan pemulihan harus dilakukan. Bahkan jika tubuh dipaksa untuk berlatih terus tanpa memikirkan istirahat maka bisa menurunkan performa saat bermain di lapangan. Bahkan cara tersebut menyebabkan para atlet rentan untuk cedera.
                </p>
                <h2>
                    3. Konsumsi Makanan dan Minuman yang Benar
                </h2>
                <p>
                    Memberikan tubuh makanan dan minuman yang bergizi untuk menjaga performa merupakan hal yang harus diperhatikan. Sebab nutrisi yang terkandung dalam makanan memiliki peran yang penting dalam menjaga performa atau bahkan saat fase pemulihan.
                </p>
                <p>
                    Tak hanya itu, konsumsi karbohidrat juga diperlukan untuk mendapatkan tenaga. Konsumsi karbohidrat harus diimbangi dengan konsumsi sayuran dan buah agar nutrisi yang didapatkan bisa maksimal.
                </p>
                <p>
                    Selain makanan, minuman pun juga harus diperhatikan. Dari banyaknya pilihan minuman, air mineral merupakan salah satu yang cukup direkomendasikan.
                </p>
            </div>
        </div>
      </main>
    </div>

    <script src="script.js"></script>
  </body>
</html>
