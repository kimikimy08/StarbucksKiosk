
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Source</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="Main.css">

</head>

<body>


    <div class="container">

        <div class="row">

            <div class="col text-center h2 ">
                <a href="#">
                    <!-- Home Page -->

                    <img src="https://logos-world.net/wp-content/uploads/2020/09/Starbucks-Emblem.png" class="Logo" alt="Logo" />


                </a>

            </div>




            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasRightLabel">Order</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <form action="Payment.php" method="post">
                    <div class="offcanvas-body">
                        <!-- Item From DataBase -->

                        List of order Here
                        <div class="offcanvas-footer">
                            <button type="Submit" name="ChkOut" class="btn-default btn-lg" value="ChkOut">Check Out</button>
                        </div>
                    </div>
                </form>


            </div>








        </div>



</body>

</html>