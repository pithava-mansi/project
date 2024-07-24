<nav class="navbar container align-item-center nav-item  m-auto navbar-expand-lg mt-3 p-2 mb-3">
    <div class="container-fluid text-center">

        <a class="navbar-brand " href="#"> agrimart </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item toggle">
                    <a class="nav-link  " href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact us</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="feedback.php">feedback</a>
                </li>
                <li class="nav-item dark  ">
                    <h4 id=" " class="m-1 "><i class="sun-moon bi bi-sun"></i></h4>
                </li>
            </ul>
            <form class="d-flex">
                <a class="nav-link text-dark" href="logout.php">Hi, 
                    <!-- <?php echo ucwords($_SESSION['username']); ?>  -->
                    <span
                        class="btn nav-item text-danger">Logout</span></a>
            </form>
        </div>
    </div>
</nav>