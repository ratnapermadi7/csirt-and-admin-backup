<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="icon" href="img/perumnas_logo icon.png">
	<meta name="viewport" content="width=device-width">
	<title>Unduh Laporan</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/stylepdf.css" rel="stylesheet">
</head>
<header>
	<div class="container">
        <p align="right" style="margin-top: 50px;">
            <input type="button" value="Print" onclick="window.open('Print.php')">
            </p>
        <img src="img/perumnas_logo.png" style="margin-top: 25px; margin-left: 10px;">
		<center style="margin-top: 25px; font-family: 'montserrat', sans-serif; font-weight: bolder;"><h3> LAPORAN CSIRT </h3></center>
		<br>
	</div>
</header>

<body style="font-family:'montserrat', sans-serif; " >
    <div class="container" style="height: 80%;">
        <div class="profil"> 
            <ul class="laporan">
               
                    
            
                <table border="1" align="left"  cellpadding="10" style="font-size: medium; margin-left: 10%; width: 80%; margin-right: 10%;">
                    
                @foreach($dataLaporan as $dt)
                    
                    <tr>
                        <h1></h1>
                        <th>Nama</th>
                        <th >: {{$dt->nama}}</th> 
                    </tr>
                    <tr>
                        <th>Email </th>
                        <th name="">: {{$dt->email}}</th>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <th name="">: {{$dt->telepon}}</th>
                    </tr>
                    <tr>
                        <th>Kategori</th>
                        <th name="">: {{$dt->kategori}}</th>
                    </tr>
                    <tr>
                        <th>Judul Laporan</th>
                        <th name="">{{$dt->judul}}</th>
                    </tr>
                    <tr>
                        <th>Isi Laporan</th>
                        <th name="" style="font-size: 14px;"> {{$dt->laporan}} </th>
                    </tr>

    
                    @endforeach
                    
                </table>
            </ul> 
        </div>
    </div>
</body>


<footer class="sticky-footer bg-white" style="height: 10%;">
        <div class="container my-auto">
           
    <img align= "bottom";style="max-width:100%;" width="429" height="20%" src="data:image/png;base64, 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
    F8MAAAAASUVORK5CYII=">
    </div>

    
</footer>


</div>

	

</html>