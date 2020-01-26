@if(isset($post))
    {!! Form::model($post, ['route' => ['posts.update', $post->id],'files'=>true, 'method'=>'put']) !!}
@else
    {!! Form::open(['route'=>'posts.store','files'=>true]) !!}
@endif
<div class="row">
    <div class="col-md-4">
        @isset($post->post_cover)
            <img src="{{asset('images/'.$post->post_cover) }}" alt="" width="150">
        @endisset

        <div class="form-group">
            {{ Form::label('post_cover', 'Capa', ['class' => 'awesome']) }}
            {{ Form::file('post_cover', ['class' => 'form-control', 'placeholder' => 'Adicionar a capa da postagem']) }}

        </div>
        <div class="form-group">
            {{ Form::label('post_title', 'Título') }}
            {{ Form::text('post_title', $post->post_title ?? null, ['class' => 'form-control', 'placeholder' => 'Título da postagem']) }}
        </div>

        <div class="form-group">
            {{ Form::label('post_subtitle', 'Subtítulo') }}
            {{ Form::text('post_subtitle', $post->post_subtitle ?? null, ['class' => 'form-control', 'placeholder' => 'Subtítulo da postagem']) }}
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('category', 'Categoria') }}
                    {{Form::select('category_id',$categories, $post->category->id ?? null, ['placeholder' => 'Escolha uma Categoria','class'=>'form-control'])}}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('post_status', 'Status') }}
                    {{Form::select('post_status',$post_status, $post->post_status_original ?? null, ['placeholder' => 'Escolha Status','class'=>'form-control'])}}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        {{Form::checkbox('post_destaque',$post->destaque ?? null, false,['class'=>'custom-control-input'])}}
                        {{Form::label('post_destaque','Destaque',['class'=>'custom-control-label'])}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="form-group">
            {{ Form::label('post_content', 'Conteúdo') }}
            {{ Form::textarea('post_content', $post->post_content ?? null, ['class' => 'form-control', 'placeholder' => 'Conteúdo da postagem', 'rows' => 40]) }}
        </div>

    </div>
</div>
<div class="form-group">
    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary']) }}
    {{ Form::submit('Postar', ['class' => 'btn bg-gradient-primary float-right']) }}
</div>
{!! Form::close() !!}

