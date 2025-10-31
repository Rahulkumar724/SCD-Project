{{-- resources/views/contact.blade.php --}}
@section('title', 'Contact • SkillSwap')
@include('partials.header')

<section class="py-5">
  <div class="container">
    <h2>Contact</h2>
    <p class="text-muted">Ask a question, request a session, or apply to mentor.</p>

    @if(session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Please correct the following:</strong>
        <ul class="mb-0">
          @foreach ($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form class="row g-3" method="POST" action="{{ route('contact.submit') }}" novalidate>
      @csrf
      <div class="col-md-6">
        <label for="name" class="form-label">Full Name</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" required>
      </div>

      <div class="col-md-6">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" required>
      </div>

      <div class="col-12">
        <label for="message" class="form-label">Message (include topic & preferred time)</label>
        <textarea id="message" name="message" class="form-control" rows="5" required>{{ old('message') }}</textarea>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Send</button>
        <a class="btn btn-link" href="{{ route('home') }}">Back to Home</a>
      </div>
    </form>
  </div>
</section>

@include('partials.footer')
