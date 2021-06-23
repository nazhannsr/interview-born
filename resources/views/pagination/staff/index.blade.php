<table class="table table-striped">
    <thead>
        <th scope="col">Num</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">University</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
        @foreach ($staffs as $staff)
        <tr>
            <th scope="row">{{\App\Http\Controllers\StaffController::getPaginate()*($staffs->currentPage() -1)+$loop->iteration}}</th>
            <td>
                <img src="{{asset($staff->image)}}" class="img-small" title="{{$staff->name}}" alt="{{$staff->name}}">
            </td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->university->name}}</td>
            <td>
                <form action="{{ route('staff.destroy', $staff->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="btn-group-xs">
                        <a href="{{ route('staff.edit', $staff->id) }}" class="btn btn-info" title="Edit"><i class="glyph-icon icon-pencil"></i></a>
                        <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure? All data linked to this item will be deleted!')"><i class="glyph-icon icon-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $staffs->links()}}