@section('nav')
<nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                <span class="ms-logo ms-logo-sm">MD</span>
                <span class="ms-title">Mine
                <strong>Data</strong>
              </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="/" class="animated fadeIn animation-delay-4"  data-name="home">Inicio</a>
                </li>
                <li>
                    <a href="/" class="animated fadeIn animation-delay-4"  data-name="home">Como Funciona</a>
                </li>
                <li>
                    <a href="/" class="animated fadeIn animation-delay-4"  data-name="home">About Us</a>
                </li>
                <li>
                    <a href="/" class="animated fadeIn animation-delay-4"  data-name="home">Seguridad</a>
                </li>
                <li>
                    <a href="/" class="animated fadeIn animation-delay-4"  data-name="home">FAQ</a>
                </li>
                <li>
                    <a href="/formpanel" class="animated fadeIn animation-delay-4"  data-name="home">Entrar</a>
                </li>

            </ul>
        </div>
        <!-- navbar-collapse collapse -->
        <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>
@endsection