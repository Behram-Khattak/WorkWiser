<?php 
include "./php/dbconnection.php";
session_start();

// If the user is not logged in, redirect to the login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login.php");
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


        <!-- =================Withdrow ============= -->
        <div id="withdraw">
            <div class=" d-flex align-content-center justify-content-center">
                <div class="notice mt-5">
                    <div class="notice-inner text-center">
                        <h1>*name* has not confirmed that the project is complete yet.</h1>
                    </div>
                </div>

            </div>
            <div class="row totalB container mt-4">
                <div class="col-sm-6">
                    <div class="card container">
                        <div class="card-body mt-5 border-0">
                            <p class="card-text">Total Balance</p>
                            <h5 class="h2 mb-5">$ 2487,00</h5>

                            <a class="withdrawBtn"><i class="fas fa-long-arrow-alt-down"></i>Withdraw</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card container">
                        <div class="card-body mt-2 border-0">
                            <p class="h3 mb-5">Quick withdraw</p>
                            <div class="paymethod d-flex justify-content-between align-items-center">
                                <i class="fab fa-cc-visa"></i>
                                <div class="withdrawSum">
                                    <h4 class="h4">Withdraw to USD-Card</h4>
                                    <p class="card-text">***6457</p>
                                </div>
                                <a class="btnrepeat">Repeat</a>
                            </div>
                            <div class="paymethod d-flex justify-content-between align-items-center">
                                <i class="fab fa-paypal"></i>
                                <div class="withdrawSum">
                                    <h4 class="h4">Withdraw to USD-Card</h4>
                                    <p class="card-text">@accountowner</p>
                                </div>
                                <a class="btnrepeat">Repeat</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="thMoney">
                <h1>Transaction History</h1>

                <table>
                    <tr>
                        <th>Source</th>
                        <th>Type</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Details</th>
                    </tr>
                    <tr>
                        <td>John Doe</td>
                        <td>Payment</td>
                        <td>2023-05-30</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$50.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Transfer</td>
                        <td>2023-05-28</td>
                        <td><a href="#" class="button">Completed</a></td>
                        <td>$25.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                    <tr>
                        <td>Michael Johnson</td>
                        <td>Payment</td>
                        <td>2023-05-25</td>
                        <td><a href="#" class="button">Pending</a></td>
                        <td>$100.00</td>
                        <td><a href="#">View Details</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </main>


    <!-- ========js externel file links here======= -->
    <script src="./js/main.js"></script>
    <script src="./js/bootstrap.min.js"></script>

</body>

</html>