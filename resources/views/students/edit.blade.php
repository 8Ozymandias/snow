@extends('layout')


@section('content')
    <h1 class="firstname">Edit Application</h1>    

    <form method="POST" action="/students/{{ $student->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

        <div class="field">
            <label class="label" for="firstname">First Name</label>
           
            <div class="control">
                <input type="text" class="input" name="firstname" placeholder="First Name" value="{{ $student->firstname }}">
            </div>
        </div>

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

        <div class="field">
            <label class="label" for=""description">Description</label>
    
            <div class="control">
                <textarea class="textarea" name="description">{{ $student->description }}</textarea>
            </div>
        </div>    

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update Application</button>
            </div>    
        </div>   

<!-- |||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->
    
    </form>
@endsection