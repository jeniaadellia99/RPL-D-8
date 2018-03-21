
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="{{ asset('assets/img/logo1.jpg')}}" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Administrator
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
    <div class="divider">
    </div>
    <ul class="nav menu">
        <li><a href="{{route('dashboard')}}"> <span  class="fot"><span class="fa fa-home"></span>     Dashboard</span></a></li>
        <li><a href="{{ route('data-kelas') }}" ><span  class="fot""><span class="fa fa-clone"></span>     Data Kelas</span></a></li>
        <li><a href="{{ route('data-mhs') }}"><span  class="fot"><span class="fa fa-users"></span>     Data Mahasiswa</span></a></li>
        <li><a href="{{ route('data-dosen') }}"><span  class="fot""><span class="fa fa-users"></span>     Data Dosen</span></a></li>
        <li><a href="{{ route('jadwal') }}"><span  class="fot""><span class="fa fa-calendar"></span>     Jadwal</span></a></li>
        <li><a href="{{ route('mata-kuliah') }}"><span  class="fot""><span class="fa fa-book fa-lg"></span> Mata Kuliah</span></a></li>
        <li><a href="{{ route('ruangan') }}"><span  class="fot""><span class="fa fa-university"></span>     Ruangan</span></a></li>
        <li class="parent">
            <a data-toggle="collapse" href="#sub-itspan-1">
                <span  style="color: #9E9E9E; margin-left: 10%">
                    <span class="fa fa-navicon"></span>     Rekap Presensi
                    <span data-toggle="collapse" href="#sub-itspan-1" class="icon pull-right">
                        <span class="fa fa-plus"></span>
                    </span>
                </a>
                <ul class="children collapse" id="sub-itspan-1">
                    <li><a class="" href="rek-abasen.php">
                        <span  class="fot"><span class="fa fa-arrow-right"></span>     Presensi 24/01/2018</span></a></li>
                        <li><a class="" href="#">
                            <span  class="fot"><span class="fa fa-arrow-right"></span>     Presensi 24/02/2018</span></a></li>
                            <li><a class="" href="#">
                                <span  class="fot"><span class="fa fa-arrow-right"></span>     Presensi 24/03/2018</span></a></li>
                            </ul>
                        </span>
                    </li>
                </ul>
            </div><!--/.sidebar-->
