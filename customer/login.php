<?php   session_start(); require '../includes/header.php';  ?>


        <div class="form-container">
                <h3>Login to Continue Cylvenda Food Point</h3>
                <?php 
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>
                <form action="../handler/calls.php" id="form" method="post">

                <div class="form-control ">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" placeholder="Enter your Email">
                            <small></small>
                    </div>

                    <div class="form-control">
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                        <small></small>
                    </div>
                    
                    <button id="login" name="login" type="submit">Login</button>

                    <p>Not a member? <a href="register">Register Now</a>  <a class="forget" href="reset">Forget Your Password</a></p>   
            </div>
            </form>
    <?php include '../includes/index_footer.php' ?>