
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{route('panal.deshboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        @if(IsSchool())
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="fas fa-user-graduate"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('students.index')}}" class="nav-link">
                 <i class="fas fa-user-graduate"></i>
                  <p>Students</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{route('students.index')}}" class="nav-link">
               <i class="fas fa-cog"></i>
                  <p>Setting</p>
                </a>
              </li>
            </ul>
          </li>
        @endif
         @if(IsAdmin())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-school"></i>
              <p>
                School
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('schools.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Schools</p>
                </a>
              </li>
            
            </ul>
          </li>
             @endif
          @if(IsAdmin())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                User Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a  href="{{route('user.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User</p>
                </a>
              </li>
              
                <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  @if(IsAdmin())
                  <p>Roles & Permissions</p>
                  @else
                    <p>Roles</p>
                  @endif
                </a>
              </li>
            
            </ul>
          </li>
           @endif
          @if(IsSchool())
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Staff Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a  href="{{route('staff.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Staff Management</p>
                </a>
              </li>
              
                <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
               
                    <p>Roles</p>
                 
                </a>
              </li>
            
            </ul>
          </li>
           @endif
         



  @if(IsSchool())
         <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Fee Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="{{route('fee.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Index</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{route('fee.setting')}}" class="nav-link">
                 <i class="fas fa-cog"></i>
                  <p>Setting</p>
                </a>
              </li>
            </ul>
          </li>
        @endif

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


