<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Sửa sinh viên</h3>
                </div>
            </div>
        </div>

        <form action="{{ route('update',$student->id) }}" method="POST">
            {{ csrf_field() }}

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>name:</strong>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>age:</strong>
                        <input type="text" name="age" value="{{ $student->age }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="gender">gender:</label>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="male"
                                {{ ($student->gender =="male")? "checked" : "" }}>
                            <label claFss="form-check-label" for="gender">
                                male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="female"
                                {{ ($student->gender =="female")? "checked" : "" }}>
                            <label class="form-check-label" for="gender">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>msv:</strong>
                        <input type="text" name="msv" value="{{ $student->msv }}" class="form-control">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-success">Cập nhật</button>
                </div>
            </div>

        </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <a class="btn btn-success" href="{{ route('index') }}">
            <- Danh sách sinh viên </a>
    </div>
</body>

</html>