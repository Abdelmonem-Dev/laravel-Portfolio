@extends('layouts.config')

@section('content')
@section('title', 'Add Bio Page')
    <div class="container">
        <div class="content">
            <h1>Great. Now write a bio to tell the world about yourself.</h1>
            <p>Help people get to know you at a glance. What work do you do best? Tell them clearly, using paragraphs or bullet points. You can always edit later; just make sure you proofread now.</p>
            <form action="data_handler.php" method="post">
                <textarea id="bio" name="bio" rows="5" placeholder="Enter your top skills, experiences, and interests. This is one of the first things clients will see on your profile." required></textarea>
                <div class="buttons">
                    <button type="button" class="btn-secondary" onclick="Back()">Back</button>
                    <a href="Write_Bio.html">Skip for now</a>
                    <button type="submit" class="btn-primary" >Next</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>

     function Back() {
            window.location.href = "{{route('config.addPicture')}}";
        }

</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        
        if (form) {
            form.addEventListener('submit', function(event) {
        event.preventDefault();

        const bio = document.getElementById('bio').value;
        sessionStorage.setItem('bio', bio);

        // Send all data at once
        const formData = new FormData();
        formData.append('firstName', sessionStorage.getItem('firstName'));
        formData.append('secondName', sessionStorage.getItem('secondName'));
        formData.append('thirdName', sessionStorage.getItem('thirdName'));
        formData.append('lastName', sessionStorage.getItem('lastName'));
        formData.append('selectedServices', sessionStorage.getItem('selectedServices'));
        formData.append('profilePicture', sessionStorage.getItem('profilePicture'));
        formData.append('bio', sessionStorage.getItem('bio'));

        // Submit the form data
        fetch("{{ route('auth.completeProfile') }}", { // Blade template interpolation
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            })
        .then(response => response.json())
        .then(data => {
            // Handle the response
            console.log('Success:', data);
            window.location.href = "{{route('portfolio')}}"; // Redirect to completion page
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
}
});
    function updateProgress(percentage) {
        document.getElementById('progress-bar').style.width = `${percentage}%`;
    }
</script>
