<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="editdata">
            <h2>Edit DATA</h2>

            <form method="POST" action="/exam/update{{$data->id}}" enctype="multipart/form-data">
                @CSRF
                <label>Title</label>
                <input type="text" name="title" placeholder="title" value="{{$data->title}}" />
                <div>
                    <label>Content</label>
                    <input type="text" name="content" placeholder="content" value="{{$data->content}}" />
                    <br>
                    <input type="file" name="dokumen" placeholder="content" />
                </div>

                <!-- <div>
                    <label>Content</label>
                    <input type="file" name="image" placeholder="content" value="{{$data->image}}" />
                </div> -->

                <button type="submit" class="btn btn-primary" name="submit">
                    Simpan
                 </button>
            </form>
        </div>
</body>
</html>