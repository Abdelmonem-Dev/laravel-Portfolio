@extends('layouts.config')

@section('content')
@section('title', 'Add Picture Page')
    <div class="container">
        <div class="content">
            <h1>Great. Now upload a picture to complete your profile.</h1>
            <p>Help people recognize you at a glance. Upload a clear picture of yourself. You can always change it later; just make sure you choose a good one now.</p>
            <form>
                <div class="form-group">
                    <input id="file-upload" type="file" name="profilePicture" required hidden>
                    <label for="file-upload" class="custom-file-upload">
                        <div class="image-container">
                            <img src="{{ asset('storage/images/uploadProfileImage.jpg') }}" alt="Upload icon">
                        </div>
                   </label>
                    <span id="file-info" class="file-chosen-text">No file chosen</span>
                </div>
                <div class="buttons">
                    <button type="button" class="btn-secondary" onclick="Back()">Back</button>
                    <a href="Write_Bio.html">Skip for now</a>
                    <button type="submit" class="btn-primary">Next</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // document.getElementById('file-upload').addEventListener('change', function(event) {
        //     const file = event.target.files[0];
        //     const fileChosenText = file ? file.name : 'No file chosen';
        //     document.getElementById('file-info').textContent = fileChosenText; // Corrected ID here
        // });

        function Back() {
            window.location.href = "{{route('config.addField')}}";
        }
    </script>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
        form.addEventListener('submit', function(event) {
        event.preventDefault();
        const file = document.getElementById('file-upload').files[0];

        sessionStorage.setItem('profilePicture', file.name); // Store file name (or handle file upload accordingly)

        // Update progress
        updateProgress(75);

        // Go to the next page
        window.location.href = "{{ route('config.addBio') }}";
    });
}
});
    function updateProgress(percentage) {
        document.getElementById('progress-bar').style.width = `${percentage}%`;
    }
</script>
