<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
    <body>
    @if (auth()->user()->role === 'admin')
    <h3>Welcome, Administrator!</h3>
    <ul class="list-group">
        <li class="list-group-item"><a href="/master_user/" class="text-decoration-none"> Master User</a></li>
        <li class="list-group-item"><a href="" class="text-decoration-none">Master Barang</a></li>
        <li class="list-group-item"><a href="" class="text-decoration-none">Pembelian Barang</a></li>
        <li class="list-group-item"><a href="" class="text-decoration-none">Report Rekap Pembelian Barang</a></li>
      </ul>
    @elseif (auth()->user()->role === 'user')
    <h3>Welcome, User!</h3>
    <ul class="list-group">
        <li class="list-group-item"><a href="" class="text-decoration-none">Pembelian Barang</a></li>
        <li class="list-group-item"><a href="" class="text-decoration-none">Report Rekap Pembelian Barang</a></li>
      </ul>
    @else <h3>Invalid Session</h3>
    @endif  
    </body>
</html>