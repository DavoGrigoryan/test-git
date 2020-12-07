
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php  linkCSS("assets/css/bootstrap.min.css"); ?>
    <?php  linkCSS("assets/css/normalize.css"); ?>
    <?php  linkCSS("assets/css/icon-style.css"); ?>
    <?php  linkCSS("assets/css/style.css"); ?>
    <?php  linkCSS("assets/css/responsive.css"); ?>

<!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
<!--    <link rel="stylesheet" media="screen" href="css/normalize.css" />-->
<!--    <link rel="stylesheet" href="css/icon-style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="css/style.css">-->
<!--    <link rel="stylesheet" type="text/css" href="css/responsive.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
<?php
print_r($data1);
print_r($data2);
?>
<div class="loader"> <img src="img/Reload-1s-200px.gif" alt=""></div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="categoryBody">
                <div class="checkProd">
                    <span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span></span>
                </div>
                <div class="categoryImg"><img src="img/banana.jpg" alt=""></div>
                <p class="categoryBodyP">Banana</p>
                <div class="categoryTimer">
                </div>
                <p class="categoryWeight"><span>1</span> կգ</p>
                <div class="count">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></span></button></div>
                        <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled  value="1" type="text" ></div>
                        <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></span></button></div>
                    </div>
                </div>
                <p class="categoryBodyPrice"><span>365</span>դր</p>
                <input type="hidden" value="365">
                <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <!--------------------START HEADER--------------------------------------------->
    <header>
        <div class="row">
            <div class="col-md-6 col-sm-7 col-7">
                <div class="topLeftIcon flex alignCenter height100">
                    <div class="info flex justifyAround"><a href="login.html"><span class="icon-line-awesome-sign-in"><span class="borderRight">Մուտք</span></a></div>
                    <div class="info flex justifyAround"><a href="register.html"><span class="icon-feather-user-plus"><span class="borderRight">Գրանցում</span></a></div>
                    <div class="info flex justifyAround"><a href="account.html"><span class="icon-feather-user"><span class="borderRight">Իմ էջը</span></a></div>
                </div>
            </div>
            <div class="col-md-6 col-sm-5 col-5">
                <div class="row">
                    <div class="col-md-12 flex  justifyEnd">
                        <div class="lang"><span>ARM</span></div>
                        <div class="lang"><span>RUS</span></div>

                        <div class="flex alignCenter height100 justifyEnd topIcons">
                            <span class="icon-brand-facebook-f"></span>
                            <span class="icon-brand-instagram"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!------------------------------------END HEADER-------------------------------->
    <!------------------------------------START NAVBAR------------------------------>
    <div class="menu">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-4">
                <div class="logo">
                    <a href="index.html"><img src="img/logo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-3 col-2">
                <div class="add-box">
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-6 flex alignCenter justifyEnd">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="index.html">Գլխավոր</a>
                                <a href="about.html">Մեր մասին</a>
                                <a href="contact.html">Հետադարձ կապ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!------------------------------------END NAVBAR-------------------------------->
</div>
<!------------------------------------START SEARCH-------------------------------->
<div class="search" id="navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-sm-9 col-9 padding10">
                <form action="#" class=" width100">
                    <div class="searchForm flex">
                        <input type="text" name="search" class="padding10 serachInput">
                        <button class="search_button"><span class="icon-material-outline-search"></span></button>
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-3 col-3">
                <a href="basket.html">
                    <div class="order flex alignCenter height100">
								<span class="cartShopping">
										<span class="icon-material-outline-shopping-cart"></span>
									<small class="cartNotification">0</small>
								</span>
                        <div class="totalOrder">
                            <p class="margin0">Զամբյուղ</p>
                            <span>0</span> դր
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!------------------------------------END SEARCH-------------------------------->
</div>
<!------------------------------------END SEARCH-------------------------------->
<!------------------------------------START PRODUCT-------------------------------->
<div class="container">
    <div class="row ">
        <div class="col-md-2 col-sm-3 col-4 relative">
            <div class="absolute">
                <div class="category">
                    <div class="row">
                        <div class="col-md-12 padding0">
                            <div class="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="categoryP"><span>Կատեգորիաներ</span></p>
                                    </div>
                                </div>
                                <div class="checkCategory">
