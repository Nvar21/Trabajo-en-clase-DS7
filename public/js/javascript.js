document.addEventListener("DOMContentLoaded", function () {
  const form_login = document.getElementById("form-login");
  const form_registro = document.getElementById("form-registro");
  const cambiarRegistroBTN = document.getElementById("cambiarRegistrar");
  const cambiarLoginBTN = document.getElementById("cambiarLogin");
  const contenedorLogin = document.querySelector(".contenedor-login");
  const contenedorBienvenida = document.querySelector(".contenedor-bienvenida");
  const titulo_contenedor = document.getElementById("titulo-contenedor");
  const desc_contenedor = document.getElementById("desc_contenedor");
  const titulo_bienvenida = document.getElementById("titulo-bienvenida");
  const input_nombre = document.getElementById("cont-nombre");
  const input_apellido = document.getElementById("cont-apellido");
  const Iniciarsesionbtn = document.getElementById("IniciarSesionBTN");
  const Registrarsesionbtn = document.getElementById("RegistrarSesionBTN");
  const olvideBTN = document.getElementById("cambiarPass");

  cambiarRegistroBTN.addEventListener("click", () => {
    if (window.innerWidth > 1200) {
      // Código para pantallas mayores a 1200 píxeles
      contenedorBienvenida.parentNode.insertBefore(
        contenedorBienvenida,
        contenedorLogin
      );
    }
    form_login.style.display = "none";
    form_registro.style.display = "block";
    cambiarRegistroBTN.style.display = "none";
    cambiarLoginBTN.style.display = "block";
    Iniciarsesionbtn.style.display = "none";
    olvideBTN.style.display = "none";
    Registrarsesionbtn.style.display = "block";
    contenedorLogin.style.borderRadius = "0px 20px 20px 0px";
    contenedorBienvenida.style.borderRadius = "20px 0px 0px 20px";
    contenedorBienvenida.style.backgroundImage =
      "linear-gradient(80deg, #8477ff 0%, #06b3df 100%)";
    titulo_bienvenida.textContent = "Crea tu Cuenta Aquí.";
    titulo_contenedor.textContent = "Registro de Usuario";
    desc_contenedor.textContent =
      "Si ya tienes una cuenta, presiona el botón para iniciar sesión con ella.";
  });

  cambiarLoginBTN.addEventListener("click", () => {
    if (window.innerWidth > 1200) {
      // Código para pantallas mayores a 1200 píxeles
      contenedorBienvenida.parentNode.insertBefore(
        contenedorLogin,
        contenedorBienvenida
      );
    }
    form_login.style.display = "block";
    form_registro.style.display = "none";
    cambiarLoginBTN.style.display = "none";
    cambiarRegistroBTN.style.display = "block";
    Iniciarsesionbtn.style.display = "block";
    Registrarsesionbtn.style.display = "none";
    olvideBTN.style.display = "block";
    contenedorLogin.style.borderRadius = "20px 0px 0px 20px";
    contenedorBienvenida.style.borderRadius = "0px 20px 20px 0px";
    contenedorBienvenida.style.backgroundImage =
      "linear-gradient(80deg, #06b3df 0%, #8477ff 100%)";
    titulo_bienvenida.textContent = "¿Aún no tienes una cuenta?";
    titulo_contenedor.textContent = "Iniciar Sesión";
    desc_contenedor.textContent =
      "Si aún no tienes una cuenta, Regístrate para que puedas acceder a todo el contenido.";
  });
});
