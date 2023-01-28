<div class="container">
    <!-- Outer Row -->
    <br>
    
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <div id="formHeader">
            <p class="mt-5 mb-3 text-muted text-center"><h1 style="color: black;"> <b>Selamat Datang</b> </h1></p>
            </div>
            <br>
            <br>
            <!-- Login Form -->
            <form action="<?= base_url('dashboard/index'); ?>" method="post">
            <img src="<?= base_url('assets'); ?>/img/admin_login.png" class="img-fluid" style="width: 170px;">
            <br><p>Note : Klik Login Langsung</p><br>
                <input type="text" id="login" class="form form-control" name="username" placeholder="Username">
                <input type="password" id="password" class="form form-control" name="password" placeholder="password">
                <br><br>
                <input type="submit" herf="" class="fadeIn fourth" value="Login">
            </form>
            <div id="formFooter">
            <p class="mt-5 mb-3 text-muted text-center">&copy; Enggit Prasetyo</p>
            </div>

        </div>
    </div>

</div>