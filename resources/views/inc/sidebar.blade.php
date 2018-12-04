<div class="col-lg-4 col-md-3">
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MENU</h3>
                <strong>BS</strong>
            </div>

            <ul class="list-unstyled components">
                <li class= {{ Request::is('/') ? 'active' : '' }}>
                    <a href="/"{{--  data-toggle="collapse" aria-expanded="false" --}}>
                        <i class="glyphicon glyphicon-home"></i>
                        Home
                    </a>
                    {{-- <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Home 1</a></li>
                        <li><a href="#">Home 2</a></li>
                        <li><a href="#">Home 3</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="#about">
                        <i class="glyphicon glyphicon-briefcase"></i>
                        About
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="glyphicon glyphicon-duplicate"></i>
                        Places we visited
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li><a href="#">New York</a></li>
                        <li><a href="#">Los Angeles</a></li>
                        <li><a href="#">Washington</a></li>
                    </ul>
                </li>
                <li>
                    <a href="gallery">
                        <i class="glyphicon glyphicon-paperclip"></i>
                        Gallery
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <i class="glyphicon glyphicon-send"></i>
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span></span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>





    <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

     <!-- Bootstrap Js CDN -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <script type="text/javascript">
         $(document).ready(function () {
             $('#sidebarCollapse').on('click', function () {
                 $('#sidebar').toggleClass('active');
             });
         });
     </script>
    </div>
   {{--  </div>
</div> --}}