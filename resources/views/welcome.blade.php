@extends('welcome')

@section('content')
<form method="POST" action="/gifts">
    @csrf
    <label for="gift_name">Gift Name:</label>
    <input type="text" id="gift_name" name="gift_name" required>

    <label for="recipient">Recipient:</label>
    <input type="text" id="recipient" name="recipient" required>

    <button type="submit">Send Gift</button>
</form>
@endsection
