<div class="breadcrumbarea">

    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcrumb__content__wraper" data-aos="fade-up">
                    <div class="breadcrumb__title">
                        <h2 class="heading">Sign up</h2>
                    </div>
                    <div class="breadcrumb__inner">
                        <ul>
                            <li><a href="index2.php">Home</a></li>
                            <li>Sign up</li>
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

<div class="gridarea">
    <div class="container">
        <div>
            <div class="gridarea__wraper">
                <div class="gridarea__img">
                <div class="loginarea__wraper">
                                <div class="login__heading">
                                    <div class="login__heading">
                                        <h5 class="login__title">Sign Up</h5>
                                        <p class="login__description">Already have an account? <a href="index2.php?act=dangnhap"  style="color:#66B2FF">Log in</a></p>
                                    </div>



                                    <form action="index2.php?act=dangky" method="post">
                                        <div class="row">
                                            <div class="col-xl-6">
                                           
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Username</label>
                                                    <input class="common__login__input" style="width:1010px;height:50px" type="text" name="username" placeholder="Username">

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Email</label>
                                                    <input class="common__login__input" style="width:1010px;height:50px" type="text" name="email" placeholder="Your Email">

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Password</label>
                                                    <input class="common__login__input" style="width:1010px;height:50px" type="password" name="password" placeholder="Your Password">

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Address</label>
                                                    <input class="common__login__input" style="width:1010px;height:50px" type="text" name="address" placeholder="Your Address">

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Tel</label>
                                                    <input class="common__login__input" style="width:1010px;height:50px" type="tel" name="tel" placeholder="Your Tel">

                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                            
                                            <!-- <div class="col-xl-6">
                                                <div class="login__form">
                                                    <label class="form__label" style="float:left; font-weight:bold">Re-Enter Password</label>
                                                    <input class="common__login__input" type="password" name="repassword" placeholder="Re-Enter Password">

                                                </div>
                                            </div> -->
                                        </div>

                                        <!-- <div class="login__form d-flex justify-content-between flex-wrap gap-2">
                                            <div class="form__check">
                                                <input id="accept_pp" type="checkbox"> <label for="accept_pp">Accept the Terms and Privacy Policy</label>
                                            </div>

                                        </div> -->
                                        <div class="login__button">
                                            <input class="default__button" type="submit" style="width: 1010px;height:50px;float:left;margin-bottom:20px" value="Sign up" name="dangky">
                                        </div>
                                    </form>
                                    <br>
                                    <h5 class="thongbao" style="color:green;float: left">
                                        <?php
                                            if(isset($thongbao)&&($thongbao!="")){
                                                echo $thongbao;
                                            }
                                        ?>
                                    </h5>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>