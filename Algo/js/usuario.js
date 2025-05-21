
document.addEventListener("DOMContentLoaded", function () {
const form = document.querySelector("form");
const nombreInput = document.querySelector('input[name="nombre"]');
const apellidoInput = document.querySelector('input[name="apellido"]');
const cedulaInput = document.querySelector('input[name="cedula"]');
const passwordInput = document.querySelector('input[name="password"]');
const telefonoInput = document.querySelector('input[name="telefono"]');
const fechaInput = document.querySelector('input[name="fechaNacimiento"]');

const nombreErrorDiv = document.getElementById('nombre-error');
const apellidoErrorDiv = document.getElementById('apellido-error');
const cedulaErrorDiv = document.getElementById('cedula-error');
const passwordErrorDiv = document.getElementById('password-error');
const telefonoErrorDiv = document.getElementById('telefono-error');
const fechaErrorDiv = document.getElementById('fecha-error');



form.addEventListener("submit", function (e) {
let errores = false;

if (nombreInput.value.trim() === "") {
    nombreInput.classList.add("is-invalid");
    nombreErrorDiv.textContent = "El nombre es obligatorio";
    errores = true;
}

if (apellidoInput.value.trim() === "") {
    apellidoInput.classList.add("is-invalid");
    apellidoErrorDiv.textContent = "El apellido es obligatorio";
    errores = true;
}
if (telefonoInput.value.trim() === "") {
    telefonoInput.classList.add("is-invalid");
    telefonoErrorDiv.textContent = "El telefono es obligatorio";
    errores = true;
}
if (fechaInput.value.trim() === "") {
    fechaInput.classList.add("is-invalid");
    fechaErrorDiv.textContent = "La fecha de nacimiento es obligatoria";
    errores = true;
}
if (cedulaInput.value.trim()=== "") {
    cedulaInput.classList.add("is-invalid");
    cedulaErrorDiv.textContent = "La cedula es obligatoria";
    errores = true;
}
if (passwordInput.value.trim()=== "") {
    passwordInput.classList.add("is-invalid");
    passwordErrorDiv.textContent = "La contraseña es obligatoria";
    errores = true;
}

if (errores) {
    e.preventDefault(); // evitar que se envíe el formulario
}
});

// Listeners para borrar errores
nombreInput.addEventListener("input", function () {
nombreInput.classList.remove("is-invalid");
nombreErrorDiv.textContent = "";
});

apellidoInput.addEventListener("input", function () {
apellidoInput.classList.remove("is-invalid");
apellidoErrorDiv.textContent = "";
});

cedulaInput.addEventListener("input", function () {
cedulaInput.classList.remove("is-invalid");
cedulaErrorDiv.textContent = "";
});

fechaInput.addEventListener("input", function () {
fechaInput.classList.remove("is-invalid");
fechaErrorDiv.textContent = "";
});

telefonoInput.addEventListener("input", function () {
telefonoInput.classList.remove("is-invalid");
telefonoErrorDiv.textContent = "";
});

passwordInput.addEventListener("input", function () {
passwordInput.classList.remove("is-invalid");
passwordErrorDiv.textContent = "";
});
});