<div id="contacts">
    <div class="contacts-fon contactsFon animate__animated">
        <div class="container-fluid">
            <div class="containers contacts-form">
                <h2 class="contacts-form__title">Заказать обратный звонок</h2>
                <p class="contacts-form__text">Если у вас остались вопросы, оставьте контактные данные и мы обязательно позвоним</p>
                <form id="formContacts">
                    <div class="form-group">
                        <input class="form-control contacts-form__input" type="text" placeholder="Ваше имя" name="name" id="formInputName">
                        <p class="text-danger" id="formInputNameError"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control contacts-form__input" type="text" placeholder="+7 (970) 251 25 78" name="phone" id="formContactPhone">
                        <p class="text-danger" id="formInputPhoneError"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control contacts-form__input contacts-form__textarea" id="inpunContactsText" name="text" placeholder="Опишите вопрос или предложение"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id="contactsButton" class="btn btn-primary button-contacts">Заказать звонок</button>
                    </div>
                </form>
                <div id="errorInputForm" class="errorInputForm"></div>
            </div>
        </div>
    </div>
</div>
