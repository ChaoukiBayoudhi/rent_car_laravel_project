@extends('base')
@section('main')
<div class ="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add Contact</h1>
    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
    <form method="post" action="{{ route('contacts.store') }}">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" class="form-control"/>
        </div>
    <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="job">Job</label>
            <input type="text" name="job" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control"/>
        </div>
        <br/>
        <input type="submit" class="btn-primary-outline" value="Add">
        {{--  <button type="submit" class="btn-primary-outline">Add</button>  --}}

    </form>
    
</div>
@endsection