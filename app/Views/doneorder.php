<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WeThrift - Payment Successful</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: "Jost", sans-serif;
            list-style: none;
            text-decoration: none;
        }
        header {
            background-color: rgba(255, 255, 255, .50);
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 10%;
        }
        .logo img {
            max-width: 110px;
            height: auto;
        }
        .navmenu {
            display: flex;
        }
        .navmenu a {
            color: black;
            font-size: 16px;
            text-transform: capitalize;
            padding: 10px 20px;
            font-weight: 400;
            transition: all .42s ease;
        }
        .navmenu a:hover {
            color: #ee1c47;
        }
        .nav-icon {
            display: flex;
            align-items: center;
        }
        .nav-icon i {
            margin-right: 20px;
            color: black;
            font-size: 25px;
            font-weight: 400;
            transition: all .42s ease;
        }
        .nav-icon i:hover {
            color: #ee1c47;
        }

        /* Main Content Styling */
        .container {
            padding: 100px 10%;
            max-width: 1200px;
            margin: 20px auto;
        }
        .edit-profile-section {
            margin-top: 60px; 
            text-align: center;
        }

        .content-box {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin: 20px auto;
            max-width: 600px;
        }

        .content-box h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 20px;
        }

        .content-box p {
            font-size: 1.25rem;
            color: #555;
            margin-bottom: 30px;
        }

        .market-button {
            background-color: #ee1c47; 
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer; 
            transition: background-color 0.3s ease; 
        }
        .market-button:hover {
            background-color: #d11a3b;
        }

        /* Footer Styling */
        footer {
            background-color: #d3d3d3;
            padding: 40px 10%;
            color: #000;
            font-size: 14px;
        }
        .footer-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 20px;
        }
        .footer-item {
            flex: 1;
            min-width: 220px;
        }
        .footer-item h2, .footer-item h3 {
            margin-bottom: 15px;
            font-size: 18px;
        }
        .footer-item p, .footer-item ul, .footer-item li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .footer-item ul {
            list-style: none;
            padding: 0;
        }
        .footer-item ul li a {
            text-decoration: none;
            color: #000;
        }
        .footer-item ul li a:hover {
            color: #ee1c47;
        }
        .social-icons a {
            margin-right: 10px;
            font-size: 24px;
            color: #000;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #ee1c47;
        }
        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            border-top: 1px solid #ccc;
            margin-top: 20px;
        }
        .footer-bottom p {
            margin: 0;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <?= $this->include('layout/navbar'); ?>

    <!-- Main Content -->
    <div class="container">
        <div class="edit-profile-section">
            <div class="content-box">
                <h1>Payment Successful</h1>
                <p>Thank You for Your Order</p>
                <button class="market-button" onclick="location.href='market'">Back to Market</button>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer>
        <div class="footer-container">
            <div class="footer-item">
                <h2>WeThrift</h2>
                <p>Use and utilize existing used items. #SAVEGLOBAL</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer-item">
                <h3>Platform</h3>
                <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="market.html">Market</a></li>
                    <li><a href="event.html">Event</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Help</h3>
                <ul>
                    <li><a href="#">How do I update my account information?</a></li>
                    <li><a href="#">How do I track my order?</a></li>
                    <li><a href="#">What are the shipping options?</a></li>
                </ul>
            </div>
            <div class="footer-item">
                <h3>Contact</h3>
                <p><a href="mailto:support@wethrift.com">support@wethrift.com</a></p>
                <p>(123) 456-7890</p>
                <p>123 Main Street, Suite 456, City, State, ZIP Code</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; WeThrift 2024-2026. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
