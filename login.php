<?php
require_once 'header.php';
?>
        <div class="container">
            <div class="row-fluid">
                <div class="span4"> </div>
                <div class="span4">
                    <form class="form-signin" name="login" action="cek_login.php" method="POST">
                        <h2 class="form-signin-heading"><center>Login Administrator</center></h2>
                        <label class="control-label" for="inputEmail">Username</label>
                        <input class="input-block-level" placeholder="Username" type="text" name="id">
                        <label class="control-label" for="inputPassword">Password</label>
                        <input class="input-block-level" placeholder="Password" type="password" name="password">
                        <label class="checkbox">
                            <input value="remember-me" type="checkbox"> Remember me
                        </label>
                        <button type="submit" class="btn" name="submit">Sign in</button>
                    </form>
                </div>

                <div class="span4"> </div>
            </div>
        </div>

        <hr>

                    </div> <!-- /container -->
                    <?php
                    require_once 'footer.php';
                    ?>