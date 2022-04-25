<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>   
<body>
	<div class="container">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Danh sách sinh viên</h3>
            </div>
            <div class="pull-right" style="margin-top: 20px;">
                <a class="btn btn-success" href="{{ route('create') }}">Thêm sinh viên
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>age</th>
            <th>gender</th>
            <th>msv</th>
            <th width="280px">Hành động</th>
        </tr>
        @foreach ($student as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->age }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->msv }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{ route('edit',$data->id) }}">Edit</a>

                        @csrf
                    	@method('DELETE')

                    	<a class="btn btn-danger" href="{{ route('delete',$data->id) }}">Xóa</a>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>