<!DOCTYPE html lang="tr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/npm.js"></script>
    <script src="js/carousel.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $(".shoppingcartarrow").click(function(){
                $(".shoppinglist").toggle();
            });
        });

    </script>
</head>

<div id="topbar">
    <div class="container">
        <div class="topbarlogo"><H1>LOGO</H1></div>
        <div class="topbarmenu">

            <div class="topbarsearch">
                <form>
                    <input type="text" name="search" placeholder="Search ..." />
                    <button type="submit" name="searchbutton" ><i class="zmdi zmdi-search"></i></button>
                </form>
            </div>
            <div class="topbarsocial">
                <a href="#"><li><i class="zmdi zmdi-facebook"></i></li></a>
                <a href="#"><li><i class="zmdi zmdi-twitter"></i></li></a>
                <a href="#"><li><i class="zmdi zmdi-dribbble"></i></li></a>
                <a href="#"><li><i class="zmdi zmdi-lastfm"></i></li></a>
                <a href="#"><li><i class="zmdi zmdi-linkedin"></i></li></a>
                <a href="#"><li><i class="zmdi zmdi-tumblr"></i></li></a>
            </div>
        </div>
    </div>
    <div class="menu">
        <div class="container">
            <div class="menu-content">
                <a href="#"><li>ENTAIREMENT</li></a>
                <a href="#"><li>LİFESTYLE</li></a>
                <a href="#"><li>TEKNOLOGY</li></a>
                <a href="#"><li>ENTAIREMENT</li></a>
                <a href="#"><li>LIFESTYLE</li></a>
                <a href="#"><li>SPORTS</li></a>
            </div>
        </div>
    </div>

    <div class="topbarbottom">
        <div class="container">
            <div class="topbarbottomlatest"><p>August .12 .2012 - Syrian prime minister defects, fighting goes on</p></div>
            <div class="shoppingcart"><p>Shopping Cart: <span>0</span> item(s) - $0.00</p>
                <div class="shoppingcartarrow"><i class="zmdi zmdi-caret-down"></i></div>
                <div class="shoppinglist">
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem1img.png" alt="productitem1img"></div>
                    </div>
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem2img.png" alt="productitem1img"></div>
                    </div>
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem3img.png" alt="productitem1img"></div>
                    </div>
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem1img.png" alt="productitem1img"></div>
                    </div>
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem1img.png" alt="productitem1img"></div>
                    </div>
                    <div class="shoppinglistitem">
                        <div class="shoppinglistitemtitle"><a href="#">Lorem ipsum dolor sit</a></div>
                        <div class="shoppinglistitemimg"><img src="img/productitem1img.png" alt="productitem1img"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div id="homepage">

    <div id="slider">
        <div class="sliderleft">
            <div class="sliderleftbutton">
                <i class="zmdi zmdi-chevron-left"></i>
            </div>
        </div>
        <div class="sliderarticle">
            <div class="sliderimg"><img src="img/slider1.png"/></div>
            <div class="slidercontent">
                <h2>Where can I get some?</h2>
                <p>Fusce ultrices ornare velit, consectetur tempus eros dapibus et. Integer lobortis, dui in iaculis sollicitudin, felis nunc aliquam nibh, eu porta nisi urna nec odio. Duis suscipit viverra magna id sagittis. Quisque odio neque, condimentum cursus volutpat vel, pharetra ac nibh. Cras cursus libero id nunc facilisis luctus. Aenean ultricies, risus cursus sollicitudin congue, diam diam congue velit, ut sodales sem enim a nisl. Aenean elit diam, mollis fermentum pellentesque nec, convallis eu est. Nunc eu mattis dui. Nulla quis suscipit ligula. Morbi diam massa, laoreet id pretium id, varius et sem.</p>
                <a href="#">Shop Now</a>
            </div>
        </div>
        <div class="sliderright">
            <div class="sliderrightbutton">
                <i class="zmdi zmdi-chevron-right"></i>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">

            <div class="col-md-4 col-lg-3 ">
                <div class="homesidebar">
                    <div class="homesidebarfeatured">

                        <div class="featuredtitle">FEATURED</div>
                        <div class="sidebarfeaturedi"><i class="zmdi zmdi-chevron-left"></i><i class="zmdi zmdi-chevron-right"></i></div>
                        <div class="sidebarfeaturedarticle">
                            <div class="sidebarfeaturedarticlebanner"><p>New</p> </div>
                            <div class="sidebarfeaturedarticleimg"><img src="img/featureditem1img.png"/></div>
                            <h2>Lorem ipsum dolor sit</h2>
                            <div class="sidebarfeaturedarticlebuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                            <p class="sidebarfeaturedarticlepred">$34.99</p><p class="sidebarfeaturedarticlepgray">$69.99</p>

                        </div>
                    </div>
                    <div class="trendingnow">
                        <div class="trendingnowtitle"><h2>TRENDING NOW</h2></div>
                        <div class="trendingnowarticle">

                            <li>Man</li>
                            <li>Women</li>
                            <li>Kids</li>
                            <li>Accessories</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">

                <div class="homearticle">
                    <div class="newproducttitle"><h2>NEW PRODUCTS</h2></div>
                    <div class="newproductarticle">
                        <div class="newproductarticlelist">
                            <div class="newproductarticlebox">

                                <div class="newproductarticleboximg">
                                    <div class="productbanner"><p>Sale</p> </div>
                                    <img src="img/productitem1img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpgray">$69.99</p><p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem2img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">

                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem3img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem1img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpgray">$69.99</p><p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productbanner"><p>Sale</p> </div>
                                    <img src="img/productitem2img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productbanner"><p>Sale</p> </div>
                                    <img src="img/productitem3img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem1img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpgray">$69.99</p><p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem2img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem3img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">

                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem1img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpgray">$69.99</p><p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem2img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem3img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem1img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpgray">$69.99</p><p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem2img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>
                            <div class="newproductarticlebox">
                                <div class="newproductarticleboximg">
                                    <div class="productnotbanner"></div>
                                    <img src="img/productitem3img.png"/></div>
                                <h2>Lorem ipsum dolor sit</h2>
                                <div class="newproductarticleboxbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div>
                                <p class="newproductarticleboxpred">$34.99</p>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="trendingnowsection">
                    <div class="trendingnowsectionarticle">
                        <div class="trendingnowbanner"><p>Sale</p> </div>
                        <div class="trendingnowsectionarticleimg"><img src="img/trendingnowitem1img.png"/></div>
                        <div class="trendingnowsectionarticlecontent">
                            <h2>Shop t-shirt</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer</p>
                            <span class="trendingnowsectionarticlecontentpgray">$34,99</span>
                            <span class="trendingnowsectionarticlecontentpred">$24,99</span>
                            <div class="trendingnowcontentfooter">
                                <div class="trendingnowbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div><span>Add to cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="trendingnowsectionarticle">
                        <div class="trendingnownotbanner"></div>
                        <div class="trendingnowsectionarticleimg"><img src="img/trendingnowitem2img.png"/></div>
                        <div class="trendingnowsectionarticlecontent">
                            <h2>Sneaker</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer</p>
                            <span class="trendingnowsectionarticlecontentpred">$24,99</span>
                            <div class="trendingnowcontentfooter">
                                <div class="trendingnowbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div><span>Add to cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="trendingnowsectionarticle">
                        <div class="trendingnownotbanner"></div>
                        <div class="trendingnowsectionarticleimg"><img src="img/trendingnowitem3img.png"/></div>
                        <div class="trendingnowsectionarticlecontent">
                            <h2>Backpack</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer</p>
                            <span class="trendingnowsectionarticlecontentpred">$24,99</span>
                            <div class="trendingnowcontentfooter">
                                <div class="trendingnowbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div><span>Add to cart</span>
                            </div>
                        </div>
                    </div>
                    <div class="trendingnowsectionarticle">
                        <div class="trendingnowbanner"><p>Sale</p> </div>
                        <div class="trendingnowsectionarticleimg"><img src="img/trendingnowitem4img.png"/></div>
                        <div class="trendingnowsectionarticlecontent">
                            <h2>Heritage</h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer</p>
                            <span class="trendingnowsectionarticlecontentpred">$24,99</span>
                            <div class="trendingnowcontentfooter">
                                <div class="trendingnowbuy"><i class="zmdi zmdi-shopping-cart-plus"></i></div><span>Add to cart</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </div>

