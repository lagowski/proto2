@section('menuform1')
<div class="col-md-3 ms-paper-menu-left-container">
    <div class="ms-paper-menu-left">
        <h3 class="ms-paper-menu-title">
            <i class="zmdi zmdi-apps"></i>Tus conexiones
            <a role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu" class="withripple">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </h3>
        <div class="panel-menu collapse" id="collapseMenu">
            <ul class="panel-group ms-collapse-nav" id="components-nav" role="tablist" aria-multiselectable="true">
                <li class="panel" role="tab" id="e1">
                <li>
                    <a class="withripple" href="#">
                        <i class="fa fa-arrow-circle-right"></i> Healthkit</a>
                </li>
                <li>
                    <a class="withripple" href="#">
                        <i class="fa fa-arrow-circle-right"></i> Fitbit</a>
                </li>
            </ul>

            <!-- ms-collapse-nav -->
        </div>
    </div>
</div>
<!-- col-md-3 -->
@endsection