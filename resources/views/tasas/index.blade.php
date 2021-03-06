@extends('layout')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-12">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Tasas de Aporte</h3>
                    </div>
                    <div class="col-md-4">
                        <p class="text-right">
                            <a href="{!! url('tasa/' . $aporTasa->id . '/edit') !!}" class="btn btn-raised btn-success">Actualizar Aportes de {!! $date !!}</a>
                        </p>
                    </div>
                </div> 
            </div>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Despliegue de Tasas de Aporte</h3>
                </div>
                <div class="panel-body">
                    <div class="row"><p>
                        <div class="col-md-12">
                            <table class="table table-striped table-hover" id="afiliados-table">
                                <thead>

                                    <tr class="success">
                                        <th rowspan="2">Año</th>
                                        <th rowspan="2">Mes</th>
                                        <th style="text-align:center;" colspan="3">Sector Activo</th>
                                        <th style="text-align:center;" colspan="4">Sector Pasivo</th>
                                    </tr>
                                    <tr class="success">
                                        <th>Aporte Muserpol</th>
                                        <th>Fondo de Retiro</th>
                                        <th>Seguro de Vida</th>
                                        <th>Aporte Muserpol</th>
                                        <th>Fondo de Retiro</th>
                                        <th>Seguro de Vida</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
$(function() {
    $('#afiliados-table').DataTable({
        dom: '<"top">t<"bottom"p>',
        processing: true,
        serverSide: true,
        scrollX: true,
        pageLength: 30,
        ajax: '{!! route('getTasa') !!}',
        order: [0, "desc"],
        columns: [
            { data: 'gest', sWidth: '6%' },
            { data: 'mes', sWidth: '10%', bSortable: false },
            { data: 'apor_a', name: 'apor_a', sWidth: '12%', sClass: "text-center", bSortable: false },
            { data: 'apor_fr_a', sWidth: '12%', sClass: "text-center", bSortable: false },
            { data: 'apor_sv_a', sWidth: '12%', sClass: "text-center", bSortable: false },
            { data: 'apor_p', sWidth: '12%', sClass: "text-center", bSortable: false },
            { data: 'apor_fr_p', sWidth: '12%', sClass: "text-center", bSortable: false },
            { data: 'apor_sv_p', sWidth: '12%', sClass: "text-center", bSortable: false },
        ]
    });
});
</script>
@endpush
