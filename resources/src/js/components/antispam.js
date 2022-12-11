import axios from "axios";
import Toast from "toastr";
(function () {

    const contactsButton = document.getElementById("contactsButton");
    const modalForm = document.getElementById("myQuestions")
    const inputName = document.getElementById("formInputName");
    const inpunContactsText = document.getElementById("inpunContactsText");
    const inputPhone = document.getElementById("formContactPhone");
    const close = document.querySelector(".closeForm")
    const questionButton = document.getElementById("questionButton");
    const inputModal = document.getElementById("inputModal");
    const errorAnswerQuestion = document.querySelector(".errorAnswerQuestion");
    let randQuestions = null
    let errorInputs = "";

    function openModal() {
        const questions = [
            ["Сколько будет два плюс два? (Ответ напишите цифрой)", 4],
            //["Назовите столицу России? ", "Москва"],
            ["Какой сейчас век? (Ответ напишите цифрой)", 21]
        ];

        let rand = Math.floor(Math.random()*questions.length);
        randQuestions = questions[rand];

        modalForm.style.display = "block";
        close.onclick = () => {
            modalForm.style.display = "none";
        }

        window.onclick = (event) => {
            if (event.target === modalForm) modalForm.style.display = "none";
        };

        let modelQuestions = document.getElementById("modelQuestions");
        modelQuestions.innerText = randQuestions[0];
    }

    if (contactsButton) {
        contactsButton.addEventListener("click", (e) => {
            e.preventDefault();
            errorInputs = "";
            let error = false;
            if (inputName && inputPhone) {
                if (inputName.value === "") {
                    error = true;
                    errorInputs += "<p>Вы не ввели свое Имя</p>"
                }

                if (inputPhone.value === "") {
                    error = true;
                    errorInputs += "<p>Вы не ввели номер телефона</p>";
                }
            }

            if (error) {
                document.getElementById("errorInputForm").innerHTML = errorInputs;
            } else {
                document.getElementById("errorInputForm").innerHTML = "";
                openModal();
            }
        })
    }

    if (questionButton) {
        questionButton.addEventListener("click", (e) => {
            errorInputs = "";
            if (inputModal.value === "") errorInputs = "Вы не ответили на вопрос";
            if (inputModal.value != randQuestions[1]) errorInputs = "Ответ на вопрос не верный, попробуйте еще раз";

            if (errorInputs == "") {
                errorAnswerQuestion.innerText = "";
                questionButton.setAttribute("disabled", "disabled");
                axios.post('/contacts-form', {
                    name: inputName.value,
                    phone: inputPhone.value,
                    text: inpunContactsText,
                })
                    .then(function (response) {
                        if (response.status === 200) {
                            console.log(response)
                            inputModal.value = "";
                            modalForm.style.display = "none";
                            questionButton.removeAttribute("disabled");
                            document.getElementById("formContacts").reset();
                            Toast.success("Ваше сообщение успешно отправленно", {interval: 3000});
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            } else {
                errorAnswerQuestion.innerText = errorInputs;
            }
        })
    }
})();
