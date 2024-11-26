<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | SMK CINTA KASIH TZU CHI</title>
    <link rel="icon" href="{{ asset('img/noimg.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<section>
    <div class="sidebar">
        <h1 class="logo">SMK CINTA KASIH TZU CHI</h1>

        <ul class="nav">
            <li><a href="#"><i class="fa fa-windows"></i> Dashboard</a></li>
            <li class="active"><a href="#"><i class="fa fa-shopping-bag"></i> Students</a></li>
            <li><a href="#"><i class="fa fa-pie-chart"></i> Statistic</a></li>
            <li><a href="#"><i class="fa fa-cube"></i> Database</a></li>
            <li><a href="#"><i class="fa fa-database"></i> Settings</a></li>
        </ul>

        <ul class="social">
            <li><a href="#">Logout</a></li>
        </ul>

    </div>

    <div class="main">       
        <div class="head-section">
            <div class="col-6">
                <h2>Welcome, Admin!</h2>
                <p>Admin Dashboard</p>
            </div>

            <div class="col-6" style="text-align: right;">
                <i class="fa fa-bell-o hicon"></i>
                <input type="text" class="search">
                <i class="fa fa-search hicon sicon"></i>

                <img src="{{asset('img/noimg.png')}}" class="user">

                <div class="profile-div">
                    <p><i class="fa fa-user"></i>Profile</p>
                    <p><i class="fa fa-cog"></i>Settings</p>
                    <p><i class="fa fa-power-off"></i>Log Out</p>
                </div>
                <div class="notification-div">
                    <p>Success! Your registration is now complete!</p>
                    <p>Here's some information you may find useful!</p>            
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <br><br>
        <div class="content">
            <p>All orders</p><br><br>

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" width="60px">NISN</th>
                            <th scope="col" width="120px">Nama</th>
                            <th scope="col" width="120px">Jenis Kelamin</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Agama</th>
                            <th scope="col" width="200px">Alamat</th>
                            <th scope="col" width="90px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        <tr>
                        <td data-label="Account">{{$student->nisn}}</td>
                        <td data-label="Due Date">{{$student->nama_lengkap}}</td>
                        <td data-label="Amount">{{$student->jk}}</td>
                        <td data-label="Period">{{$student->tgl_lahir}}</td>
                        <td data-label="Due Date">{{$student->agama}}</td>
                        <td data-label="Amount">{{$student->alamat_siswa}}</td>
                        <td data-label="Period">
                            <a  href="{{route('student.edit', ['student' => $student])}}"><i class="fa fa-pencil ticon" ></i></a>   
                            <form method="post" action="{{route('student.destroy', ['student' => $student])}}" style="display: inline-block;">
                                @csrf
                                @method('delete')
                                <button type="submit" style="width: 25px;" value="Delete" ><i class="fa fa-trash ticon"></i></button>
                            </form>
                            <i class="fa fa-gear ticon"></i> 
                        </td>                 
                        </tr>
                    @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".user").click(function(){
            $(".profile-div").toggle(1000);
        });
        $(".hicon:nth-child(1)").click(function(){
            $(".notification-div").toggle(1000);
        });
        $(".sicon").click(function(){
            $(".search").toggle(1000);
        });
    });
</script>

<script type="text/javascript">
    $('li').click(function(){
        $('li').removeClass("active");
        $(this).addClass("active");
    });
</script>

</body>
</html>
