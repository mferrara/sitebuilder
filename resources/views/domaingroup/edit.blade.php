@extends('layouts.app')

@section('title') Edit Domain Group @endsection

@section('content')

    <h1>Edit Domaingroup</h1>
    <hr/>

    {!! Form::model($domaingroup, ['method' => 'PATCH', 'action' => ['DomaingroupController@update', $domaingroup->id], 'class' => 'form-horizontal']) !!}

    <div class="form-group">
                        {!! Form::label('name', 'Name: ', ['class' => 'col-sm-3 control-label']) !!}
                        <div class="col-sm-6">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
    
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection