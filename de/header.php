 <header class="" id="home">
     <nav class="navbar navbar-default" data-nav-status="toggle" role="navigation" data-spy="affix" id="myNavbar">
         <div class="container">
             <!-- Brand and toggle get grouped for better mobile display -->
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                     data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="logo" href="#" id="logo1"></a>
             </div>

             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                 <ul class=" nav navbar-nav navbar-left">
                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#home"
                             class="scroll ">HOME</a></li>
                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#services"
                             class="scroll">AUSFLÜGE</a></li>
                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bikes"
                             class="scroll">BIKES</a></li>
                 </ul>
                 <ul class=" nav navbar-nav navbar-right">
                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#location"
                             class="scroll">STANDORT</a></li>
                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#bike-gallery"
                             class="scroll">GALLERIE</a></li>

                     <li><a data-scroll data-options='{ "easing": "easeInOutQuad" }' href="#footer"
                             class="scroll">KONTAKT</a></li>
                     <li id="lang-id">
                         <div class="dropdown language">
                             <button class="btn btn-warning btn-xs dropdown-toggle language" type="button"
                                 data-toggle="dropdown">DE
                                 <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu">
                                 <li><a href="../index.php">HR</a></li>
                                 <li><a href="../en/index.php">EN</a></li>
                                 <li><a href="../it/index.php">IT</a></li>
                             </ul>
                         </div>
                     </li>
                 </ul>
             </div><!-- /.navbar-collapse -->
         </div><!-- /.container-->
     </nav>

     <div class="container">
        <div class="text-center" class="rellax" data-rellax-speed="-4">
            <h1 class="rellax" data-rellax-speed="7" ><?php echo "$the_sitetitle"; ?></h1>
        </div>
        <div class="animated-arrow-down rellax" data-rellax-speed="5">
            <a href="#services" data-scroll data-options='{ "easing": "easeInOutQuad" }'>
                <svg class="arrows">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </a>
        </div>
    </div>

 </header>