<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li><a href="#"><i class="fa  fa-user"></i> <span>{{Auth::user()->name}} </span></a></li>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Master Surat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Nota Pejalanan Dinas</a></li>
            <li><a href="#">Surat Perintah Tugas</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Data Pegawai</a></li>
            <li><a href="#">Golongan</a></li>
            <li><a href="#">Kota Tujuan</a></li>
            <li><a href="#">Biaya Perjalanan</a></li>
            <li><a href="#">Jenis Transportasi</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>