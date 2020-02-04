<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
	<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item @yield('dashboard') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="{{url ('/dashboard') }}" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon la la-dashboard"></i><span class="m-menu__link-text">Dashboard</span></a>
			</li>
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">ACCOUNTS</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			<li class="m-menu__item @yield('user') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fas fa-users-cog"></i><span class="m-menu__link-text">Admin</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
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
								<span class="m-menu__link-text">Create</span>
							</a>
						</li> 
						
						<li class="m-menu__item @yield('user3')" aria-haspopup="true" m-menu-link-redirect="1">
							<a href="{{url ('logactivity') }}" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Log Activity</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		
			<li class="m-menu__item @yield('customer') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fas fa-user-friends"></i><span class="m-menu__link-text">Customer</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">

						<li class="m-menu__item @yield('customer1')" aria-haspopup="true">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">List Registered Customer</span>
							</a>
						</li>

						<li class="m-menu__item @yield('customer2')" aria-haspopup="true" m-menu-link-redirect="1">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">List Sessions</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">SETTING SPT TAHUNAN</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
		
			<li class="m-menu__item  m-menu__item--submenu @yield('journey')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon far fa-file-word"></i>
					<span class="m-menu__link-text">Wording</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('Jenis pekerjaan')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon fas fa-user-tie"></i><span class="m-menu__link-text">Jenis Pekerjaan</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">

						<li class="m-menu__item @yield('Jenis pekerjaan List')" aria-haspopup="true">
							<a href=" " class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">List</span>
							</a>
						</li>
						
						<li class="m-menu__item @yield('Jenis pekerjaan Import')" aria-haspopup="true">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text">Import</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__section m-menu__section--first">
				<h4 class="m-menu__section-text">APPLICATION SETTING</h4>
				<i class="m-menu__section-icon flaticon-more-v2"></i>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('tutorial')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la la-map-signs"></i>
					<span class="m-menu__link-text">Email Contact Us</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('faq')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la-question-circle"></i>
					<span class="m-menu__link-text">Frequently Asked Question</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('sk')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la-dedent"></i>
					<span class="m-menu__link-text">Syarat dan Ketentuan</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('about')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la-font "></i>
					<span class="m-menu__link-text">About HiPajak</span>
				</a>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('version_setting')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la-gear"></i>
					<span class="m-menu__link-text">App Version Setting</span>
				</a>
			</li>
			
			<li class="m-menu__item @yield('autoresponse') m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon la la-paper-plane "></i><span class="m-menu__link-text">Auto Response</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item" aria-haspopup="true">
							<a href="" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
								<span class="m-menu__link-text"></span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			
			<li class="m-menu__item  m-menu__item--submenu @yield('textreplace')" aria-haspopup="true" m-menu-submenu-toggle="hover">
				<a href="" class="m-menu__link m-menu__toggle">
				<i class="m-menu__link-icon la la-stack-exchange"></i>
					<span class="m-menu__link-text">Text Replaces</span>
				</a>
			</li>

		</ul>
	</div>
</div>
