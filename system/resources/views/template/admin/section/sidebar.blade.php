@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
}
@endphp

<div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Toko Madia
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item {{checkRouteActive('admin/dashboard')}}">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
              <i class="fa fa-tachometer"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li class="nav-item {{checkRouteActive('admin/article')}}">
            <a class="nav-link" href="{{url('admin/article')}}">
              <i class="fa fa-archive" aria-hidden="true"></i>
              <p>Article</p>
            </a>
          </li>

          <li class="nav-item {{checkRouteActive('admin/coment')}}">
            <a class="nav-link" href="{{url('admin/coment')}}">
              <i class="fa fa-star" aria-hidden="true"></i>
              <p>Comment</p>
            </a>
          </li>

           <li class="nav-item {{checkRouteActive('admin/user')}}">
            <a class="nav-link" href="{{url('admin/user')}}">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>User</p>
            </a>
          </li>


         <li class="nav-item {{checkRouteActive('home')}}">
            <a class="nav-link" href="{{url('home')}}">
              <i class="fa fa-users" aria-hidden="true"></i>
              <p>Blog</p>
            </a>
          </li>

            </ul>
        </li>
            <!-- your sidebar here -->
        </ul>
      </div>