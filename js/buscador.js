const tiendas = [
  { nombre: "la mayoria" },
  { nombre: "Casa Mexicana" },
  { nombre: "Almacen ropa y moda" },
  { nombre: "Tenis sport" },
  { nombre: "Ferreteria manolito" },
];

const buscador = document.querySelector("#buscador");
const boton = document.querySelector("#boton");
const resultado = document.querySelector("resultado");

const filtrar = () => {
  resultado.innerHTML = "";
  const texto = buscador.value.toLowerCase();

  for (let tienda of tiendas) {
    let nombre = tienda.nombre.toLowerCase();

    if (nombre.indexOf(texto) !== -1) {
      resultado.innerHTML += `
        <h2> ${tienda.nombre} - categoria: ${tienda.categoria}</h2>
        `;
    }
  }
  if (resultado.innerHTML == "") {
    resultado.innerHTML += `
    <li>producto no encontrado...</li>
    `;
  }
};

boton.addEventListener("click", filtrar);
buscador.addEventListener("keyup", filtrar);

filtrar();
