const filterBtn = document.getElementById('filterBtn');
const filterOverlay = document.getElementById('filterOverlay');
const closeFilter = document.getElementById('closeFilter');
const applyFilter = document.getElementById('applyFilter');
const productsGrid = document.getElementById('productsGrid');
const checkboxes = document.querySelectorAll('.filter--options input[type="checkbox"]');

filterBtn.addEventListener('click', () => {
    filterOverlay.classList.add('active');
});

closeFilter.addEventListener('click', () => {
    filterOverlay.classList.remove('active');
});

filterOverlay.addEventListener('click', (e) => {
    if (e.target === filterOverlay) {
        filterOverlay.classList.remove('active');
    }
});

applyFilter.addEventListener('click', () => {
    const selectedFilters = Array.from(checkboxes)
        .filter(cb => cb.checked)
        .map(cb => cb.value);

    const products = productsGrid.querySelectorAll('.product--card');

    products.forEach(product => {
        const type = product.getAttribute('data-type');
    
    if (selectedFilters.length === 0 || selectedFilters.includes(type)) {
        product.style.display = 'flex';
    } else {
        product.style.display = 'none';
    }
});

  filterOverlay.classList.remove('active');
});