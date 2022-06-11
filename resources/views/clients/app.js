document.querySelector('#email').addEventListener('blur', validateEmail);

document.querySelector('#full_name').addEventListener('blur', validatefull_name);

document.querySelector('#identity_umber').addEventListener('blur', validateidentity_umber);

const reSpaces = /^\S*$/;

function validateidentity_umber(e) {
  const identity_umber = document.querySelector('#identity_umber');
  if (reSpaces.test(identity_umber.value)) {
    identity_umber.classList.remove('is-invalid');
    identity_umber.classList.add('is-valid');
    return true;
  } else {
    identity_umber.classList.remove('is-valid');

    identity_umber.classList.add('is-invalid');
    return false;
  }
}

function validateEmail(e) {
  const email = document.querySelector('#email');
  const re = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;

  if (reSpaces.test(email.value) && re.test(email.value)) {
    email.classList.remove('is-invalid');
    email.classList.add('is-valid');

    return true;
  } else {
    email.classList.add('is-invalid');
    email.classList.remove('is-valid');

    return false;
  }
}

function validatefull_name() {
  const full_name = document.querySelector('#full_name');
  const re = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})(?=.*[!@#$%^&*])/;
  if (re.test(full_name.value) && reSpaces.test(full_name.value)) {
    full_name.classList.remove('is-invalid');
    full_name.classList.add('is-valid');

    return true;
  } else {
    full_name.classList.add('is-invalid');
    full_name.classList.remove('is-valid');

    return false;
  }
}

(function () {
  const forms = document.querySelectorAll('.needs-validation');

  for (let form of forms) {
    form.addEventListener(
      'submit',
      function (event) {
        if (
          !form.checkValidity() ||
          !validateEmail() ||
          !validateidentity_umber() ||
          !validatefull_name()
        ) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          form.classList.add('was-validated');
        }
      },
      false
    );
  }
})();
