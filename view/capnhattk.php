
<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading">Log In</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index2.php">Home</a></li>
                            <li>Log In</li>
                        </ul>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <div class="shape__icon__2">
        <img class=" shape__icon__img shape__icon__img__1" src="img/herobanner/herobanner__1.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__2" src="img/herobanner/herobanner__2.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__3" src="img/herobanner/herobanner__3.png" alt="photo">
        <img class=" shape__icon__img shape__icon__img__4" src="img/herobanner/herobanner__5.png" alt="photo">
    </div>

</div>
<!-- form phần đăng nhập -->
<div class="loginarea sp_top_100 sp_bottom_100">
    <div class="container">
        <!-- <div class=""> -->
            
            <div class="tab-content tab__content__wrapper" id="myTabContent" data-aos="fade-up">

                    <div class="tab-pane fade active show" id="projects__one" role="tabpanel" aria-labelledby="projects__one">
                        <div class="col-xl-8 col-md-8 offset-md-2">
                            <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <h5 class="login__title">Cập nhật tài khoản</h5>
                                        <!-- <p class="login__description" >Don't have an account yet? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" style="color:#66B2FF">Sign up for free</a></p> -->
                                    </div>



                                    <form action="index2.php?act=capnhattk">
                                        <div class="login__form">
                                            <label class="form__label">Username </label>
                                            <input class="common__login__input" type="text" name="username" >

                                        </div>
                                        <div class="login__form">
                                            <label class="form__label">Password</label>
                                            <input class="common__login__input" type="password" name="password">

                                        </div>
                                        <div class="login__form">
                                            <label class="form__label">Email</label>
                                            <input class="common__login__input" type="text" name="email">

                                        </div>
                                        <div class="login__form">
                                            <label class="form__label">Address</label>
                                            <input class="common__login__input" type="text" name="address">

                                        </div>
                                        <div class="login__form">
                                            <label class="form__label">Tel</label>
                                            <input class="common__login__input" type="text" name="tel">

                                        </div>
                                        <!-- <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                            <div class="form__check">
                                                <input id="forgot" type="checkbox">
                                                <label for="forgot"> Remember me</label>
                                            </div>
                                            <div class="text-end login__form__link">
                                                <a href="#">Forgot your password?</a>
                                            </div>
                                        </div> -->
                                        <div class="login__button">
                                           <input class="default__button" type="hidden" name="iduser" value="<?=$iduser?>">
                                           <input class="default__button" type="submit" name="capnhat" value="<?=$iduser?>">Cập nhật

                                            <!-- <a class="default__button" href="index2.php?act=capnhattk">Cập nhật</a> -->
                                        </div>
                                    </form>
                                    <div class="login__social__option">
                                        <p>or Log-in with</p>

                                        <ul class="login__social__btn">
                                            <li><a class="default__button login__button__1" href="#"><i class="icofont-facebook"></i> Facebook</a></li>
                                            <li><a class="default__button" href="#"><i class="icofont-google-plus"></i> Google</a></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <h5 class="thongbao" style="color:green">
                                        <?php
                                            if(isset($thongbao)&&($thongbao!="")){
                                                echo $thongbao;
                                            }
                                        ?>
                                    </h5>
                                    <br>
                                   

                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
                           </div>
                           </div>
