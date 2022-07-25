<div class="dlabnav">
    <div class="dlabnav-scroll mm-active ps ps--active-y">
        <ul class="metismenu mm-show" id="menu">
            @if(Auth::user()->isAdmin())
                @include('includes.adminMenu')
            @elseif(Auth::user()->isChef())    
                @include('includes.chefMenu')
            @else 
                @include('includes.memberMenu')
            @endif

        </ul>
        <a class="add-menu-sidebar d-block" href="javascript:void(0)" data-toggle="modal"
            data-target="#addOrderModalside">+ New Project</a>
        <div class="copyright">
            <p><strong>Vora Saas Admin Dashboard</strong> © 2021 All Rights Reserved</p>
            <p>Made with <span class="heart"></span> by DexignLab</p>
        </div>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 835px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 757px;"></div>
        </div>
    </div>
</div>
