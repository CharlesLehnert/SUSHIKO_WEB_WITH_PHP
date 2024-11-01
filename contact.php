<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="assets/styles.css">

<section class="contact">
    <h1>Contact Us</h1>
    <p>If you have any questions or would like to make a reservation, feel free to contact us by filling out the form below:</p>
    
    <!-- Formspree Integration -->
    <form action="https://formspree.io/f/xvgooqrl" method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="message" placeholder="Your Message" rows="5"></textarea>

        <!-- Add this hidden field to enable Formspree to work -->
        <input type="hidden" name="_subject" value="New submission from SUSHIKO website">

        <button type="submit">Send Message</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
