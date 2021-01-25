@extends("layouts.base")

@section("content")
    @foreach($contacts as $contact)
    <p>{{$contact->first_name . ' ' . $contact->last_name}}</p>
    @endforeach
@endsection
