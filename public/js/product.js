const links = document.querySelectorAll('.product-container .list-images img');

links.forEach((enlace) => {
    enlace.addEventListener('mouseenter', (event) => {
        document.querySelectorAll('.product-container .main-images img').forEach((img) => {
            img.classList.remove('activo');

            if (img.dataset.image == event.target.dataset.image) {
                img.classList.add("activo");
              }
        })
    })
})