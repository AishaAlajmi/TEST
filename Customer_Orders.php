<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>طلباتي</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/Admin_Tabels.css">
    <link rel="stylesheet" href="Assets/css/navbarAndFooter.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">

</head>
<style>
    .form-item {
        margin-bottom: 1rem;
    }

    .responsive_table {
        overflow-x: auto;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
    }

    th,
    td {
        text-align: center;
        padding: 26px;
        font-size: 15px;
        width: 10%;
        overflow-x: auto;
        color: #033135;
    }

    th {
        background-color: #1D3539;
        color: #fff;
    }

    tr {
        text-align: center;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    h1 {
        text-align: center;
        color: #1D3539;
    }

    .add {
        margin-bottom: 1.5rem
    }

    .add form {
        padding: 3rem;
        display: flex;
        background-color: #F4F4F4;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .form-item input {
        margin-right: 5px;
    }

    .addButton {
        background-color: #CFB99A !important;
        color: #fff !important;
        border-radius: 6px !important;
    }

</style>
<body>



    <section id=shopping>
    <div class="album py-5 bg-body slide ">
        <div class="container">
            <h1>الطلبات</h1><br><br>
            <div class="responsive_table">
            <table>
                <tr>
                    <th>رقم الطلب</th>
                    <th>نوع الخدمة</th>
                    <th>موعد الطلب</th>
                    <th>الحالة</th>
                    <th>السعر</th>
                    <th>الفاتورة</th>

                </tr>
                <tbody>
                <?php include 'Customer_Orders_PHP.php'; ?>
                </tbody>
            </table>
            </div>

        </div>
    </div>
</section>


</body>

</html>
