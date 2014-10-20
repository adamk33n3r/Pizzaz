{{ Navbar::withBrand('Pizzaz')->fluid()->withContent(Navigation::links([
    ['link' => route('pages.index'), 'title' => 'Home'],
    ['link' => route('pages.news'), 'title' => 'News'],
    ['link' => route('users.index'), 'title' => 'Users'],
    ['link' => route('orders.create'), 'title' => 'Order!'],
    ]))->withContent(
    '<div class="navbar-right">')->withContent(
        Navigation::links([[Auth::user()->username . (Auth::user()->isAdmin() ? ' (admin)' : ''), [
            ['link' => route('users.show', Auth::user()->id), 'title' => 'Profile'],
            Navigation::NAVIGATION_DIVIDER,
            ['link' => route('logout'), 'title' => 'Logout']
        ]]])->navbar()->withAttributes(['class' => 'navbar-right']) .
    '</div>') }}