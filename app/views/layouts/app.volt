<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
        <title>Application</title>
    </head>
    <body>
        <header>
            <div class="header-top">
                <div id="logo">
                    <a href="/"><img src="/img/logo.svg" alt=""></a>
                </div>

                <form action="#" method="GET" class="form-top">
                    <div class="form-group">
                        <input type="text" class="form-control" name="search" placeholder="Search video">
                    </div>
                </form>

                <div id="account-access">
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                </div>
            </div>
            <div class="header-bot">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="/news">News</a></li>
                        <li><a href="/most-viewed">Most Viewed</a></li>
                        <li><a href="/random">Random</a></li>
                        <!--
                        <li><a href="/top-rated">Top Rated</a></li>
                        <li><a href="/most-commented">Most Commented</a></li>
                        <li><a href="/stars">Stars</a></li>
                        <li><a href="/channels">Channels</a></li>
                         -->
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container">
            <div class="sidebar">
                <ul>
                    {% for i in [0, 0,0,0,0,0] %}
                        <li><a href="#">zz</a></li>
                    {% endfor %}
                </ul>
            </div>
            <main>
                {% block content %}
                {% endblock %}
            </main>
        </div>

        <footer>
            footer
        </footer>
    </body>
</html>