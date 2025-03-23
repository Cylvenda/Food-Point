<?php 

    require_once '../includes/connection.php';
    require_once '../handler/products.php';

    if(!isset($_SESSION['email'])){
        $user_id = $_SESSION['user_id'];
        header('Location: ../index.html');
    }

    include '../includes/post_login_header.php';
?>

                    <?php
                    if(isset($_SESSION['msg']) ){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
    <div class="card-container">

        
        <div id="cartContainer" class="container-cart ">
            <div class="cart-head">
                <h3>your Cart Items</h3>
                <button class="closeCart" id="closeCart">Close</button>
            </div>
        
                <div class="cartreceiver">
                <?php $user_id = $_SESSION['user_id']; get_cart($conn, $user_id) ?>
                </div>
            
            <div class="checkout">
                <?php $user_id = $_SESSION['user_id']; get_pricing_details($conn, $user_id) ?>
            </div>    
            
    </div>


            <div id="productShow" class="product-display">
                    <?php   get_product($conn); ?>
            </div>

                <!-- cards -->
         <div class="cards-continer-self">
            <div class="card">
                <img src="../images/background/cceg.jpg">
                 <h3>Cylvenda Food Point</h3>
                 <p class="text-justify">
                    Here we save you with what your thinking, and what you want. In Our Food Point all we 
                    have is for you and your hungry.what you have to do is click button. </p>
            </div>
            <div class="card">
                <img src="../images/background/mixed_chips_nyam.jpg">
                <h3>Cylvenda Food Point</h3>
                <p class="text-justify">
                   Here we save you with what your thinking, and what you want. In Our Food Point all we 
                   have is for you and your hungry.what you have to do is click button. </p>
            </div>
            <div class="card">
                <img src="../images/background/shawarma_27-20241229-0001.jpg">
                <h3>Cylvenda Food Point</h3>
                <p class="text-justify">
                   Here we save you with what your thinking, and what you want. In Our Food Point all we 
                   have is for you and your hungry.what you have to do is click button. </p>
            </div>
            <div class="card">
                <img src="../images/background/on_pain.jpg">
                <h3>Cylvenda Food Point</h3>
                <p class="text-justify">
                   Here we save you with what your thinking, and what you want. In Our Food Point all we 
                   have is for you and your hungry.what you have to do is click button. </p>
            </div>
         </div>
        <!-- cards ends -->
 

    <div class="container-service">
        <img src="../images/logo/logo.jpg">
        <div class="container-about">
            
                    <h2>ABOUT US: CYLVENDA FOOD POINT</h2>
                    <p class="text-justify about">
                        <b>Brother K Food Point</b> is restaurant that provides the service of different kinds of foods.
                        Our duty is to make sure that we serves people with the kinds of food the need, the main purpose 
                        of our restsurant is to make sure that, our customers feeds their stomach and removes all kinds 
                        of hungry, and made you to continue with other daily duties. 
                        Also Our Restaurant Receives Orders form this website, You have to register if you were not a member
                        and login now to press your first order, for new member there is a lot of different delicious from our
                        Restaurant. If you make an order from our website, We Ensure the security and your order will reach you
                        at a time. <br><br>
                        <strong>NOTE THAT: </strong><i> We are only available in <b>Dodoma city center</b> and all delivery will be made 
                        for people who are in Dodoma city center. </i><br><br>
                        But you can order us to cook in your event like Engagements, Birthday party, Anniversary and other events which 
                        includes low number of people. For now are only available in Dodoma, so any order form Dodoma will be 
                        considered. 
                    </p>
        </div>
    </div>

</div>
<button id="top" class="top">Top</button>
<footer>
    <div class="footer">
        <div class="container-footer">

            <div class="footer-contact">
                <div class="policy">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="#">FAQ</a>
                    <a href="#">Legal</a>
                </div>
            </div>


            <div class="footer-contact">
            <h3>CONTACT US:</h3>
                <div class="address">
                Address: Dodoma-Tanzania <br>
                Dodoma city-center <br>
                Phone: <a href="tel:+255780598902">+255780598902</a> <br>
                Email: <a href="mailto:brayanmlawa0917@gmail.com">cylvendafoodpoint@cylvenda.com</a>
                    </div>
            </div>


            <div class="footer-contact">
                <h3>CONNECT WITH US ON:</h3>
                <div class="social">
                    <a href="#"><img src="../images/icons/icons8-whatsapp-48.png" alt="social media"></a>
                    <a href="#"><img src="../images/icons/icons8-instagram-48.png" alt="social media"></a>
                    <a href="#"><img src="../images/icons/icons8-twitterx-48.png" alt="social media"></a>
                    <a href="#"><img src="../images/icons/icons8-youtube-48.png" alt="social media"></a>
                    <a href="#"><img src="../images/icons/icons8-facebook-48.png" alt="social media"></a>
                </div>
            </div>

        </div>

    </div>

    <div class="copy">
    <div class="dev">
        &copy;2025 Brother K Food Point <br>
        <a href="#">Designed and Developed by cylvenda</a> <br><br>
        
        </div>
</div>

</footer>
    <script defer src="../script/js.js"></script>

</body>
</html>
  
    