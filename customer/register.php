<?php session_start();  require '../includes/header.php'; ?>

        <div class="form-container">


                <h3>Register To Cylvenda Food Point</h3>
                <?php 
                    if(isset($_SESSION['msg']) ){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    }
                ?>
               <form id="form" action="../handler/calls.php" method="post">

                    <div class="form-control">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter your Username">
                <small></small>
            </div>

                    <div class="form-control ">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email">
                            <small></small>
                    </div>

                    <div class="form-control">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" name="phone" id="phone" value="+255" max-width="12" max-width="12" placeholder="Enter your Phone number">
                        <small></small>
                    </div>

                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <small></small>
                    </div>
                    
                    <button name="register" id="register" type="submit">Register</button>
                

                    <p>Already a member? <a href="login">Login Here</a></p>
                </form>
            </div>

<?php include '../includes/index_footer.php' ?>
