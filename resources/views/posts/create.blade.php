<form method="POST" action="/posts">
    {{ csrf_field() }}

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
    </div>

    <div>
        <label for="body">Body</label>
        <textarea name="body" id="body"></textarea>
    </div>

    <div>
        <input type="submit" value="Publish">
    </div>

</form>
