<ul class="cols">
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

<a href="{{'/'}}">Главная</a>
<a href="{{'/book'}}">Новая книга</a>
<a href="{{'/login'}}">Вход</a>
<a href="{{'/user'}}">Регистрация</a>


<div class="wrapper">
    <form method="POST" action="" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label for="user_cover_address">Обложка:<br>
            <input type="file" name="user_cover_address">
        </label><br>

        <label for="user_firstname">Имя:<br>
            <input type="text" name="user_firstname" value="{{ old('user_firstname') }}">
        </label><br>

        <label for="user_lastname">Фамилия:<br>
            <input type="text" name="user_lastname" value="{{ old('user_lastname') }}">
        </label><br>

        <label for="user_password">Пароль:<br>
            <input type="text" name="user_password">
        </label><br>

        <label for="user_email">Email:<br>
            <input type="text" name="user_email">
        </label><br>

        <input type="submit" value="Сохранить">
    </form>
</div>