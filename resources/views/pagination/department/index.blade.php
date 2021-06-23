<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Num</th>
            <th scope="col">Name</th>
            <th scope="col">Acronym</th>
            <th scope="col">University</th>
            <th scope="col">Staff Count</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
            <tr>
                <th scope="row">{{ \App\Http\Controllers\DepartmentController::getPaginate()*($departments->currentPage()-1) +  $loop->iteration }}</th>
                <td>{{$department->name}}</td>
                <td>{{$department->acronym}}</td>
                <td>{{$department->university->name}}</td>
                <td><a href="{{ route('department.staff.index', [$university->id, $department->id]) }}" class="btn btn-success" title="Staff Management">{{$department->staffs->count()}}</a></td>
                <td>
                    <form action="{{ route('department.destroy', $department->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('department.edit', [$university->id, $department->id]) }}" class="btn btn-info" title="Edit"><i class="glyph-icon icon-pencil"></i></a>
                        <button type="submit" class="btn btn-danger" title="Delete"><i class="glyph-icon icon-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{$departments->links()}}