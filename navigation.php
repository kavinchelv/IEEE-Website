<?php echo '
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon"/>
</head>

<body>
    <!--- NAVIGATION -->
    <nav class="navbar navbar-default navbar-fixed-top menu_ieee">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_link_to_id">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-hide" href="index.php">
            </a>
            </div>
            
            <div id="navbar_link_to_id" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                    <li><a href="events.php">EVENTS</a></li>
                    <li><a href="about.php">ABOUT</a></li><!-- special for php file -->
                    <li><a href="membership.php">MEMBERSHIP</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="newsletter.php">NEWSLETTER</a></li>
                <li><a href="gallery.php" class="nav-link">GALLERY</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <!-- not to be used yet
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                </ul>
                </li>
            -->
                
            </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
    <br>
   
    <!-- END OF NAVIGATION -->
' ;?>