</div>
<div id="footer">
    <div class="container">
        <div class="sponsors">
            <div class="sponsorsbuttonleft"><i class="zmdi zmdi-chevron-left"></i></div>
            <div class="sponsorslist">
                <li><img src="img/sponsors1.png" alt="sponsors1"/></li>
                <li><img src="img/sponsors2.png" alt="sponsors2"/></li>
                <li><img src="img/sponsors3.png" alt="sponsors3"/></li>
                <li><img src="img/sponsors1.png" alt="sponsors4"/></li>
            </div>
            <div class="sponsorsbuttonright"><i class="zmdi zmdi-chevron-right"></i></div>
        </div>
        <div class="footersection">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footerwhoweare">
                        <h3>Who We Are</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has</p>
                        <span><i class="zmdi zmdi-flag"></i>Address 123, Country</span>
                        <span><i class="zmdi zmdi-smartphone-iphone"></i>(043) 875-9211</span>
                        <span><i class="zmdi zmdi-email"></i>info@kopasoft.com</span>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="footercategories">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">New collection</a></li>
                            <li><a href="#">New collection</a></li>
                            <li><a href="#">New collection</li>
                            <li><a href="#">Best sellers</a></li>
                            <li><a href="#">Best sellers</a></li>
                            <li><a href="#">Best sellers</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Manufacturers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">Suppliers</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">New products</a></li>
                            <li><a href="#">New products</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="footerlastesttweet">
                        <h3>Lastest Tweet</h3>
                        <ul>
                            <li><i class="zmdi zmdi-twitter"></i><a href="#">Check out this great #themeforest item for you 'Simpler Landing' http://t.co/LbLwldb6
                                    <br/>2 hours ago</a></li>
                            <li><i class="zmdi zmdi-twitter"></i><a href="#">Check out this great #themeforest item for you 'Simpler Landing' http://t.co/LbLwldb6
                                    <br/>2 hours ago</a></li>
                            <li><i class="zmdi zmdi-twitter"></i><a href="#">Check out this great #themeforest item for you 'Simpler Landing' http://t.co/LbLwldb6
                                    <br/>2 hours ago</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footerbottombar">
        <div class="container">
            <div class="footercopyright">Copyrights. © 2017 by Emirhan PERVANLAR</div>
            <div class="footerbottommenu">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Cart</a></li>
                <li><a href="#">Checkout</a></li>
                <li><a href="#">Completed Orders</a></li>
                <li><a href="#">Contact us</a></li>
            </div>
        </div>

    </div>
</div>



</html>


