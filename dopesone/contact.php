<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
    <title>Dopesone Fx - Contact Us</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
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
            left: 0;
            width: 250px;
            height: 100%;
            background-color: black; /* Sidebar background color */
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            display: none; /* Hidden by default */
            z-index: 100; /* Ensure it's above other content */
        }

        .sidebar.open {
            display: block; /* Show the sidebar */
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

        /* Contact Section Styling */
        .contact-section {
            padding: 40px;
            background-color: white;
            border-radius: 8px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-section h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .contact-card {
            margin-bottom: 20px;
        }

        .contact-card p a {
            text-decoration: none; /* Remove underline */
            margin-right: 10px; /* Spacing between icons */
        }

        .contact-card p a:hover {
            text-decoration: underline; /* Underline on hover */
        }

        .contact-card p i {
            margin-right: 5px; /* Spacing between icon and text */
            color: inherit; /* Ensures the icon uses the original color */
        }

        /* Form Styling */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-weight: 600;
        }

        input, textarea {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        button {
            padding: 10px 15px;
            font-size: 16px;
            font-weight: 600;
            background-color: #0072b1;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #005f8c;
        }

        .thank-you-message {
            text-align: center;
            color: green;
            font-size: 18px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                display: none; /* Hide nav links on smaller screens */
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

    <section class="contact-section">
        <h2>Contact Us</h2>
        <div class="contact-info">
            <div class="contact-card">
                <h3>Get in Touch</h3>
                <p>Phone: 0791424940 / 0785375311</p>
                <p>Email: <a href="mailto:magotherichard@gmail.com">magotherichard@gmail.com</a></p>
                <p>Connect with us on:</p>
                <p>
                    <a href="https://t.me/DopeFx" target="_blank"><i class="fab fa-telegram-plane"></i> Telegram</a> |
                    <a href="https://wa.me/0785375311" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp</a> |
                    <a href="https://instagram.com/DopeFx" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                </p>
            </div>
        </div>

        <h3>Send us a message</h3>
        <form action="contact.php" method="POST" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            
            <button type="submit">Send Message</button>
        </form>

        <!-- PHP Mailer Logic -->
        <?php
        // Include PHPMailer classes
        require 'vendor/autoload.php';  // For Composer installation

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Create an instance of PHPMailer
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                               // Enable SMTP authentication
                $mail->Username   = 'joegichangi@gmail.com';             // SMTP username
                $mail->Password   = 'sqlh qwqp fywc wuqw';                       // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption
                $mail->Port       = 587;                                // TCP port to connect to

                // Recipients
                $mail->setFrom($_POST['email'], $_POST['name']);
                $mail->addAddress('magotherichard@gmail.com');     // Add your recipient

                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'New Contact Message';
                $mail->Body    = 'Name: ' . $_POST['name'] . '<br>Email: ' . $_POST['email'] . '<br>Message: ' . $_POST['message'];

                // Send email
                $mail->send();
                echo '<p class="thank-you-message">Thank you! Your message has been sent.</p>';
            } catch (Exception $e) {
                echo '<p class="thank-you-message" style="color: red;">Message could not be sent. Mailer Error: ' . $mail->ErrorInfo . '</p>';
            }
        }
        ?>
    </section>

    <div class="thank-you-message">
        <p style = "color:#0072b1">Thank you for sending us your message!</p>
    </div>


    <script>
        // JavaScript to toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('open'); // Toggle the open class
        }
    </script>
</body>
</html>
