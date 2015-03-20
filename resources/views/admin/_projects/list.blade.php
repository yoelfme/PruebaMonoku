@extends('admin.list.list')

@section('list-title')
    Proyectos
@stop

@section('button-create-text')
    Nuevo Proyecto
@stop

@section('list-content')
    @parent

@section('list-content-columns')
    <th class="text-center" style="width: 50px;">#</th>
    <th>Año</th>
    <th>Sector</th>
    <th>Unidad Ejecutora</th>
    <th>Fuente</th>
    <th>Descripcion</th>
    <th>Compromisos</th>
    <th>Obligaciones</th>
    <th>Pagos</th>
    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
@stop

@section('list-content-values')
    @foreach($data as $key => $value)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ $value->year }}</td>
            <td>{{ $value->sector->description }}</td>
            <td>{{ $value->unit->description }}</td>
            <td>{{ $value->source->description }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->liabilities }}</td>
            <td>{{ $value->liabilities2 }}</td>
            <td>{{ $value->payments }}</td>
            <td class="text-center">
                @if(\Auth::user()->type == "admin")
                    <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" title="Editar" class="btn btn-effect-ripple btn-xs btn-success edit"><i class="fa fa-pencil"></i></a>
                    <a href="#" data-id="{{ $value->id }}" data-toggle="tooltip" title="Eliminar" class="btn btn-effect-ripple btn-xs btn-danger delete"><i class="fa fa-times"></i></a>
                @endif
            </td>
        </tr>
    @endforeach
@stop

@include('admin._projects.create',compact('fields'))

<div id="div-modal"></div>
<script>
    $(function(){
        CRUD.url_base = 'projects';
        Helper.rules = {
            'code':{ required : true },
            'description':{ required : true }
        };
        Helper.messages = {
            'code':{ required : 'Debe ingresar un codigo' },
            'description':{ required : 'Debe ingresar un nombre' }
        }
        Helper.validate('#form-create');
    })
</script>
{!! Html::script('app/helpers/crud_operate.js') !!}
@stop