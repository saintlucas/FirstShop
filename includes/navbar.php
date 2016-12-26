<?php
//var_dump($_SESSION); 
?>

<!--<body data-spy="scroll" data-target=".navbar" data-offset="50">-->
<div>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#section1">Samochody</a></li>
                        <li><a href="#section2">Kwiaty</a></li>
                        <li><a href="#section3">Narkotyki</a></li>

                        <?php if (isset($_SESSION['adminId'])) { ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Panel administratora
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="catAdmin.php">Zarządzanie grupami</a></li>
                                    <li><a href="itemsAdmin.php">Zarządzanie przedmiotami</a></li>
                                    <li><a href="adminUsers.php">Zarządzanie użytkownikami</a></li>
                                    <li><a href="#">Zarządzanie zamówieniami</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['userId'])) { ?>
                            <li><a href="register.php"><span class="glyphicon glyphicon-envelope"></span> Wiadomości</a></li>
                        <?php
                        }
                        if (isset($_SESSION['userId'])) {
                            ?>
                            <li><a href="basket.php"><span class="glyphicon glyphicon-shopping-cart"></span> Koszyk</a></li>
                        <?php
                        }
                        if (isset($_SESSION['userId'])) {
                            ?>
                            <li><a href="orders.php"><span class="glyphicon glyphicon-eye-open"></span> Zamówienia</a></li>
                        <?php
                        }
                        if (!isset($_SESSION['userId'])) {
                            ?>
                            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <?php
                        }
                        if (!isset($_SESSION['userId'])) {
                            ?>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-isn"></span> Login</a></li>
                            <?php
                            }
                            if (isset($_SESSION['userId'])) {
                                ?>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
<?php } ?>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!--</body>-->
