@extends('base')
@section('main')
<div class="col-sm-12">
    @if (session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
</div>

    <div class ="row">
        <div class="col-sm-12">
            <h1 class ="display-3">List of Contacts</h1>
            <div>
                <a style="margin: 20px;" href="{{ route('contacts.create') }} class="btn btn-primary>New Contact</a>
            </div>
            <table class="table-striped table">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Job</td>
                    <td>Country</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->first_name }}</td>
                    <td>{{ $contact->last_name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->job }}</td>
                    <td>{{ $contact->country }}</td>
                    <td>
                        <a href="{{ route('contacts.edit',$contact->id) }} class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('contacts.destroy',$contact->id)}}"method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach
            </tbody>
        </table>
        </div>

    </div>
@endsection