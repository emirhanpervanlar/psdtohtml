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
    <script>    $(document).ready(function(){
            $(".shoppingcartarrow").click(function(){
                $(".shoppinglist").toggle();
            });
            $('.productrevandcomtopbar ul li:first').addClass('productrevandcomtopbaractive');
            $('.productrevandcomtopbar ul li').click(function(){
               $('.productrevandcomtopbar ul li').removeClass('productrevandcomtopbaractive');
                $(this).addClass('productrevandcomtopbaractive');
            });

            $('.commentstars i').click(function()
            {
                var indis = $(this).index()+1;
                window.alert(indis+" Puan Verdiniz!");
            });



            $('.productdetailsimgsarticle:first').addClass('productimgactive');
            $('.productdetailsimgsarticle').click(function()
                {
                    $('.productdetailsimgsarticle').removeClass('productimgactive');
                    $(this).addClass('productimgactive');
                    var src = $(this).find('img').attr("src");
                    $('.productfirstimage').attr("src",src);    });    });    </script>

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
                <a href="#"><li class="p1"><i class="zmdi zmdi-facebook"></i></li></a>
                <a href="#"><li class="p2"><i class="zmdi zmdi-twitter"></i></li></a>
                <a href="#"><li class="p3"><i class="zmdi zmdi-dribbble"></i></li></a>
                <a href="#"><li class="p4"><i class="zmdi zmdi-lastfm"></i></li></a>
                <a href="#"><li class="p5"><i class="zmdi zmdi-linkedin"></i></li></a>
                <a href="#"><li class="p6"><i class="zmdi zmdi-tumblr"></i></li></a>
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
<div id="product">
    <div class="container">
        <div class="producttopbar">
            <i class="zmdi zmdi-home"></i>
            <ul>
                <li><a href="#">Products</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Full width</a></li>
            </ul>

        </div>
        <div class="productdetails">
            <div class="row">
                <div class="col-lg-6">
                    <div class="productdetailsimage"><div class="productdetailsfirstimg">
                        <div class="productdetailsprice">£19.99</div>
                        <img class="productfirstimage" src="img/productdetailsfirstimg.png" alt="productdetailsfirstimg">
                    </div>
                    <div class="productdetailsimgs">
                        <div class="productdetailsimgsarticle"><img src="img/productdetailsfirstimg.png" alt="productdetailsfirstimg"></div>
                    <div class="productdetailsimgsarticle"><img src="img/product1img1.png" alt="productdetailsfirstimg"></div>
                <div class="productdetailsimgsarticle"><img src="img/product1img2.png" alt="productdetailsfirstimg"></div>
            <div class="productdetailsimgsarticle"><img src="img/product1img3.png" alt="productdetailsfirstimg"></div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="productdetailscontent">
                        <h2>Lorem Ipsum Text - H2 - Heading</h2>
                        <span>Posted in <b>Tee Shirts</b></span>
                        <div class="productdetailscontentdec">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam. Praesent mauris ante, elementum et, bibendum at, posuere sit amet, nibh. Duis tincidunt lectus quis dui viverra vestibulum.</p>
                        </div>
                        <div class="productdetailscontentstock">
                            <p>In Stock – 53 available</p>
                            <form action="" method="post">
                                <input type="number" name="productpiece" value="1" min="1" />
                                <button type="submit" name="addtocart"><i class="zmdi zmdi-shopping-cart-plus"></i>Add to cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="productrevandcom">
            <div class="productrevandcomsection">
                <div class="productrevandcomtopbar">
                    <ul>
                        <li>REVIEWS (0)</li>
                        <li>SECOND TAB</li>
                        <li>THIRD TAB</li>
                    </ul>
                    <div class="productrevandcomtopbarline"></div>
                </div>
            <h2>Reviews - H2 - Heading</h2>
            <div class="productrevandcomarticle">
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/productuserimg.png" alt="productuserimg" class="productuserimg">

                    </div>

                    <div class="col-lg-11">
                        <div class="productrevandcomcontent">
                            <div class="commentrow"></div>
                            <div class="productrevandcomcontenttop">
                                <div class="commentusername">Angelina Jolie</div>
                                <div class="commentuserraiting"></div>
                            </div>
                            <div class="commentusertext"><p>
                                   Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-1">
                        <img src="img/productuserimg.png" alt="productuserimg" class="productuserimg">

                    </div>
                    <div class="col-lg-11">
                        <div class="productrevandcomcontent">
                            <div class="commentrow"></div>
                            <div class="productrevandcomcontenttop">
                                <div class="commentusername">Angelina Jolie</div>
                                <div class="commentuserraiting"></div>
                            </div>
                            <div class="commentusertext"><p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/productuserimg.png" alt="productuserimg" class="productuserimg">

                    </div>
                    <div class="col-lg-11">
                        <div class="productrevandcomcontent">
                            <div class="commentrow"></div>
                            <div class="productrevandcomcontenttop">
                                <div class="commentusername">Angelina Jolie</div>
                                <div class="commentuserraiting"></div>
                            </div>
                            <div class="commentusertext"><p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/productuserimg.png" alt="productuserimg" class="productuserimg">

                    </div>
                    <div class="col-lg-11">
                        <div class="productrevandcomcontent">
                            <div class="commentrow"></div>
                            <div class="productrevandcomcontenttop">
                                <div class="commentusername">Angelina Jolie</div>
                                <div class="commentuserraiting"></div>
                            </div>
                            <div class="commentusertext"><p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1">
                        <img src="img/productuserimg.png" alt="productuserimg" class="productuserimg">

                    </div>
                    <div class="col-lg-11">
                        <div class="productrevandcomcontent">
                            <div class="commentrow"></div>
                            <div class="productrevandcomcontenttop">
                                <div class="commentusername">Angelina Jolie</div>
                                <div class="commentuserraiting"></div>
                            </div>
                            <div class="commentusertext"><p>
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. Sed eleifend nonummy diam.
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="addcomment">
                <h2>ADD COMMENT</h2>
                <form method="" action="">
                    <ul>
                        <li>
                            <label for="name">Name (<b>Required</b>):</label>
                            <input type="text" name="name"/>
                        </li>
                        <li>
                            <label for="mail">Email (<b>Required</b>):</label>
                            <input type="text" name="mail"/>
                        </li>
                        <li>
                            <label>Raiting (<b>Required</b>):</label>
                            <div class="commentstars">
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            <i class="zmdi zmdi-star"></i>
                            </div>

                        </li>
                    </ul>
                    <ul>
                          <label for="commenttext">Your comment (<b>Required</b>):</label>
                          <textarea class="commenttextarea" name="commenttext" ></textarea>
                    </ul>
                    <button type="submit" name="addcommentbtn">Submit</button>
                </form>

            </div>
            </div>
        </div>
    <div class="relatedpost">
        <div class="relatedpostsection">
            <div class="relatedposttopbar">
                <h2>RELATED PRODUCTS</h2>
                <div class="relatedposttopbarline"></div>
            </div>
                    <div class="relatedpostarticle">
                        <div class="relatedpostimg">
                            <img src="img/productitem2img.png" alt="productitem2img">
                        </div>
                        <h3>Lorem ipsum dolor sit   </h3>
                        <p>$34.99</p>
                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                    </div>
                <div class="relatedpostarticle">
                    <div class="relatedpostimg">
                        <img src="img/productitem2img.png" alt="productitem2img">
                    </div>
                    <h3>Lorem ipsum dolor sit   </h3>
                    <p>$34.99</p>
                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                </div>
                <div class="relatedpostarticle">
                    <div class="relatedpostimg">
                        <img src="img/productitem2img.png" alt="productitem2img">
                    </div>
                    <h3>Lorem ipsum dolor sit   </h3>
                    <p>$34.99</p>
                    <i class="zmdi zmdi-shopping-cart-plus"></i>
                </div>
                <div class="relatedpostarticle">
                    <div class="relatedpostimg">
                        <img src="img/productitem2img.png" alt="productitem2img">
                    </div>
                    <h3>Lorem ipsum dolor sit   </h3>
                    <p>$34.99</p>
                    <i class="zmdi zmdi-shopping-cart-plus"></i>
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

