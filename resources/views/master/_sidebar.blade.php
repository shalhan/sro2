 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/img/user.png") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{Session::get('name')}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Menu</li>
        <!-- Optionally, you can add icons to the links -->
        @if(Session::get('role') == true)
        <li class="active"><a href="{{route('/')}}"><i class="fa fa-tachometer"></i> <span>Beranda</span></a></li>
        <li class="active"><a href="{{route('report')}}"><i class="fa fa-comment-o"></i> <span>Report</span></a></li>
        @else
        <li class="active"><a href="{{route('/')}}"><i class="fa fa-tachometer"></i> <span>Beranda</span></a></li>
        <li class="active"><a href="{{route('location')}}"><i class="fa fa-map-marker"></i> <span>Lokasi</span></a></li>
        <li class="active"><a href="{{route('info')}}"><i class="fa fa-file-text-o"></i> <span>Informasi</span></a></li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>