@extends('admin.layout.modal')

@section('modal-title')
    Eliminar Proyecto
@stop

@section('modal-id')
    "modal-delete"
@stop

@section('modal-body')
    {!! Form::open(['route' => ['projects.destroy', $data->id],'id'=>'form-delete','method' => 'DELETE','class'=>'form-horizontal']) !!}
    ¿ Desea eliminar el registro ?
    {!! Form::close() !!}
@stop

@section('modal-footer')
    <button id="btn-delete" type="button" class="btn btn-effect-ripple btn-primary">Guardar</button>
    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cancelar</button>
@stop