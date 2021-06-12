const btnDepartamentos = document.getElementById("btn-deparments");
const enlaces = document.querySelectorAll("#menu .categorias a");
const grid = document.getElementById("grid");
const btnRegresar = document.querySelector(".btn-regresar");
const btnCerrar = document.getElementById("btn-menu-cerrar");
const contenedorSubCategorias = document.querySelector(
  "#grid .contenedor-subcategorias"
);
const conatinerLinks = document.querySelector("#menu .container-links-nav");
const dispositivo = () => {
  if (window.innerWidth <= 800) {
    return true;
  } else {
    return false;
  }
};

//MOSTRAR EL MENU DESPLEGABLE

//OCULTAR EL MENU DESPLEGABLE
grid.addEventListener("mouseenter", () => {
  grid.classList.add("activo");
});

grid.addEventListener("mouseleave", () => {
  if (!dispositivo()) {
    grid.classList.remove("activo");
  }
});

//CAMBIAR DE CATEGORIA Y SUBCATEGORIA

enlaces.forEach((enlace) => {
  enlace.addEventListener("mouseenter", (event) => {
    if (!dispositivo()) {
      document.querySelectorAll("#menu .subcategoria").forEach((categoria) => {
        //quitamos la categoria de activo a l,a categoria que lo tenga
        categoria.classList.remove("activo");

        if (categoria.dataset.categoria == event.target.dataset.categoria) {
          categoria.classList.add("activo");
        }
      });
    }
  });
});

/// Toggle button para dispositivos moiles

document
  .querySelector("#btn-menu-barras")
  .addEventListener("click", (event) => {
    event.preventDefault();

    if (conatinerLinks.classList.contains("activo")) {
      conatinerLinks.classList.remove("activo");
      document.querySelector("body").style.overflow = "visible";
    } else {
      conatinerLinks.classList.add("activo");
      document.querySelector("body").style.overflow = "hidden";
    }
  });

// click para mostrar todos los departamentos
btnDepartamentos.addEventListener("click", (event) => {
  event.preventDefault();
  btnCerrar.classList.add("activo");

  if (grid.classList.contains("activo")) {
    grid.classList.remove("activo");
  } else {
    grid.classList.add("activo");
  }
});

btnRegresar.addEventListener("click", (event) => {
  event.preventDefault();
  grid.classList.remove("activo");
  btnCerrar.classList.remove("activo");
});

// ABrir la descripcion de cada categoria

enlaces.forEach((elemento) => {
  elemento.addEventListener("click", (e) => {
    if (dispositivo()) {
      contenedorSubCategorias.classList.add("activo");
      document
        .querySelectorAll("#menu .subcategoria")
        .forEach((subcategoria) => {
          subcategoria.classList.remove("activo");
          if (subcategoria.dataset.categoria == e.target.dataset.categoria) {
            subcategoria.classList.add("activo");
          }
        });
    }
  });
});

document
  .querySelectorAll("#grid .contenedor-subcategorias .btn-regresar")
  .forEach((button) => {
    button.addEventListener("click", (event) => {
      event.preventDefault();
      contenedorSubCategorias.classList.remove("activo");
    });
  });

btnCerrar.addEventListener("click", (event) => {
  event.preventDefault();
  document.querySelectorAll("#menu .activo").forEach((elemento) => {
    elemento.classList.remove("activo");
  });
  document.querySelector("body").style.overflow = "visible";
});

document.getElementById("input-search").addEventListener("focusin", () => {
  document.querySelector(".menu .center-nav").classList.add("activo");
});

document.getElementById("input-search").addEventListener("focusout", () => {
  document.querySelector(".menu .center-nav").classList.remove("activo");
});

/* ******************************* */
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000);
}

/* ****************** */
var slideIndexProduct = 1;
showSlidesProducts(slideIndexProduct);

function plusSlidesProducts(n) {
  showSlidesProducts(slideIndexProduct += n);
}

function showSlidesProducts(n) {
  let i;
  let slides = document.getElementsByClassName("product-slide");
  if (n > slides.length) {slideIndexProduct = 1}
  if (n < 1) {slideIndexProduct = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndexProduct-1].style.display = "grid";
}

var slideIndexProduct2 = 1;
showSlidesProducts2(slideIndexProduct2);

function plusSlidesProducts2(n) {
  showSlidesProducts2(slideIndexProduct2 += n);
}

function showSlidesProducts2(n) {
  let i;
  let slides = document.getElementsByClassName("product-slide2");
  if (n > slides.length) {slideIndexProduct2 = 1}
  if (n < 1) {slideIndexProduct2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }

  slides[slideIndexProduct2 - 1].style.display = "grid";
}