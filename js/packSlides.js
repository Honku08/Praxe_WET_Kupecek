document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.tab');
    const title = document.getElementById('pack--title');
    const image = document.getElementById('starter--pack');
    const form = document.querySelector('.add-to-cart-form');
    const ulWrapper = document.querySelector('.list--wrapper');

    const packImages = document.querySelectorAll('.pack--img');

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
            formData: { product_id: "16", product_name: "Pack 1", product_price: "150", product_image: "images/products/vitaminC-nobg.png", product_filter: "pack" },
            listItems: ["Vitamín C", "Vitamín D", "Multivitamín"],
            images: [
                "images/products/vitaminC-nobg.png",
                "images/products/VitaminD3Forte-nobg.png",
                "images/products/MultivitaminActiveDaily-nobg.png"
            ]
        },
        2: { 
            title: "LETNÍ<br>ENERGY<br>PACK",
            background: 'url("images/background-yellow.png") center/cover no-repeat',
            formData: { product_id: "17", product_name: "Pack 2", product_price: "170", product_image: "images/products/MultivitaminActiveDaily-nobg.png", product_filter: "pack" },
            listItems: ["Multivitamín", "Energy Shot Syrup", "Vitamín C"],
            images: [
                "images/products/MultivitaminActiveDaily-nobg.png",
                "images/products/vitaminC-nobg.png",
                "images/products/EnergyShotSyrup-nobg.png"
            ]
        },
        3: { 
            title: "PODZIMNÍ<br>STARTER<br>PACK",
            background: 'url("images/background-red.png") center/cover no-repeat',
            formData: { product_id: "18", product_name: "Pack 3", product_price: "160", product_image: "images/products/DetoxTeaBalance-nobg.png", product_filter: "pack" },
            listItems: ["Multivitamín", "Detox Tea", "Vitamín D"],
            images: [
                "images/products/MultivitaminActiveDaily-nobg.png",
                "images/products/VitaminD3Forte-nobg.png",
                "images/products/DetoxTeaBalance-nobg.png"
            ]
        }
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const packNum = tab.getAttribute('data-pack');
            const pack = titles[packNum];

            if (title.innerHTML === pack.title) return;

            title.classList.add('hidden');
            ulWrapper.classList.add('hidden');
            packImages.forEach(img => img.classList.add('hidden'));

            image.style.background = pack.background;

            setTimeout(() => {
                title.innerHTML = pack.title;

                ulWrapper.innerHTML = "";
                pack.listItems.forEach(item => {
                    const li = document.createElement("li");
                    li.textContent = item;
                    ulWrapper.appendChild(li);
                });

                packImages.forEach((img, i) => {
                    img.src = pack.images[i];
                });

                inputs.product_id.value = pack.formData.product_id;
                inputs.product_name.value = pack.formData.product_name;
                inputs.product_price.value = pack.formData.product_price;
                inputs.product_image.value = pack.formData.product_image;
                inputs.product_filter.value = pack.formData.product_filter;

                title.classList.remove('hidden');
                ulWrapper.classList.remove('hidden');
                packImages.forEach(img => img.classList.remove('hidden'));

            }, 300);
        });
    });
});
