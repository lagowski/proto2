@section('healthaccounts')
    <div class="material-background"></div>
    <div class="container container-full">
        <div class="ms-paper">
            <div class="row">

                @yield('menuform1')

                <div class="col-md-9 ms-paper-content-container">
                  <div class="ms-paper-content">
                    <h1>Tus cuentas bancarias relacionadas</h1>
                    <section class="ms-component-section">
                        <a href="/formpanel" class="btn btn-raised btn-primary">Volver<div class="ripple-container"></div> <a href="javascript:void(0)" class="btn btn-raised btn-success">Conectar nueva cuenta<div class="ripple-container"></div></a>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Fitbit</th>
                              <th>Healthkit</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Datos</td>
                              <td>145 kB</td>
                              <td>2013 kB</td>

                            </tr>
                            <tr>
                              <td>Numero usos en periodo</td>
                              <td>11</td>
                              <td>20</td>
                            </tr>
                            <tr>
                              <td>Precio</td>
                              <td>0,15€</td>
                              <td>0,30€</td>

                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="javascript:void(0)" class="btn btn-raised btn-danger">Desconectar<div class="ripple-container"></div></a></td>
                                <td><a href="javascript:void(0)" class="btn btn-raised btn-danger">Desconectar<div class="ripple-container"></div></a></td>

                            </tr>
                          </tbody>
                        </table>
                    </section>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection