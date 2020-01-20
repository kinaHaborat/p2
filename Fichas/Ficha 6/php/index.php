<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mainSyles.css">
    <script src="../js/jquery-3.4.1.min.js" async></script>
    <script src="../js/bootstrap.min.js" async></script>
    <title>Index</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">VID.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Content
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Filmes</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Series</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Anime</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Quem Somos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section>
            <br>
            <br>
            <div class="sectionFilms">
                <a target="_blank" href="">
                    <img src="../images/DoctorWho.jpg" alt="DoctorWho" width="auto" height="600">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="sectionFilms">
                <a target="_blank" href="">
                    <img src="../images/StarWars" alt="StarWars" width="auto" height="600">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
            <div class="sectionFilms">
                <a target="_blank" href="">
                    <img src="../images/Meg.jpg" alt="Meg" width="auto" height="600">
                </a>
                <div class="desc">Add a description of the image here</div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>