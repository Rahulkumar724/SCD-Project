{{-- resources/views/mentors.blade.php --}}
@section('title', 'Mentors • SkillSwap')
@include('partials.header')

<section class="py-5">
  <div class="container">
    <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between mb-4">
      <h2 class="mb-2 mb-md-0">Mentors</h2>
      <input id="mentorSearch" type="search" class="form-control w-100 w-md-50" placeholder="Search by skill or name...">
    </div>

    @if(session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="row g-4" id="mentorGrid">
      @forelse($mentors as $m)
        <div class="col-12 col-md-6 col-lg-4 mentor-card"
             data-name="{{ strtolower($m['name']) }}"
             data-skill="{{ strtolower(implode(' ', $m['skills'])) }}">
          <div class="card h-100 shadow-sm">
            <img src="https://picsum.photos/seed/{{ \Illuminate\Support\Str::slug($m['name']) }}/600/400"
                 class="card-img-top" alt="{{ $m['name'] }} photo">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $m['name'] }}</h5>
              <p class="text-muted mb-1">{{ $m['title'] }}</p>
              <p class="small flex-grow-1">{{ $m['bio'] }}</p>
              <div class="d-flex align-items-center justify-content-between">
                <span class="fw-semibold">PKR {{ number_format($m['rate']) }}/hr</span>
                <a href="{{ route('contact.show') }}" class="btn btn-outline-primary btn-sm">Request</a>
              </div>
              <div class="mt-2 small">
                @foreach($m['skills'] as $tag)
                  <span class="badge bg-light text-dark border me-1">{{ $tag }}</span>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @empty
        <p>No mentors available right now.</p>
      @endforelse
    </div>
  </div>
</section>

<script>
document.getElementById('mentorSearch')?.addEventListener('input', function (e) {
  const q = e.target.value.toLowerCase().trim();
  document.querySelectorAll('.mentor-card').forEach(card => {
    const name = card.getAttribute('data-name');
    const skill = card.getAttribute('data-skill');
    card.style.display = (name.includes(q) || skill.includes(q)) ? '' : 'none';
  });
});
</script>

@include('partials.footer')
