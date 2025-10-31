{{-- resources/views/home.blade.php --}}
@section('title', 'Home • SkillSwap')
@include('partials.header')

<section class="py-5 bg-light hero">
  <div class="container text-center">
    <h1 class="display-5 fw-bold">Learn fast with micro-tutoring</h1>
    <p class="lead text-muted mx-auto mt-3 mb-4" style="max-width: 640px;">
      Book 30–60 minute sessions with peer mentors in programming, data, design, and more.
    </p>
    <a href="{{ route('mentors') }}" class="btn btn-primary btn-lg">Find a Mentor</a>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Peer-to-Peer</h5>
            <p class="card-text">Mentors are students and alumni who’ve done it before and know the shortcuts.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Micro Sessions</h5>
            <p class="card-text">Targeted 30–60 minute help for debugging, interview prep, or project reviews.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Laravel-Ready</h5>
            <p class="card-text">Routes, controllers, Blade partials — structured for clean future expansion.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('partials.footer')
