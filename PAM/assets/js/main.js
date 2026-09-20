document
  .querySelectorAll('a[href="#"]')
  .forEach((link) =>
    link.addEventListener("click", (event) => event.preventDefault()),
  );
document
  .querySelectorAll(".contact-form input, .contact-form textarea")
  .forEach((field) =>
    field.addEventListener("input", () => field.classList.remove("is-invalid")),
  );
