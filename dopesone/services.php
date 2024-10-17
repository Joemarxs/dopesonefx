<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <title>Dopesone Fx - Services</title>
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

        /* Hero Section Styling */
        .hero {
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            max-width: 900px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .service-card {
            flex: 1 1 calc(50% - 20px); /* Adjust width of service cards */
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        /* Responsive Service Cards */
        @media (max-width: 768px) {
            .service-card {
                flex: 1 1 calc(100% - 20px); /* Stack cards on smaller screens */
            }

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

    <section class="hero">
        <h2>Our Services</h2>
        <div class="service-cards">
            <div class="service-card">
                <h3>Trading Signals</h3>
                <p>We provide our clients with our view in the market and the trades that we take so that they can also take the trades on their own as they learn.</p>
            </div>
            <div class="service-card">
                <h3>Learning Materials</h3>
                <p>We provide our clients with learning materials which they can read or refer to sharpen their trading skills as we progress together. We have our own trading books which we have journaled some of our latest trades and the concepts used in taking those trades. We provide educational content that helps beginners understand the forex markets.</p>
            </div>
            <div class="service-card">
                <h3>Questions</h3>
                <p>Our clients are free to ask any questions which they haven’t understood or any other type of Forex questions.</p>
            </div>
            <div class="service-card">
                <h3>Market Analysis</h3>
                <p>We also offer live pre-market analysis to our members. The analysis includes both technical and fundamental analysis. We also hold webinars to backtest and help our clients understand more about our strategy.</p>
            </div>
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
