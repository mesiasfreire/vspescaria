@if(isset($page))
        {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method'=>'put']) !!}
    @else
        {!! Form::open(['route'=>'pages.store']) !!}
    @endif
    <div class="row">

        <div class="col-md-8">
            <div class="form-group">
                {{ Form::label('page_title', 'Título') }}
                {{ Form::text('page_title', $page->page_title ?? null, ['class' => 'form-control', 'placeholder' => 'Título da página']) }}
                @error('page_title')
                <span class="help-block alert-error">{{$message}}</span>
                @enderror
            </div>

            <div class="form-group">
                {{ Form::button('Cancelar', ['class' => 'btn btn-danger float-left']) }}
                {{ Form::submit('Cadastrar', ['class' => 'btn btn-primary float-right']) }}
            </div>
        </div>
    </div>
    {!! Form::close() !!}

