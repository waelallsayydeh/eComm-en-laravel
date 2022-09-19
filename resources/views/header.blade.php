<?php
use App\Http\Controllers\productController;
$total=0;
if(Session::has('user'))
{
$total= productController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">E-comm</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Orders</a></li>
            <li>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Submit</button>
                </form>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Cart({{ $total }})</a></li>
            @if(Session::has('user'))
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Logout</a></li>

                </ul>
                @else
                <li><a href="/logout">Login</a></li>
                @endif
              </li>
        </ul>

      </div>
    </div>
  </nav>
