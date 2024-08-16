@extends('layouts.master')

@section('content')
<h1>Contact Details</h1>

<p>Name: <span class="bold">{{ $contact->name }}</span></p>
<p>Email: <span class="bold">{{ $contact->email }}</span></p>
<p>Phone: <span class="bold">{{ $contact->phone }}</span></p>
<p>Address: <span class="bold">{{ $contact->address }}</span></p>

<a href="{{ route('contacts.index') }}">Back to Contacts List</a>
@endsection