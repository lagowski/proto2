@section('earnings')
    <div class="material-background"></div>
    <div class="container container-full">
        <div class="ms-paper">
            <div class="row">



                @yield('menuform1')

                <div class="col-md-9 ms-paper-content-container">
                    <div class="ms-paper-content">
                        <h1>Tus ganancias</h1>
                        <section class="ms-component-section">
                            <a href="/formpanel" class="btn btn-raised btn-primary">Volver<div class="ripple-container"></div> </a>

                            <div class="bs-example">
                                <img src="{{ URL::asset('img/ventas.png')}}" width="750px">
                            </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection