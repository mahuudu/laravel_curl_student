<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Đăng ký</title>
    <style>
    .container {
        max-width: 600px;
    }

    dl,
    ol,
    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form method="POST" action="{{ route('insert') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="age">age:</label>
                <input type="text" class="form-control" id="age" name="age">
            </div>
            <div class="form-group">
                <label for="gender">gender:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
                    <label claFss="form-check-label" for="gender">
                        male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="msv">msv:</label>
                <input type="text" class="form-control" id="msv" name="msv">
            </div>
            <div class="form-group">
                <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
            </div>
            <a class="btn btn-success" href="{{ route('index') }}"><- Danh sách sinh viên
            </a>
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
    </div>

</body>

</html>