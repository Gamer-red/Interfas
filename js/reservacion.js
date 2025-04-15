function mostrarCampo() {
    const valor = document.getElementById("tipo").value;
    const mesa = document.getElementById("reserva-mesa");
    const local = document.getElementById("reserva-local");

    // Ocultar todos primero
    mesa.classList.add("oculto");
    local.classList.add("oculto");

    // Mostrar el que corresponde
    if (valor === "mesa") {
      mesa.classList.remove("oculto");
    } else if (valor === "local") {
      local.classList.remove("oculto");
    }
  }