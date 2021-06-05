<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet"  type="/text/css" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  </head>
<title>
</title>

<nav class="navbar is-success" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://github.com/snowbalzz">
        <img src="/img/github.png" alt="">
      </a>
  
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Home
        </a>
        <a class="navbar-item" href= "/register/create">
          Marathon registration
        </a>
        </div>
      </div>
      </div>
    </div>
  </nav>

@yield('content')

<footer class="footer">
    <div class="content has-text-centered">
      <p>
        The Validation Assignment by Daniils Aleksasins
      </p>
    </div>
  </footer>
</html>
