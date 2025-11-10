const tabs = document.querySelectorAll('.tab');
const title = document.getElementById('pack--title');
const image = document.getElementById('starter--pack');

const titles = {
    1: { title: "ZIMNÍ<br>IMMUNITY<br>PACK", color: '#223d50ff' },
    2: { title: "LETNÍ<br>ENERGY<br>PACK", color: '#2c5322ff' },
    3: { title: "PODZIMNÍ<br>STARTER<br>PACK", color: '#451d1dff' }
};

tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const packNum = tab.getAttribute('data-pack');
        const pack = titles[packNum];

        if (title.innerHTML === pack.title) return;

        title.classList.add('hidden');

        image.style.backgroundColor = pack.color; 
        
        setTimeout(() => {
            title.innerHTML = pack.title;
            title.classList.remove('hidden');
        }, 300);

        
    });
});