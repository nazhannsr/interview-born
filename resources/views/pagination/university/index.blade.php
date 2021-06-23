<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Num</th>
            <th scope="col">Name</th>
            <th scope="col">Acronym</th>
            <th scope="col">Rating</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($universities as $key=>$university)
        <tr>
            <th scope="row">{{\App\Http\Controllers\UniversityController::getPaginate()*($universities->currentPage()-1) + $loop->iteration}}</th>
            <td>{{$university->name}}</td>
            <td>{{$university->acronym}}</td>
            <td>{{$university->rating}}</td>
            <td>
                    <img src="{{asset('images/'.$university->image)}}" class="img-small" title="{{$university->acronym}}" alt="{{$university->acronym}}">
            </td>
            <td>
                <form action="{{route('university.destroy', $university->id)}}" method="post">
                    <div class="btn-group-sm">
                        @csrf
                        @method('DELETE')
                        <a href="{{route('university.edit', $university->id)}}" class="btn btn-info" title="Edit"><i class="glyph-icon icon-pencil"></i></a>
                        <a href="{{route('department.index', $university->id) }}" class="btn btn-warning">Department Manage</a>
                        <button class="btn btn-danger" title="Delete"><i class="glyph-icon icon-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $universities->links() !!}