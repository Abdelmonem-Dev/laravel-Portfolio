@extends('layouts.config')

@section('content')
@section('title', 'Add Full Name Page')

<div class="default-container">
    <h1 class="default-title">Please Enter Full Name:</h1>
    <form class="default-form">

        <input type="text" name="first_name" placeholder="Fisrt Name" class="default-input" required>
        <input type="text" name="second_name" placeholder="Second Name" class="default-input" required>
        <input type="text" name="third_name" placeholder="Third Name" class="default-input" required>
        <input type="text" name="last_name" placeholder="Last Name" class="default-input" required>
        <div class="buttons">
            <a href="#">Skip for now</a>
            <button type="submit" class="btn-primary">Next</button>
        </div>
    </form>
</div>

@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

        const firstName = document.querySelector('[name="first_name"]').value;
        const secondName = document.querySelector('[name="second_name"]').value;
        const thirdName = document.querySelector('[name="third_name"]').value;
        const lastName = document.querySelector('[name="last_name"]').value;

        sessionStorage.setItem('firstName', firstName);
        sessionStorage.setItem('secondName', secondName);
        sessionStorage.setItem('thirdName', thirdName);
        sessionStorage.setItem('lastName', lastName);

        // Update progress
        updateProgress(25);

        // Go to the next page
        window.location.href = "{{ route('config.addField') }}"; // Replace with your actual route name
    });
        }
});
    function updateProgress(percentage) {
        document.getElementById('progress-bar').style.width = `${percentage}%`;
    }
</script>
