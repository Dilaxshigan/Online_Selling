<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    <section class="header">
        <a href="books.php" class="logo">Read</a>
        
        <nav class="navbar">
            <a href="books.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Price</a>
            <a href="order.php">Order</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars">

        </div>

    </section>

       <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background:url('../assets/images/bg1.jpg')  no-repeat">
                    <div class="caption">
                           <span>Explore, Interpret, Peruse</span>
                           <h3> Reading makes the man perfect...</h3>
                           <a href="package.php" class="btn">Buy more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('../assets/images/bg2.jpg') no-repeat">
                    <div class="caption">
                           <span>Explore, Interpret, Peruse</span>
                           <h3>Reading unveils hidden truths...</h3>
                           <a href="package.php" class="btn">Buy more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url('../assets/images/bg3.jpg') no-repeat">
                    <div class="caption">
                           <span>Explore, Interpret, Peruse</span>
                           <h3> Reading ignites imagination...</h3>
                           <a href="package.php" class="btn">Buy more</a>
                    </div>
                </div>

            </div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="booking">

    <h1 class="heading-title">Booking Now</h1>

    <form action="book_form.php" method="post" class="book-form">

          <div class="flex">

            <div class="inputbox">
                <span>Name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>

            <div class="inputbox">
                <span>Email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>

            <div class="inputbox">
                <span>Phone No :</span>
                <input type="number" placeholder="enter your phone no" name="phone">
            </div>

            <div class="inputbox">
                <span>Address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>

            <div class="inputbox">
                  <span>Which package:</span>
                      <select name="packages" class="packages" required>
                           <option value="" disabled selected hidden> - Select Packages -</option>
                           <option value="Cult literature bundle">Cult literature bundle</option>
                           <option value="So Career bundle">So Career bundle</option>
                           <option value="Non-Fiction sights">Non-Fiction sights</option>
                           <option value="Adult Must-Reads">Adult Must-Reads</option>
                           <option value="Mystery & Thriller Set">Mystery & Thriller Set</option>
                           <option value="Fantasy Adventure Pack">Fantasy Adventure Pack</option>
                     </select>
            </div>

            <div class="inputbox">
                <span>How many :</span>
                <input type="number" placeholder="number of bundles" name="books">
            </div>

            <input type="submit" value="submit" class="btn" name="send">

          </div>
    </form>
   
   </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                     <a href="books.php"><i class="fas fa-angle-right "></i>Home</a>
                     <a href="about.php"><i class="fas fa-angle-right "></i>About</a>
                     <a href="package.php"><i class="fas fa-angle-right "></i>Price</a>
                     <a href="order.php"><i class="fas fa-angle-right "></i>Order</a>
            </div>

            <div class="box">
                   <h3>extra links</h3>
                      <a href="#"><i class="fas fa-angle-right "></i>ask questions</a>
                      <a href="#"><i class="fas fa-angle-right "></i>about us</a>
                      <a href="#"><i class="fas fa-angle-right "></i>privacy policy</a>
                      <a href="#"><i class="fas fa-angle-right "></i>terms of use</a>
            </div>

            <div class="box">
                   <h3>contact info</h3>
                      <a href="#"><i class="fas fa-phone "></i> +94 7733331112</a>
                      <a href="#"><i class="fas fa-phone "></i> 026 7733331112</a>
                      <a href="#"><i class="fas fa-envelope "></i> info@bookstore.com</a>
                      <a href="#"><i class="fas fa-map "></i> Trinco, Sri Lanka</a>
            </div>

            <div class="box">
                   <h3>follow us</h3>
                      <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                      <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                      <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                      <a href="#"><i class="fab fa-whatsapp"></i> whatsapp</a>
            </div>
        </div>

        <div class="credit">created by <span>Students of CIS</span> | all rights reserved! </div>

    </section>

     <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
     <script src="./assets/scripts/script.js"></script>
</body>
</html>