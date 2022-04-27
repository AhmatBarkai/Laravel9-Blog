@extends('layouts.admin')
@section('title','Product Edit')

@section('content')



<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
          <!--logo start-->
          <a href="index.html" class="logo"><b>DASHGUM FREE</b></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
              <!--  notification start -->
              <ul class="nav top-menu">
                  <!-- settings start -->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                          <i class="fa fa-tasks"></i>
                          <span class="badge bg-theme">4</span>
                      </a>
                      <ul class="dropdown-menu extended tasks-bar">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 4 pending tasks</p>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">DashGum Admin Panel</div>
                                      <div class="percent">40%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                          <span class="sr-only">40% Complete (success)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Database Update</div>
                                      <div class="percent">60%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                          <span class="sr-only">60% Complete (warning)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Product Development</div>
                                      <div class="percent">80%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                          <span class="sr-only">80% Complete</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <div class="task-info">
                                      <div class="desc">Payments Sent</div>
                                      <div class="percent">70%</div>
                                  </div>
                                  <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                          <span class="sr-only">70% Complete (Important)</span>
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li class="external">
                              <a href="#">See All Tasks</a>
                          </li>
                      </ul>
                  </li>
                  <!-- settings end -->
                  <!-- inbox dropdown start-->
                  <li id="header_inbox_bar" class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                          <i class="fa fa-envelope-o"></i>
                          <span class="badge bg-theme">5</span>
                      </a>
                      <ul class="dropdown-menu extended inbox">
                          <div class="notify-arrow notify-arrow-green"></div>
                          <li>
                              <p class="green">You have 5 new messages</p>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Zac Snider</span>
                                  <span class="time">Just now</span>
                                  </span>
                                  <span class="message">
                                      Hi mate, how is everything?
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Divya Manian</span>
                                  <span class="time">40 mins.</span>
                                  </span>
                                  <span class="message">
                                   Hi, I need your help with this.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Dan Rogers</span>
                                  <span class="time">2 hrs.</span>
                                  </span>
                                  <span class="message">
                                      Love your new Dashboard.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">
                                  <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                  <span class="subject">
                                  <span class="from">Dj Sherman</span>
                                  <span class="time">4 hrs.</span>
                                  </span>
                                  <span class="message">
                                      Please, answer asap.
                                  </span>
                              </a>
                          </li>
                          <li>
                              <a href="index.html#">See all messages</a>
                          </li>
                      </ul>
                  </li>
                  <!-- inbox dropdown end -->
              </ul>
              <!--  notification end -->
          </div>
          <div class="top-menu">
              <ul class="nav pull-right top-menu">
                  <li><a class="logout" href="login.html">Logout</a></li>
              </ul>
          </div>
      </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Marcel Newman</h5>

                <li class="mt">
                    <a href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-desktop"></i>
                        <span>UI Elements</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="general.html">General</a></li>
                        <li><a  href="buttons.html">Buttons</a></li>
                        <li><a  href="panels.html">Panels</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>Components</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="calendar.html">Calendar</a></li>
                        <li><a  href="gallery.html">Gallery</a></li>
                        <li><a  href="todo_list.html">Todo List</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="active" href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>Extra Pages</span>
                    </a>
                    <ul class="sub">
                        <li class="active"><a  href="blank.html">Blank Page</a></li>
                        <li><a  href="login.html">Login</a></li>
                        <li><a  href="lock_screen.html">Lock Screen</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="form_component.html">Form Components</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="basic_table.html">Basic Table</a></li>
                        <li><a  href="responsive_table.html">Responsive Table</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="morris.html">Morris</a></li>
                        <li><a  href="chartjs.html">Chartjs</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <br>
            <br>
            <h3><i class="fa fa-angle-right"></i> Edit Product</h3>

            <div class="row mt">
                <div class='card'>
                    <div class="card-header">
                        <div class="col-lg-12">

                        </div>

                    </div>
                        <div class="row mt">
                            <div class="col-lg-12">
                                <div class="form-panel">
                                 <br>
                                 <br>
                                 <br>

                                <form class="form-inline" role="form" action="{{route('admin_product_update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Main Product :
                                        <br>
                                        <select value="0" class="form-select form-select-lg mb-3" name="category_id"    aria-label=".form-select-lg example">
                                            @foreach ($datalist as $rs )

                                            <option value="{{$rs->id}}"  @if ($rs->id==$data->category_id) selected = "selected" @endif >{{$rs->title}}</option>


                                            @endforeach


                                          </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Title</label>
                                        Title :
                                        <input type="text" name="title" class="form-control" value="{{$data->title}}" id="exampleInputPassword2" placeholder="title">
                                    </div><br>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Keywords : <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}" id="exampleInputEmail2" placeholder="Enter keywords">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Description : <input type="text" name="description" class="form-control"  value="{{$data->description}}" id="exampleInputEmail2" placeholder="Enter description">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Image : <input type="text" name="image" class="form-control"  value="{{$data->image}}"id="exampleInputEmail2" placeholder="Enter image">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Detail : <input type="detail" name="detail" class="form-control" value="{{$data->detail}}" id="exampleInputEmail2" placeholder="Enter detail">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2"></label>
                                        Slug :    <input type="text" name="slug" class="form-control"  value="{{$data->slug}}" id="exampleInputEmail2" placeholder="Enter slug">
                                    </div>

                                    <br>
                                    <select class="form-select form-select-lg mb-3" name="status"    aria-label=".form-select-lg example">
                                        <option selected>Status</option>
                                        <option selected='selected' > value="{{$data->status}}"</option>
                                        <option >True</option>
                                        <option >False</option>

                                      </select>

                                    <br>

                                    <button type="submit"  class="btn btn-theme">Update </button>

                                </form>

                                </div><!-- /form-panel -->
                            </div><!-- /col-lg-12 -->
                        </div>





                    <div class="col-md-12 mt">
                        <div class="content-panel">
                            <h4><i class="fa fa-angle-right"></i> Table</h4><hr>
                          </div><!-- --/content-panel ---->
                    </div>




                </div>
            </div>


      </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->
    <a href="#">Edit Product</a>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2014 - Alvarez.is
            <a href="blank.html#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection
