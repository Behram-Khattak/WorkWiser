<?php 
include "./php/dbconnection.php";
session_start();

// If the user is not logged in, redirect to the login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkWiser</title>
    <!-- =======CSS externel Link here===== -->
    <link rel="stylesheet" href="css/dashboard.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">AL</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="">Job name</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="progress.php">Progress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="withdraw.php">Withdraw</a>
                    </li>
                </ul>
            </div>

            <a href="./php/logout.php">
                <button class="BtnLogout">
                    <div class="sign"><svg viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                            </path>
                        </svg></div>

                    <div class="text">Logout</div>
                </button>
            </a>
        </div>
    </nav>
    <main>

        <!-- ============================Progress============================ -->
        <div id="progress">
            <div class="drag-area container mt-5">
                <div class=" icon"><i class="fas fa-cloud-upload-alt"></i></div>
                <header>Drag & Drop to Upload File</header>
                <span>OR</span>
                <button id="browseBtn">Browse File</button>
                <input type="file" name="file" id="file" hidden>
            </div>

            <div class="editor container">
                <div class="toolbar">
                    <button onclick="executeCommand('bold')"><b>B</b></button>
                    <button onclick="executeCommand('italic')"><i>I</i></button>
                    <button onclick="executeCommand('underline')"><u>U</u></button>
                    <button onclick="createLink()"><i class="fas fa-link"></i></button>
                    <select onchange="executeCommand('justifyLeft')">
                        <option value="">Align Left</option>
                        <option value="center">Align Center</option>
                        <option value="right">Align Right</option>
                        <option value="justify">Justify</option>
                    </select>
                </div>
                <form action="./php/insertnote.php" method="post" class="form">
                    <div contenteditable="true" class="editor-content" id="editor-content"></div>
                    <input type="hidden" name="content" id="hidden-content-input">
                    <button class="btnTask" type="submit">Add Note</button>
                </form>
            </div>
            <?php
                // Fetch all the data from database
                $sql="SELECT * FROM `note`";
                $query= mysqli_query($conn,$sql);
            while ($result= mysqli_fetch_array($query)) {

                $editor_content = $result['editor_content'];

               ?>
            <div class="card container mt-5 mb-4">
                <h3 class="h1">Note</h3>
                <div class="card-body note">
                    <button><i class="fas fa-sticky-note"></i>Note</button>
                    <p class="h4 mt-4"><?php echo $editor_content; ?></p>
                </div>

            </div>
            <?php } ?>



        </div>

    </main>


    <!-- ========js externel file links here======= -->
    <script src="./js/main.js"></script>
    <script src="./dragandrop.js"></script>
    <script src=" ./js/bootstrap.min.js"></script>

</body>

</html>