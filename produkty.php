<?php include "includes/menu.php" ?>

    <section class="starter--pack product" id="starter--pack">
        <div class="starter--pack--left">
            <h1 id="pack--title">
                <span class="row">ZIMNÍ</span>
                <span class="row">IMMUNITY</span>
                <span class="row">PACK</span>
            </h1>
            <ul class="starter--pack--list">
                <div class="list--wrapper">
                    <li>Vitamín C</li>
                    <li>Vitamín D</li>
                    <li>Multivitamín</li>
                </div>
            </ul>
            <form class="add-to-cart-form" method="post">
                <input type="hidden" name="product_id" value="16">
                <input type="hidden" name="product_name" value="Pack 1">
                <input type="hidden" name="product_price" value="150">
                <input type="hidden" name="product_image" value="images/testneco.jpg">
                <input type="hidden" name="product_filter" value="pack">
                <button type="submit">Přidat do košíku</button>
            </form>
        </div>

        <div class="starter--pack--right">
            <img class="pack--img jedna" src="images/products/vitaminC-nobg.png" alt="">
            <img class="pack--img dva" src="images/products/VitaminD3Forte-nobg.png" alt="">
            <img class="pack--img tri" src="images/products/MultivitaminActiveDaily-nobg.png" alt="">
            <div class="pack--tabs">
                <button class="tab active" data-pack="1"><span>1</span> Imunita je důležitá</button>
                <button class="tab" data-pack="2"><span>2</span> Letní osvěžení</button>
                <button class="tab" data-pack="3"><span>3</span> Podzimní pohoda</button>
            </div>
        </div>
    </section>

    <section class="special">
        <div class="special--wrapper special--jedna">
            <div class="special--left">
                <img src="images/products/EnergyBoostComplex-nobg.png" alt="Produkt">
            </div>

            <div class="special--right">
                <h2 class="special--title">Energy Boost Complex</h2>
                <p class="special--text">
                    Energy Boost Complex kombinuje kofein, guaranu a vitaminy skupiny B pro maximální podporu výkonu i mentálního soustředění. Ideální před tréninkem, při studiu nebo během náročného dne. Díky postupnému uvolňování energie nedochází k prudkému poklesu jako u běžných energetických nápojů.
                </p>

                <div class="special--hexes">
                <div class="hex">Max výkon</div>
                <div class="hex">Bez poklesu</div>
                <div class="hex">Kofein + B</div>
                </div>
            </div>
        </div>
        
        <div class="special--wrapper special--dva">
            <div class="special--left">
                <img src="images/products/EnergyShotSyrup-nobg.png" alt="Produkt">
            </div>

            <div class="special--right">
                <h2 class="special--title">Energy Shot Syrup</h2>
                <p class="special--text">
                    Energy Shot Syrup poskytuje okamžitý náboj energie díky výtažku z guarany, ženšenu a přírodního kofeinu. Ideální před tréninkem nebo při únavě. Bez umělých sladidel, s přírodní ovocnou příchutí.
                </p>

                <div class="special--hexes">
                <div class="hex">Max výkon</div>
                <div class="hex">Bez poklesu</div>
                <div class="hex">Kofein + B</div>
                </div>
            </div>
        </div>

        <a href="eshop.php" class="eshop--odkaz">Zobrazit všechny produkty</a>
    </section>

    
    
    <script src="js/packSlides.js"></script>
    
<?php include "includes/footer.php" ?>