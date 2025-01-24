@extends('layouts.config')

@section('content')
@section('title', 'Question One Page')
    <div class="container">
        <div class="content">
            <h1>A few quick questions: first, have you Worked before?</h1>
            <p>This lets us know how much help to give you along the way. We won’t share your answer with anyone else, including potential clients.</p>
            <form id="experienceForm" action="data_handler.php" method="post">
                <div class="option">
                    <input type="radio" id="new" name="experience" value="new" onchange="enableNext()">
                    <label for="new">I am brand new to this</label>
                </div>
                <div class="option">
                    <input type="radio" id="some" name="experience" value="some" onchange="enableNext()">
                    <label for="some">I have some experience</label>
                </div>
                <div class="option">
                    <input type="radio" id="expert" name="experience" value="expert" onchange="enableNext()">
                    <label for="expert">I am an expert</label>
                </div>
                <div class="buttons">
                    <button type="button" class="btn-secondary" onclick="Back()">Back</button>
                    <a href="Main_Services.html">Skip for now</a>
                    <button type="submit" class="btn-primary" id="nextButton" disabled>Next</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function enableNext() {
            document.getElementById('nextButton').disabled = false;
        }

        function Back() {
            window.location.href = "UserName.html";
        }
        document.getElementById('experienceForm').addEventListener('submit', function(event) {
            if (!document.querySelector('input[name="experience"]:checked')) {
                event.preventDefault();
                alert("Please select an option before proceeding.");
            }
        });
    </script>
</body>
</html>
