document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll('.product form');

    // vytvoření elementu pro oznámení
    const toast = document.createElement('div');
    toast.id = 'cart--toast';
    toast.style.position = 'fixed';
    toast.style.bottom = '30px';
    toast.style.right = '30px';
    toast.style.background = '#45872cff';
    toast.style.color = '#fff';
    toast.style.padding = '12px 20px';
    toast.style.borderRadius = '8px';
    toast.style.boxShadow = '0 0 10px rgba(0,0,0,0.3)';
    toast.style.opacity = '0';
    toast.style.transition = 'opacity 0.4s ease';
    toast.style.zIndex = '2000';
    document.body.appendChild(toast);

    function showToast(message) {
        toast.textContent = message;
        toast.style.opacity = '1';
        setTimeout(() => {
            toast.style.opacity = '0';
        }, 2000); // zůstane 2 sekundy
    }

    forms.forEach(form => {
        let submitting = false; // zabrání dvojímu odeslání

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (submitting) return; 
            submitting = true;

            const formData = new FormData(form);

            fetch("addToCart.php", {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.status === "success") {
                    const badge = document.getElementById("cartCount");
                    if (badge) {
                        badge.textContent = data.cart_count;
                        badge.classList.toggle("hidden", data.cart_count === 0);
                    }
                    showToast("Produkt byl přidán do košíku");
                } else {
                    console.error("Chyba při přidávání do košíku:", data.message);
                }
            })
            .catch(err => console.error("Fetch chyba:", err))
            .finally(() => submitting = false);
        });
    });
});
