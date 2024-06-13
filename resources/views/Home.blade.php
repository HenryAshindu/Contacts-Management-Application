@extends('Layout')

@section('content')
<center><h1><b><u>CONTACT MANAGEMENT SYSTEM</u></b></h1></center>

<p>Welcome to the Kazi Mtaani Initiative by the Kenyan Government. Applications for the 2024/2025 cohort is currently ongoing and we would encourage everyone to apply. Persons with disability are also encouraged to apply.
   
    At Kazi Mtaani we believe Kazi ni Kazi.
     </p>
    <center>
        <div>
            <p>To apply, kindly click <a href="{{route('contact.create')}}" class="link-primary">Here</a></p>
            <p>To view the groups, click <a href="{{route('contact.group')}}" class="link-info">Here</a></p>
        </div>

        <div>
            <table class="table table-bordered table-dark">
                <tr>
                    <div>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>GENDER</th>
                        <th>CONTACT</th>
                        <th>IMAGE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </div>
                </tr>

                <tr>
                    @foreach ($contacts as $contact)
                       <div>
                        <tr>
                            <td>{{$contact->id}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->gender}}</td>
                            <td>{{$contact->contact}}</td>
                            <td><img width="80px" src="images/{{$contact->image}}"></td>
                            <td><a href="{{route('contact.edit', $contact->id)}}" class="btn btn-primary">Edit</a></td>
                            <td><a href="{{route('contact.delete', $contact->id)}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                       </div> 
                    @endforeach
                </tr>

            </table>
        </div>
    </center>
@endsection


