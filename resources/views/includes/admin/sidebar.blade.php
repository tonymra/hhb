<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('assets/admin/images/placeholder.jpg')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        <span class="media-heading text-semibold">{{ Auth::user()->name }}</span>
                        <div class="text-size-mini text-muted">
                            &nbsp;{{ Auth::user()->role->name }}
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{ url('/admin') }}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>




                    <li class="navigation-header"><span>Clients & Leads</span> <i class="icon-menu" title="Clients and Leads"></i></li>

                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Baby Massage</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Baby Yoga</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Leads</span></a></li>

                    <li class="navigation-header"><span>Baby Massage</span> <i class="icon-menu" title="Baby Massage"></i></li>

                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Courses</span></a></li>

                    <li class="navigation-header"><span>Baby Yoga</span> <i class="icon-menu" title="Baby Yoga"></i></li>

                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Classes</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Attendance</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Class Cards</span></a></li>

                    <li class="navigation-header"><span>Settings</span> <i class="icon-menu" title="Settings"></i></li>

                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>User Accounts</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Backup</span></a></li>

                    <li class="navigation-header"><span>Reports</span> <i class="icon-menu" title="Reports"></i></li>

                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Baby Massage</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>Baby Yoga</span></a></li>
                    <li><a href="{{  url('/admin') }}"><i class="icon-list-unordered"></i> <span>User History</span></a></li>




                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>