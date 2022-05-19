<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Đăng ký</h1>
        {!! Form::open(['url'=>'/user/store', 'method' => 'GET']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Tên đăng nhập' )!!}
            {!! Form::text('username', '', ['class'=>'form-control', 'placeholder'=>'Tên đăng nhập'])!!}

        </div>
        <div class="form-group">
            {!! Form::password('password', ['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::email('email','', ['class'=>'form-control', 'placeholder' => 'Email'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('city', 'Thành phố' )!!}
            {!! Form::select('city', [0=>'Chọn',1=>'Hà Nội', 2 => 'Nghệ An', 3=>'TP HCM'], null, ['class'=>'custom-select'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Giới tính')!!}
            <div class="form-check">
                {!! Form::radio('gender', 'male', 'checked', ['class'=>'form-check-input', 'id'=>'male'])!!}
                {!! Form::label('male', 'Nam', '', ['class'=>'form-check-label'])!!}
            </div>
            <div class="form-check">
                {!! Form::radio('gender', 'female', '', ['class'=>'form-check-input', 'id'=>'female'])!!}
                {!! Form::label('female', 'Nữ', '', ['class'=>'form-check-label'])!!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('skills', 'Kỹ năng') !!}
            <div class="form-check">
                {!! Form::checkbox('skills', 'html', '', ['class'=>'form-check-input', 'id'=>'html']) !!}
                {!! Form::label('html', 'HTML', ['class'=>'form-check-label'])!!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'css', '', ['class'=>'form-check-input', 'id'=>'css']) !!}
                {!! Form::label('css', 'CSS', ['class'=>'form-check-label'])!!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'php', '', ['class'=>'form-check-input', 'id'=>'php']) !!}
                {!! Form::label('php', 'PHP', ['class'=>'form-check-label'])!!}
            </div>
        </div>

        <div class="form-group">
            {!! Form::label('birthday', 'Ngày sinh') !!}
            {!! Form::date('birthday', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('intro', 'Giới thiệu bản thân') !!}
            {!! Form::textarea('intro', '', ['class'=>'form-control', 'id'=> 'intro']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Đăng ký', ['name'=>'sm-reg', 'class'=>'btn btn-light']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</body>

</html>