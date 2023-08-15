<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN CREATEt</title>
</head>

<body>
    <h1>Edit DATA</h1>

    <form method="post" enctype="multipart/form-data" action="{{route('exam.store')}}">
        @CSRF
        <label>TITLE</label>
        <input type="text" name="title" placeholder="title" />
        <div>
            <label>CONTENT</label>
            <input type="text" name="content" placeholder="content" />
        </div>


        <div>
            <input type="file" class="form-control" name="dokumen" value="">
        </div>
        <!-- <div>
            <label>Image</label>
            <input type="file" name="image" placeholder="content" />
        </div> -->

        <button type="submit" class="btn btn-primary" name="submit">
            Simpan
        </button>
    </form>

</body>

</html>