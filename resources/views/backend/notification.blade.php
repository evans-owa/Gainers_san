<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
        <title> Sanitary</title>

        <link rel="stylesheet" href="{{asset('/css/dash.css')}}">
        <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
        <body>
            <input type="checkbox" id="nav-toggle">
                <div class="sidebar">
                    <div class="sidebar-brand">
                        <h2> <span class="lab la-vimeo"></span> <span>Vanse Academy</span> </h2>
                    </div>
                    <div class="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{url('dashboard')}}" ><span class="las la-igloo"></span>
                                    <span>Dashbored</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('productAdd')}}"><span class="las la-building"></span>
                                    <span>products</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('#')}}" class="active"><span class="las la-clipboard-list"></span>
                                    <span>Notification</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="main-content">
                    <header>
                        <div class="header-title">
                            <h2>
                                <label for="nav-toggle">
                                    <span class="las la-bars"></span>

                                </label> Dashboard
                            </h2>
                            <div class="search-wrapper">
                                <span class="las la-search"></span>
                                <input type="search" placeholder="search here" />
                            </div>

                            <div class="user-wrapper">
                                <img src="img/lg.png" width="30px" height="30px" alt="">
                                <div>
                                    <h4>Evans Owago</h4>
                                    <small>Super Admin</small>
                                </div>
                            </div>
                        </div>
                    </header>
                        <main>
                            <div class="cards">
                                <div class="card-single">
                                    <div>
                                        <h1>63</h1>
                                        <span>Brands</span>
                                    </div>
                                    <div>
                                        <span class="lab la-accusoft"></span>
                                    </div>
                                </div>
                                <div class="card-single">
                                    <div>
                                        <h1>120</h1>
                                        <span>Visitors</span>
                                    </div>
                                    <div>
                                        <span class="las la-users"></span>
                                    </div>
                                </div>
                                <div class="card-single">
                                    <div>
                                        <h1>33</h1>
                                        <span>Projects</span>
                                    </div>
                                    <div>
                                        <span class="las la-snowflake"></span>
                                    </div>
                                </div><div class="card-single">
                                    <div>
                                        <h1>45</h1>
                                        <span>Certification</span>
                                    </div>
                                    <div>
                                        <span class="las la-images"></span>
                                    </div>
                                </div>
                                <div class="card-single">
                                    <div>
                                        <h1>Ksh 20k</h1>
                                        <span>Income</span>
                                    </div>
                                    <div>
                                        <span class="las la-money-bill"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-grid">
                                <div class="projects">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>Current students</h3>
                                            <button> See all <span class="las la-arrow-right"></span></button>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table width="100%">
                                                <thead>
                                                    <tr>
                                                        <td>Students name</td>
                                                        <td>Adm number</td>
                                                        <td>Current Course</td>
                                                        <td>Status</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Evans odhiambo</td>
                                                        <td>33420</td>
                                                        <td>Web development</td>
                                                        <td>

                                                            <span class="status purple"></span>
                                                            Half way
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mark Ranger</td>
                                                        <td>1455</td>
                                                        <td>Cyber security</td>
                                                        <td>

                                                            <span class="status pink"></span>
                                                            al lmost
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Victor Ann</td>
                                                        <td>56420</td>
                                                        <td>Animation</td>
                                                        <td>

                                                            <span class="status green"></span>
                                                            Done
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Victor Ann</td>
                                                        <td>56420</td>
                                                        <td>Animation</td>
                                                        <td>

                                                            <span class="status green"></span>
                                                            Done
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Victor Ann</td>
                                                        <td>56420</td>
                                                        <td>Animation</td>
                                                        <td>

                                                            <span class="status green"></span>
                                                            Done
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="admininstration">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3>New Students</h3>
                                            <button>see all
                                                <span class="las la-arrow-right"></span>
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="student">
                                                <div class="info">
                                                    <img src="img/lg.png" width="40px" height="40px"  alt="profile picture">
                                                    <div>
                                                        <h4>Mourice idielo</h4>
                                                        <small> Computer Engineering </small>
                                                    </div>
                                                </div>
                                                <div class="contact">
                                                    <span class="las la-user-circle"></span>
                                                    <span class="las la-comment "></span>
                                                    <span class="las la-phone"></span>
                                                </div>
                                            </div>
                                            <div class="student">
                                                <div class="info">
                                                    <img src="img/lg.png" width="40px" height="40px"  alt="profile picture">
                                                    <div>
                                                        <h4>Mourice idielo</h4>
                                                        <small> Computer Engineering </small>
                                                    </div>
                                                </div>
                                                <div class="contact">
                                                    <span class="las la-user-circle"></span>
                                                    <span class="las la-comment "></span>
                                                    <span class="las la-phone"></span>
                                                </div>
                                            </div>
                                            <div class="student">
                                                <div class="info">
                                                    <img src="img/lg.png" width="40px" height="40px"  alt="profile picture">
                                                    <div>
                                                        <h4>Mourice idielo</h4>
                                                        <small> Computer Engineering </small>
                                                    </div>
                                                </div>
                                                <div class="contact">
                                                    <span class="las la-user-circle"></span>
                                                    <span class="las la-comment "></span>
                                                    <span class="las la-phone"></span>
                                                </div>
                                            </div>
                                            <div class="student">
                                                <div class="info">
                                                    <img src="img/lg.png" width="40px" height="40px"  alt="profile picture">
                                                    <div>
                                                        <h4>Mourice idielo</h4>
                                                        <small> Computer Engineering </small>
                                                    </div>
                                                </div>
                                                <div class="contact">
                                                    <span class="las la-user-circle"></span>
                                                    <span class="las la-comment "></span>
                                                    <span class="las la-phone"></span>
                                                </div>
                                            </div>
                                            <div class="student">
                                                <div class="info">
                                                    <img src="img/lg.png" width="40px" height="40px"  alt="profile picture">
                                                    <div>
                                                        <h4>Mourice idielo</h4>
                                                        <small> Computer Engineering </small>
                                                    </div>
                                                </div>
                                                <div class="contact">
                                                    <span class="las la-user-circle"></span>
                                                    <span class="las la-comment "></span>
                                                    <span class="las la-phone"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                </div>
        </body>
        {{-- @include('layouts.footer') --}}
    </head>
</html>