<!--                                    --><?php //foreach ($data1 as $category): ?>
<!--                                    <input type="checkbox" disabled id="checkbox_1">-->
<!--                                    <label for="checkbox_1">--><?php //echo  $category['name_arm'] ?><!-- (<span>11</span>)</label>-->
<!--                                    --><?php //endforeach; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-sm-9 col-8 special">
            <div class="slideContainer">
                <div class="leftArrow"><span class="icon-material-outline-keyboard-arrow-left"></span></div>
                <div id="slider">
                    <div class="slide slideActive">
                        <img src="img/slider/slide1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider/slide2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider/slide3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider/slide4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider/slide5.jpg" alt="">
                    </div>
                </div>
                <div class="rightArrow"><span class="icon-material-outline-keyboard-arrow-right"></span></div>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 ">
                            <p class="specialP"><span>Հատուկ Առաջարկներ</span></p>
                        </div>
                    </div>
                    <div class="deliver">
                        <div class="deliverHour">
                            <a href="special.html"><img src="img/slider/slide1.jpg" alt=""></a>
                        </div>
                        <div class="deliverHour">
                            <a href="special.html"><img src="img/slider/slide2.jpg" alt=""></a>
                        </div>
                        <div class="deliverHour">
                            <a href="special.html"><img src="img/slider/slide3.jpg" alt=""></a>
                        </div>
                        <div class="deliverHour">
                            <a href="special.html"><img src="img/slider/slide4.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 col-sm-9 col-8 prefere">
            <div class="row">
                <div class="col-md-12 ">
                    <p class="categoryP"><span>Հաճախ պատվիրվածները</span></p>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"  data-toggle="modal" data-target="#myModal"><img src="img/banana.jpg" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>365</span>դր</p>
                        <input type="hidden" value="365">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"><img src="img/strawberry.png" alt=""></div>
                        <p class="categoryBodyP">Strawberry</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>400</span>դր</p>
                        <input type="hidden" value="400">
                        <button class="addproduct">Ավելացնել  <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"><img src="img/lemon.png" alt=""></div>
                        <p class="categoryBodyP">Lemon</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>400</span>դր</p>
                        <input type="hidden" value="400">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="sale flex justifyCenter alignCenter">-<span>30</span>%</div>
                        <div class="categoryImg"><img src="img/banana.jpg" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>400</span>դր</p>
                        <input type="hidden" value="400">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"><img src="img/banana.jpg" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                            <ul class="timerUl">
                                <li><span id="days"></span>days</li>
                                <li><span id="hours"></span>Hours</li>
                                <li><span id="minutes"></span>Minutes</li>
                                <li><span id="seconds"></span>Seconds</li>
                            </ul>
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>400</span>դր</p>
                        <input type="hidden" value="400">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="sale flex justifyCenter alignCenter">-<span>25</span>%</div>
                        <div class="categoryImg"  data-toggle="modal" data-target="#myModal"><img src="img/strawberry.png" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>365</span>դր</p>
                        <input type="hidden" value="365">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"  data-toggle="modal" data-target="#myModal"><img src="img/lemon.png" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>365</span>դր</p>
                        <input type="hidden" value="365">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="categoryBody">
                        <div class="checkProd">
									<span class="height100 flex justifyCenter alignCenter"><span class="icon-line-awesome-check"></span>
                        </div>
                        <div class="categoryImg"  data-toggle="modal" data-target="#myModal"><img src="img/banana.jpg" alt=""></div>
                        <p class="categoryBodyP">Banana</p>
                        <div class="categoryTimer">
                        </div>
                        <p class="categoryWeight"><span>1</span> կգ</p>
                        <div class="count">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-4 flex justifyEnd padding5"><button class="minus"><span class="icon-line-awesome-minus"></button></div>
                                <div class="col-md-4 col-sm-4 col-4 flex justifyCenter padding5"><input class="weight backgroundEEE" disabled   value="1" type="text" ></div>
                                <div class="col-md-4 col-sm-4 col-4 padding5"><button class="plus" ><span class="icon-line-awesome-plus"></button></div>
                            </div>
                        </div>
                        <p class="categoryBodyPrice"><span>365</span>դր</p>
                        <input type="hidden" value="365">
                        <button class="addproduct">Ավելացնել <span class="icon-material-outline-shopping-cart"></span></button>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-4"></div>
        <div class="col-md-10 col-sm-9 col-8 showAll">
            <a href="allProduct.html"><button class="showAllButton">Ամբողջ տեսականին</button></a>
        </div>
    </div>
