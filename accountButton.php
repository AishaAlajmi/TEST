 <?php
                    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {?>
                        <div class="col-4 d-flex justify-content-end align-items-center align-self-end">
                            <div class="dropdown" style="  direction: ltr;">
                                <button class="btn btn-sm dropdown-toggle" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    حسابي
                                </button>
                                <div class="dropdown-menu" aria-labelledby="accountDropdown"  style="text-align: center;">
                                    <a class="dropdown-item" href="myaccount.php">تعديل معلوماتي</a>
                                    <a class="dropdown-item" href="Customer_Orders_&_Appointements.php">طلباتي</a>
                                    <a class="dropdown-item" href="Signout.php">تسجيل خروج</a>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php
                    } else {?>
                       <div class="col-4 d-flex justify-content-end align-items-center align-self-end">
                          <a class="btn btn-sm" href="login.php">تسجيل الدخول</a>
                       </div>
                    <?php
                    }
     ?>
     <script>
    // Add JavaScript to handle the dropdown toggle
    document.getElementById("accountDropdown").addEventListener("click", function () {
        document.querySelector(".dropdown-menu").classList.toggle("show");
    });
</script>
