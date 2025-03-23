<?php session_start(); require '../includes/header.php'; ?>


        <div class="form-container">

                <h3>Password Reset to Continue Cylvenda Food Point</h3>
                <?php 
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form action="../handler/calls.php" method="post">
                <div class="form-control ">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Enter your Email">
                            <small></small>
                    </div>


                    <div class="form-control">
                        <label for="phone">Phone Number:</label>
                        <input type="tel" name="phone" id="phone" placeholder="Enter your Phone number">
                        <small></small>
                    </div>
                    
                    <div class="form-control">
                        <label for="password">New Password:</label>
                        <input type="password" name="new_password" id="password" placeholder="Enter your new password">
                        <small></small>
                    </div>

                    <div class="form-control">
                        <label for="password">Comfirm New Password:</label>
                        <input type="password" name="password_comfirm" id="password" placeholder="Comfirm your new password">
                        <small></small>
                    </div>


                    <button  id="reset" name="reset" type="submit">Reset Password</button>

                    <p class="small"> <span class="forget-it">If You Change Your Mind? <a href="login">Login Here</a></span></p>
                </form>
            </div>
            <script defer src="../style_actions/js.js"></script>
    <?php include '../includes/index_footer.php' ?>