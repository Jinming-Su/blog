<div class="navbar navbar-default header navbar-fixed-top" role="navigation">
    <div class="navbar-header">
        <a class="navbar-brand">
            SJMING
        </a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="/" id="project">Project</a></li>
        <li><a href="/article" id="article">Article</a></li>
        <li><a id="about_sjm">AboutSJM</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        @if(Auth::guest())
            <li>
                <a href="/auth/login">Login</a>
            </li>
            <li>
                <a href="/auth/register">Register</a>
            </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{Auth::user()->name}}<span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="/auth/logout">
                            <i class="fa fa-btn fa-sign-out">Logout</i>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
    <form class="navbar-form" role="search" action="#">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="please input ...">
        </div>
        <button type="submit" class="btn btn-success">Search</button>
    </form>
</div>
