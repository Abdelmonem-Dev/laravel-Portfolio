<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <title>@yield('title', 'Default Title')</title>
    @vite(['resources/css/auth.css', 'resources/js/auth.js'])
</head>
<style>
    /* Style for the "Show/Hide Themes" button */
.theme-toggle-button {
    background-color: #612eee; /* Button background color */
    color: #f3f3f3; /* Button text color */
    font-size: 16px; /* Font size */
    padding: 10px 20px; /* Padding for better click area */
    border: none; /* Remove border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer; /* Pointer cursor on hover */
    position: fixed; /* Fix the button at the top of the page */
    top: 20px; /* Distance from the top */
    left: 20px; /* Distance from the left */
    z-index: 1000; /* Make sure the button is on top of other elements */
    transition: background-color 0.3s ease; /* Smooth transition for background color */
}

.theme-toggle-button:hover {
    background-color: rgb(37, 46, 229); /* Darker background color on hover */
}

.theme-toggle-button:focus {
    outline: none; /* Remove focus outline */
}

</style>
<body>

    {{-- <div class="theme-buttons" style="display:flex;" >

            <button  onclick="changeTheme('default')">Default</button>
            <button  onclick="changeTheme('oceanic')">Oceanic</button>
            <button  onclick="changeTheme('sunset')">Sunset Glow</button>
            <button  onclick="changeTheme('forest')">Forest Mist</button>
            <button  onclick="changeTheme('dark')">Dark Theme</button>
            <button  onclick="changeTheme('midnight')">Midnight Blue</button>
            <button  onclick="changeTheme('lavender')">Soft Lavender</button>
            <button  onclick="changeTheme('electric')">Electric Purple</button>
    </div> --}}
    <!-- Content from other templates -->
  {{-- Success Message --}}
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

{{-- Error Message --}}
@if(session('error'))
<div class="alert alert-danger" style="color:red; font-size: 12px;">{{ session('error') }}</div>
@endif

    @yield('content')

        <button class="theme-toggle-button" onclick="toggleThemeButtons()">Show/Hide Themes</button>

</body>
</html>
<script>
     function toggleThemeButtons() {
            const divThemeButtons = document.querySelector('.theme-buttons');
            // Toggle the display property between block (visible) and none (hidden)
            if (divThemeButtons.style.display === "none") {
                divThemeButtons.style.display = "flex";
            } else {
                divThemeButtons.style.display = "none";
            }
        }

    function changeTheme(theme) {
    const themes = {
        default: `
            :root {
                --primary-color: #6C63FF;
                --primary-hover-color: #5754d9;
                --background-color: #f5f5f5;
                --text-color: #4A4A4A;
                --input-border-color: #ddd;
                --input-hover-border-color: #6C63FF;
                --input-disabled-bg-color: #f0f0f0;
                --input-disabled-border-color: #ccc;
                --input-disabled-text-color: #999;
                --button-disabled-bg-color: #ccc;
                --button-disabled-text-color: #666;
            }`,
        oceanic: `
            :root {
                --primary-color: #0077b6;
                --primary-hover-color: #005f8a;
                --background-color: #caf0f8;
                --text-color: #023047;
                --input-border-color: #90e0ef;
                --input-hover-border-color: #0077b6;
                --input-disabled-bg-color: #d6eefc;
                --input-disabled-border-color: #8ecae6;
                --input-disabled-text-color: #6c757d;
                --button-disabled-bg-color: #b0bec5;
                --button-disabled-text-color: #546e7a;
            }`,
        sunset: `
            :root {
                --primary-color: #ff6f61;
                --primary-hover-color: #e55a4d;
                --background-color: #fff1e6;
                --text-color: #5c3c26;
                --input-border-color: #ffd6ba;
                --input-hover-border-color: #ff6f61;
                --input-disabled-bg-color: #ffe5d1;
                --input-disabled-border-color: #f4a261;
                --input-disabled-text-color: #8d6e63;
                --button-disabled-bg-color: #d8c3a5;
                --button-disabled-text-color: #6d4c41;
            }`,
        forest: `
            :root {
                --primary-color: #4caf50;
                --primary-hover-color: #388e3c;
                --background-color: #e8f5e9;
                --text-color: #2e7d32;
                --input-border-color: #a5d6a7;
                --input-hover-border-color: #4caf50;
                --input-disabled-bg-color: #c8e6c9;
                --input-disabled-border-color: #81c784;
                --input-disabled-text-color: #6c757d;
                --button-disabled-bg-color: #a8c4a2;
                --button-disabled-text-color: #546e7a;
            }`,
        dark: `
            :root {
                --primary-color: #ff5722;
                --primary-hover-color: #e64a19;
                --background-color: #121212;
                --text-color: #e0e0e0;
                --input-border-color: #333;
                --input-hover-border-color: #ff5722;
                --input-disabled-bg-color: #1e1e1e;
                --input-disabled-border-color: #555;
                --input-disabled-text-color: #888;
                --button-disabled-bg-color: #555;
                --button-disabled-text-color: #888;
            }`,
        midnight: `
            :root {
                --primary-color: #1a237e;
                --primary-hover-color: #0d47a1;
                --background-color: #121212;
                --text-color: #e1e1e1;
                --input-border-color: #283593;
                --input-hover-border-color: #1a237e;
                --input-disabled-bg-color: #424242;
                --input-disabled-border-color: #616161;
                --input-disabled-text-color: #9e9e9e;
                --button-disabled-bg-color: #616161;
                --button-disabled-text-color: #9e9e9e;
            }`,
        lavender: `
            :root {
                --primary-color: #b39ddb;
                --primary-hover-color: #9fa8da;
                --background-color: #f3e5f5;
                --text-color: #4a148c;
                --input-border-color: #d1c4e9;
                --input-hover-border-color: #b39ddb;
                --input-disabled-bg-color: #e8eaf6;
                --input-disabled-border-color: #9fa8da;
                --input-disabled-text-color: #757575;
                --button-disabled-bg-color: #9fa8da;
                --button-disabled-text-color: #424242;
            }`,
        electric: `
            :root {
                --primary-color: #9c27b0;
                --primary-hover-color: #8e24aa;
                --background-color: #121212;
                --text-color: #e0e0e0;
                --input-border-color: #9c27b0;
                --input-hover-border-color: #8e24aa;
                --input-disabled-bg-color: #1b1b1b;
                --input-disabled-border-color: #673ab7;
                --input-disabled-text-color: #9e9e9e;
                --button-disabled-bg-color: #673ab7;
                --button-disabled-text-color: #9e9e9e;
            }`
    };
 // Create a new <style> element to apply the theme
    const styleElement = document.createElement('style');
        styleElement.textContent = themes[theme];

        // Remove any existing theme <style> tag
        const existingStyle = document.getElementById('theme-style');
        if (existingStyle) {
            existingStyle.remove();
        }

        // Set an ID for the new <style> tag
        styleElement.id = 'theme-style';

        // Append the new <style> tag to the <head>
        document.head.appendChild(styleElement);
    }
</script>
