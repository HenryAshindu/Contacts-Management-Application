@extends('Layout')

@section('content')
    <center>
        <h1><b>Edit a Contact</b></h1>

        @if ($errors->any())

        @foreach ($errors->all() as $error)
            <ul>{{$error}}</ul>
        @endforeach  

        @endif
        <div class="look">
            <form action="{{route('contact.update', $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label for="Name">Name</label>
                <input type="text" name="name" value="{{$data->name}}">
            </div>
    
            <div>
                <label for="Gender">Gender</label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Unknown">Unknown
            </div>
    
            <div>
                <label for="Contact">Contact</label>
                <input type="text" name="contact" value="{{$data->contact}}">
            </div>
    
            <div>
                <label for="Old Image">Old Image</label>
                <img width="80px" src="/images/{{$data->image}}">
            </div>
    
            <div>
                <label for="Image">New Passport Image</label>
                <input type="file" name="image">
            </div>
    
            <div>
                <input type="submit" class="btn btn-secondary"  value="Update Contact">
            </div>
      
            </form>
        </div>
       
    </center>
@endsection