@section('financesurveys')
    <div class="material-background"></div>
    <div class="container container-full">
        <div class="ms-paper">
            <div class="row">



                @yield('menuform1')

                <div class="col-md-9 ms-paper-content-container">
                    <div class="ms-paper-content">
                        <h1>Tus encuestas</h1>
                        <section class="ms-component-section">
                            <a href="/formpanel" class="btn btn-raised btn-primary">Volver<div class="ripple-container"></div> </a>

                                <div class="bs-example">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Sector</th>
                                            <th>Preguntas pendientes</th>
                                            <th>Remuneracion</th>
                                            <th>Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>01/08/2017</td>
                                            <td>Tecnológico</td>
                                            <td>100</td>
                                            <td>4€</td>
                                            <td><a href="javascript:void(0)" class="btn btn-raised btn-danger">Responder<div class="ripple-container"></div></a></td>
                                        </tr>
                                        <tr>
                                            <td>02/07/2017</td>
                                            <td>Alimenticio</td>
                                            <td>10</td>
                                            <td>1€</td>
                                            <td><a href="javascript:void(0)" class="btn btn-raised btn-danger">Responder<div class="ripple-container"></div></a></td>
                                        </tr>
                                        <tr>
                                            <td>22/05/2016</td>
                                            <td>General</td>
                                            <td>0</td>
                                            <td>1,5€</td>
                                            <td><a href="javascript:void(0)" class="btn btn-raised btn-default">Ver<div class="ripple-container"></div></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection