<table id="example" class="table table-striped table-bordered table-responsive-sm">
    <thead>
    <tr>
        <th>Capa</th>
        <th>Titulo</th>
        <th>Conteúdo</th>
        <th>Data Criação</th>
        <th>Data Publicação</th>
        <th>Status</th>
        <th>Categoria</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    @if($posts)
        @forelse ($posts as $post)
            <tr class="">
                <td class="font-weight-light"><img src="{{asset('images/'.$post->photo->file)}}" alt="" height="128" width="128"></td>
                <td class="font-weight-light ">{{Str::limit($post->post_title,50)}}</td>
                <td class="font-weight-light">{{Str::limit($post->post_content,100)}}</td>
                <td class="font-weight-light">{{$post->created_at->diffForhumans()}}</td>
                <td class="font-weight-light">{{$post->post_published ?? ' '}}</td>
                <td class="font-weight-light">{{$post->post_status}}</td>
                <td class="text-sm-left font-weight-light">{{$post->category->name}}</td>
                <td>
                    <a href="{{route('post.edit',[$post->id])}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('post.show',[$post->post_slug])}}"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
        @empty
            <p>Não existem postagem cadastradas !</p>
        @endforelse
    @endif

    </tbody>
</table>
