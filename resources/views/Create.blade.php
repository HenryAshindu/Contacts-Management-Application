@extends('Layout')

@section('content')
    <center>
       
        <h1><b>Create a Contact</b></h1>
        <div class="look">
            <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div>
                    <label for="Name">Name</label>
                    <input type="text" name="name">
                </div>
        
                <div>
                    <label for="Gender">Gender:</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Unknown">Unknown
                </div>
        
                <div>
                    <label for="Contact">Contact</label>
                    <input type="text" name="contact">
                </div>
        
                <div>
                    <label for="Image">Passport Image</label>
                    <input type="file" name="image">
                </div>
        
                <div>
                    <input type="submit" class="btn btn-secondary" value="Create Contact">
                </div>
          
                </form>
            </div>
    </center>
@endsection