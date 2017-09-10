@section('socialaccounts')
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
                              <th>Facebook</th>
                              <th>Twitter</th>
                              <th>Instagram</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Datos</td>
                              <td>145 kB</td>
                              <td>213 kB</td>
                              <td>10 kB</td>
                            </tr>
                            <tr>
                              <td>Numero usos en periodo</td>
                              <td>1</td>
                              <td>10</td>
                              <td>0</td>
                            </tr>
                            <tr>
                              <td>Precio</td>
                              <td>0,05€</td>
                              <td>0,10€</td>
                              <td>0,01€</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><a href="javascript:void(0)" class="btn btn-raised btn-danger">Desconectar<div class="ripple-container"></div></a></td>
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