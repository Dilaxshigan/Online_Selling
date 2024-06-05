<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="./assets/styles/style.css">
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

    <section class="about">

    <h1 class="heading-title">About Us</h1>

    <div class="container">

        <div class="video">
        <video autoplay muted loop>
            <source src="../assets/images/about.mp4" type="video/mp4">
        </div>

        <div class="caption">
            <h3>Why choose us?</h3>

            <p>Offer a diverse range of books across various genres and categories to 
               cater to all types of readers.</p>

            <p>Provide competitive prices and regular discounts to ensure customers 
               get the best value for their money.</p>

            <p>Provide comprehensive book descriptions, reviews, and ratings to help customers 
               make informed decisions.</p>

               <div class="icons-container">
                   <div class="icons">
                    <i class="fa fa-book"></i>
                       <span>Readable Books</span>
                   </div>

                   <div class="icons">
                    <i class="fa fa-shopping-bag"></i>
                       <span>Affordable Price</span>
                   </div>

                   <div class="icons">
                    <i class="fa fa-headphones"></i>
                       <span>24/7 Services</span>
                   </div>
               </div>

        </div>

    </div>    

    </section>

    <section class="reviews">

        <h1 class="heading-title">What our customer says</h1>

        <div class="swiper reviews-slider">

           <div class="swiper-wrapper">
                  
              <div class="swiper-slide slide">
                   <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                   </div>
                   <p>I had an amazing experience purchasing books from this site. 
                    The selection is vast and the checkout process is seamless. Will 
                    definitely shop here again!</p>

                    <h3>John Deo</h3>
                    <span>Customer</span>
                    <img src="../assets/images/user3.png" alt="">
              </div>

              <div class="swiper-slide slide">
                   <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <!-- <i class="fas fa-star"></i> -->
                   </div>
                   <p>The customer support team was incredibly helpful when 
                    I had an issue with my order. They resolved it quickly and 
                    professionally. Excellent service!</p>

                    <h3>Sarah William</h3>
                    <span>Customer</span>
                    <img src="../assets/images/user2.png" alt="">
              </div>

              <div class="swiper-slide slide">
                   <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <!-- <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i> -->
                   </div>
                   <p>The website is very user-friendly and easy to navigate. 
                    Finding and purchasing books was a breeze. A fantastic 
                    online shopping experience!</p>

                    <h3>Dora Shake</h3>
                    <span>Customer</span>
                    <img src="../assets/images/user1.png" alt="">
              </div>

              <div class="swiper-slide slide">
                   <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                   </div>
                   <p>I was pleasantly surprised by the competitive prices 
                      on this site. I saved a lot compared to  other online bookstores.
                      Highly recommend for budget readers.</p>

                    <h3>Leo Das</h3>
                    <span>Customer</span>
                    <img src="../assets/images/user4.png" alt="">
              </div>

              <div class="swiper-slide slide">
                   <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <!-- <i class="fas fa-star"></i> -->
                   </div>
                   <p>I had to return a book I mistakenly ordered, 
                    and the return process was hassle-free. The policy is 
                    made the experience stress-free.</p>

                    <h3>Ajith Kumar</h3>
                    <span>Customer</span>
                    <img src="../assets/images/user5.png" alt="">
              </div>

           </div> 

           <!-- <div class="swiper-pagination"></div> -->

        </div>

    </section>

    <section class="forms">

    <h1 class="heading-title">Get in touch</h1>
         
        <div class="contact">

              <div class="contact-col">

                   <h3>Send us message <img src="../assets/images/msg-icon.png" alt=""/></h3>  

                       <p>Online bookstores commonly provide various contact information, 
                          including physical addresses, phone numbers, email addresses, 
                          and websites, to ensure effective communication. These details enhance 
                          accessibility and transparency, enabling customers to easily reach 
                          out with inquiries, seek support, or explore collaboration opportunities. 
                          By offering multiple contact options, online books can better assist their 
                          customers, resolve issues promptly, and build stronger relationships with their audience.</p>

                          <ul>
                                  <li><img src="../assets/images/mail-icon.png" alt="" />info@bookstore.com</li>
                                  <li><img src="../assets/images/phone-icon.png" alt="" />+94 7733331112</li>
                                  <li><img src="../assets/images/location-icon.png" alt="" /> Trinco, Sri Lanka</li>
                          </ul>
              </div>

              <div class="contact-col">
                     
                   <form method="POST" id="form">

                           <input type="hidden" name="access_key" value="caf93909-3b1b-4ada-9537-4ea8228a0f3a">

                           <label>Your Name</label>
                           <input type='text' name='name' placeholder='Enter your name' required/>

                           <label>Phone Number</label>
                           <input type='tel' name='phone' placeholder='Enter your mobile number' required/>

                           <label>Write your messages here</label>
                           <textarea name="message" rows="6" placeholder='Enter your messages' required></textarea>

                           <button type="submit" class="btn">Submit Now</button>

                           <div id="result" class="result"></div>

                   </form>
              </div>

        </div>

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