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










</style>



<div class="container">
  <div class="left-content">
    <section id="about" class="about">
      <div class="container">
        <h2>About Me</h2>
        <p>
            @auth
                            {{ Auth::user()->bio }}
            @endauth
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
