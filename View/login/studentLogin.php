<form method="post" action="../../Controller/controller.php">
    <input type="hidden" name="action" value="login_student">
    <div class="sign-in-htm">
            <div class="group">
                    <label for="user" class="label">Username</label>
                     <input class="input" name="name" type="text">
            </div>
            <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input class="input" name="password" type="password">
            </div>
        <div class="lower">
            <div class="group">
                    <input type="submit" class="button" value="Sign In">
            </div>
        </div>
            <div class="hr"></div>
            <div class="foot-lnk">
                <a href="../register/studentRegister.php" style="color: #D7D7D7"> 
                    Create An Account
                </a>
            </div>
    </div>
</form>