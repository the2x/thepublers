<!doctype html>
<html lang="en">
<head>
    <title>the Publers</title>
    @include('header.top')
</head>
<body>

<div class="wrapper">

    @include('header.header')
    <h3>Создать книгу</h3>
    <form action="{{ '/book' }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <label for="book_cover">Обложка книги:
            <input type="file" name="book_cover">
        </label>

        <label for="book_title">Название книги:
            <input type="text" name="book_title">
        </label>

        <label for="book_author">Автор книги:
            <input type="text" name="book_author">
        </label>

        <label for="book_year">Год издания:
            <input type="text" name="book_year">
        </label>

        <label for="book_category">Выбрать категорию:
            <select name="book_category" id="">
                @foreach($category as $content)
                    <option value="{{ $content->slug }}">{{ $content->category_name }}</option>
                @endforeach
            </select>
        </label>

        <label for="book_text">Информация:
            <textarea name="book_text" id="" cols="30" rows="10"></textarea>
        </label>

        <input type="submit" name="submit" value="Добавить">
    </form>
</div>