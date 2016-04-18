<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">BARRA DE MENÚ</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Inici</span></a></li>
            <li class="#"><a href="{{ url('attendance') }}"><i class='fa fa-bell-o'></i> <span>Passar llista</span></a></li>
            <li class="#"><a href="{{ url('timetables') }}"><i class='fa fa-legal'></i> <span>Tutoria</span></a></li>
            <li class="#"><a href="{{ url('enrollment') }}"><i class='fa fa-pencil'></i> <span>Matrícula</span></a></li>
            <li class="#"><a href="{{ url('reports') }}"><i class='fa fa-file-text'></i> <span>Informes</span></a></li>
            <li class="#"><a href="{{ url('inventory') }}"><i class='fa fa-check-square-o'></i> <span>Inventari</span></a></li>
            <li class="#"><a href="{{ url('maintenance') }}"><i class='fa fa-briefcase'></i> <span>Manteniment</span></a></li>
            <li class="#"><a href="{{ url('managament') }}"><i class='fa fa-cog'></i> <span>Gestió</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
