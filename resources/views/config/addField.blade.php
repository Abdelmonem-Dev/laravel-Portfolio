@extends('layouts.config')

@section('content')
@section('title', 'Add Your Field Page')
    <div class="container">
        <div class="content">
            <h1>What are the main services you offer?</h1>
            <p>Choose at least one service that best describes the type of work you do. This helps us match you with clients who need your unique expertise.</p>
            <form action="data_handler.php" method="post">
                <div class="service-list">
                    <label><input type="checkbox" name="service" value="Web Development"> Web Development</label>
                    <label><input type="checkbox" name="service" value="Graphic Design"> Graphic Design</label>
                    <label><input type="checkbox" name="service" value="SEO"> SEO</label>
                    <label><input type="checkbox" name="service" value="Content Writing"> Content Writing</label>
                    <label><input type="checkbox" name="service" value="Digital Marketing"> Digital Marketing</label>
                    <label><input type="checkbox" name="service" value="Mobile App Development"> Mobile App Development</label>
                    <label><input type="checkbox" name="service" value="Consulting"> Consulting</label>
                    <!-- Add more services as needed -->
                </div>
                <div class="custom-service">
                    <input type="text" id="customService" name="customService" placeholder="Or add your own service" required>
                </div>
                <div class="buttons">
                    <button type="button" class="btn-secondary" onclick="Back()">Back</button>
                    <button type="submit" class="btn-primary">Next</button>
                </div>

            </form>
        </div>
    </div>
    <script>
        document.querySelectorAll('.service-list input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                const input = document.getElementById('customService');
                const checkedCheckboxes = Array.from(document.querySelectorAll('.service-list input[type="checkbox"]:checked'));

                if (checkedCheckboxes.length > 3) {
                    checkbox.checked = false; // Uncheck the current checkbox if more than 3 are selected
                    alert('You can select a maximum of 3 services.');
                    return;
                }

                let services = checkedCheckboxes.map(checkbox => checkbox.value);
                input.value = services.join(', ');
            });
        });
        function Back() {
            window.location.href = "{{route('config.addName')}}";
        }
    </script>

<script>
    document.querySelector('form').addEventListener('submit', function(event) {
        event.preventDefault();
        const selectedServices = Array.from(document.querySelectorAll('input[name="service"]:checked'))
                                      .map(checkbox => checkbox.value);

        sessionStorage.setItem('selectedServices', JSON.stringify(selectedServices));

        // Update progress
        updateProgress(50);

        // Go to the next page
        window.location.href = "{{route('config.addPicture')}}"; // Replace with actual next page URL
    });

    function updateProgress(percentage) {
        document.getElementById('progress-bar').style.width = `${percentage}%`;
    }
</script>
