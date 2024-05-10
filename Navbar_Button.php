<?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                        echo '<div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="col-4 pt-1">
                        </div>
                        <div class="col-4 text-center logo">
                            <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#"><img src="Assets/images/Logo.png" alt="" width="160px" height="110px"></a>
                        </div>
                        <div class="col-4 d-flex justify-content-end align-items-center align-self-end">
                            <div class="dropdown" style="  direction: ltr;">
                                <button class="btn btn-sm dropdown-toggle" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    حسابي
                                </button>
                                <div class="dropdown-menu" aria-labelledby="accountDropdown"  style="text-align: center;">
                                    <a class="dropdown-item" href="#">تعديل معلوماتي</a>
                                    <a class="dropdown-item" href="Customer_Orders.php">طلباتي</a>
                                    <a class="dropdown-item" href="#">تسجيل خروج</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    } else {
                        echo '<div class="col-4 d-flex justify-content-end align-items-center align-self-end">
                        <a class="btn btn-sm" href="#">تسجيل الدخول</a>
                    </div>';
                    } 

                    ?>

<script>
    document.getElementById("accountDropdown").addEventListener("click", function() {
    document.querySelector(".dropdown-menu").classList.toggle("show");
});
</script>