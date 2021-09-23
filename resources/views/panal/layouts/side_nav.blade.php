
<!--   <aside class="main-sidebar sidebar-custome elevation-4">
 -->    <!-- Brand Logo -->
  <aside class="main-sidebar sidebar-light-secondary elevation-4">

    <a href="{{route('panal.deshboard')}}" class="brand-link">
      @php
      $name = (Auth::user()->type == 1)? Auth::user()->school->name : Auth::user()->name;
      @endphp
      
      <span class="brand-text font-weight-light">{{ucfirst($name)}}</span>
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
                Teacher Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a  href="{{route('staff.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Teachers</p>
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
              @if(IsSchool())
          <li class="nav-item">
            <a href="#" class="nav-link">
               <i class="fas fa-user-graduate"></i>
              <p>
                Attendance Management
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('attendance.index')}}" class="nav-link">
                 <i class="fas fa-user-graduate"></i>
                  <p>Student</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{route('students.index')}}" class="nav-link">
                 <i class="fas fa-user-graduate"></i>
                  <p>Staff</p>
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