</div>
<!------------------------------------END PRODUCT-------------------------------->
<!------------------------------------START FOOTER-------------------------------->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footerSpan"><span>Մեր մասին</span></p>
                    </div>
                </div>
                <div class="footerLogo">
                    <img src="img/logo.jpg" alt="">
                </div>
                <p class="footerP">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque natus facilis minus ipsam iste quasi minima?</p>
                <div class="row">
                    <div class="col-3 hideCol"></div>
                    <div class="col-md-3 col-sm-3 col-3 bottomIcon">
                        <span class="icon-brand-facebook-f"></span>
                    </div>
                    <div class="col-md-3 col-sm-3 col-3 bottomIcon">
                        <span class="icon-brand-instagram"></span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footerSpan"><span>Հղումներ</span></p>
                    </div>
                </div>
                <ul class="footerNav">
                    <li><span class="icon-material-outline-keyboard-arrow-right"></span><a href="index.html">Գլխավոր</a></li>
                    <li><span class="icon-material-outline-keyboard-arrow-right"></span><a href="about.html">Մեր մասին</a></li>
                    <li><span class="icon-material-outline-keyboard-arrow-right"></span><a href="contact.html">Հետադարձ կապ</a></li>
                    <li><span class="icon-material-outline-keyboard-arrow-right"></span><a href="#">Տեսականի</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footerSpan"><span>Զեղչեր</span></p>
                    </div>
                </div>
                <div class="footerSale">
                    <div class="footerSaleCont ">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-3">
                                <div class="footSaleImg">
                                    <img src="img/banana.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-9">
                                <div class="footSaleText">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footerSaleCont ">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-3">
                                <div class="footSaleImg">
                                    <img src="img/banana.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-9">
                                <div class="footSaleText">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footerSaleCont ">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-3">
                                <div class="footSaleImg">
                                    <img src="img/banana.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-9">
                                <div class="footSaleText">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footerSpan"><span>Քարտային վճարում</span></p>
                    </div>
                </div>
                <div class="cart">
                    <div class="flex justifyAround">
                        <img src="img/viza1.png" alt="">
                        <img src="img/masterCart.png" alt="">
                        <img src="img/masterCart1.png" alt="">
                    </div>
                    <div class="flex justifyAround margin10">
                        <img src="img/viza2.png" alt="">
                        <img src="img/arca.gif" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-12 footerBorder">
                <div class="footerCopyright">
                    <p>Copyright © 2019 All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!------------------------------------END FOOTER-------------------------------->
<div id="to_top">
    <div class="flex justifyCenter">
        <div class="circle flex justifyCenter alignCenter">
            <b><span class="icon-material-outline-keyboard-arrow-up"></span></b>
        </div>
    </div>
    <p>To Top</p>
</div>
</body>
<?php  linkJS("assets/js/jquery.js"); ?>
<?php  linkJS("assets/js/countdown.js"); ?>
<?php  linkJS("assets/js/script.js"); ?>

</html>
