{{ Navbar::withBrand('Pizzaz')->fluid()->withContent(Navigation::links([
    ['link' => route('pages.index'), 'title' => 'Home'],
    ['link' => route('pages.news'), 'title' => 'News'],
    ['link' => route('users.index'), 'title' => 'Users'],
    ]))->withContent(
    '<div class="navbar-right">')->withContent(
        Navigation::links([
            ['link' => route('login'), 'title' => 'Login'],
            ['link' => route('users.create'), 'title' => 'Sign up']])->navbar()->withAttributes(['class' => 'navbar-right']) .
    '</div>') }}