<!--
This HTML5 website is part of a HTML5 / CSS3 tutorial created by Christoph Anastasiades (http://www.lingulo.com)
Feel free to use it for your personal or commercial projects and/or change it in any way you like.

USE THIS TEMPLATE ON YOUR OWN RISK AND PLEASE BE AWARE THAT I DO NOT GUARANTEE THE CORRECTNESS OF THE FILES
DOWNLOADED ON http://www.lingulo.com AND WILL NOT BE RESPONSIBLE FOR ANY LOSS OR DAMAGE CAUSED THROUGH THE USE OF THESE FILES.

I would be happy if you put a link to http://www.lingulo.com somewhere on your website to support my work. However this is not obligatory.

Please note that you may not distribute the files downloaded from Lingulo.com or offer them for download.


What you need to do to make this page work:

- Download Eric Meyer's "Reset CSS" 2.0 (http://www.cssreset.com) and put it into the "css" folder
- Download Lightbox2 (http://lokeshdhakar.com/projects/lightbox2/) and put the folders "css", "images" and "js" into the "lightbox" folder
- Download Modernizr.js (http://modernizr.com/download/), make sure "html5shiv" is checked and put "modernizr.js" into the "js" folder
- Download Respond.min.js (https://github.com/scottjehl/Respond) and put it into the "js" folder
- Download jQuery 1.7.2 (http://nienpaper.googlecode.com/files/1.7.2.jquery.min.js) and put it into the "js" folder
- Download Prefix Free (http://leaverou.github.io/prefixfree/) and put it into the "js" folder
- Download SlidesJS (http://www.slidesjs.com/) and put the "jquery.slides.min.js" into the "js" folder
- Find images for the jQuery Slider (should be about 1600px wide) and for all the icons (the icons used in the tutorial are from http://www.iconarchive.com/show/icons8-metro-style-icons-by-visualpharm.1.html)

To minimize the amount of HTTP requests combine all CSS files into one single file.

!-->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Some Page Title</title>
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>

        <script src="js/modernizr.js"></script>
        <script src="js/respond.min.js"></script>

        <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/1.7.2.jquery.min"><\/script>')</script>

        <script src="lightbox/js/lightbox.js"></script>
        <script src="js/prefixfree.min.js"></script>
        <script src="js/jquery.slides.min.js"></script>

        <!--[if lt IE 9]>
            <style>
                header
                {
                    margin: 0 auto 20px auto;
                }
                #four_columns .img-item figure span.thumb-screen
                {
                    display:none;
                }  
            </style>
        <![endif]-->


        <script>
            $(function() {
                $('#slides').slidesjs({	
                    height: 235,
                    navigation: false,
                    pagination: false,
                    effect: {
                        fade: {
                            speed: 400
                        }
                    },
                    callback: {
                        start: function(number)
                        {			
                            $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                        },
                        complete: function(number)
                        {			
                            $("#slider_content" + number).delay(500).fadeIn(1000);
                        }		
                    },
                    play: {
                        active: false,
                        auto: true,
                        interval: 6000,
                        pauseOnHover: false
                    }
                });
            });
        </script>
    </head>

    <body>
        <header>            
            <h1>Ideas2Web</h1>
            <p>We work on Ideas..</p>

            <select id="alternative_menu" size="1">
                <option>Home</option>
                <option>Portfolio</option>
                <option>About</option>
                <option>Contact</option>
                <option>Privacy Policy</option>
                <option>Disclaimer</option>
                <option>Legal Notice</option>
            </select>
            <nav>
                <h2 class="hidden">Our navigation</h2>
                <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Porfolio</a></li>
                    <li><a href="javascript:void(0)">About</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section class="container">
            <h2 class="hidden">Lorem Ipsum</h2>
            <article id="slider_content1">
                <h3>Lorem ipsum dolor?</h3>
                <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte. Abgeschieden wohnen Sie in Buchstabhausen an der Küste des Semantik. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content2">
                <h3>Nulla consequat</h3>
                <p>Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien. Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content3">
                <h3>Lorem ipsum</h3>
                <p>Nicht einmal von der allmächtigen Interpunktion werden die Blindtexte beherrscht – ein geradezu unorthographisches Leben. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <div id="slides">
                <img src="img/slide3.jpg" alt="Some alt text">
                <img src="img/slide2.jpg" alt="Some alt text">    	
                <img src="img/slide1.jpg" alt="Some alt text">
            </div>
        </section>
        <section id="spacer">  
            <h2 class="hidden">Dolor sit amet</h2>          
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
            <div class="search">
                <form action="#">
                    <input type="text" name="sitesearch" value="Enter a word..."/>
                    <input type="submit" name="start_search" class="button" value="Search"/>
                </form>
            </div>            
        </section>
        <section id="boxcontent">
            <h2 class="hidden">Adipiscing</h2>
            <article>    	    	
                <img src="img/Buzz-Private-icon.png" alt="alt text about the private icon"/>       
                <h3>Lorem ipsum</h3>
                <p>        	
                    Eines Tages aber beschloß eine kleine Zeile Blindtext, ihr Name war Lorem Ipsum, hinaus zu gehen. 
                </p>
            </article>
            <article>    	
                <img src="img/Industry-Engineering-icon.png" alt="alt text about the engineering icon"/>        
                <h3>Consectetuer</h3>
                <p>        	
                    Der große Oxmox riet ihr davon ab, da es dort wimmele von bösen Kommata, wilden Fragezeichen...
                </p>
            </article>
            <article>    	
                <img src="img/Cell-Phones-Iphone-icon.png" alt="alt text about the iphone icon"/>        
                <h3>Dolor sit amet</h3>
                <p>        	
                    Es packte seine sieben Versalien, schob sich sein Initial in den Gürtel und machte sich auf den Weg.
                </p>
            </article>
            <br class="clear"/>
        </section>

        <section id="four_columns">
            <h2>
                Lorem ipsum
            </h2>    
            <article class="img-item">
                <h3 class="hidden">Dolor sit amet</h3>
                <figure>  
                    <a href="img/example-slide-1.jpg" rel="lightbox" title="Photo by: Missy S">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-1sml.jpg" alt="Photo by: Missy S Link: http://www.flickr.com/photos/listenmissy/5087404401/"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Missy S
                        </strong>
                        Als es die ersten Hügel des Kursivgebirges erklommen hatte
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
                <h3 class="hidden">Sit Amet</h3>
                <figure>
                    <a href="img/example-slide-2.jpg" rel="lightbox" title="Photo by: Daniel Parks">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-2sml.jpg" alt="Photo by: Daniel Parks Link: http://www.flickr.com/photos/parksdh/5227623068/"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Daniel Parks
                        </strong>
                        warf es einen letzten Blick zurück auf die Skyline seiner Heimatstadt Buchstabhausen
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
                <h3 class="hidden">Dolor Sit</h3>
                <figure>
                    <a href="img/example-slide-3.jpg" rel="lightbox" title="Photo by: Mike Ranweiler">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-3sml.jpg" alt="Photo by: Mike Ranweiler Link: http://www.flickr.com/photos/27874907@N04/4833059991/"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Mike Ranweiler
                        </strong>
                        die Headline von Alphabetdorf und die Subline seiner eigenen Straße.
                    </figcaption>
                </figure>
            </article>
            <article class="img-item">
                <h3 class="hidden">Lorem Ipsum</h3>
                <figure>
                    <a href="img/example-slide-4.jpg" rel="lightbox" title="Photo by: Stuart SeegerLink">
                        <span class="thumb-screen"></span>
                        <img src="img/example-slide-4sml.jpg" alt="Photo by: Stuart SeegerLink: http://www.flickr.com/photos/stuseeger/97577796/"/>
                    </a>
                    <figcaption>
                        <strong>
                            Photo by: Stuart Seeger
                        </strong>
                        Wehmütig lief ihm eine rhetorische Frage über die Wange.
                    </figcaption>
                </figure>
            </article>
            <br class="clear"/>
        </section>

        <section id="text_columns">
            <h2 class="hidden">Blindtext</h2>
            <article class="column1">    
                <h3>Dolor sit amet</h3>
                <p>Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein eigenes, sicheres Land zurückkehren.</p>
                <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange, bis ihm ein paar heimtückische Werbetexter auflauerten, es mit Longe und Parole betrunken machten und es dann in ihre Agentur schleppten, wo sie es für ihre Projekte wieder und wieder mißbrauchten.</p>
            </article>
            <section class="column2">
                <h3 class="hidden">Lorem Impsum</h3>
                <article class="row">  
                    <h4 class="hidden">Dolor sit</h4>      	
                    <img src="img/Objects-Rocket-icon.png" width="80" class="rocket" alt="rocket"/>            
                    <p>Und wenn es nicht umgeschrieben wurde, dann benutzen Sie es immernoch.</p>
                </article> 
                <article class="row">        	
                    <h4 class="hidden">Ipsum</h4>
                    <img src="img/Measurement-Units-Time-icon.png" class="clock" width="80" alt="time"/>            
                    <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange.</p>
                </article>
            </section>
        </section>
        <footer>
            <h2 class="hidden">Our footer</h2>
            <section id="copyright">
                <h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
                        <a href="javascript:void(0)"><img src="img/Social-Networks-Google-plus-icon.png" alt="google plus" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/Logos-Tumblr-icon.png" alt="tumblr" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/Logos-Youtube-icon.png" alt="youtube" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/Social-Networks-Bebo-icon.png" alt="bebo" width="25"/></a>
                        <a href="javascript:void(0)"><img src="img/Social-Networks-Xing-icon.png" alt="xing" width="25"/></a>
                    </div>
                    &copy; Copyright 2012 by <a href="http://www.lingulo.com">Lingulo</a>. All Rights Reserved. Icons by: <a href="http://www.visualpharm.com" target="_blank">Visualpharm</a>
                </div>
            </section>
            <section class="wrapper">
                <h3 class="hidden">Footer content</h3>
                <article class="column">
                    <h4>Lorem ipsum</h4>
                    Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein.
                </article>
                <article class="column midlist">
                    <h4>Consectetuer</h4>
                    <ul>
                        <li><a href="javascript:void(0)">Die Copy warnte das Blindtextchen</a></li>
                        <li><a href="javascript:void(0)">Unterwegs traf es eine Copy</a></li>
                        <li><a href="javascript:void(0)">Doch alles Gutzureden konnte</a></li>
                        <li><a href="javascript:void(0)">Als es die ersten Hügel</a></li>
                    </ul>
                </article>
                <article class="column rightlist">
                    <h4>Dolor sit amet</h4>
                    <ul>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-1sml.jpg" width="80" alt="Some alt text"/><span>Unterwegs traf es eine Copy. Die Copy warnte.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-2sml.jpg" width="80" alt="Some alt text"/><span>Doch alles Gutzureden konnte es nicht.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="img/example-slide-3sml.jpg" width="80" alt="Some alt text"/><span>Und es dann in ihre Agentur schleppten.</span></a></li>
                    </ul>
                    <br class="clear"/>
                </article>
            </section>
        </footer>
    </body>
</html>
