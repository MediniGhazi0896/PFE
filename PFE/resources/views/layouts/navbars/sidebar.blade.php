<div class="sidebar" data-color="azure" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-4.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
      {{ __('DASSI Dashboard') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Home') }}</p>
        </a>
      </li>
    
 
     
      <li class="nav-item cursor-pointer">
          <a class="nav-link" id="dropdownMenuUsers">
            <i class="material-icons" id="dropdownIconUsers">keyboard_arrow_down</i>
              <p> Admin Dashboard </p>
          </a>
      </li>
      <div id="dropdownItemsUsers">
        <li class="ml-3 nav-item{{ $activePage == 'user' ? ' active' : '' }}">
            <a class="nav-link" href="/users/add">
              <i class="material-icons">person_add</i>
                <p>{{ __('Invite User ') }}</p>
            </a>
          </li>

          <li class="ml-3 nav-item{{ $activePage == 'user-list' ? ' active' : '' }}">
            <a class="nav-link" href="/users/list">
              <i class="material-icons">people</i>
                <p>{{ __('List Users') }}</p>
            </a>
          </li>
    <li class="ml-3 nav-item{{ $activePage == 'user_find' ? ' active' : '' }}">
            <a class="nav-link" href="/users/find">
             <i class="material-icons">people</i>
                <p> Search user </p>
            </a>
          </li>
      </div>
   
      <li class="nav-item cursor-pointer">
          <a class="nav-link" id="dropdownMenuCorps">
            <i class="material-icons" id="dropdownIconCorps">keyboard_arrow_down</i>
              <p> User Dashboard </p>
          </a>
      </li>
    
      <div id="dropdownItemsCorps">
  
 <li class="ml-3 nav-item{{ $activePage == 'upload-moral' ? ' active' : '' }}">
            <a class="nav-link" href="/form/Moral">
             <i class="material-icons">content_paste</i>
                <p> Moral Person Form  </p>
            </a>
          </li>
     
 <li class="ml-3 nav-item{{ $activePage == 'upload-physical' ? ' active' : '' }}">
            <a class="nav-link" href="/form/Physical">
             <i class="material-icons">content_paste</i>
                <p> Physical Person Form  </p>
            </a>
          </li>
     
  
     </div>
     <li class="ml-3 nav-item{{ $activePage == 'upload-form' ? ' active' : '' }}">
            <a class="nav-link" href="/form/upload">
             <i class="material-icons">content_paste</i>
                <p> Upload Form </p>
            </a>
          </li> 
    <li class="ml-3 nav-item{{ $activePage == 'download-form' ? ' active' : '' }}">
            <a class="nav-link" href="/form/Download">
             <i class="material-icons">content_paste</i>
                <p> Download Form </p>
            </a>
          </li> 
    
    
    </ul>
       <li class="ml-3 nav-item{{ $activePage == '' ? ' active' : '' }}">
            <a class="nav-link" href="/users/view">
             <i class="material-icons">content_paste</i>
                <p>view users 11 </p>
            </a>
          </li> 
  </div>
</div>
  
