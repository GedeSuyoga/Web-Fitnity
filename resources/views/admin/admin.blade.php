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
          <a href="">
            <div class="eventtab">
              <i class="bx bxs-castle"></i>
              <span>Events Management</span>
            </div>
          </a>
          <div class="placestab">
            <i class="bx bxs-map"></i>
            <a href="">Places Management</a>
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
      <div class="">
        <header>
          <div class="search">
            <div class="adddata">
              <a href="/addevent" class="addbtn">+ Add</a>
            </div>
            <form class="" action="" method="get">
                <input class="searchinput" type="search" name="Search Here" value="{{ Request::get('katakunci') }}" placeholder="" aria-label="Search">
                <button class="searchbtn" type="submit">Search</button>
            </form>
          </div>
        </header>
        <!-- TOMBOL TAMBAH DATA -->
        
        <div class="table-wrapper">
          <table class="table">
              <thead>
                  <tr>
                      <th class="col1">Tanggal</th>
                      <th class="col1">Nama Event</th>
                      <th class="col1">Deskripsi</th>
                      <th class="col1">Tempat</th>
                      <th class="col1">Gambar</th>
                      <th class="col1">Link</th>
                      <th class="col1">Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($event as $item)
                  <tr>
                      <td>{{$item->tanggal}}</td>
                      <td>{{$item->nama}}</td>
                      <td>{{$item->deskripsi}}</td>
                      <td>{{$item->tempat}}</td>
                      <td><img src="{{ asset('storage/public/gambar/' . $item->gambar) }}" alt="{{ $item->nama }}"></td>
                      <td>{{$item->link}}</td>
                      <td>
                          <div class="editdelbtn">
                            <button href='' class="btn btn-warning btn-sm">Edit</button>
                            <form class='' action="{{ route('destroy', $item->nama) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                          </div>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
      </div>
       
  </div>
    </main>

  </div>

</body>
</html>