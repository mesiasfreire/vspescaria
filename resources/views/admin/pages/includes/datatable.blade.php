<table id="pagesTable" class="table table-striped table-bordered table-responsive-sm">
    <thead>
    <tr>
        <th>Titulo</th>
        <th>Data Criação</th>
        <th>Status</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
@if($pages)
    @forelse ($pages as $page)
        <tr class="">
            <td class="font-weight-light ">{{Str::limit($page->page_title ?? '',50)}}</td>
            <td class="font-weight-light">{{$page->created_at->diffForhumans()}}</td>
            <td class="font-weight-light">{{$page->page_actived}}</td>
            <td>
                <a href="{{route('pages.edit',[$page->id])}}"><i class="fas fa-edit"></i></a>
                <a href="{{route('pages.show',[$page->page_slug])}}"><i class="fas fa-eye"></i></a>
            </td>
        </tr>
    @empty
        <p>Não existem paginas cadastradas !</p>
        @endforelse
        @endif

    </tbody>
 </table>
