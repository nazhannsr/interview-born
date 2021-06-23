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
            <th scope="row">{{\App\Http\Controllers\DepartmentStaffController::getPaginate()*($staffs->currentPage() -1)+$loop->iteration}}</th>
            <td>
                <img src="{{asset($staff->image)}}" class="img-small" alt="{{$staff->name}}">
            </td>
            <td>{{$staff->name}}</td>
            <td>{{$staff->university->name}}</td>
            <td>
                <form action="{{ route('department.staff.detach', [$university->id, $department->id, $staff->id]) }}" method="post">
                    @csrf
                    <div class="btn-group-xs">
                        <button type="submit" class="btn btn-danger"><i class="glyph-icon icon-trash"></i></button>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $staffs->links()}}