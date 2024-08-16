@extends('layouts.master')

@section('content')
<h1>Create New Contact</h1>

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf
    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')<div>{{ $message }}</div>@enderror

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')<div>{{ $message }}</div>@enderror

    <label>Phone:</label>
    <input type="text" name="phone" value="{{ old('phone') }}">

    <label>Address:</label>
    <input type="text" name="address" value="{{ old('address') }}">

    <button type="submit">Create</button>
</form>

<a href="{{ route('contacts.index') }}">Back to Contacts List</a>
@endsection