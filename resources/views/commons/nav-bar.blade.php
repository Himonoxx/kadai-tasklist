<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#2E5C6E;">
                <a class="navbar-brand" href="/">Task List</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        @if(Auth::check())
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-item">{!! link_to_route('tasks.create','Add Task',['class'=>'text-center']) !!}</li>
                                    <li class="dropdown-divider"></li>
                                    <li class="dropdown-item">{!! link_to_route('logout.get','Logout',['class'=>'text-center']) !!}</li>
                                </ul>
                        @else
                            <li class="nav-item">{!! link_to_route('signup.get','Signup',[],['class'=>'nav-link']) !!}</li>
                            <li class="nav-item">{!! link_to_route('login','Login',[],['class'=>'nav-link']) !!}</li>
                        @endif
                    </ul>
                </div>
            </nav>
</header>