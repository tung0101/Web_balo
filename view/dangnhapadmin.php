<link rel="stylesheet" href="../view/css/dangnhapad.css">
        <div class="main">
        <main>
                <form action="" method="POST" class="sua">
                    <h2>Đăng nhập trang admin</h2>
                    <img src="../view/images/logo1.png">
                    <label for="">User name</label><br>
                    <input type="text" placeholder="User name" name="username"> <br><br>
                    <label for="">Password</label> <br>
                    <input type="password" placeholder="Password" name="password"><br> <br>
                    <input type="submit" value="ĐĂNG NHẬP" name="login">
                </form>
        </main>
                <?php 
                 if (isset($_POST['login'])) 
                 {
                     $user = $_POST['username'];
                     $pass = $_POST['password'];  
                     if ($user !=0 || $pass !=0) {
                         $login = admin_query($user);
                         foreach($login as $row){
                             extract($row);
                             $_SESSION['idAdmin'] =  $id;
                             $_SESSION['userAd'] =  $username;
                         }
                             echo "<script>alert('Xin chào " . $_SESSION['userAd'] . ". Bạn đã đăng nhập thành công.')</script>";
                             header("location: ../controller/indexAdmin.php?act=userAd");
                             
                         
                     }else {
                         echo "<script>alert('Vui lòng nhập đầy đủ thông tin')</script>";
                     }
                 }

                    if(isset($_SESSION['idAdmin'])){
                       header("location: ../controller/indexAdmin.php?act=userAd");
                    }else {
                        echo '
                        <main>
                            <form action="" method="POST" class="sua">
                                <h2>Đăng nhập trang admin</h2>
                                <img src="../view/images/logo1.png">
                                <label for="">User name</label><br>
                                <input type="text" placeholder="User name" name="username"> <br><br>
                                <label for="">Password</label> <br>
                                <input type="password" placeholder="Password" name="password"><br> <br>
                                <input type="submit" value="ĐĂNG NHẬP" name="login">
                            </form>
                        </main>
                        ';
                    }
                ?>
            </div>
    


