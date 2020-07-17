@extends('layout')

@section('content')

<div class="main">
    <div class="new-project">
        <h2>Add new project</h2>
        <form method="POST" action="{{ url('/projects/add') }}">
            @csrf
            <div class="wrapper">
                <label for="title">Name</label>
                <input type="text" class="input" name="title" required>
            </div>

            <div class="wrapper">
                <label for="location">Location</label>
                <input type="text" class="input" name="location">
            </div>

            <div class="wrapper">
                <label for="price">Price</label>
                <input type="text" class="input" name="price">
            </div>

            <div class="wrapper">
                <label for="beds">Beds</label>
                <input type="number" class="input" name="beds">
            </div>

            <div class="wrapper">
                <label for="rooms">Rooms</label>
                <input type="number" class="input" name="rooms">
            </div>

            <div class="wrapper">
                <input type="submit" class="button" value="Add project">
            </div>
        </form>
    </div>
</div>
@endsection
