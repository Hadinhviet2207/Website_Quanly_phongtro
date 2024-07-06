<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">WebSiteDuy</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a class="{{ request()->is('/') ? 'active' : '' }}" 
               href="/">Home</a></li>
        <li><a class="{{ request()->is('about') ? 'active' : '' }}"
               href="about">About</a></li>
        <li><a href="porfolio">Porfolio</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </div>
  </nav>