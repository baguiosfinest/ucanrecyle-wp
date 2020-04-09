<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div id="index-wrapper">

	<div id="content" tabindex="-1">

        <!-- <header class="page-header bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/bottles.jpg' ?>)">
            <div class="inner text-center">
                <h2>Services</h2>
                <ul class="menu">
                    <li><a href="#">Home</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </header> -->


        <section class="section section-slider slider-full">

            <div class="flexslider">
            <ul class="slides">
                <li class="slide-item">
                    <div class="bg-image slide-image" style="background-image: url('https://placeimg.com/1000/800/any');"></div>
                    <div class="flex-caption">
                        <h2 class="title">U CAN RECYCLE</h2>
                        <div class="desc">
                            <p>A proud partner of <strong><a href="/">Containers For Change</a></strong> initiated by the Queensland Government.</p>
                        </div>
                        <p class="text-center">
                            <a target="_blank" href="#" class="btn">Learn More About Us</a>
                        </p>  
                    </div>
                </li>
                <li class="slide-item">
                    <div class="bg-image slide-image" style="background-image: url('https://placeimg.com/1000/900/any');"></div>
                    <div class="flex-caption">
                        <h2 class="title">MAKE A CHANGE TODAY</h2>
                        <div class="desc">
                            <p>Recycle and keep our environment safe for future generations.</p>
                        </div>
                        <p class="text-center">
                            <a target="_blank" href="#" class="btn">You can do it</a>
                        </p>  
                    </div>
                </li>
            </ul>
            </div>

        </section>
        
        <script type="text/javascript">
            jQuery(document).ready(function($){
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: false
                    });
                });
            });
        </script>

        <section class="section section-columns section-process">
            <div class="container">
                <header class="section-title">
                    <i class="fa fa-recycle"></i>
                    <h2>How it <span>Works</span></h2>
                    <p>Our Process</p>
                </header>

                <div class="container">

                    <div class="columns horizontal">
                        <div class="col">
                            <article class="lined">
                                <span class="num">1</span>
                                <div class="image"><img class="img-responsive" src="https://via.placeholder.com/500x400" alt="" /></div>
                                <div class="content">
                                    <h3 class="title">COLLECT</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur orem ipsum dolor sit ameadipisicing elit. Tempore rerum quidem aut cum ullam! Provident, atque eligendi?</p>
                                </div>
                            </article>
                        </div>
                        <div class="col">
                            <article class="lined">
                                <span class="num">2</span>
                                <div class="image"><img class="img-responsive" src="https://via.placeholder.com/500x400" alt="" /></div>
                                <div class="content">
                                    <h3 class="title">COLLECT</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore rerum quidem aut cum ullam! Provident, atque eligendi?</p>
                                </div>
                            </article>
                        </div>
                        <div class="col">
                            <article class="lined">
                                <span class="num">3</span>
                                <div class="image"><img class="img-responsive" src="https://via.placeholder.com/500x400" alt="" /></div>
                                <div class="content">
                                    <h3 class="title">COLLECT</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore rerum quidem aut cum ullam! Provident, atque eligendi?</p>
                                </div>
                            </article>
                        </div>
                    </div>

                </div>
             </div>
        </section>

        <!-- <section class="section section-50-50">
             <div class="container">
                <header class="section-title">
                    <i class="fa fa-recycle"></i>
                    <h2>Other <span>Services</span></h2>
                    <p>MOBILE PICKUP POINTS</p>
                </header>
             </div>  
            <div class="columns horizontal">
                <div class="col bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/bottles.jpg' ?>)">
                    
                </div>
                <div class="col">
                    <article>
                        <h3>BIGGENDEN TO MONTO PICKUP SERVICE</h3>
                        <p>On the SECOND Saturday of each month </p>
                        <ul>
                            <li>
                                <strong>Biggenden:</strong> 8.30am-9.30am <br />
                                Grand Hotel 27 Edwards St
                            </li>

                            <li>
                                <strong>Gayndah:</strong> 11.00am-12.00pm 
                                Burnett Hotel 1 Caper St
                            </li>

                            <li>
                                <strong>Mundubberah:</strong> 1.30pm-2:30pm <br />
                                Mundubberah Hotel 20 Lyons St
                            </li>

                            <li>
                                <strong>Monto: </strong>4:00pm-5:00pm <br />
                                Grand Hotel 2 Newton St
                            </li>
                        </ul>
                    </article>
                </div>
            </div>

            <div class="columns horizontal flex-row-reverse">
                <div class="col bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/bottles.jpg' ?>)">
                </div>
                <div class="col">
                    <article>
                        <h3>CHILDERS - HOWARD</h3>
                        <p>On the 2nd and 4th Friday  of each month </p>
                        <ul>
                            <li>
                                <strong>Howard  Opposite Grand Hotel:</strong> 11.30 am - 1 pm
                            </li>

                            <li>
                                <strong>Childers:</strong> 12.00 - 4 pm <br />
                                Vacant Block 8-10 North St Opposite Royal Hotel Enter from North St
                            </li>
                        </ul>
                    </article>
                </div>
            </div> 

            <div class="columns horizontal">
                <div class="col bg-image" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/bottles.jpg' ?>)">
                    
                </div>
                <div class="col">
                    <article>
                        <h3>THE GAP</h3>
                        <p>A New Bag Drop is open at 59 Settlement Rd 24/7 This is in the carpark of the RiverCity Church  where the public can place their bags with scheme ID in tact .</p>
                        <p>A  Mobile Pop-Up is in attendance at the above address  on Thursdays between 1.30pm and  4.00pm where you can obtain CASH and scheme ID.* Bring your cans in cartons 24s 36s for instant cash.</p>
                        <p><strong>Ring</strong> <a href="tel:3881260">3881260</a> for details.</p>
                    </article>
                </div>
            </div>

        </section> -->

        

