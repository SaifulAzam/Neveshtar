		<div class="page-sidebar-wrapper">
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<div class="page-sidebar navbar-collapse collapse">
				<!-- BEGIN SIDEBAR MENU -->
				<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
				<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
				<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
				<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
				<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
				<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
				<ul class="page-sidebar-menu page-sidebar-menu-hover-submenu1" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
					<li class="heading">
						<h3>MENU</h3>
					</li>
					<li id="side-dashboard">
						<a href="/admin">
						<i class="icon-home"></i>
						<span class="title">Dashboard</span>
						</a>
					</li>
					<li id="side-settings">
						<a href="/admin/settings">
						<i class="icon-wrench"></i>
						<span class="title">Settings</span>
						</a>
					</li>

					<li id="side-categories">
						<a href="/admin/categories">
						<i class="icon-list"></i>
						<span class="title">Categories</span>
						</a>
					</li>
					<li id="side-items">
						<a href="/admin/items">
						<i class="icon-note"></i>
						<span class="title">Items</span>
						</a>
					</li>
					<li id="side-images">
						<a href="/admin/images">
						<i class="icon-picture"></i>
						<span class="title">Images</span>
						</a>
					</li>
					<li id="side-comments">
						<a href="/admin/comments">
						<i class="icon-bubbles"></i>
						<span class="title">Comments</span>
						@if(count($new_comments) > 0)
						<span class="badge badge-success">{{count($new_comments)}}</span>
						@endif
						</a>
					</li>
					<li id="side-comments">
						<a href="/admin/feedbacks">
						<i class="icon-bubble"></i>
						<span class="title">Feedbacks</span>
						@if(count($new_feedbacks) > 0)
						<span class="badge badge-danger">{{count($new_feedbacks)}}</span>
						@endif
						</a>
					</li>
					<li id="side-users">
						<a href="/admin/users">
						<i class="icon-user"></i>
						<span class="title">Users</span>
						</a>
					</li>
					<li id="side-users">
						<a href="/admin/testimonials">
						<i class="icon-emoticon-smile"></i>
						<span class="title">Testimonials</span>
						</a>
					</li>
				</ul>
				<!-- END SIDEBAR MENU -->
			</div>
		</div>