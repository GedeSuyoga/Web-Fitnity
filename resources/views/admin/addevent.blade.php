<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/admin/admin.css" />
    <title>AdminPage </title>
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <div class="logo">
        <a href="#">
          <h2>FITNITY ADMIN</h2>
        </a>
      </div>

      <div class="tab1">
        <div class="tabcontent">
          <a href="/event">
            <div class="eventtab">
              <i class="bx bxs-castle"></i>
              <span>Events Management</span>
            </div>
          </a>
          <div class="placestab">
            <i class="bx bxs-map"></i>
            <a href="places.php">Places Management</a>
          </div>
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
        <div class="formwrap">
            <form action='{{route('addevent')}}' method='post' enctype="multipart/form-data">
                @csrf
                <div class="form">
                    
                    <div class="rows">
                        <label for="nama" class="labels">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="forminput" name='nama' id="nama">
                        </div>
                    </div>
                    <div class="rows">
                        <label for="deskripsi" class="labels">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="forminput" name='deskripsi' id="deskripsi">
                        </div>
                    <div class="rows">
                        <label for="tanggal" class="labels">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="text" class="forminput" name='tanggal' id="tanggal">
                        </div>
                    </div>
                    </div>
                    <div class="rows">
                        <label for="tempat" class="labels">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="forminput" name='tempat' id="tempat">
                        </div>
                    </div>
                    <div class="rows">
                      <label for="link" class="labels">Link Event</label>
                      <div class="col-sm-10">
                          <input type="text" class="forminput" name='link' id="link">
                      </div>
                    <div class="rows">
                      <label for="gambar" class="gambar">Gambar</label>
                      <div class="col-sm-10">
                          <input type="file" class="inputgambar" name='gambar' id="gambar">
                      </div>
                    </div>
                  </div>
                    <div class="rows">
                        <label for="jurusan" class="labels"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Save</button></div>
                    </div>
                </form>
        </div>
    </main>

  </div>

</body>
</html>