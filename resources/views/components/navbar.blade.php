<nav style="background:#111;color:white;padding:10px;display:flex;align-items:center;gap:20px;">

    <a href="/" style="color:white;text-decoration:none;font-weight:bold;">
        dbfut
    </a>

    <a href="/players" style="color:white;text-decoration:none;">
        Players
    </a>

    <a href="/teams" style="color:white;text-decoration:none;">
        Teams
    </a>

    <a href="/leagues" style="color:white;text-decoration:none;">
        Leagues
    </a>

    <form action="/players/search" method="GET" style="margin-left:auto;">
        <input type="text" name="q" placeholder="Search player">
        <button type="submit">Search</button>
    </form>

</nav>
