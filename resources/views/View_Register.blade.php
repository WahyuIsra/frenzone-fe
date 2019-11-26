<h3>Data berhasil di input</h3>
<p>Nama Mahasiswa : {{$collegue->name}}</p>
<p>NIM Mahasiswa : {{$collegue->nim}}</p>
<p>Gender Mahasiswa : {{$collegue->gender}}</p>
<p>Password Mahasiswa : {{$collegue->password}}</p>
<p>Email Mahasiswa : {{$collegue->email}}</p>
<p>Role Mahasiswa : {{$collegue->role}}</p>
<p>Faculty Mahasiswa : {{$collegue->faculty}}</p>
{{-- 
<script type="text/javascript">
    setTimeout(function(){
        window.location.href = '/get-collegue'
    }, 5000);
</script> --}}

<h1>Data Mahasiswa</h1>
<table>
    <tr>
        <th>Nama Mahasiswa</th>
        <th>NIM Mahasiswa</th>
        <th>Gender Mahasiswa</th>
        <th>password Mahasiswa</th>
        <th>Email Mahasiswa</th>
        <th>Role Mahasiswa</th>
        <th>Faculty Mahasiswa</th>
    </tr>
    @foreach ($collection as $item)
    <tr>
        <td>{{$}}</td>
    </tr>        
    @endforeach
</table>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>