
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAUNDRY</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <header>
    <div></div>
        <div>
        <h1>Laundry Management System</h1>
        <p>Quick and Clean Laundry Service in Campus!</p>
        </div>

 </header>

 <nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="services.php">Services</a></li>
        <li><a href="pricing.php">Pricing</a></li>
        <li><a href="contact.php">Contact Us</a></li>
    </ul>
    </nav>

<main> 
    //the description here using generative AI
    <section>
    <h2>Welcome to Our Laundry Management System</h2>
    <p>Drop point: Campus Laundry Center, Building A, Room 101</p>
    <p>Opening Hours: Monday to Friday, 8:00 AM - 6:00 PM</p>
    <h3>Why Choose Us?</h3>
    <div>
        <table id="event_table" width="100%" border="1">
        <tr class="table-header">
        <th>Convenient pick-up and delivery services</th>
        <th>Eco-friendly cleaning methods</th>
        <th>Affordable pricing plans</th>
        <th>Experienced and professional staff</th>
    </tr>
    </table>
    </div>
    <p>Get started today by exploring our services and pricing options. We look forward to serving you!</p>
</section>

<section>
    <h3>Use our servieces now!</h3>
    <form action="process.php" method="POST">
        <div>
        <label for="name" >Name:</label>
        <input type="text" id="name" name="name" required autocomplete="name" placeholder="Ain Najma">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required autocomplete="email" placeholder="you@example.edu">
</div>

<div>
    <label for="phone">Phone</label><br>
    <input type="tel" id="phone" name="phone" required autocomplete="tel" placeholder="+60 12- 345 6789">
</div>

<div>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password" required minlength="6" autocomplete="new-password" placeholder="Choose a password">
</div>

<div>
        <label>Select Service:</label>
        <input type="checkbox" name="wash_fold" value="wash_fold"> Wash & Fold<br>
        <input type="checkbox" name="dry_cleaning" value="dry_cleaning"> Dry Cleaning<br>
        <input type="checkbox" name="ironing" value="ironing"> Ironing<br>
</div>

<div>
    <label>Quantity:</label>
    <input type="number" id="quantity" name="quantity" required min="1" max="10" value="1">
</div>

<div>
        <label for="pickup_date">Preferred Pickup Date:</label>
        <input type="date" id="pickup_date" name="pickup_date" required><br><br>
</div>

<div>
        <label for="notes">Additional Notes:</label><br>
        <textarea id="notes" name="notes" rows="4" cols="50" placeholder="Any special instructions?"></textarea>
</div>

<div>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button> 
</div>     
    </form>

    <p id="output"></p>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
        const form = document.querySelector("form");
        form.addEventListener("submit", function (e) {
        const checkboxes =
        document.querySelectorAll('input[name="event[]"]');
        let checked = false;

        // Check if at least one checkbox is selected
        for (const box of checkboxes) {
        if (box.checked) {
        checked = true;
        break;
        }
    
        if (!checked) {
            e.preventDefault(); // Stop form submission
            alert("Please select at least one recommended event.");
            const output = document.getElementById("output");
            output.style.color = "red";
            output.textContent = `Please select at least one recommended
            event.`;
            return;
        }
        // Get name and email
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        // Display thank you message
        const output = document.getElementById("output");
        output.style.color = "green";
        output.textContent = `Thank you ${name} (${email}) for registering! Drop your laundry at our service point.`;
        output.textContent += ' You will be notified when your laundry is ready for collection.';
        e.preventDefault(); // Stop form submission for this time
        });
    });

    <script>
        // Toggle invoice
        const navLinks = document.getElementById('nav-links');
        const invoiceBtn = document.getElementById('invoice-btn');
    </script>
    </script>

</section>
</main>
  <footer>
        <p>© 2025 Laundry Management System | Ain Najma BI23110285</p>
    </footer>