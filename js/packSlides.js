document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.tab');
    const title = document.getElementById('pack--title');
    const image = document.getElementById('starter--pack');
    const form = document.querySelector('.add-to-cart-form');
    const ul = document.querySelector('.starter--pack--left ul');

    const inputs = {
        product_id: form.querySelector('input[name="product_id"]'),
        product_name: form.querySelector('input[name="product_name"]'),
        product_price: form.querySelector('input[name="product_price"]'),
        product_image: form.querySelector('input[name="product_image"]'),
        product_filter: form.querySelector('input[name="product_filter"]')
    };

    const titles = {
        1: { 
            title: "ZIMNÍ<br>IMMUNITY<br>PACK", 
            background: 'url("images/background-blue.png") center/cover no-repeat',
            formData: { product_id: "16", product_name: "Pack 1", product_price: "150", product_image: "images/testneco.jpg", product_filter: "pack" },
            listItems: ["účinek blablabla", "vitamín ABC", "energie na celý den"]
        },
        2: { 
            title: "LETNÍ<br>ENERGY<br>PACK", 
            background: 'url("images/background-yellow.png") center/cover no-repeat',
            formData: { product_id: "17", product_name: "Pack 2", product_price: "170", product_image: "images/testneco.jpg", product_filter: "pack" },
            listItems: ["osvěžující účinek", "vitamín DEF", "energie na sluneční dny"]
        },
        3: { 
            title: "PODZIMNÍ<br>STARTER<br>PACK", 
            background: 'url("images/background-red.png") center/cover no-repeat',
            formData: { product_id: "18", product_name: "Pack 3", product_price: "160", product_image: "images/testneco.jpg", product_filter: "pack" },
            listItems: ["podzimní pohoda", "vitamín GHI", "energie na chladné dny"]
        }
    };

    const ulWrapper = document.querySelector('.list--wrapper');

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const packNum = tab.getAttribute('data-pack');
            const pack = titles[packNum];

            if (title.innerHTML === pack.title) return;

            // fade out title a ul wrapper zároveň
            title.classList.add('hidden');
            ulWrapper.classList.add('hidden');
            image.style.background = pack.background;

            setTimeout(() => {
                // změna title
                title.innerHTML = pack.title;

                // změna obsahu ul wrapperu
                ulWrapper.innerHTML = '';
                pack.listItems.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item;
                    ulWrapper.appendChild(li);
                });

                // aktualizace formuláře
                inputs.product_id.value = pack.formData.product_id;
                inputs.product_name.value = pack.formData.product_name;
                inputs.product_price.value = pack.formData.product_price;
                inputs.product_image.value = pack.formData.product_image;
                inputs.product_filter.value = pack.formData.product_filter;

                // fade in
                title.classList.remove('hidden');
                ulWrapper.classList.remove('hidden');
            }, 300);
        });
    });
});
