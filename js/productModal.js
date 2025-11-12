document.addEventListener("DOMContentLoaded", () => {
    const productCards = document.querySelectorAll('.product--card');
    const modal = document.querySelector('.product-modal');
    const modalImg = document.querySelector('.modal-img');
    const modalTitle = document.querySelector('.modal-title');
    const modalPrice = document.querySelector('.modal-price');
    const modalDesc = document.querySelector('.modal-desc');
    const closeBtn = document.querySelector('.close');

    productCards.forEach(card => {
        card.addEventListener('click', e => {
            // ignoruj kliknutí, pokud klik je na button
            if(e.target.tagName.toLowerCase() === 'button') return;

            e.preventDefault();
            modalImg.src = card.dataset.img;
            modalTitle.textContent = card.dataset.name;
            modalPrice.textContent = card.dataset.price;
            modalDesc.textContent = card.dataset.desc;
            modal.style.display = 'flex';
        });

        // zastavení šíření události kliknutí na button
        const button = card.querySelector('button');
        if(button){
            button.addEventListener('click', e => {
                e.stopPropagation(); // <--- klíčové
                // zde můžeš přidat kód pro přidání do košíku
            });
        }
    });

    closeBtn.addEventListener('click', () => modal.style.display = 'none');
    modal.addEventListener('click', e => {
        if (e.target === modal) modal.style.display = 'none';
    });
});