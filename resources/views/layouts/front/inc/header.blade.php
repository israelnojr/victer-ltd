	<!-- header -->
    <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

                    <h1>
                        <a class="navbar-brand" href="{{('/')}}">
                         {{config('app.name')}}
                            
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="{{('/')}}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="{{ route('about')}}">about</a>
                            </li>
							 <li class="nav-item  mr-3">
                                <a class="nav-link" href="{{ route('services')}}">Services</a>
                            </li>
                            <!-- <li class="nav-item dropdown mr-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="gallery.html">Gallery</a>
									 <a class="dropdown-item" href="typo.html">Typography</a>
                                </div>
                            </li> -->
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="{{ route('contact')}}">contact</a>
                            </li>
                            <li class="nav-item">
                               	<i class="fas fa-phone pr-2"></i>CALL US +234-703-294-9204
                            </li>
                        </ul>
                    </div>

                </nav>
        </header>
    <!-- //header -->

		</div>
	</section>
	<!-- //header -->