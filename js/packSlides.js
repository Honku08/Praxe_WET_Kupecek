document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll('.tab');
    const title = document.getElementById('pack--title');
    const image = document.getElementById('starter--pack');
    document.getElementById('starter--pack') === null;

    const titles = {
        1: { title: "ZIMNÍ<br>IMMUNITY<br>PACK", background: 'url("images/background-blue.png") center/cover no-repeat' },
        2: { title: "LETNÍ<br>ENERGY<br>PACK", background: 'url("images/background-yellow.png") center/cover no-repeat' },
        3: { title: "PODZIMNÍ<br>STARTER<br>PACK", background: 'url("images/background-red.png") center/cover no-repeat'    }
    };

    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');

            const packNum = tab.getAttribute('data-pack');
            const pack = titles[packNum];

            if (title.innerHTML === pack.title) return;

            title.classList.add('hidden');

            image.style.background = pack.background; 
            
            setTimeout(() => {
                title.innerHTML = pack.title;
                title.classList.remove('hidden');
            }, 300);

            
        });
    });
});