{{ Navbar::withBrand('Pizzaz')->fluid()->withContent(Navigation::links([
    ['link' => route('pages.index'), 'title' => 'Home'],
    ['link' => route('pages.news'), 'title' => 'News']
]))->withContent(
    '<div class="navbar-right"><form class="navbar-form navbar-left" role="search">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>')->withContent(
        Auth::check() ?
            Navigation::links([[Auth::user()->username, [
                ['link' => route('users.show', Auth::user()->id), 'title' => 'Profile'],
                Navigation::NAVIGATION_DIVIDER,
                ['link' => route('logout'), 'title' => 'Logout']
            ]]])->navbar() :
            Navigation::links([
                ['link' => route('login'), 'title' => 'Login'],
                ['link' => route('users.create'), 'title' => 'Sign up']])->navbar()->withAttributes(['class' => 'navbar-right']) .
    '</div>') }}