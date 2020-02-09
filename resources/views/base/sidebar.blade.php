<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item @yield('dashboard') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url ('/dashboard') }}" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon la la-dashboard"></i><span class="m-menu__link-text">Dashboard</span></a>
			</li>
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">PENGGUNA</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="m-menu__item @yield('user') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fas fa-user-cog"></i><span class="m-menu__link-text">Admin</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">

							<li class="m-menu__item @yield('user1')" aria-haspopup="true">
								<a href="" class="m-menu__link ">
									<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
									<span class="m-menu__link-text">List</span>
								</a>
							</li>
						
						<li class="m-menu__item @yield('user2')" aria-haspopup="true" m-menu-link-redirect="1">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Tambah</span>
							</a>
						</li> 
						
					</ul>
				</div>
			</li>
		
			<li class="m-menu__item @yield('members') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fas fa-user-friends"></i><span class="m-menu__link-text">Members</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">

						<li class="m-menu__item @yield('members1')" aria-haspopup="true">
							<a href="{{url('/members')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">List</span>
							</a>
						</li>

						<li class="m-menu__item @yield('members2')" aria-haspopup="true" m-menu-link-redirect="1">
							<a href="{{url('/testimoni')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Testimoni</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">SETTING PAJAK</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
		
			<li class="m-menu__item  m-menu__item--submenu @yield('pjkpusat')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/pajak_pusat')}}" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon fa fa-calculator"></i>
					<span class="m-menu__link-text">Pajak Pusat</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('pjkdaerah')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/pajak_daerah')}}" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon fas fa-newspaper"></i>
					<span class="m-menu__link-text">Pajak Daerah</span>
				</a>
			</li>

			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">MATERI DAN LATIHAN</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
		
			<li class="m-menu__item  m-menu__item--submenu @yield('materi')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon fa fa-file-alt"></i>
					<span class="m-menu__link-text">Materi Perpajakan</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('latihan')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fa fa-book-reader"></i><span class="m-menu__link-text">Latihan Soal</span>
				</a>
			</li>
			
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">SETTING SISTEM</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('bantuan')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/bantuan_aplikasi')}}" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon fa fa-map-signs"></i>
					<span class="m-menu__link-text">Bantuan</span>
				</a>
			</li>
			
			<li class="m-menu__item @yield('about') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fab fa-adn"></i><span class="m-menu__link-text">Tentang</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">

						<li class="m-menu__item @yield('aplikasi')" aria-haspopup="true">
							<a href="{{url('/tentang_aplikasi')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Tentang Aplikasi</span>
							</a>
						</li>

						<li class="m-menu__item @yield('contact')" aria-haspopup="true">
							<a href="{{url('/contact_media')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Contact Media</span>
							</a>
						</li>

						<li class="m-menu__item @yield('developer')" aria-haspopup="true" m-menu-link-redirect="1">
							<a href="{{url('/tim_pengembang')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Tim Pengembang</span>
							</a>
						</li>
					</ul>
				</div>
			</li>			

		</ul>
	</div>
</div>
