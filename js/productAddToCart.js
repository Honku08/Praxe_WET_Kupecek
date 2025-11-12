document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault(); // 🔥 zruší klasické odeslání

        const product_id = this.dataset.id;
        const product_name = this.dataset.name;
        const product_price = this.dataset.price;
        const product_image = this.dataset.image;

        fetch('addToCart.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `product_id=${product_id}&product_name=${product_name}&product_price=${product_price}&product_image=${product_image}`
        })
        .then(res => res.json())
        .then(data => {
            if (data.status === 'success') {
                const cartCount = document.getElementById('cartCount');
                cartCount.textContent = data.cartCount;

                if (data.cartCount > 0) {
                    cartCount.style.display = 'inline-block';
                } else {
                    cartCount.style.display = 'none';
                }

                // animace
                cartCount.classList.add('bump');
                setTimeout(() => cartCount.classList.remove('bump'), 300);
            }
        })
        .catch(err => console.error(err));
    });
});