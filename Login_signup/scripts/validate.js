const form = document.querySelector(".js-sign-form");
const username = document.querySelector(".js-username");
const pwd = document.querySelector(".js-pwd");
const cpwd = document.querySelector(".js-cpwd");
const emailElement = document.querySelector(".js-email");

form.addEventListener("submit", (e) => {
  let validUserName = nameValidation();
  let validPwd = pwdValidation();
  let validEmail = emailValidation();
  if (!validUserName || !validPwd || !validEmail) {
    e.preventDefault();
  }
});

//Password validation--------------------------
const pwdValidation = () => {
  if (!isFilled(pwd) || !isFilled(cpwd)) {
    return false;
  }
  if (pwd.value !== cpwd.value) {
    toggleError(pwd, true);
    toggleError(cpwd, true);
    return false;
  }
  if (pwd.value.length < 8) {
    toggleError(pwd, true);
    toggleError(cpwd, true);
    return false;
  }
  return true;
};

//name validation -----------------------------
const nameValidation = () => {
  if (!isFilled(username)) {
    return false;
  }
  if (!isNaN(username.value)) {
    toggleError(username, true);
    return false;
  }
  return true;
};
//email validation--------------------------------
const emailValidation = () => {
  if (!isFilled(emailElement)) {
    return false;
  }
  return true;
};
//checking if a field is !empty--------------------
const isFilled = (input) => {
  if (input.value === "") {
    toggleError(input, true);
    return false;
  } else {
    toggleError(input, false);
    return true;
  }
};

// handling errors--------------------------------
const toggleError = (input, test, msg = "") => {
  if (test) {
    input.style = "border: 1px solid red";
  } else {
    input.style = "border:1px solid rgb(151, 151, 151)";
  }
};
