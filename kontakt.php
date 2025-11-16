<?php include "includes/menu.php" ?>

<section class="contact-form">
    <div class="contact--container">
        <h2>Kontaktujte nás</h2>
        <form id="contactForm" method="post">
            <div class="form-group">
                <label for="name">Jméno</label>
                <input type="text" id="name" name="name" placeholder="Vaše jméno" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Váš email" required>
            </div>

            <div class="form-group">
                <label for="subject">Předmět</label>
                <input type="text" id="subject" name="subject" placeholder="Předmět zprávy" required>
            </div>

            <div class="form-group">
                <label for="message">Zpráva</label>
                <textarea id="message" name="message" rows="6" placeholder="Napište nám..." required></textarea>
            </div>

            <button type="submit">Odeslat</button>
        </form>
    </div>
</section>

<?php include "includes/footer.php" ?>