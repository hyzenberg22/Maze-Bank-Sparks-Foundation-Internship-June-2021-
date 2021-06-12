<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- This is for the Custom Css -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Maze Bank Los Santos</title>
</head>

<body>
    <!-- This is for the Navbar of the Maze Bank -->
    <div class="menu"></div>
    <div class="my_top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="./images/main.jpg" alt="" class="image_sizer"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="createuser.php" >Creat User</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="transfermoney.php">Transfer Money</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="transactionhistory.php">Transfer History</a>
                        </li>
                    </ul>
                    <img src="./images/gta-5-7203.png" alt="gta-5 logo" class="image_sizer2">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    


<!-- This is the Activity page -->
    <section class="activity" style="background: #f35255;">
        <!-- This is the Activity page -->
    <div class="activity" >
        <!-- Activity section -->
        <div class="row activity text-center bg-black">
            <div class="col-md act">
                <img src="./images/icon/user.jpg" class="img-fluid shadow p-3 mb-5 bg-body ">
                <br>
                <a href="createuser.php"><button style="background-color : #2785C4;">Create a User</button></a>
            </div>
            <div class="col-md act">
                <img src="./images/icon/transfer.jpg" class="img-fluid shadow p-3 mb-5 bg-body">
                <br>
                <a href="transfermoney.php"><button style="background-color : #2785C4;">Make a Transaction</button></a>
            </div>
            <div class="col-md act">
                <img src="./images/icon/history.jpg" class="img-fluid shadow p-3 mb-5 bg-body">
                <br>
                <a href="transactionhistory.php"><button style="background-color : #2785C4;">Transaction
                        History</button></a>
            </div>
        </div>
    </div>
    </section>
    <!-- This is for the background -->
    <div class="background">
        <img src="./images/background.png" alt="texture">
    </div>
    <!-- This is for the Footer Option  -->
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Shubhajit Sarkar</b> <br> Official</p>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>