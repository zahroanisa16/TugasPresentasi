<style>
    .container-fluid{
        background-color: #c6e3fe;
        margin-top: 0;
        position: relative;
        top: -10px;
        height: 100px;
    }
    .container-fluid a{
      color: black;
    }
    .collapse ul li a{
      text-align: right;
    }
</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <h1  class="navbar-brand" style="color: white;" href="#"><img src="img/logo.png" width="100" alt=""></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{ route('posts.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts/shop">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts/about">Contact</a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>