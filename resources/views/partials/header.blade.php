<style>
    header {
        background-color: #0282f9;
        color: white;
    }

    img {
        height: 90px;
    }

    .nav-link {
        font-size: 1.15rem;
        line-height: 6rem;
        border-bottom: 5px solid transparent;
    }

    .nav-link:hover {
        color: #0282f9;
        border-bottom: 5px solid #0282f9;
    }
</style>

<header>
    <div class="container gap-4 d-flex justify-content-end">
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>

    <nav class="navbar navbar-expand-sm navbar-light bg-light ">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Home</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    @php
                        $links = [
                            'Characters',
                            'Comics',
                            'Movies',
                            'Tv',
                            'Games',
                            'Collectibles',
                            'Videos',
                            'Fans',
                            'News',
                        ];
                    @endphp
                    @foreach ($links as $link)
                        <li class="nav-item">
                            <strong><a class="nav-link " href=""
                                    aria-current="page">{{ $link }}</a></strong>
                        </li>
                    @endforeach

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><strong>Shop</strong></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>

</header>
