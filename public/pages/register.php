<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg" style="width: 100%; max-width: 400px;">
        <div class="card-body">
            <h3 class="card-title text-center mb-4">Register</h3>
            <form action="\pages\forms\register.php" method="POST">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" name="nm_user" placeholder="Type your e-mail" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="nm_email" placeholder="Type your e-mail" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control" name="cd_password" placeholder="Type your password"
                        required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <div class="text-center mt-3">
                    <a href="?page=login">Already have an account??</a>
                </div>
            </form>
        </div>
    </div>
</div>