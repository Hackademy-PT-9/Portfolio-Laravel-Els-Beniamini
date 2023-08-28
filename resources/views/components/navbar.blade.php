<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white fs-6 py-3">
    <div class="container px-3 py-3">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <h1 class="fw-bolder  text-primary">WEB DEVELOPER </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2  mb-lg-0 small fw-bolder">
                <li class="nav-item "><a class="btn btn-light mx-1 " href="{{ route('chisono') }}">Chi
                        sono</a></li>
                <li class="nav-item"><a class="btn btn-light mx-1" href="{{ route('serviziofferti') }}">Servizi
                        Offerti</a></li>
                <li class="nav-item"><a class="btn btn-light mx-1" href="{{ route('contatti') }}">Contatti</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
