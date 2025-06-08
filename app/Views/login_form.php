<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            height: 100%;
            overflow: auto;
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        body::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .full-screen-img {
            position: fixed;
            height: 100%;
            width: 100%;
            object-fit: cover;
            top: 0;
            left: 0;
            z-index: -2;
            transition: transform 0.5s ease;
        }

        .cover-img {
            position: fixed;
            height: 100%;
            width: 100%;
            background-color: black;
            top: 0;
            left: 0;
            opacity: 0.5;
            z-index: -1;
        }

        .form-floating input:focus~label {
            color: #000 !important;
        }

        .form-floating input {
            border-color: #000 !important;
            border-width: 2px !important;
            box-shadow: none !important;
            transition: all 0.3s ease;
        }
        
        .login-form {
            z-index: 1;
            position: relative;
        }

        /* Hover effects */
        .form-floating:hover input {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 99, 71, 0.3) !important;
        }

        .form-floating:hover label {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .btn {
            transition: all 0.3s ease;
            transform: perspective(1px) translateZ(0);
        }

        .btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 20px rgba(255, 99, 71, 0.4);
        }

        .btn:active {
            transform: translateY(-1px);
        }

        form {
            transition: all 0.3s ease;
        }

        form:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3) !important;
        }

        a:hover {
            color: Tomato !important;
            text-decoration: none !important;
        }

        p span:hover {
            color: Tomato !important;
            text-decoration: underline !important;
            cursor: pointer;
        }

        /* Animation for background image on hover */
        .login-form:hover ~ .full-screen-img {
            transform: scale(1.02);
        }
    </style>
</head>

<body>
    <img src="https://cdn.pixabay.com/photo/2016/11/23/15/48/audience-1853662_1280.jpg" alt="concert" class="full-screen-img">
    <div class="cover-img"></div>
    <div class="d-flex justify-content-center align-items-center vh-100 login-form">
        <form action="/login/auth" method="post" class="bg-light p-4 rounded shadow" style="min-width: 400px;">
            <h3 class="text-center mb-5">Login</h3>
            <?= csrf_field() ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>

            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autocomplete="off">
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-5">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required autocomplete="off">
                <label for="password">Password</label>
            </div>

            <div class="d-flex flex-column gap-3 justify-content-center align-items-center mb-5">
                <button type="submit" class="btn w-50" style="background-color: Tomato; color: white;">Login</button>
                <button onclick="window.location.href='/admin'" class="btn w-50" style="background-color: Tomato; color: white;">Login as an Admin</button>
            </div>

            <p class="text-center mt-5 mb-0" style="font-size: 12px;">Don't have an account yet?
                <a href="<?= base_url('register') ?>" style="text-decoration: underline; color: inherit;">Register</a>
            </p>
            <p class="text-center mt-3 mb-0" style="font-size: 12px; cursor: pointer;">
                <span onclick="window.open('/use', '_blank');">Terms of Use</span> |
                <span onclick="window.open('/policy', '_blank');">Privacy Policy</span>
            </p>

        </form>
    </div>
</body>

</html>