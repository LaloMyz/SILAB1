<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if(config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
    @auth
     <!-- Autenticara que usuario ingreso y lo comparará en la condición para poner un mensaje -->
     
     <!-- Mensaje por usuarios -->

        @if(Auth::user()->name == 'Admin')  <!-- Cambiar "Admin" por el nombre de usuario que tengan -->

            <!-- Mostrar campo de texto solo para Alumnos -->
            <P style="color: white;">¡Bienvenido, Admin!</p>        
        @endif 
        @if(Auth::user()->name == 'admin')
            <!-- Mostrar campo de texto solo para Alumnos -->
            <P style="color: white;">¡Bienvenido, admin!</p>
        @endif 
        @if(Auth::user()->name == 'jefe_division')
            <!-- Mostrar campo de texto solo para Alumnos -->
            <P style="color: white;">¡Bienvenido, Jefe de División!</p>
        @endif 
    @endauth
     <!-- Mensaje por roles -->
    @auth
        @if(Auth::user()->hasRole('Alumno'))     <!-- Cambiar "Alumno" si es que tienen roles diferentes -->
            <!-- Mostrar contenido para alumnos -->
            <P style="color: white;">Estas accediendo como: Alumno</p>
        @endif

        @if(Auth::user()->hasRole('Admin'))
            <!-- Mostrar contenido para alumnos -->
            <P style="color: white;">Estas accediendo como: Admin</p>
        @endif

        @if(Auth::user()->hasRole('Personal'))
            <!-- Mostrar contenido para alumnos -->
            <P style="color: white;">Estas accediendo como: Personal</p>
        @endif
    @endauth
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if(config('adminlte.sidebar_nav_animation_speed') != 300)
                    data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}"
                @endif
                @if(!config('adminlte.sidebar_nav_accordion'))
                    data-accordion="false"
                @endif>
                {{-- Configured sidebar links --}}
                @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item')
            </ul>
        </nav>
    </div>

</aside>
