<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700">
    <link rel="stylesheet" href="assets/css/Roboto.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Comment.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10-1.css">
    <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10.css">
    <link rel="stylesheet" href="assets/css/icon-star-full.css">
    <link rel="stylesheet" href="assets/css/Profile-Picture-With-Badge-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Picture-With-Badge.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Shop-item-1.css">
    <link rel="stylesheet" href="assets/css/Shop-item.css">
    <link rel="stylesheet" href="assets/css/Shopping-Grid.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <section class="register-photo">
        <div class="form-container">
            <form method="post">
                <h2 class="text-center"><strong>Register New User</strong></h2>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="text" placeholder="First Name" style="width: 560px;"><label class="form-label">First Name</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="text" placeholder="Last Name" style="width: 560px;"><label class="form-label">Last Name</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="date" style="width: 560px;"><label class="form-label">Birth Date</label></div>
                <div>
                    <hr>
                </div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="text" placeholder="Username" style="width: 560px;"><label class="form-label">User Name</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="email" name="email" placeholder="Email" style="width: 560px;"><label class="form-label">E-mail</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="number" placeholder="Phone Number" style="width: 560px;"><label class="form-label">Phone Number</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="password" name="password" placeholder="Password" style="width: 560px;"><label class="form-label">Password</label></div>
                <div class="mb-3"><input class="form-control d-inline-flex float-end" type="password" name="password-repeat" placeholder="Password (repeat)" style="width: 560px;"><label class="form-label">Re-Password</label></div>
                <div class="d-xl-flex align-content-center justify-content-xl-center align-items-xl-center mb-3"><button class="btn btn-primary text-center d-block justify-content-center w-20" type="submit" style="text-align: center;width: 125.9062px;color: var(--bs-light);background: var(--bs-info);">Register</button></div>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Grid-and-List-view-V10.js"></script>

    <?php include 'footer.php'; ?>
</body>

</html>