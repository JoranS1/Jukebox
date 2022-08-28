<body>
    <header>
        <a href="/">
            <h1 class="text-6xl underline">Online cafe(ish) JukeBox</h1>
</a>
    <div class="flex gap-8">
        <a href="/playlists" class="text 2xl text-emerald-600">See all the playlists</a>
        <?php 
        if(isset($isLoggedIn['username'])){

        ?>
        <a href="/logout" class="text-2xl text-emerald-600">Logout from <?php echo $isLoggedIn['username']?></a>
        <?php } 
        else { ?>
        <a href="/login" class="text-2xl text-black-600">Login</a>
        <a href="/register" class="text-2xl text-black-600">Register</a>
        <?php } ?>
    </div>
    </header>
</body>