
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PHPDiscordSDK Web Panel</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/mdb.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/admin.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
            crossorigin="anonymous"></script>

    <link rel="stylesheet"
          href="{{URL::to('/')}}/css/dracula.css">
    <link href="{{URL::to('/')}}/css/jsonFormatter-darkTheme.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.2.0/highlight.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="https://cdn.socket.io/4.1.2/socket.io.min.js" integrity="sha384-toS6mmwu70G0fw54EGlWWeA4z3dyJ+dlXBtSURSKN4vyRFOcxd3Bzjj/AoOwY+Rg" crossorigin="anonymous"></script>
    <script src="{{URL::to('/')}}/js/jsonFormatter.min.js" type="text/javascript"></script>
</head>
<!--Main Navigation-->
<header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="/" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('/') ? 'active' : '' }}"  >
                    <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard Console</span>
                </a>
                <a href="channels" class="list-group-item list-group-item-action py-2 ripple {{ request()->is('channels/*') ? 'active' : '' }}">
                    <i class="fas fa-chart-area fa-fw me-3"></i><span>Channels </span>
                </a>
                <a href="messages" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-lock fa-fw me-3"></i><span>Messages</span></a>
                <a href="reactions" class="list-group-item list-group-item-action py-2 ripple"><i
                        class="fas fa-chart-line fa-fw me-3"></i><span>Reactions</span></a>
                <a href="guilds" class="list-group-item list-group-item-action py-2 ripple">
                    <i class="fas fa-chart-pie fa-fw me-3"></i><span>Guilds</span>
                </a>

            </div>
        </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-dark bg-gradient fixed-top ">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                    aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <h3>PHPDiscordSDK</h3>
            </a>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PHPDiscordSDK Library</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PHPDiscordSDK Web</a>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->
