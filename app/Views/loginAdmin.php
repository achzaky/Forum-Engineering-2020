<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/adminlogin/doLogin" method="post">
                            <h3 class="text-center text-info">Login Admin</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="status" id="username" class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label for="status" class="text-info">Who are you?:</label><br>
                                <input type="text" name="status" id="status" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <labezl for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></labezl><br>
                                <input type="submit" class="btn btn-info btn-md" value="submit" name="doLogin">
                            </div>
                            <div id=" register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>