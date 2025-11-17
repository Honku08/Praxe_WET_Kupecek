document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll('.product form');

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
                    } else {
                        console.warn("Element #cartCount nenalezen");
                    }
                } else {
                    console.error("Chyba při přidávání do košíku:", data.message);
                }
            })
            .catch(err => console.error("Fetch chyba:", err))
            .finally(() => submitting = false);
        });
    });
});
