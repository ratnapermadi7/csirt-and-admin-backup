<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>USER</title>
</head>

<body>

    <h1> TAMPILAN UNTUK PENGGUNA</h1>


    <div class="container">
        <a>
            <div class="row">
                <table class="table">

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

                    </tbody>

                    @endforeach
                </table>
            </div>
        </a>
    </div>
    <form method="POST" action="">
        <div class="container">
            <div class="row">
                <label  class="form-label">Aduan</label>
                <input placeholder="nama" name="nama" class="form-control">
                <input placeholder="email" name="email" class="form-control">
                <input placeholder="aduan" name="aduan" class="form-control">

                <button type="submit" class="btn btn-primary" name="submit">
                Kirim
            </div>
        </div>
    </form>

</body>

</html>