<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('images/gestilumi-logo-ppal.jpg') !!}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>SisPulsar</p>
                @else
                <p>SisPulsar</p>
                @endif
                <!-- Status -->
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Procurar..."/>
          <span class="input-group-btn">
            <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
            </div>
        </form> -->
        <!-- Sidebar Menu -->

        <ul class="sidebar-menu" data-widget="tree">
            <!-- <li class="header">Operações</li> -->
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
