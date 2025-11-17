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
                    <li>účinek blablabla</li>
                    <li>vitamín ABC</li>
                    <li>energie na celý den</li>
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
                <img src="images/testneco.jpg" alt="Produkt">
            </div>

            <div class="special--right">
                <h2 class="special--title">Zdraví z přírody</h2>
                <p class="special--text">
                    Naše speciální směs vitamínů a minerálů podporuje imunitu i energii během dne.
                </p>

                <div class="special--hexes">
                <div class="hex">B12</div>
                <div class="hex">C</div>
                <div class="hex">Zinek</div>
                </div>
            </div>
        </div>
        
        <div class="special--wrapper special--dva">
            <div class="special--left">
                <img src="images/testneco.jpg" alt="Produkt">
            </div>

            <div class="special--right">
                <h2 class="special--title">Zdraví z přírody</h2>
                <p class="special--text">
                    Naše speciální směs vitamínů a minerálů podporuje imunitu i energii během dne.
                </p>

                <div class="special--hexes">
                <div class="hex">B12</div>
                <div class="hex">C</div>
                <div class="hex">Zinek</div>
                </div>
            </div>
        </div>
        
        <div class="special--wrapper special--tri">
            <div class="special--left">
                <img src="images/testneco.jpg" alt="Produkt">
            </div>

            <div class="special--right">
                <h2 class="special--title">Zdraví z přírody</h2>
                <p class="special--text">
                    Naše speciální směs vitamínů a minerálů podporuje imunitu i energii během dne.
                </p>

                <div class="special--hexes">
                <div class="hex">B12</div>
                <div class="hex">C</div>
                <div class="hex">Zinek</div>
                </div>
            </div>
        </div>

        <a href="eshop.php" class="eshop--odkaz">Zobrazit všechny produkty</a>
    </section>

    
    
    <script src="js/packSlides.js"></script>
    
<?php include "includes/footer.php" ?>