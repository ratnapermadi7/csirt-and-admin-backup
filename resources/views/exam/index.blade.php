<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>ADMIN</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2>Tampilan untuk admin</h2>
            <h1> DATA CMS</h1>
        </div>
        <a>
            <div class="row">
                <table class="table">

                    <div class="d-grid gap-2 d-md-block">
                        <a href="/exam/create"> <button class="btn btn-primary" type="button">Tambah Data</button></a>

                    </div>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                        </tr>
                    </thead>

                    @php $no = 1; @endphp @foreach($data as $row)
                    <tbody>
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{$row->title}}</td>
                            <td>{{$row->content}}</td>
                            <td>{{$row->created_at->diffForHumans()}} </td>
                            <td><a href="dokumen/{{$row->dokumen}}"><button type="button" class="btn btn-info">Download</button></td></a>

                            <td>
                                <a type="button" class="btn btn-danger" href="/exam/delete{{$row->id}}">Delete</a>
                                <a type="button" class="btn btn-info" href="/exam/show{{$row->id}}">Edit</a>
                            </td>
                    </tbody>

                    @endforeach
                </table>


            </div>


        </a>

    </div>


</body>

</html>