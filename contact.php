
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TipToe Soles | Contact</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="TipToe Sole">
  <meta property="og:description" content="TipToe Sole contact us page">
  <link rel="icon" href="./favicons/favicon.ico" sizes="32*32" />
  <link rel="apple-touch-icon" href="./favicons/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="./favicons/site.webmanifest">

  <link rel="stylesheet" href="./style.css" type="text/css">
  <!-- custom Google fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin >
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
  <!-- skip to main content -->
  <a href="#main-content" class="skip-link">Skip to main content</a>
  <!-- header -->
  <header class="flow">
    <!-- logo, profile and shopping-cart -->
    <div class="action">
      <a href="./index.html"><img src="./img/logo.png" alt="TipToe Soloe logo" width="64" height="64"></a>
      <div class="icon-button-container">
        <button aria-labelledby="profile">
          <svg viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="12" cy="12" r="9"></circle>
            <circle cx="12" cy="10" r="3"></circle>
            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
          </svg>
          <span hidden id="profile">Profile</span>
        </button>
        <button aria-labelledby="wish-list">
          <svg viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round" aria-hidden="true" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
          </svg>
          <span hidden id="wish-list">Wish list</span>
        </button>
        <button aria-labelledby="shopping-cart">
          <svg viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
            stroke-linejoin="round" aria-hidden="true" class="icon">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <circle cx="6" cy="19" r="2"></circle>
            <circle cx="17" cy="19" r="2"></circle>
            <path d="M17 17h-11v-14h-2"></path>
            <path d="M6 5l14 1l-1 7h-13"></path>
          </svg>
          <span hidden id="shopping-cart">Shopping cart</span>
        </button>
      </div>
    </div>
    <div class="nav-container">
      <!-- logo, profile and shopping-cart ends here -->
      <nav aria-label="primary navigation">
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li>
            <a href="./products.html">Products</a>
          </li>
          <li><a href="./services.html">Services</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
          <li><a href="./about.html">About Us</a></li>
        </ul>
      </nav>
      <form role="search">
        <svg class="search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <circle cx="10" cy="10" r="7"></circle>
          <line x1="21" y1="21" x2="15" y2="15"></line>
        </svg>
        <input type="search" aria-description="Search for available products." placeholder="Search for products..."
          id="search" />
        <label for="search" class="visually-hidden">Search for products</label>
        <button class="visually-hidden">Submit</button>
      </form>
    </div>
  </header>

  <!-- main -->
  <main class="flow" id="main-content" tabindex="-1">
    <h1>Contact Us</h1>
    <?php
    //checking if the user has submitted the form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $email = $_POST['message'];
        echo "<div role='alert'>Thank you, <b>{$firstName} {$lastName}</b>. We will get back to you to ASAP</div>";
    }
    ?>
    <table class="contact-table">
      <tbody>
        <tr>
          <th>Name:</th>
          <td>TipToe Pty. Ltd.</td>
        </tr>
        <tr>
          <th>Address:</th>
          <td>
            <address>19 Tanner Street, Carey Park, Texas USA</address>
          </td>
        </tr>
        <tr>
          <th>Telephone:</th>
          <td><a href="tel:02 4939 5050">(02) 4939 5050</a></td>
        </tr>
        <tr>
          <th>Email Address:</th>
          <td>tiptoe@soles.com.au</td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <th scope="col">Social media handles:</th>
          <td></td>
        </tr>
        <tr>
          <td>Facebook</td>
          <td>Facebook.com/tiptoe-soles</td>
        </tr>
        <tr>
          <td>Instagram</td>
          <td>Instagram.com/tiptoe-soles</td>
        </tr>
        <tr>
          <td>Twitter</td>
          <td>Twitter.com/tiptoe-soles</td>
        </tr>
      </tbody>
    </table>
    <section class="p-max flow">
      <h2>Message Us</h2>
      <p>
        <b>We are here to be your sole mates</b>. If you have any enquires,
        please feel free to send us a message using the form below.
      </p>
      <form class="flow contact-form" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="input-wrapper">
          <div class="control">
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="fname" value="" placeholder="Enter your first name" required >
          </div>
          <div class="control">
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="lname" value="" placeholder="Enter your last name" />
          </div>
        </div>
        <div class="input-wrapper">
          <div class="control">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="" required placeholder="Your email address">
          </div>
          <div class="control">
            <label for="mobile">Mobile:</label>
            <input type="tel" name="mobile" id="mobile" value="" required placeholder="Your mobile number">
          </div>
        </div>
        <div class="input-wrapper">
          <div class="control">
            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="5" cols="33"
              placeholder="Enter your message or any enquiry you have"></textarea>
          </div>
        </div>
        <input type="submit" value="Submit" class="button" />
      </form>
    </section>
  </main>

  <!-- footer -->
  <footer>
    <ul>
      <li>
        <a href="./services.html#delivery-policy">Delivery Policy</a>
      </li>
      <li>
        <a href="./services.html#exchange-policy">Exchange Policy</a>
      </li>
      <li><a href="./services.html#return-policy">Return Policy</a></li>
      <li><a href="./contact.php">Contact Us</a></li>
    </ul>
    <div class="social">
      <a href="https://www.facebook.com">
        <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          fill="none" stroke-linecap="round" stroke-linejoin="round">
          <title>Facebook link</title>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
        </svg>
      </a>
      <a href="https://www.instagram.com">
        <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          fill="none" stroke-linecap="round" stroke-linejoin="round">
          <title>Instragram link</title>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <rect x="4" y="4" width="16" height="16" rx="4"></rect>
          <circle cx="12" cy="12" r="3"></circle>
          <line x1="16.5" y1="7.5" x2="16.5" y2="7.501"></line>
        </svg>
      </a>
      <a href="https://www.twitter.com">
        <svg width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
          stroke-linecap="round" stroke-linejoin="round">
          <title>Twitter link</title>
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <path
            d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z">
          </path>
        </svg>
      </a>
    </div>
    <span>&#169; TipToe Soles PTY LTD</span>
  </footer>
  <script src="/index.js"></script>
</body>

</html>
