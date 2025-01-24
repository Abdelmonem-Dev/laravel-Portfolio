@extends('layouts.main')
@section('content')
@section('title', 'Portfolio Page')
<style>
  /* General Styles */
  body {
    margin: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
    color: #333;
    line-height: 1.6;
  }

  .container {
    display: flex;
    justify-content: space-between;
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
  }

  .left-content {
    flex: 1;
  }

  h1, h2, h3 {
    font-family: 'Roboto', sans-serif;
    color: #333;
  }

  a {
    text-decoration: none;
    color: #FF5722;
    transition: color 0.3s ease;
  }

  a:hover {
    color: #FF7849;
  }

  /* Header */
  .header {
    background-color: #fff;
    text-align: center;
    padding: 40px 0;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .navbar ul {
    list-style: none;
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 20px;
  }

  .navbar ul li a {
    font-weight: bold;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
  }

  .navbar ul li a:hover {
    background-color: #f0f0f0;
    border-radius: 5px;
  }

  /* About Section */
  .about {
    padding: 50px 0;
    text-align: center;
    background-color: #fff;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  /* Skills Section */
  .skills {
    padding: 50px 0;
    background-color: #fff;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .skills-list .skill {
    margin-bottom: 15px;
  }

  .skill-bar {
    background: #ddd;
    border-radius: 5px;
    overflow: hidden;
    position: relative;
    height: 10px;
  }

  .skill-level {
    background: #FF5722;
    height: 10px;
    transition: width 0.4s ease;
  }

  /* Portfolio Section */
  .portfolio {
    padding: 50px 0;
    text-align: center;
  }

  .portfolio-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
  }

  .portfolio-item {
    background-color: #fff;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .portfolio-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
  }

  .portfolio-item img {
    width: 100%;
    border-radius: 8px;
  }

  /* Contact Section */
  .contact {
    padding: 50px 0;
  }

  .contact form {
    display: grid;
    gap: 15px;
  }

  input, textarea, button {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
  }

  button {
    background-color: #FF5722;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #FF7849;
  }

  /* Footer */
  .footer {
    text-align: center;
    padding: 20px 0;
    background-color: #fff;
    color: #666;
    margin-top: 30px;
  }




  .auth-buttons {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .auth-buttons a {
    padding: 10px;
    background-color: #FF5722;
    color: white;
    border-radius: 5px;
    text-align: center;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .auth-buttons a:hover {
    background-color: #FF7849;
  }
</style>

<header class="header">
  <div class="container">
    @if(Auth::check())
        <h1>{{ Auth::user()->name }}</h1>
    @else
        <h1>Guest</h1>
    @endif

    <p>Web Developer | Designer | Freelancer</p>
    <nav class="navbar">
      <ul>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
      </ul>
      <div class="auth-buttons">
        @auth
        <a href="{{route('auth.logout')}}">Logout</a>
        @else
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
        @endauth

      </div>
    </nav>
  </div>
</header>

<div class="container">
  <div class="left-content">
    <section id="about" class="about">
      <div class="container">
        <h2>About Me</h2>
        <p>
          Hello! I'm John Doe, a passionate and innovative web developer with over 5 years of experience creating modern, user-focused websites and applications. I specialize in designing and building interactive digital solutions that bring ideas to life.
        </p>
      </div>
    </section>

    <section id="skills" class="skills">
      <div class="container">
        <h2>Skills</h2>
        <div class="skills-list">
          <div class="skill">
            <h3>HTML</h3>
            <div class="skill-bar">
              <div class="skill-level" style="width: 95%;"></div>
            </div>
          </div>
          <div class="skill">
            <h3>CSS</h3>
            <div class="skill-bar">
              <div class="skill-level" style="width: 90%;"></div>
            </div>
          </div>
          <div class="skill">
            <h3>JavaScript</h3>
            <div class="skill-bar">
              <div class="skill-level" style="width: 85%;"></div>
            </div>
          </div>
          <div class="skill">
            <h3>React</h3>
            <div class="skill-bar">
              <div class="skill-level" style="width: 80%;"></div>
            </div>
          </div>
          <div class="skill">
            <h3>PHP</h3>
            <div class="skill-bar">
              <div class="skill-level" style="width: 75%;"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="portfolio" class="portfolio">
      <div class="container">
        <h2>Portfolio</h2>
        <div class="portfolio-grid">
          <div class="portfolio-item">
            <img src="project1.jpg" alt="Project 1">
            <h3>Modern E-commerce Site</h3>
          </div>
          <div class="portfolio-item">
            <img src="project2.jpg" alt="Project 2">
            <h3>Responsive Landing Page</h3>
          </div>
          <div class="portfolio-item">
            <img src="project3.jpg" alt="Project 3">
            <h3>Creative Portfolio Website</h3>
          </div>
        </div>
      </div>
    </section>
  </div>






@endsection
