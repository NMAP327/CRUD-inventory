<nav class="navbar navbar-expand-lg navbar-dark bg-info p-0">
    <div class="container">
      <a class="shadow-sm p-3 mb-5 bg-body-tertiary rounded navbar-brand" href="#"><h1>NMAP</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">Jadwal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'About') ? 'active' : '' }}"  href="/about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === 'Posts') ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
      </div>
    </div>
</nav>