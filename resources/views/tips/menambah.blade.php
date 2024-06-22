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
            <h1>Lebih Berisi, Ini 5 Olahraga untuk Menambah Berat Badan</h1>
            <div class="imga">
                <img src="{{ asset('img/tips/menambah.png') }}" alt="">
                <div class="sources">
                    <p>
                        https://www.halodoc.com/artikel/lebih-berisi-ini-5-olahraga-untuk-menambah-berat-badan
                    </p>
                </div>
            </div>
            <div class="content">
                <p>
                    Siapa bilang satu-satunya cara untuk menaikkan berat badan hanya dengan menambah porsi makan? Justru, porsi makan harus  tetap seimbang. Namun, kamu perlu memilih makanan yang sehat namun tinggi kalori.
                </p>
                <p>
                    Nah, supaya kenaikan berat badan tetap sehat, kamu juga perlu mengimbanginya dengan olahraga. Tujuannya agar penambahan berat badan disebabkan oleh massa otot, bukan lemak jahat. Berikut jenis olahraga untuk menambahkan berat badan yang bisa kamu coba di rumah!
                </p>
                <h2>
                    Jenis Olahraga untuk Menambah Berat Badan
                </h2>
                <p>
                    Sebagian besar olahraga untuk menambah berat badan adalah latihan beban. Sebab, olahraga ini bisa menambah massa otot yang otomatis menambah berat badan kamu.
                </p>
                <p>
                    Berikut jenis olahraga yang bisa kamu coba untuk menambah berat badan:
                </p>
                <h2>
                    1. Push-Up
                </h2>
                <p>
                    Latihan ini membantu membangun otot di lengan dan bahu. Berikut cara tepat melakukan push-up:
                </p>
                <ul>
                    <li>Berbaring telungkup.</li>
                    <li>Letakkan tangan pada alas. Pastikan telapak tangan rata dengan tangan terentang di samping selebar bahu.</li>
                    <li>Perlahan dorong tubuh ke atas sampai lengan terentang sepenuhnya. Jaga punggung dan kaki  lurus sehingga tubuh membentuk garis lurus.</li>
                    <li>Perlahan-lahan turunkan tubuh kembali hingga hidung hampir menyentuh lantai.</li>
                    <li>Ulangi semampu kamu.</li>
                </ul>
                <h2>
                    2. Pull-Up
                </h2>
                <p>
                    Latihan ini adalah cara sederhana untuk membangun otot lengan dan bahu. Berikut cara melakukanya:
                </p>
                <ul>
                    <li> Pegang pull-up bar dengan kedua tangan. Pisahkan kedua lengan selebar bahu.</li>
                    <li>Tarik tubuh sehingga kaki tidak menyentuh dasar lantai dan pastikan lengan tetap lurus.</li>
                    <li>Tarik tubuh hingga dagu berada di atas palang pull-up bar.</li>
                    <li>Turunkan tubuh secara perlahan agar lengan lurus kembali.</li>
                    <li>Ulangi sebanyak yang kamu inginkan.</li>
                </ul>
                <h2>
                    3. Jongkok
                </h2>
                <p>
                    Latihan ini membantu membangun otot di pantat dan kaki, terutama otot paha depan. Berikut langkah-langkahnya:
                </p>
                <ul>
                    <li>Berdiri tegak dan buat jarak kaki selebar pinggul.</li>
                    <li>Letakkan tangan di pinggul dan kendurkan otot perut.</li>
                    <li>Mulailah menurunkantubuh  hanya dengan menggunakan kaki, seolah-olah kamu akan duduk dan masuk ke posisi duduk sampai paha  sejajar dengan lantai.</li>
                    <li>Angkat tubuh kembali ke posisi semula</li>
                    <li>Ulangi semampu kamu</li>
                </ul>
                <h2>
                    4. Lunges
                </h2>
                <p>
                    Kamu dapat melakukan latihan ini di mana saja. Latihan ini bagus untuk membesarkan dan mengencangkan otot kaki dan pantat. Caranya, yaitu:
                </p>
                <ul>
                    <li>Berdiri tegak, regangkan otot perut.</li>
                    <li>Rentangkan satu kaki seperti sedang melangkah, lalu condongkan tubuh ke depan seperti sedang berlutut hingga lutut membentuk sudut 90 derajat.</li>
                    <li>Dorong kembali tumit untuk mengangkat diri tubuh kembali ke posisi awal.</li>
                    <li>Ulangi sebanyak yang kamu rasa nyaman dengan satu kaki.</li>
                    <li>Ulangi untuk kaki lainnya.</li>
                </ul>
                <h2>
                    5. Bench press
                </h2>
                <p>
                    Kamu memerlukan flat bench untuk berbaring dan barbel bar. Namun, jangan pilih barbel yang terlalu berat.
                </p>
                <p>
                    Bench press membantu membentuk otot bahu, trisep, dan dada. Ini adalah latihan yang bagus untuk menambah berat badan.
                </p>
                <p>
                    Semakin banyak beban yang bisa kamu angkat, semakin banyak otot yang dapat kamu  bangun.
                </p>
                <p>
                    Berikut langkah-langkahnya: 
                </p>
                <ul>
                    <li>Berbaring telentang pada flat bench. Jika bench memiliki rak untuk menaruh barbel bar, hadapkan tubuh ke bagian tersebut. Jika tidak ada, pegang barbel dengan hati-hati dan perlahan berbaring ke belakang di bangku sampai kamu merasa nyaman.</li>
                    <li>Pegang barbel bar dengan kedua tangan, termasuk ibu jari. Jangan ragu untuk merentangkan jari  sedikit.</li>
                    <li>Turunkan lengan perlahan sampai barbel mendekat ke dada.</li>
                    <li>Perlahan luruskan lengan.</li>
                    <li>Ulangi 3mpat sampai lima kali sesuai kemampuan.</li>
                </ul>
                <p>
                    Selain kesehatan fisik, kesehatan mental juga tak kalah penting untuk diperhatikan. Bila kamu mengalami masalah yang berhubungan dengan mental, jangan ragu untuk menemui psikolog.
                </p>

            </div>
        </div>
      </main>
    </div>

    <script src="script.js"></script>
  </body>
</html>
