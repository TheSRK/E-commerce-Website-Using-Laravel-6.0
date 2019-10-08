{{--------- Start Nav Bar ----------}}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">


        <a class="navbar-brand" href="{{ route("index") }}">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route("index") }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("products") }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("contact") }}">Contact</a>
                </li>
                {{-- <liclass="nav-itemdropdown">
<aclass="nav-linkdropdown-toggle"href="#"id="navbarDropdown"role="button"
data-toggle="dropdown"aria-haspopup="true"aria-expanded="false">
Dropdown
</a>
<divclass="dropdown-menu"aria-labelledby="navbarDropdown">
<aclass="dropdown-item"href="#">Action</a>
<aclass="dropdown-item"href="#">Anotheraction</a>
<divclass="dropdown-divider"></div>
<aclass="dropdown-item"href="#">Somethingelsehere</a>
</div>
</li> --}}

            </ul>
            <form class="form-inline my-2 my-lg-0">
                {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Item" aria-label="Recipient's username"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>

{{-- -------End Nav Bar------ --}}