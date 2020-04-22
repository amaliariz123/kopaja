<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

	<!-- BEGIN: Aside Menu -->
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item m-menu__item--submenu @yield('dashboard')" aria-haspopup="true">
				<a href="{{url ('/dashboard') }}" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-text">Dashboard</span>
				</a>
			</li>

			<li class="m-menu__section ">
				<h4 class="m-menu__section-text">AKUN</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>

			<li class="m-menu__item m-menu__item--submenu @yield('user')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/users/index')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-users"></i>
					<span class="m-menu__link-text">Pengguna</span>					
				</a>
			</li>

			<li class="m-menu__item @yield('members') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fas fa-user-friends"></i>
					<span class="m-menu__link-text">Member</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item @yield('members1')" aria-haspopup="true">
							<a href="{{url('/members')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Data member</span>
							</a>
						</li>
						<li class="m-menu__item @yield('members2')" aria-haspopup="true">
							<a href="{{url('/testimoni')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Testimoni</span>
							</a>
						</li>
						<li class="m-menu__item @yield('members3')" aria-haspopup="true">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Riwayat Pengerjaan Soal</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__section ">
				<h4 class="m-menu__section-text">SETTING PAJAK</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="m-menu__item m-menu__item--submenu @yield('pajak')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/pajak')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-calculator"></i>
					<span class="m-menu__link-text">Pajak</span>
				</a>
			</li>

			<li class="m-menu__section ">
				<h4 class="m-menu__section-text">SETTING SOAL</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="m-menu__item m-menu__item--submenu @yield('contoh')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/contoh_soal')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-file-alt"></i>
					<span class="m-menu__link-text">Contoh Soal</span>
				</a>	
			</li>
			<li class="m-menu__item m-menu__item--submenu @yield('latihan')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/latihan_soal')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-book-open"></i>
					<span class="m-menu__link-text">Latihan Soal</span>
				</a>
			</li>
			<li class="m-menu__item m-menu__item--submenu @yield('kuis')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/kuis')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-book-reader"></i>
					<span class="m-menu__link-text">Kuis</span>
				</a>
			</li>

			<li class="m-menu__section ">
				<h4 class="m-menu__section-text">Setting Aplikasi</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="m-menu__item m-menu__item--submenu @yield('bantuan')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url('/bantuan_aplikasi')}}" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fa fa-map-signs"></i>
					<span class="m-menu__link-text">Bantuan</span>
				</a>
			</li>
			<li class="m-menu__item @yield('about') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon fab fa-adn"></i>
					<span class="m-menu__link-text">Tentang</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu "><span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item @yield('aplikasi')" aria-haspopup="true">
							<a href="{{url('/tentang_aplikasi')}}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Tentang Aplikasi</span>
							</a>
						</li>
						<li class="m-menu__item @yield('developer')" aria-haspopup="true">
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
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->