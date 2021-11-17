function confirmar_envio() {
  let eliminar = confirm("Esta seguro de eliminar esta tienda?");
  if (eliminar) return true;
  return false;
}

/* function confirmar_envio() {
  if (confirm("Esta seguro de eliminar esta tienda?")) {
    return true;
  } else {
    alert("No se envía el formulario");
    return false;
  }
} */
