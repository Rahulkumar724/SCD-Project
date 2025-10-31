{{-- resources/views/partials/header.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>@yield('title','SkillSwap')</title>

  {{-- Bootstrap CSS --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous">
  {{-- Custom CSS --}}
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('home') }}">SkillSwap</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
              aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="mainNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('mentors') ? 'active' : '' }}" href="{{ route('mentors') }}">Mentors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact.show') ? 'active' : '' }}" href="{{ route('contact.show') }}">Contact</a>
          </li>
          <li class="nav-item ms-lg-3">
            <a class="btn btn-primary" href="{{ route('mentors') }}">Book a Session</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
