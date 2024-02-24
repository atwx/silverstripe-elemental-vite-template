<header class="header">
    <nav class="main-nav">
        <ul class="nav">
            <% loop $Menu(1) %>
                <li class="nav_link<% if $LinkOrSection == "section" %> nav_link--active<% end_if %>">
                    <a href="$Link">$MenuTitle</a>
                </li>
            <% end_loop %>
        </ul>
    </nav>
</header>
