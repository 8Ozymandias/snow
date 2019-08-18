@extends('layout')

@section('content')
    <h1>Students</h1>  

    @foreach ($students as $student)

        <li>{{ $student->all()}}</li>

    @endforeach

</body>
</html>

@endsection