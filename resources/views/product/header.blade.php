<div class="type-12">
        <!--Back to top-->
        <button onclick="topFunction()" id="myBtn" title="Go to top"> 
            ^
        </button>
        <!--End Back to top-->

        <!--HEADER-->
        <div class="module-1">
            <!--LOGO-->
            <img src="{{ asset('/assets/images/logo.jpg') }}" alt=""/>
            <!--END LOGO-->

            <!--BUTTON MENU-->
            <div class="btn-menu-main">
               <span class="fa fa-navicon btn-menu collapsed" data-toggle="collapse" data-target=".collapse-top-menu"></span>
                <div class="clearfix"></div>
            </div>
            <!--END BUTTON MENU--> 

            <!--MENU-->
            <div class="menu">
               <ul class="nav-menu collapse collapse-top-menu">
                    <li class="item active"><a href="/"> Home </a></li>
                    <li class="item"><a href="/manage"> Manage </a></li>
                    <li class="item"><a href="/post"> Post </a></li>
                    <li class="item"><a href="/about"> About </a></li>
                </ul>
            </div>
            <!--END MENU-->
        </div>
        <!--END HEADER--> 
</div>         