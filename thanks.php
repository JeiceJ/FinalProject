<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <main>
     
        <img
          src="images/AmiiboLogo.png"
          alt="Amiibo Logo"
          height="99"
          width="100"
        />
        <img src="images/amiiboverse.png" alt="Amiiboverse Logo" />

        <!-- Navigation Section -->
        <nav>
          <ul>
            <li><a href="index.html">Index</a></li>
            <li><a href="content.html">Content</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="history.html">History</a></li>
            <li><a href="facts.html">Facts</a></li>
          </ul>
        </nav>
      </header>


      <section>
        <h1>Contact Us</h1>
        <p>Thank you for your feedback. We will get back to you in less than 24 hours. </p>
        
          <label for="fullName">Name:</label>
          <input type="text" id="fullName" name="fullName" required><br>

          <label for="phone">Phone:</label>
          <input type="email" id="email" name="email" required><br>

          <label for="contact">Preferred method of contact:</label><br>
          <input type="radio" id="contactEmail" name="contact" value="email" checked>
          <label for="contactEmail">Email</label><br>
          <input type="radio" id="contactPhone" name="contact" value="phone">
          <label for="contactPhone">Phone</label><br>

          <label for="comment">Comments:</label><br>
          <textarea name="comment" id="comment" cols="50" rows="4"></textarea><br>

          <input type="submit" value="Submit">
      </section>
    </main>
  </body>
</html>