<?php
    require_once("template/header.php");
?>
    <div class="row justify-content-center">

    <!-- Área de Login -->
        <div class="col-md-6">
            <h2>Login</h2>
            <form action="authservice.php" method="post">
                <input type="hidden" name="type" value="login">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
            </form>
        </div>


        <div class="col-md-6">
            <h2>Create Account</h2>
            <form action="authservice.php" method="post">
                <div class="mb-3">
                    <label for="new_nome" class="form-label">Name</label>
                    <input type="nome" class="form-control" id="new_nome" required>
                </div>
                <input type="hidden" name="type" value="register">
                <div class="mb-3">
                    <label for="new_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="new_email" required>
                </div>
                <div class="mb-3">
                    <label for="new_password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="new_password" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Re-enter password</label>
                    <input type="confirm_password" class="form-control" id="confirm_password" required>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </div>
<?php
require_once("template/footer.php");
?>