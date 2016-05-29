<ul class="nav navbar-nav">
  
  @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="/admin/post"><i class="fa fa-folder-open"></i> Posts</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="/admin/tag"><i class="fa fa-tags"></i>Tags</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload"><i class="fa fa-upload"></i> Uploads</a>
    </li>
  @endif
</ul>


