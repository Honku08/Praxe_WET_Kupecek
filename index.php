<?php include "includes/menu.php" ?>

    <section class="hero">
        <div class="hero--content">
            <h1>For<span>Health</span></h1>
            <p class="slogan"><span>SÍLA</span> v každém balení, <span>ZDRAVÍ</span> v každé kapsli</p>
            <a href="#about" class="hero--btn">A kdo vůbec jsme?</a>
        </div>
    </section>

    <section class="about--company" id="about" style= "scroll-margin-top: 6vh;">
        <h2>Kdo jsme</h2>
        <p>
            Jsme malá česká firma zaměřená na podporu zdravého životního stylu.
            Prodáváme kvalitní doplňky stravy, vitamíny, proteiny a další produkty, které pomáhají tělu získat vše, co potřebuje pro energii a rovnováhu.
        </p>
        <p>
            Naše cílem je usnadnit lidem cestu ke zdraví – bez zbytečných složitostí a s důrazem na kvalitu.
        </p>
    </section>

    <section class="why--us">
        <h2>Proč si vybrat právě nás</h2>
        <div class="duvody">
            <div class="duvod duvod--jedna">
                <img class="jedna--img" src="images/kvalitaICON.png" alt="Kvalita">
                <h3>Špičková kvalita</h3>
                <p>Každý produkt obsahuje jen ověřené látky od spolehlivých dodavatelů.</p>
            </div>
            <div class="duvod duvod--dva">
                <img class="dva--img" src="images/přírodaICON.png" alt="Příroda">
                <h3>Přírodní složení</h3>
                <p>Podporujeme zdraví bez chemie a zbytečných přísad.</p>
            </div>
            <div class="duvod duvod--tri">
                <img class="tri--img" src="images/jednoduchostICON.png" alt="Jednoduchost">
                <h3>Jednoduchost</h3>
                <p>Nemusíš nic složitě vybírat – vyber si pack a máš hotovo.</p>
            </div>
        </div>
    </section>

    <section class="slideshow">
        <button class="arrow left">&#10094;</button>
  
        <div class="slides">
            <?php include "includes/slideshowSlide/slideONE.php" ?>
            <?php include "includes/slideshowSlide/slideTWO.php" ?>
            <?php include "includes/slideshowSlide/slideTHREE.php" ?>
        </div>

        <button class="arrow right">&#10095;</button>
    </section>
    
    <script src="js/slideshow.js"></script>

    <script src="js/packSlides.js"></script>

<?php include "includes/footer.php" ?>