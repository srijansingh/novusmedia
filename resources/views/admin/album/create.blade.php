<!DOCTYPE html>
<html>
<head>
    <title>Login Novus Media</title>
    <link rel="stylesheet" type="text/css" href="../../css/album.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
    <h1>Create Album</h1>

    <form action="/admin/album" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <div class="form-group">
            <label for="Album Name">Album Name</label><br>
            <input type="text" name="albumname" placeholder="Album Name">
        </div>

        <div class="form-group">
            <label for="Choose Background">Choose Album Background</label><br>
            <input type="file" class="custom-file-input" name="albumimage">
        </div>

        <div class="form-group">
            <label for="description">Album Description</label><br>
            <textarea name="albumdescription" placeholder="Description about Album...."></textarea>
        </div>

        <div class="form-group">
            <input type="submit"  name="submit" value="Create Now">
        </div>

    </form>
</div>

</body>
