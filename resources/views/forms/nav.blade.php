@section('nav')
<nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">
                <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
                <span class="ms-logo ms-logo-sm">M</span>
                <span class="ms-title">Material
                <strong>Style</strong>
              </span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown active">
                    <a href="/formpanel" class="dropdown-toggle animated fadeIn animation-delay-4"  data-hover="dropdown" data-name="home">Mis datos
                    <i class="zmdi zmdi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/forms/finance/accounts">
                                <i class="zmdi zmdi-chevron-right"></i> Datos Financieros</a>
                        </li>
                        <li>
                            <a href="/forms/search/accounts">
                                <i class="zmdi zmdi-chevron-right"></i> Mis Busquedas</a>
                        </li>
                        <li>
                            <a href="/forms/social/accounts">
                                <i class="zmdi zmdi-chevron-right"></i> Redes Sociales</a>
                        </li>
                        <li>
                            <a href="/forms/health/accounts">
                                <i class="zmdi zmdi-chevron-right"></i> Datos de Salud</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="/forms/earnings" class=" animated fadeIn animation-delay-5" data-name="page">Mis ganancias</a></li>
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