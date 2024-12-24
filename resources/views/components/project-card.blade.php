@props(['image', 'title', 'description', 'github'])
<div class="project-card">
    <img src="{{ asset("images/projects/$image")}}" alt="Project 1 Screenshot" class="project-image" />
    <div class="project-info">
      <h3 class="project-title">{{ $title }}</h3>
      <p class="project-description">{{ $description }}</p>
      <a href="{{$github}}" target="_blank" class="project-link">View on GitHub</a>
    </div>
  </div>
