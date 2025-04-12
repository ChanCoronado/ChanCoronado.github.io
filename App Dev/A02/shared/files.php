<div class="container-fluid ">

    <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-4 px-3 gap-2 pt-5 pt-md-4">

        <h1 class="mb-0 flex-grow-1 mt-3" style="font-size: 1.8rem; font-weight: 600; height: 100%; ">Files</h1>

        <!-- Right: Buttons -->
        <div class="d-flex gap-2 align-items-center mt-3">
            <!-- Select Multiple Button -->
            <button class="btn text-white d-flex align-items-center px-3 py-2"
                style="background-color:#2e333a; border-radius: 999px; font-size: 0.85rem; height: 42px;">
                <i class="fas fa-copy me-2"></i>
                <span class="d-none d-sm-inline">Select multiple</span>
            </button>

            <!-- Create Button -->
            <button class="btn text-dark d-flex align-items-center px-3 py-2"
                style="background-color: #52dedc; border-radius: 999px; font-size: 0.85rem; height: 42px;">
                <i class="fas fa-plus me-2"></i>
                <span style="color: #1e1f22;">Create</span>
            </button>
        </div>
    </div>

    <div class="btn-group mx-3">
        <button type="button" class="btn btn-secondary dropdown-toggle"
            style="background-color:#2e333a; border-radius: 40px; max-width:100%; width: 12vh; height: 5vh;"
            data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
            Type
        </button>
        <ul class="dropdown-menu dropdown-menu-lg-start mx-5">
            <li><button class="dropdown-item" type="button">Folders</button></li>
            <li><button class="dropdown-item" type="button">Notes</button></li>
            <li><button class="dropdown-item" type="button">Flashcards</button></li>
            <li><button class="dropdown-item" type="button">Chat Activities</button></li>
        </ul>
    </div>

    <h1 class="display-5 mt-5 mx-3" style="font-size: 1.2rem; font-weight:500;">Folders</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mx-auto my-2">
        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">App Dev Lesson 1
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start">
                            <li><a class="dropdown-item" href="#" onclick="event.stopPropagation()">Change Folder
                                    Color</a></li>
                            <li><a class="dropdown-item" href="#" onclick="event.stopPropagation()">Change Folder
                                    Emoji</a></li>
                            <li><a class="dropdown-item" href="#" onclick="event.stopPropagation()">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#" onclick="event.stopPropagation()">Move to</a></li>
                            <li><a class="dropdown-item" href="#" onclick="event.stopPropagation()">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.stopPropagation()">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">App Dev Lesson 2
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Web Dev Lesson 1
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Ethics Lesson 3
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Contemporary Lesson 2
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Principles Lesson 3
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">E-Commerce Lesson 1
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Contemporary Lesson 2 (copy)
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Principles Lesson 4
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Web Dev Lesson 2
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Ethics Lesson 1
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">App Dev Lesson 5
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Contemporary Lesson 3
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">App Dev Lesson 3
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">Web Dev Lesson 4
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 align-items-start shadow-sm" onclick="window.location.href='#';"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';"
                style="border-radius: 20px; background-color:#2e333a; color: white; cursor: pointer; border: 2px solid transparent;">

                <div class="d-flex align-items-start justify-content-between px-3 py-3 w-100">
                    <div class="d-flex align-items-center">
                        <i class="bi bi-folder-fill me-2" style="font-size: 1.3rem; color: #fbc02d;"></i>
                        <h5 class="card-title ms-2 mb-0" style="font-weight: 600; font-size: 1rem;">App Dev Lesson 4
                        </h5>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start" onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Color</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Change Folder Emoji</a>
                            </li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Rename</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your Files -->

    <h1 class="display-5 mt-5 mx-3" style="font-size: 1.2rem; font-weight:500;">Your Files</h1>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mx-auto my-2">
        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">App Dev Lesson 1</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 1h ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0" style="z-index: 1000;">📄 Flashcards (39)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">Web Dev Lesson 1</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 3h ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (44)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">E-Commerce Lesson 1</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 5h ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (32)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">Ethics Lesson 3</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 2d ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (54)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">Contemporary Lesson 3</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 4d ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (61)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">App Dev Lesson 2</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 5d ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (26)</p>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100 shadow-sm"
                style="border-radius: 20px; background-color: #1e1f22; padding: 20px; transition: border 0.3s; cursor: pointer;"
                onmouseover="this.style.border='2px solid white';"
                onmouseout="this.style.border='2px solid transparent';" onclick="window.location.href='#';">
                <div class="d-flex justify-content-between align-items-start">
                    <h5 class="card-title" style="font-weight: bold; font-size: 16px; margin: 0;">Principles Lesson 3</h5>
                    <div class="dropdown">
                        <button class="btn btn-sm text-white" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="padding: 0; background: none; border: none;"
                            onclick="event.stopPropagation();">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-start dropdown-menu-dark"
                            onclick="event.stopPropagation();">
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Pin</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Duplicate</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit this set</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export as PDF</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Move to</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Edit tags</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Combine</a></li>
                            <li><a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Export</a></li>
                            <li><a class="dropdown-item text-danger" href="#"
                                    onclick="event.preventDefault(); event.stopPropagation();">Trash this set</a></li>
                        </ul>
                    </div>
                </div>
                <p class="card-text" style="color: #b0b0b0; font-size: 14px;">Updated 7d ago</p>
                <div style="background-color: #5c4d3d; color: white; padding: 8px 12px; border-radius: 10px; font-size: 14px; margin-top: 10px; text-align: start; display: inline-block; transition: background-color 0.3s; width: 80%; font-weight: bold;"
                    onmouseover="this.style.backgroundColor='#7a634c';"
                    onmouseout="this.style.backgroundColor='#5c4d3d';">
                    <p class="card-text m-0">📄 Flashcards (58)</p>
                </div>
            </div>
        </div>
    </div>
</div>