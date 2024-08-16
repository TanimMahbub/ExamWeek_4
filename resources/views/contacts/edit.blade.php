@extends('layouts.master')

@section('content')
<h1>Edit Contact</h1>

<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $contact->name) }}">
    @error('name')<div>{{ $message }}</div>@enderror

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email', $contact->email) }}">
    @error('email')<div>{{ $message }}</div>@enderror

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}">

    <label>Address:</label>
    <input type="text" name="address" value="{{ old('address', $contact->address) }}">

    <button type="submit">Update</button>
</form>

<a href="{{ route('contacts.index') }}">Back to Contacts List</a>
@endsection