<?php
require 'include/config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT * FROM login WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $row = $res->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION['user_id'] = $row['id'];
            header("Location: " . ($row['level'] === 'admin' ? 'admin/index.php' : 'user/index.php'));
            exit();
        } else
            $error_message = "Username atau password salah.";
    } else
        $error_message = "Username atau password salah.";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HMJ TI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563EB;
            --secondary: #1E40AF;
            --dark: #1E293B;
            --light: #F9FAFB;
            --radius: 16px;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--secondary), var(--primary));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            display: flex;
            background: #fff;
            border-radius: var(--radius);
            max-width: 900px;
            width: 100%;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, .15);
            transform: scale(.95);
            animation: pop .8s forwards;
        }

        @keyframes pop {
            to {
                transform: scale(1);
            }
        }

        .left {
            flex: 1;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(to bottom, #ffffff, #f1f5f9);
        }

        .left h2 {
            font-size: 28px;
            color: var(--primary);
            margin-bottom: 25px;
            border-right: 3px solid var(--primary);
            white-space: nowrap;
            overflow: hidden;
        }

        .error {
            color: #e11d48;
            font-size: 14px;
            margin-bottom: 12px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            font-size: 14px;
            color: #475569;
            margin-bottom: 6px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            background: #f8fafc;
            transition: .3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 8px rgba(37, 99, 235, .4);
        }

        button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: .3s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, .3);
        }

        button[type="submit"]:hover {
            background: var(--secondary);
            box-shadow: 0 6px 16px rgba(37, 99, 235, .4);
        }

        .link-signup {
            margin-top: 18px;
            font-size: 14px;
            text-align: center;
        }

        .link-signup a {
            color: var(--primary);
            text-decoration: none;
        }

        .link-signup a:hover {
            text-decoration: underline;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-top: 18px;
            background: var(--dark);
            color: #fff;
            padding: 6px 12px;
            font-size: 13px;
            border-radius: 6px;
            text-decoration: none;
            transition: .3s;
        }

        .back-btn:hover {
            background: #000;
        }

        .right {
            flex: 1;
            background: url('images/login.jpg') center/cover no-repeat;
            position: relative;
        }

        .right::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, .25);
            transition: .4s;
        }

        .right:hover::after {
            background: rgba(0, 0, 0, .1);
        }

        @media(max-width:768px) {
            .card {
                flex-direction: column;
                max-width: 500px;
            }

            .right {
                height: 220px;
            }

            .left {
                padding: 40px 25px;
            }
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="left">
            <h2 id="typing-text"></h2>

            <?php if (!empty($error_message)): ?>
                <div class="error"><?= htmlspecialchars($error_message) ?></div>
            <?php endif; ?>

            <form method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit">Login</button>
            </form>

            <div class="link-signup">
                Belum punya akun? <a href="daftar.php">Daftar di sini</a>
            </div>

            <a href="javascript:history.back()" class="back-btn">
                <i class="fas fa-arrow-left"></i>&nbsp;Kembali
            </a>
        </div>

        <div class="right"></div>
    </div>

    <script>
        // Efek teks berjalan
        const text = "Login & Daftar HMJ TI";
        let i = 0, speed = 100;
        const typing = document.getElementById("typing-text");
        (function type() {
            if (i < text.length) {
                typing.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            } else typing.style.borderRight = "none";
        })();
    </script>

</body>

</html>