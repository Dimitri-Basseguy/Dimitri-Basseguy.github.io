<?php 
    $quote = [
        'We have to stop optimizing for programmers and start optimizing for users.',
        'If the code and the comments do not match, possibly both are incorrect.',
        "Your mind is programmable - if you're not programming your mind, else will program it for you.",
        "It’s not a bug. It’s an undocumented feature!",
        "A user interface is like a joke. If you have to explain it, it’s not that good.",
        "My code DOESN’T work, I have no idea why. My code WORKS, I have no idea why.",
        "Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.",
        "Any fool can write code that a computer can understand. Good programmers write code that humans can understand.",
        "First, solve the problem. Then, write the code.",
    ];

    function randomQuote($param)
    {
      echo $param[mt_rand(0,(count($param)-1))];
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Mono">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="assets/css/styles2.css">
    <title>Dimitri Basseguy a web developper</title>
</head>
<body style="margin: 0;">
    <div class="d-flex flex-column flex-sm-column flex-md-column flex-lg-row flex-xl-row align-items-xl-center mycontainer">
        <header class="d-flex flex-column justify-content-center align-items-center header">
            <img class="header__avatar header--glow" src="assets/img/portrait-web.jpg" data-toggle="tooltip" title="<?php randomQuote($quote); ?>">
            <h1>Hello i'm Dimitri</h1>
            <p>a Web developper</p>
            <p class="header__quote">i'm currently learning</p><img class="header__icon" src="https://static.formation.tech/formations/logos/889d72ed4da481c24ef573c9098b1a99.svg" />
                <div class="d-flex justify-content-center align-items-center">
                    <p class="header__certif__text">My certifications</p>
                    <img class="header__certif header--glow" src="https://res-4.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco/ikqra03zdnggljdu5vv0">
                    <img class="header__certif header--glow" src="https://media-exp1.licdn.com/dms/image/C4E0BAQHFiadA79wN4g/company-logo_200_200/0?e=2159024400&amp;v=beta&amp;t=QHWlslf5k6s_nGm2gbAVnxXKy6c_5Q8oi6gZlJITKiA">
                </div>
            <p class="text-center header__work">Let's work together... <br> <a href="https://www.malt.fr/profile/dimitribasseguy" target="blank"><i class="fa fa-coffee"></i> How do you take your coffee?</a></p>
        </header>
        <article class="d-flex justify-content-center align-items-center me">
            <pre>
<span class="me__data">class</span> <span class="me__var">Dev</span> <span class="me__job">{</span>
    <span class="me__1">public</span> <span class="me__var">$name</span>  <span class="me__data">=</span> <span class="me__data--tab">'Dimitri Basseguy'</span><span class="me__var">;</span>
    <span class="me__1">public</span> <span class="me__var">$job</span>  <span class="me__data">=</span> <span class="me__data--tab">'web developper'</span><span class="me__var">;</span>
    <span class="me__1">public</span> <span class="me__var">$email</span>  <span class="me__data">=</span> <span class="me__data--tab">'dimitri.basseguy@gmail.com'</span><span class="me__var">;</span>
    <span class="me__1">public</span> <span class="me__var">$location</span>  <span class="me__data">=</span> <span class="me__data--tab">'9 rue Rosset - Lyon - France'</span><span class="me__var">;</span>

    <span class="me__1">public</span> <span class="me__var">$experiences</span> <span class="me__data">= [</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'developper web <span class="me__job">@</span> <a href="https://oclock.io/formations/developpeur-web" target="blank">O'clock</a></span><span class="me__var">,</span>
        <span class="me__comment">// Développement Backend (Symfony) d’une application web. 4 semaines intensives. My Dev Skill Tree a pour but donner une idée des compétences à connaître pour un développeur sous la forme d’un arbre technologique.</span>
        <span class="me__data--tab">'2017-2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'freelance'</span><span class="me__var">,</span>
        <span class="me__comment">// Création de site web, web-marketing, PAO.</span>
        <span class="me__data--tab">'2015-2017'</span> <span class="me__data">=</span> <span class="me__data--tab">'webmarketing project manager <span class="me__job">@</span> <a href="https://www.shogunmoto.com" target="blank">shogunmoto.com</a>'</span><span class="me__var">,</span>
        <span class="me__comment">// Shogunmoto.com : SEO, SEA, Shopping, Google ads, Facebook ads, Bing Ads. client relation with CRM, e-mailing. Community management. Website redesign (design responsive).</span>
        <span class="me__data--tab">'2011-2015'</span> <span class="me__data">=</span> <span class="me__data--tab">'restaurant manager <span class="me__job">@</span> Thai in box'</span><span class="me__var">,</span>
        <span class="me__comment">// i deeply love thai food !!.</span>
        <span class="me__data--tab">'2010-2011'</span> <span class="me__data">=</span> <span class="me__data--tab">'webmarketing <span class="me__job">@</span> <a href="https://www.shogunmoto.com" target="blank">shogunmoto.com</a>'</span><span class="me__var">,</span>
        <span class="me__comment">// Web marketing SEO/SEA, web design, on-site pub. E-mailling.</span>
        <span class="me__data--tab">'2000-209'</span> <span class="me__data">=</span> <span class="me__data--tab">'infographist'</span>
    <span class="me__data">]</span><span class="me__var">;</span>

    <span class="me__1">public</span> <span class="me__var">$studys</span> <span class="me__data">= [</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'Learning web developper at O'clock School (730h). Labeled G.E.N -> <a href="https://www.freecodecamp.org/certification/dimitri-basseguy/responsive-web-design" target="blank">verify'</a></span><span class="me__var">,</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'Responsive Web Design Developer Certification at freeCodeCamp.org'</span><span class="me__var">,</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'Maîtrise de la qualité en projet Web at opquast -> <a href="https://directory.opquast.com/fr/certificat/MEJW0I/" target="blank">verify'</a></span>
    <span class="me__data">]</span><span class="me__var">;</span>
    
    <span class="me__1">public</span> <span class="me__var">$realisations</span> <span class="me__data">= [</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://www.mydevskilltree.tech" target="blank">mydevskilltree.tech</a>'</span><span class="me__var">,</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://institutbeautelyon2.fr" target="blank">institutbeautelyon2.fr</a>'</span><span class="me__var">,</span>
        <span class="me__data--tab">'2020'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://jcalinvest.com" target="blank">jcalinvest.com</a>'</span>
    <span class="me__data">]</span><span class="me__var">;</span>

    <span class="me__1">public</span> <span class="me__var">$coding knowledge</span> <span class="me__data">= [</span><span class="me__data--tab">'PHP'</span><span class="me__var">,</span><span class="me__data--tab">'Javascript'</span><span class="me__var">,</span><span class="me__data--tab">'Bootstrap'</span><span class="me__var">,</span><span class="me__data--tab">'MySQL'</span><span class="me__var">,</span><span class="me__data--tab">'Apache'</span><span class="me__var">,</span><span class="me__data--tab">'Github'</span></span><span class="me__data">]</span><span class="me__var">;</span>
    <span class="me__1">public</span> <span class="me__var">$coding framework</span> <span class="me__data">= [</span></span><span class="me__data--tab">'Symfony'</span><span class="me__var">,</span><span class="me__data--tab">'Wordpress'</span><span class="me__data">]</span><span class="me__var">;</span>
    <span class="me__1">public</span> <span class="me__var">$softwares</span> <span class="me__data">= [</span></span><span class="me__data--tab">'VSCode'</span><span class="me__var">,</span><span class="me__data--tab">'Photoshop'</span><span class="me__var">,</span><span class="me__data--tab">'Illustrator'</span><span class="me__var">,</span><span class="me__data--tab">'Figma'</span><span class="me__var">,</span><span class="me__data--tab">'Sketch'</span><span class="me__var">,</span><span class="me__data--tab">'Office'</span><span class="me__data">]</span><span class="me__var">;</span>
    
    <span class="me__1">public</span> <span class="me__var">$links</span> <span class="me__data">= [</span>
        <span class="me__data--tab">'website'</span> <span class="me__data">=</span> <span class="me__data--tab">'seriously ? you are already there.'</span><span class="me__var">,</span>
        <span class="me__data--tab">'github'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://github.com/Dimitri-Basseguy/" target="blank">github.com/Dimitri-Basseguy</a>'</span><span class="me__var">,</span>
        <span class="me__data--tab">'linkedin'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://www.linkedin.com/in/dimitri-basseguy/" target="blank">linkedin.com/in/dimitri-basseguy</a>'</span>
        <span class="me__data--tab">'freelance'</span> <span class="me__data">=</span> <span class="me__data--tab">'<a href="https://www.malt.fr/profile/dimitribasseguy" target="blank">malt.fr/dimitribasseguy</a>'</span>
    <span class="me__data">]</span><span class="me__var">;</span>
<span class="me__job">}</span>     
            </pre>
        </article>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>
</html>