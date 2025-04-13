<?php

$theme = "dark";

$page = "home";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case "home":
            $page = "home";
            break;
        case "files":
            $page = "files";
            break;
        case "exams":
            $page = "exams";
            break;
        default:
            header("Location: ?page=home");
            break;
    }
} else {
    header("Location: ?page=home");
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../../Image/logoChan.png">

    <style>
        .nav-link {
            transition: background-color 0.2s, color 0.2s;
            border-radius: 10px;
        }

        .nav-link:hover {
            background-color: #3a3f47;
            color: #ffffff !important;
        }

        .nav-link:hover i {
            color: #ffffff !important;
        }

        .nav-link:hover span {
            color: #ffffff !important;
        }

        .nav-item .active {
            background-color: #aef1f1 !important;
            color: #1f2024 !important;
        }

        .footer-link {
            color: white;
            text-decoration: none;
            display: block;
            margin-bottom: 5px;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: #6dbfb8;
        }

        .footer-icon {
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .footer-icon:hover {
            color: #6dbfb8;
        }
    </style>
</head>

<body data-bs-theme="<?php echo $theme ?>">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-nowrap my-2 gap-2">

            <!-- Toggler and Search Icon -->
            <div class="d-flex align-items-center gap-2 flex-nowrap">

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Search Icon Mobile -->
                <button class="btn text-white d-lg-none" type="button" data-bs-toggle="modal"
                    data-bs-target="#mobileSearchModal">
                    <i class="fas fa-search fs-5"></i>
                </button>
            </div>

            <!-- Search Form (Large Screens Only) -->
            <form id="searchForm" class="d-none d-lg-flex flex-grow-1 w-75 mx-3 align-items-center rounded-pill px-3"
                role="search"
                style="background-color:#2e333a; height: 50px; border: 2px solid transparent; transition: border 0.3s;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';">
                <i class="fas fa-search text-muted me-2"></i>
                <input class="form-control border-0 shadow-none text-white" type="search"
                    placeholder="Search for anything" aria-label="Search"
                    style="border-radius: 50px; background-color:#2e333a;">
                <button class="btn btn-success rounded-pill ms-5 px-2 border-0" style="background-color:#2e333a;"
                    type="submit">
                </button>
            </form>

            <!-- Right-Side Buttons -->
            <div class="d-flex align-items-center gap-2 ms-auto">

                <button class="btn d-flex justify-content-center align-items-center px-3 py-2"
                    style="background-color: #52dedc; width: 80px; height: 40px; border-radius: 50px;">
                    <i class="fas fa-plus text-dark"></i>
                </button>

                <div class="d-flex align-items-center px-3 py-2"
                    style="background-color: #2a2a2a; border-radius: 999px;">
                    <i class="fas fa-fire text-white me-2"></i>
                    <span class="text-white">0</span>
                </div>

                <div class="d-flex align-items-center px-3 py-2"
                    style="background-color: #2a2a2a; border-radius: 999px;">
                    <i class="fas fa-coins text-warning me-2"></i>
                    <span class="text-warning fw-semibold">235</span>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel" style="width: 260px; background-color: #1f2024;">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold text-info d-flex align-items-center"
                        id="offcanvasDarkNavbarLabel">
                        <img src="img/knowt.png" alt="Knowt Logo" style="width: 30px; height: 30px; object-fit:cover;"
                            class="me-2 rounded-2">
                        <span style="color: #6dbfb8;">Knowt</span>
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item text-muted small px-3 mt-2">Library</li>
                        <li class="nav-item my-1">
                            <a class="nav-link <?= ($_GET['page'] ?? '') == 'home' ? 'active bg-info text-dark fw-semibold rounded-2' : 'text-white' ?> px-3 py-2"
                                href="?page=home">
                                <i class="fa-solid fa-house me-2"></i> Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= ($_GET['page'] ?? '') == 'files' ? 'active bg-info text-dark fw-semibold rounded-2' : 'text-white' ?> px-3 py-2"
                                href="?page=files">
                                <i class="fa-solid fa-bars me-2"></i> Files
                            </a>
                        </li>

                        <li class="nav-item text-muted small px-3 mt-3">Browse</li>
                        <li class="nav-item my-1">
                            <a class="nav-link <?= ($_GET['page'] ?? '') == 'exams' ? 'active bg-info text-dark fw-semibold rounded-2' : 'text-white' ?> px-3 py-2"
                                href="?page=exams">
                                <i class="fa-solid fa-clipboard-question me-2"></i> Exams
                            </a>
                        </li>
                    </ul>
                
                    <div class="px-0 py-5">
                        <a href="../../index.html" class="nav-link text-white px-3 py-2 rounded-2 d-flex align-items-center">
                            <i class="fa-solid fa-right-from-bracket me-2"style="color: red;"></i> <span style="color: red; font-weight: 500;">Exit</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Search Modal -->
    <div class="modal fade" id="mobileSearchModal" tabindex="-1" aria-labelledby="mobileSearchModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down">
            <div class="modal-content bg-dark border-0">
                <div class="modal-header border-0">
                    <h5 class="modal-title text-white" id="mobileSearchModalLabel">Search</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-top justify-content-center">
                    <form class="d-flex w-100 mx-3 align-items-center rounded-pill px-3" role="search"
                        style="background-color:#2e333a; height: 50px; border: 2px solid transparent; transition: border 0.3s;"
                        onmouseover="this.style.border='2px solid white';"
                        onmouseout="this.style.border='2px solid transparent';">
                        <i class="fas fa-search text-muted me-2"></i>
                        <input class="form-control border-0 shadow-none text-white" type="search"
                            placeholder="Search for anything" aria-label="Search"
                            style="border-radius: 50px; background-color:#2e333a;">
                        <button class="btn btn-success rounded-pill ms-5 px-2 border-0"
                            style="background-color:#2e333a;" type="submit"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
        <?php include("shared/" . $page . ".php"); ?>
    </div>

    <footer class="bg-dark text-white py-5 px-4">
        <div class="container-fluid">
            <div class="row gy-4">
                <!-- Get Knowt -->
                <div class="col-6 col-md-2">
                    <h6 class="fw-bold mb-3" style="font-size:1.5rem;">Get Knowt</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Mobile App</a></li>
                        <li><a href="#" class="footer-link">Chrome Extension</a></li>
                        <li><a href="#" class="footer-link">Bulk Discounts</a></li>
                        <li><a href="#" class="footer-link">Student Plans</a></li>
                        <li><a href="#" class="footer-link">Teacher Plans</a></li>
                        <li><a href="#" class="footer-link">Knowt vs Quizlet</a></li>
                        <li><a href="#" class="footer-link">Knowt vs Fiveable</a></li>
                    </ul>
                </div>

                <!-- Study Tools -->
                <div class="col-6 col-md-2">
                    <h6 class="fw-bold mb-3" style="font-size:1.5rem;">Study Tools</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">AI Flashcards</a></li>
                        <li><a href="#" class="footer-link">AI PDF Summarizer</a></li>
                        <li><a href="#" class="footer-link">AI PPT Summarizer</a></li>
                        <li><a href="#" class="footer-link">AI Video Summarizer</a></li>
                        <li><a href="#" class="footer-link">AI Lecture Note Taker</a></li>
                        <li><a href="#" class="footer-link">AI Spreadsheet Summarizer</a></li>
                        <li><a href="#" class="footer-link">AI Notes</a></li>
                        <li><a href="#" class="footer-link">Flashcard Maker</a></li>
                    </ul>
                </div>

                <!-- Exams -->
                <div class="col-6 col-md-2">
                    <h6 class="fw-bold mb-3" style="font-size:1.5rem;">Exams</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">AP Exam Hub</a></li>
                        <li><a href="#" class="footer-link">IB Exam Hub</a></li>
                        <li><a href="#" class="footer-link">GCSE Exam Hub</a></li>
                        <li><a href="#" class="footer-link">A-Level Exam Hub</a></li>
                        <li><a href="#" class="footer-link">More Exam Hubs</a></li>
                        <li><a href="#" class="footer-link">Practice Test Room</a></li>
                        <li><a href="#" class="footer-link">Free-Response Room</a></li>
                        <li><a href="#" class="footer-link">AP Score Calculator</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div class="col-6 col-md-3">
                    <h6 class="fw-bold mb-3" style="font-size:1.5rem;">Resources</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">FAQ</a></li>
                        <li><a href="#" class="footer-link">Contact Us</a></li>
                        <li><a href="#" class="footer-link">KnowtTakers</a></li>
                        <li><a href="#" class="footer-link">Student Discounts</a></li>
                        <li><a href="#" class="footer-link">Blog</a></li>
                        <li><a href="#" class="footer-link">DMCA Takedown</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link">COPPA Notice</a></li>
                        <li><a href="#" class="footer-link">Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Subjects -->
                <div class="col-6 col-md-3">
                    <h6 class="fw-bold mb-3" style="font-size:1.5rem;">Subjects</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="footer-link">Science</a></li>
                        <li><a href="#" class="footer-link">Social Studies</a></li>
                        <li><a href="#" class="footer-link">Language</a></li>
                        <li><a href="#" class="footer-link">Math</a></li>
                        <li><a href="#" class="footer-link">Engineering</a></li>
                        <li><a href="#" class="footer-link">Business</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex flex-wrap justify-content-between align-items-center mt-5">
                <p class="mb-0 text-white fw-bold" style="font-size: 1.3rem;">&copy; 2024 Knowt Inc.</p>
                <div class="d-flex gap-3 mt-3 mt-md-0">
                    <a href="#" class="text-white footer-icon"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="text-white footer-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white footer-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white footer-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white footer-icon"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <script>
        const searchToggleBtn = document.getElementById('searchToggleBtn');
        const searchForm = document.getElementById('searchForm');

        searchToggleBtn.addEventListener('click', () => {
            searchForm.classList.toggle('d-none');
            searchForm.classList.toggle('d-flex');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
</body>

</html>