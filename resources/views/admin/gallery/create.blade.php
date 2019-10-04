<!DOCTYPE html>
<html>
    <head>
        <title>Login Novus Media</title>
        <link rel="stylesheet" type="text/css" href="../../css/gallery.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>

<div class="container">
    <h1>Upload Files</h1>

    <form action="/admin/gallery" method="post">

        @csrf
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

        <div class="form-group">

            <label for="Album Name">Album Name</label><br>

            <select name="albumname">
                <option selected>Select Album</option>
                <option>a</option>
                <option>b</option>
            </select>

        </div>

        <div class="form-group">

            <label for="Album Name">Member Name</label><br>
            <select name="membername">
                <option selected>Select Member</option>
                <option>a</option>
                <option>b</option>
            </select>

        </div>

        <div class="form-group">

            <label for="Choose Background">Choose Album Background</label><br>
            <input type="file" class="custom-file-input" name="image">

        </div>



        <div class="form-group">
            <input type="submit" name="submit" value="Create Now">
        </div>

    </form>
</div>

</body>
