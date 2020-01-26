<table id="example" class="table table-striped table-bordered table-responsive-sm">
    <thead>
    <tr>
        <th>ID</th>
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
{{--            {{dd($post->post_cover)}}--}}
            <tr class="">
                <td class="font-weight-light">{{$post->id}}</td>
                <td class="font-weight-light ">{{Str::limit($post->post_title,50)}}</td>
                <td class="font-weight-light">{{Str::limit($post->post_content,100)}}</td>
                <td class="font-weight-light">{{$post->created_at->diffForhumans()}}</td>
                <td class="font-weight-light">{{$post->post_published ?? ' '}}</td>
                <td class="font-weight-light">{{$post->post_status}}</td>
                <td class="text-sm-left font-weight-light">{{$post->category->name}}</td>
                <td>
                    <a href="{{route('posts.edit',[$post->id])}}"><i class="fas fa-edit"></i></a>
                    <a href="{{route('posts.show',[$post->post_slug])}}"><i class="fas fa-eye"></i></a>
                </td>
            </tr>
        @empty
            <p>Não existem postagem cadastradas !</p>
        @endforelse
    @endif

    </tbody>
</table>
