@extends('adminlte::page')
@section('content')
    <section>
        <h2>Add an article</h2>
        <form action="/add_article" method="post" class="d-flex flex-column w-25">
        @csrf
            <label for="src">Image
                <input type="file" name="src">
            </label>
            <label for="date">Date
                <input type="date" name="date">
            </label>
            <label for="title">Title
                <input type="text" name="title">
            </label>
            <label for="text">Text
                <textarea name="text" id="" cols="30" rows="10"></textarea>
            </label>
            <label for="author">Author
                <input type="text" name="author">
            </label>
            <label for="function">Function
                <input type="text" name="function">
            </label>
            <label for="descr">Description
                <input type="text" name="descr">
            </label>
            <label for="tags">Tags
                <select multiple name="" id="">
                    @foreach ($tagsData as $tags)
                        <option value="">{{$tags->tags}}</option>
                    @endforeach
                </select>
            </label>
            <button type="submit" class="btn btn-success" style="width: 15%">Done</button>
        </form>
    </section>
@endsection