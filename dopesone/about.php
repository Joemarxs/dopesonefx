<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Ensure Font Awesome is included -->
    <title>Dopesone Fx - About Us</title>
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
            background-color: black; /* Dark background */
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
            background-color: black; /* Ensure sidebar has a background */
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

        /* Navigation links styling */
        .sidebar ul {
            list-style: none;
            padding: 0; /* Remove default padding */
            margin: 0; /* Ensure no default margin */
        }

        .sidebar ul li {
            margin: 15px 0; /* Space between items */
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .sidebar ul li a:hover {
            color: #0072b1; /* Change to blue on hover */
        }

        /* Cancel Button Styling */
        .cancel-btn {
            color: white;
            font-size: 24px;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 20px; /* Positioning at the top-right corner */
        }

        /* Navigation Links for Larger Screens */
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

        .info-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .info-card {
            flex: 1 1 calc(33% - 20px); /* Three columns layout */
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        /* Responsive Info Cards */
        @media (max-width: 768px) {
            .info-card {
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
        <span class="cancel-btn" onclick="toggleSidebar()">&times;</span> <!-- Cancel button -->
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>

    <section class="hero">
        <h2>About Us</h2>
        <div class="info-cards">
            <div class="info-card">
                <h3>Mission</h3>
                <p>Our mission is to empower traders of all levels with the tools, knowledge, and support they need to thrive in the ever-changing forex market. We are committed to providing cutting-edge technology, actionable market insights, and a user-centric trading platform that enhances your ability to make informed decisions. By fostering a transparent and educational trading environment, we aim to build lasting relationships with our clients, guiding them towards sustainable success in the forex market.</p>
            </div>
            <div class="info-card">
                <h3>Vision</h3>
                <p>Our vision is to become a leading force in the global forex trading community, recognized for our unwavering dedication to client success and innovation. As a new and dynamic player in the industry, we aspire to break down barriers for aspiring traders, making forex trading accessible, understandable, and profitable for all. We envision a future where our clients not only achieve their financial goals but also grow as confident, skilled traders who can navigate the complexities of the forex market with ease and confidence.</p>
            </div>
            <div class="info-card">
                <h3>Why choose us?</h3>
                <p>Our trading community has gained experience through learning for the past three years and we have come up with great insights on how the forex market behaves mostly. As we now put our learning into real work, we want to embark on this journey with dedicated traders who are starting or who are willing to start this trading journey. Professional support is available to help you with your technical questions. Dope Fx course + Trading Journal.</p>
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
