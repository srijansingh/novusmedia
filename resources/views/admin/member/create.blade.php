<!DOCTYPE html>
<html>
<head>
    <title>Login Novus Media</title>
    <link rel="stylesheet" type="text/css" href="../../css/album.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="container">
    <h1>Add Team</h1>
    <form action="/admin/member" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="form-group">
            <label for="Member Name">Member Name</label><br>
            <input type="text" name="membername" placeholder="Enter Member Name">

        </div>

        <div class="form-group">
            <label for="Choose Background">Profile Picture</label><br>
            <input type="file" class="custom-file-input" name="profilepic">
        </div>

        <div class="form-group">
            <label for="Member Tagline">Tagline</label><br>
            <input type="text" name="membertag" placeholder="Enter Position, tagline">

        </div>

        <div class="form-group">
            <label for="description">About \Member</label><br>
            <textarea name="aboutmember" placeholder="About...."></textarea>

        </div>

        <div class="form-group">
            <input type="submit" name="submit" value="Create Now">
        </div>

    </form>
</div>

</body>
