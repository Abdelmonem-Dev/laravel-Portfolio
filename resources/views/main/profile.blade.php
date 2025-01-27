@extends('layouts.main')
@section('content')
@section('title', 'Profile Page')

<body>
  <div class="container profile-container">
    <!-- Profile Header -->
    <div class="profile-header">
        <img src="{{ asset('storage/images/' . Auth::user()->personal_img) }}"
             alt="Profile Picture"
             class="profile-picture"
             loading="lazy">

        <div class="profile-info">
            <h1 class="profile-name">
                @auth
                    {{ Auth::user()->name }}
                @endauth
            </h1>

            @auth
                @php
                    $fields = json_decode(Auth::user()->field, true); // Decode the JSON data to an array
                @endphp

                @if (!empty($fields))
                    @foreach ($fields as $field)
                        <p class="profile-bio">{{ $field }}</p>
                    @endforeach
                    <p class="profile-bio">{{ Auth::user()->bio }}</p>
                @else
                    <p class="profile-bio">No fields available.</p>
                @endif
            @endauth
        </div>
    </div>

    <!-- Profile Content -->
    <div class="profile-content">
      <!-- Skills Section -->
      <div class="profile-section">
        <h2 class="section-title">Skills</h2>
        <ul class="skills-list">
              <li> HTML </li>
              <li> CSS </li>
              <li> JavaScript </li>
              <li> PHP </li>

        </ul>
      </div>

      <!-- Portfolio Section -->
      <div class="profile-section">
        <h2 class="section-title">Portfolio</h2>
        <div class="portfolio-grid">
            <a href="{{ route('main.portfolio') }}" class="portfolio-link">View Portfolio</a>
        </div>
      </div>

      <!-- Contact Info Section -->
      <div class="profile-section">
        <h2 class="section-title">Contact Info</h2>
        <p><strong>Email:</strong> {{Auth::user()->email}}</p>
        <p><strong>Phone:</strong> Not Provided</p>
        <p><strong>Country:</strong>'Not Provided' </p>
      </div>

      <!-- Education Section -->
      <div class="profile-section">
        <h2 class="section-title">Education</h2>
        <ul class="education-list">
              <li> Education </li>
        </ul>
      </div>

      <!-- Experience Section -->
      <div class="profile-section">
        <h2 class="section-title">Experience</h2>
        <ul class="experience-list">
              <li> Experience </li>
        </ul>
      </div>
    </div>
  </div>
@endsection

@section('styles')

@endsection
