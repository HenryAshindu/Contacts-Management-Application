@extends('Layout')

@section('content')
<center>
    <h1><b>Available Groups</b></h1>
</center>

<a href="{{route('contact.home')}}"> Back to Homepage</a>
    <hr>

    <ol>
    @foreach ($gender as $gender=>$contacts)
        <b>{{$gender}}</b>
        <ol>
            @foreach ($contacts as $contact)
                <li>{{$contact->name}}</li>
            @endforeach
        </ol>
    @endforeach
    </ol>
    </hr>   

@endsection