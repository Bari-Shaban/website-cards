<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="utf-8" >
        <meta name="keywords" content="" >
        <meta name="description" content="" >
        <meta name="author" content="" >
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        
        <!-- BOOTSTRAP CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- BOOTSTRAP ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <!-- FONTAWESOME ICONS -->
        <script src="https://kit.fontawesome.com/64087b922b.js" crossorigin="anonymous"></script>
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="style.css">
        
    </head>
    <body >
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light nav-color">
            <div class="container-fluid mx-3">
                <a class="navbar-brand " href="index.html"><img src="images/Logo.png" alt="logo" class="img-fluid ms-2 img-logo "><p class="mb-0 logo-text fw-bolder ">BRAINSTER</p></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-filter-right"></i>
                </button>
                <div class="offcanvas offcanvas-top bg-dark vh-100" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header justify-content-end">
                        <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                            <li class="nav-item">
                                <a class="nav-link mx-3" aria-current="page" href="https://brainster.co/marketing/" target="_blank">Академија за маркетинг</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3 " href="https://brainster.co/full-stack/" target="_blank">Академија за програмирање</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-3" href="https://brainster.co/data-science/" target="_blank">Академија за data science</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link mx-3" href="https://brainster.co/graphic-design/" target="_blank">Академија за дизајн</a>
                            </li>
                            <li class="nav-item">
                                <a href="vraboti.php" class="text-decoration-none"><button type="button" class="nav-link py-2 px-3 vraboti-btn border-dark btn btn-danger text-white ms-3">Вработи наш студент</button></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!-- vraboti nas student form -->

        <section class="container-fluid form-height">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-12 col-lg-12 col-xl-8">
                    <div class="row text-center py-5">
                        <h1 class="text-uppercase text-dark h1 display-3 fw-bold">Вработи студенти</h1>
                    </div>
                    <form class="row g-3 py-3" action="includes/registration.php" method="post" autocomplete="off">
                        <div class="col-12 col-md-6">
                            <label for="name" class="form-label">Име и Презиме</label>
                            <input type="text" class="form-control" id="name" placeholder="Вашето име и презиме" aria-label="Вашето име и презиме" required name="name">
                        </div>    
                        <div class="col-12 col-md-6">
                            <label for="company" class="form-label">Име на компанија</label>
                            <input type="text" class="form-control" id="company" placeholder="Име на вашата компанија" aria-label="Име на вашата компанија" required name="company">
                        </div>
                        <div class=" col-12 col-md-6">
                            <label for="email" class="form-label">Контакт e-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="Контакт e-mail на вашата компанија" required name="email">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="phone" class="form-label">Контакт телефон</label>
                            <input type="number"  class="form-control" id="phone" placeholder="Контакт телефон на вашата компанија" required name="phone">
                        </div>
                        <div class=" col-12 col-md-6">
                            <label for="studenti" class="form-label">Тип на студенти</label>
                            <select class="form-select"  aria-label="Default select example" placeholder="Изберете тип на студент" required name="studenti">
                                <option selected disabled value="" class="option-display">Изберете тип на студенти</option>
                                <?php
                                
                                require_once 'includes/connect.php';

                                $test = "SELECT * FROM tipnastudenti";
                                $stu = $pdo->query($test);

                                if (!$stu) {
                                    die("invalid query:" . $pdo->error);
                                }
                                while ($row = $stu->fetch(PDO::FETCH_ASSOC)) {

                                    echo "<option>$row[student]</option>";
                                }    
                                ?>
                                
                            </select>
                        </div>
                        <div class="d-grid gap-2 col-12 col-md-6 pt-5 m-0 ">
                            <button type="submit" class="btn btn-danger" name="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- footer section -->
        <footer class="container-fluid py-3 bg-dark fixed-bottom">
            <div class="row justify-content-center ">
                <div class="col-12 ">
                    <div class="row text-center justify-content-center">
                        <p class="mb-0 h5 text-white">Изработено со <i class="fa-solid fa-heart text-danger fa-xl"></i> од студентите на Brainster</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JS SCRIPT -->
        <script src="app.js"></script>
        <!-- BOOTSTRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>
</html>

