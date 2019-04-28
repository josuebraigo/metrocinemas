<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ backpack_url('actor') }}'><i class='fa fa-male'></i><span>Actores</span></a></li>
<li><a href='{{ backpack_url('director') }}'><i class='fa fa-user'></i><span>Directores</span></a></li>
<li><a href='{{ backpack_url('movie') }}'><i class='fa fa-film'></i><span>Películas</span></a></li>