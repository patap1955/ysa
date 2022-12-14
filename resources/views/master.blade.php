<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')
    <body>
        @include('layouts.header')
        @include('layouts.first-screen')

        @yield('content')

        @include('layouts.footer')


        <!--  Модельное окно с вопросом от спама -->
        <div id="myQuestions" class="modalForm">
            <div class="modal-content-form">
                <span class="closeForm">&times;</span>
                <p class="text-question">Подтвердите что вы не робот. Ответьте на вопрос</p>
                <p class="text-question-answer" id="modelQuestions"></p>
                <div class="modal-form-block">
                    <div class="form-group">
                        <input class="form-control contacts-form__input inputModal" type="text" id="inputModal" required>
                        <p class="text-danger" id="formInputPhoneError"></p>
                    </div>
                    <div class="form-group">
                        <button id="questionButton" class="btn btn-primary button-contacts">Ответить</button>
                    </div>
                    <p class="errorAnswerQuestion"></p>
                </div>
            </div>
        </div>

        <script src="{{ mix('/assets/js/main.js') }}"></script>
        @yield("scripts")
    </body>
</html>
