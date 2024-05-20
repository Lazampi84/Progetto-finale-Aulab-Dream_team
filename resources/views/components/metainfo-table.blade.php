<table class="table table-striped table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome tag</th>
            <th scope="col">Articoli collegati</th>
            <th scope="col">Aggiorna</th>
            <th scope="col">Cancella</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($metaInfos as $metaInfo)
        <tr>
            <th scope="row">{{$metaInfo->id}}</th>
            <td>{{$metaInfo->name}}</td>
            <td>{{count($metaInfo->articles)}}</td>
            @if ($metaType == 'tags')
            <td>
                <form action="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
                    <button type="submit" class="btn mybtn">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn mybtn">Elimina</button>
                </form>
            </td>
            @endif

            
            @if ($metaType == 'categories')
            <td>
                <form action="{{route('admin.editCategory', ['category'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" placeholder="Nuovo nome categoria" class="form-control w-50 d-inline">
                    <button type="submit" class="btn mybtn">Aggiorna</button>
                </form>
            </td>
            <td>
                <form action="{{route('admin.deleteCategory', ['category'=>$metaInfo])}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn mybtn">Elimina</button>
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>


{{-- 
@foreach ($metaInfos as $metaInfo)
<tr>
    <th scope="row">{{$metaInfo->id}}</th>
    <td>{{$metaInfo->name}}</td>
    <td>{{count($metaInfo->articles)}}</td>
    @if ($metaType == 'tags')
    <td>
        <form action="{{route('admin.editTag', ['tag'=>$metaInfo])}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="name" placeholder="Nuovo nome tag" class="form-control w-50 d-inline">
            <button type="submit" class="btn mybtn">Aggiorna</button>
        </form>
    </td>
    <td>
        <form action="{{route('admin.deleteTag', ['tag'=>$metaInfo])}}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn mybtn">Elimina</button>
        </form>
    </td>
    @endif
</tr>
@endforeach --}}