<!--         

        <section class="section section-map section-full">
                <div id="map2" class="map"></div>
                <script>
                    // Initialize and add the map
                    function initMap2() {
                        var map;
                        var InforObj = [];
                        var centerCords = {
                            lat: -26.2783151,
                            lng: 152.3386981
                        };
                        var markersOnMap2 = [{
                                placeName: "Brendale",
                                address: "234 Leitchs Rd, Brendale QLD 4500",
                                LatLng: [{
                                    lat: -27.3202605,
                                    lng: 152.9779416
                                }]
                            },
                            {
                                placeName: "Maryborough",
                                address: "3 Kingston Dr, Maryborough West QLD 4650",
                                LatLng: [{
                                    lat: -25.5155545,
                                    lng: 152.674108
                                }]
                            },
                            {
                                placeName: "Hervey Bay",
                                address: "1565-1569 Booral Rd, Urangan QLD 4655",
                                LatLng: [{
                                    lat: -25.3079319,
                                    lng: 152.8870186
                                }]
                            
                            }
                        ];

                        window.onload = function () {
                            initMap2();
                        };

                        function addMarkerInfo2() {
                            for (var i = 0; i < markersOnMap2.length; i++) {
                                var contentString = '<div class="map-content"><h3 class="map-title">' + markersOnMap2[i].placeName +
                                    '</h3><p>' + markersOnMap2[i].address + '</p></div>';

                                const marker = new google.maps.Marker({
                                    position: markersOnMap2[i].LatLng[0],
                                    map: map
                                });

                                const infowindow = new google.maps.InfoWindow({
                                    content: contentString,
                                    maxWidth: 300
                                });

                                marker.addListener('click', function () {
                                    closeOtherInfo2();
                                    infowindow.open(marker.get('map'), marker);
                                    InforObj[0] = infowindow;
                                });
                                
                            }
                        }

                        function closeOtherInfo2() {
                            if (InforObj.length > 0) {
                                InforObj[0].set("marker", null);
                                InforObj[0].close();
                                InforObj.length = 0;
                            }
                        }

                        function initMap2() {
                            map = new google.maps.Map(document.getElementById('map2'), {
                                zoom: 7,
                                center: centerCords
                            });
                            addMarkerInfo2();
                        }
                    }

                    jQuery(document).ready(function(){
                        initMap2();
                    });
                </script> -->
        </section>

        


        

        <!-- <section class="section section-columns no-pad section-gray">
            <div class="container">
                <div class="horizontal">
                    <article class="col-image">
                        <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image">
                    <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image">
                        <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section section-columns">
            <div class="container">
                <div class="horizontal">
                    <article class="col-image">
                        <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image">
                    <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image">
                        <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image col-image-half">
                    <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>

                    <article class="col-image col-image-half">
                        <div class="col-image-map"><img class="img-responsive" src="https://via.placeholder.com/300x200" alt=""></div>
                        <div class="col-image-text">
                            <h4 class="col-image-title">Maryborough Site</h4>
                            <p class="text-center">
                            <i class="fa fa-map-marker green"></i>Maryborough QLD 4500<br />
                            <a href="tel:0741232661"><i class="fa fa-phone green"></i>(07) 412 326 61</a><br />
                            <a href="mailto:infomaryborough@ucandrivethru.com"><i class="fa fa-envelope green"></i> infomaryborough@ucandrivethru.com</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </section> -->


 
   

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer();
