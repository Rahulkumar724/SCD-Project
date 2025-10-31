{{-- resources/views/partials/footer.blade.php --}}
  <footer class="border-top mt-5 py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
      <p class="mb-2 mb-md-0 text-muted">© {{ date('Y') }} SkillSwap</p>
      <div class="nav">
        <a class="nav-link px-2" href="{{ route('home') }}">Home</a>
        <a class="nav-link px-2" href="{{ route('mentors') }}">Mentors</a>
        <a class="nav-link px-2" href="{{ route('contact.show') }}">Contact</a>
      </div>
    </div>
  </footer>

  {{-- Bootstrap JS --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
</body>
</html>
