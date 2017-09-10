@section('debit')
    <div class="material-background"></div>
    <div class="container container-full">
        <div class="ms-paper">
            <div class="row">



                @yield('menuform1')


                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        ...
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        ...
                    </tr>
                    ...
                    </tbody>
                </table>

                <!-- Inside Card -->
                <div class="card">
                    <table class="table table-no-border">
                        ...
                    </table>
                </div>

                <div class="card">
                    <table class="table table-no-border table-striped">
                        ...
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection