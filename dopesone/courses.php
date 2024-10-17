<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <title>Dopesone Fx - Courses</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            transition: margin-left 0.5s; /* Smooth transition for the sidebar */
        }

        /* Navigation Bar Styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: black; /* Dark semi-transparent background */
            position: relative; /* For absolute positioning of the nav */
        }

        /* Logo Styling */
        .logo {
            display: flex;
            align-items: center;
            cursor: pointer; /* Make the logo clickable */
        }

        .logo img {
            width: 50px; /* Adjust logo size */
            margin-right: 10px; /* Space between logo and text */
        }

        .brand-name {
            font-size: 28px;
            font-weight: 600;
            color: #0072b1; 
        }

        /* Sidebar Styling */
        .sidebar {
            position: fixed;
            top: 0;
            left: -250px; /* Hidden by default */
            width: 250px;
            height: 100%;
            background-color: black; /* Sidebar background color */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            transition: left 0.3s; /* Smooth transition for the sidebar */
            z-index: 100; /* Ensure it's above other content */
        }

        .sidebar.open {
            left: 0; /* Show the sidebar */
        }

        /* Hide sidebar on larger screens */
        @media (min-width: 768px) {
            .sidebar {
                display: none; /* Ensure it's completely hidden */
            }
        }

        /* Sidebar close button */
        .cancel-btn {
            font-size: 24px;
            color: #fff; /* Close button color */
            cursor: pointer; /* Pointer cursor on hover */
            position: absolute; /* Position absolutely */
            top: 20px; /* Align to the top */
            right: 20px; /* Align to the right */
        }

        /* Sidebar links styling */
        .sidebar ul {
            list-style: none;
            padding: 0; /* Remove default padding */
            margin: 40px 0 0; /* Ensure some space for the close button */
        }

        .sidebar ul li {
            margin: 15px 0; /* Space between items */
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #fff; /* Link color */
            font-weight: 600;
            transition: color 0.3s ease; /* Transition for hover effect */
        }

        .sidebar ul li a:hover {
            color: #0072b1; /* Change to blue on hover */
        }

        /* Navigation links styling */
        nav {
            display: flex; /* Flex layout for nav items */
            gap: 20px; /* Space between links */
        }

        nav a {
            color: #fff; /* Link color */
            text-decoration: none; /* Remove underline */
            font-weight: 600; /* Bold links */
            transition: color 0.3s; /* Transition for hover effect */
        }

        nav a:hover {
            color: #0072b1; /* Change to blue on hover */
        }


        /* Responsive Course Cards */
        @media (max-width: 768px) {

            nav {
                display: none; /* Hide nav links on smaller screens */
            }
        }

        /* Responsive Navigation */
        @media (max-width: 768px) {
            header {
                padding: 10px; /* Adjust padding on smaller screens */
            }
        }

        /* Policy and Disclaimer Styling */
        .policy-disclaimer {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .policy-disclaimer h3 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo" onclick="toggleSidebar()">
            <img src="your-logo.png" alt="Dopesone Fx Logo"> <!-- Replace with your logo -->
            <span class="brand-name">Dopesone Fx</span>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="courses.php">Courses</a>
            <a href="contact.php">Contact Us</a>
        </nav>
    </header>

    <div class="sidebar" id="sidebar">
        <span class="cancel-btn" onclick="toggleSidebar()">&times;</span> <!-- Close button -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <section>
        <h2>Our Courses</h2>
        <p class="course-description">Our courses are designed to equip both beginner and advanced traders with the skills needed to succeed in the forex market. 
            From understanding the basic principles of forex trading to mastering risk management and trading psychology, our curriculum provides a comprehensive learning experience. 
            Whether you're just starting out or looking to refine your skills, our expert-led courses cover all key aspects of successful trading.</p>
            
        <div class="course-cards">
            <div class="course-card">
                <h3>Introduction to Forex Trading</h3>
                <p>This course covers the basics of forex trading, including how the market operates and key terminology used by traders.</p>
            </div>
            <div class="course-card">
                <h3>Market Structure and Mapping</h3>
                <p>Learn how to analyze the market's structure, identify trends, and map out potential trading opportunities.</p>
            </div>
            <div class="course-card">
                <h3>Areas of Liquidity and Supply and Demand</h3>
                <p>This module explains how supply and demand zones work, and how liquidity areas influence price movement in the market.</p>
            </div>
            <div class="course-card">
                <h3>Types of Areas of Liquidity</h3>
                <p>Deep dive into different types of liquidity zones and how they can be used to make informed trading decisions.</p>
            </div>
            <div class="course-card">
                <h3>Time Coordination</h3>
                <p>Master the art of synchronizing trading strategies with the optimal market timing for better results.</p>
            </div>
            <div class="course-card">
                <h3>Risk Management</h3>
                <p>This course teaches how to minimize risks, set stop losses, and protect your capital while trading forex.</p>
            </div>
            <div class="course-card">
                <h3>Entry Rules and Trade Journaling</h3>
                <p>Discover specific entry rules for trades and the importance of maintaining a trade journal to track your performance.</p>
            </div>
            <div class="course-card">
                <h3>Trading Psychology</h3>
                <p>Understand the psychological aspects of trading and how to manage emotions for successful trading.</p>
            </div>
        </div>

        <div class="policy-disclaimer">
            <h3>Policy</h3>
            <p>Our commitment is to provide quality education and support to our students. However, we expect a 100% commitment from our students. 
            We invest time, money, and resources into our students. If you have any questions regarding our courses or policies, please contact us!</p>
            <h3>DISCLAIMER</h3>
            <p>The information provided in our courses is for educational purposes only and should not be considered financial advice. 
            Always conduct your own research and consult with a professional before making any trading decisions.</p>
        </div>
    </section>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("open"); // Toggle the sidebar visibility
            sidebar.style.display = sidebar.classList.contains("open") ? "block" : "none"; // Show or hide sidebar
            document.body.style.marginLeft = sidebar.classList.contains("open") ? "250px" : "0"; // Adjust body margin
        }
    </script>
</body>
</html>
