@section('form1')
    <div class="material-background"></div>
    <div class="container container-full">
        <div class="ms-paper">
            <div class="row">



                @yield('menuform1')


                <div class="col-md-9 ms-paper-content-container">
                    <div class="ms-paper-content">
                        <h1>Tus Datos</h1>
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="text-center">¿Quieres ganar más dinero?</h3>
                                <div class="card card-info-inverse">
                                    <div class="withripple zoom-img">
                                        <a href="javascript:void(0);">
                                            <img src="{{ URL::asset('img/masdinero.jpg')}}" alt="" class="img-responsive"> </a>
                                    </div>
                                    <div class="card-block text-center">
                                        <h4 class="">Tenemos 2 encuestas gratificadas nuevas</h4>
                                        <a href="/forms/finance/surveys" class="btn btn-white color-success btn-raised">
                                            <i class="zmdi zmdi-airplane"></i>Listado de encuestas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="ms-component-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="withripple zoom-img">
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('img/demo/mdinero1.jpg')}}" alt="" class="img-responsive"> </a>
                                        </div>
                                        <div class="card-block text-center">
                                            <a href="javascript:void(0)" class="btn-circle btn-circle-primary btn-circle-raised btn-card-float wow zoomInDown">
                                                <i class="zmdi zmdi-star"></i>
                                            </a>
                                            <h4 class="color-primary">Datos financieros</h4>
                                            <p>Tu compras y tus gastos</p>
                                            <a href="/forms/finance/accounts" class="btn btn-primary btn-raised">
                                                <i class="zmdi zmdi-globe"></i> Cuentas</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card card-warning">
                                        <div class="withripple zoom-img">
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('img/demo/msearch1.jpg')}}" alt="" class="img-responsive"> </a>
                                        </div>
                                        <div class="card-block text-center">
                                            <a href="javascript:void(0)" class="btn-circle btn-circle-warning btn-circle-raised btn-card-float wow zoomInDown">
                                                <i class="zmdi zmdi-star"></i>
                                            </a>
                                            <h4 class="color-warning">Datos de busquedas</h4>
                                            <p>Tu actividad en internet</p>
                                            <a href="/forms/search/accounts" class="btn btn-warning btn-raised">
                                                <i class="zmdi zmdi-globe"></i> Cuentas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="card card-royal">
                                        <div class="withripple zoom-img">
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('img/demo/msocial1.jpg')}}" alt="" class="img-responsive"> </a>
                                        </div>
                                        <div class="card-block text-center">
                                            <a href="javascript:void(0)" class="btn-circle btn-circle-royal btn-circle-raised btn-card-float  wow zoomInDown">
                                                <i class="zmdi zmdi-star"></i>
                                            </a>
                                            <h4 class="color-royal">Redes Sociales</h4>
                                            <p>Tu actividad en las redes sociales</p>
                                            <a href="/forms/social/accounts" class="btn btn-royal btn-raised">
                                                <i class="zmdi zmdi-globe"></i> Cuentas</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="card card-success">
                                        <div class="withripple zoom-img">
                                            <a href="javascript:void(0);">
                                                <img src="{{ URL::asset('img/demo/mhealth1.jpg')}}" alt="" class="img-responsive"> </a>
                                        </div>
                                        <div class="card-block text-center">
                                            <a href="javascript:void(0)" class="btn-circle btn-circle-success btn-circle-raised btn-card-float  wow zoomInDown">
                                                <i class="zmdi zmdi-star"></i>
                                            </a>
                                            <h4 class="color-success">Datos de salud</h4>
                                            <p>Tu actividad y modo de vida</p>
                                            <a href="/forms/health/accounts" class="btn btn-success btn-raised">
                                                <i class="zmdi zmdi-globe"></i> Cuentas</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <!-- ms-paper-content -->
                </div>




            </div>
            <!-- row -->
        </div>
        <!-- ms-paper -->
    </div>
    <!-- container -->
@endsection