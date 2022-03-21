<?php
  $menus = config('menu');
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('LTE/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WEB_CURD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('LTE/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">TTS Khang</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if (isset($menus))
            
          @foreach ($menus as $mu)
            <li class="nav-item ">
              <a href="" class="nav-link ">
                <i class="nav-icon fas  {{$mu['icon']}}"></i>
                <p>
                  {{$mu['label']}}
                  @if (isset($mu['item']))
                  <i class="right fas fa-angle-left"></i>
                  @endif
                </p>
              </a>
              @if (isset($mu['item']))
                <ul class="nav nav-treeview">
                  @foreach ($mu['item'] as $item)
                    <li class="nav-item">
                      <a href="{{route($item['router'])}}" class="nav-link ">                    
                        <i class="far fa-circle nav-icon"></i>
                        <p>{{$item['label']}}</p>
                      </a>
                    </li>
                  @endforeach
                </ul>
                @endif
            </li>
          @endforeach
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>