document.addEventListener("DOMContentLoaded", () => {
    const productCards = document.querySelectorAll('.product--card');
    const modal = document.querySelector('.product-modal');
    const modalContent = document.querySelector('.product-modal-content');
    const modalTitle = document.querySelector('.modal-title');
    const modalPrice = document.querySelector('.modal-price');
    const modalDesc = document.querySelector('.modal-desc');
    const modalInfo = document.querySelector('.modal-info');
    const closeBtn = document.querySelector('.close');

    productCards.forEach(card => {
        card.addEventListener('click', e => {
            if(e.target.tagName.toLowerCase() === 'button') return;
            e.preventDefault();
            modalTitle.textContent = card.dataset.name;
            modalPrice.textContent = card.dataset.price;
            modalDesc.textContent = card.dataset.desc;
            modalInfo.textContent = card.dataset.info;
            modal.classList.add('active');
        });

        const button = card.querySelector('button');
        if(button){
            button.addEventListener('click', e => {
                e.stopPropagation();
            });
        }
    });

    closeBtn.addEventListener('click', () => {
        modal.classList.remove('active');
    });

    modal.addEventListener('click', e => {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });
});