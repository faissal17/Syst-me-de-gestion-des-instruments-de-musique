// const form = document.getElementById("form");
// const UserName = document.getElementById("name");
// const email = document.getElementById("email");
// const password = document.getElementById("password");
// const cpass = document.getElementById("cpass");

// form.addEventListener("submit", (e) => {
//     e.preventDefault();

//     CheckInput();
// });

// function CheckInput() {
//     const UserNameValue = UserName.value.trim();
//     const emailValue = email.value.trim();
//     const passwordValue = password.value.trim();
//     const cpassValue = cpass.value.trim();

//     if (UserNameValue == "") {
//         setErrorFor(UserName, "User name cannot be blank");
//     } else {
//         setSuccessFor(UserName);
//     }
//     if (emailValue == "") {
//         setErrorFor(email, "email cannot be blank");
//     } else {
//         setSuccessFor(email);
//     }
//     if (passwordValue == "") {
//         setErrorFor(password, "password cannot be blank");
//     } else {
//         setSuccessFor(password);
//     }
//     if (cpassValue == "") {
//         setErrorFor(cpass, "confirmation of password cannot be blank");
//     } else {
//         setSuccessFor(cpass);
//     }

//     function setErrorFor(input, message) {
//         const issam = input.parentElement;
//         const small = document.getElementsByTagName("small");

//         small.innerText = message;
//         issam.className = "faissal";
//     }
// }