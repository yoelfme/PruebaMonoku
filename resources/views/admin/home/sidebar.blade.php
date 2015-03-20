<div id="sidebar">
    <!-- Sidebar Brand -->
    <div id="sidebar-brand" class="themed-background">
        <a href="#" class="sidebar-title">
           <!--  <i class="fa fa-cube"></i>  --><span class="sidebar-nav-mini-hide"><strong>Monoku</strong></span>
        </a>
    </div>
    <!-- END Sidebar Brand -->

    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
             <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                @foreach($menu as $key => $value)
                    @if(array_key_exists("childrens", $value))
                        <li class="menu">
                            <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-{{ $value["icon"] }} sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">{{ $value["label"] }}</span></a>
                            <ul class="sidebar">
                                @foreach($value["childrens"] as $key2 => $value2)
                                    <li><a href="#/{{ $value2["route"] }}">{{ $value2["label"] }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="#/{{ $value["route"]}}" data-container="{{ $value["container"] }}" data-class="{{ $value["class"] }}"><i class="fa fa-{{ $value["icon"] }} sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">{{ $value["label"] }}</span></a></li>
                    @endif
                @endforeach
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->

     <!-- Sidebar Extra Info -->
    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
        <div class="text-center">
            <small>Created with <i class="fa fa-heart text-danger"></i> by </small><br>
                <a href="https://github.com/yoelfme" target="_blank">Yoel Monzon</a>
        </div>
    </div>
    <!-- END Sidebar Extra Info -->
</div>
