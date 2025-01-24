<?php
function NavBar(array $navs) {
    echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-dark'>
        <a class='navbar-brand text-light' href='#'>LITTLE MOVIES</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown'
            aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNavDropdown'>
            <ul class='navbar-nav'>";
    foreach ($navs as $nav => $page) {
        echo "
                <li class='nav-item active'>
                    <a class='nav-link text-white' href='$nav'>$page</a>
                </li>";
    }
    echo "
            </ul>
        </div>
    </nav>";
}
?>
