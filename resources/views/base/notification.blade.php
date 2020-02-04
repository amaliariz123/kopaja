@if(Session::has('error'))
	<div class="m-content" style="margin-bottom:-30px !important">
		<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert" style="margin-top: -20px; margin-bottom:3rem">
			<div class="m-alert__icon">
				<i class="flaticon-alert-1"></i>
				<span></span>
			</div>
			<div class="m-alert__text">
				<strong>
					Error!
				<br>
				</strong>
				@if (Session::get('error')=='Something when Wrong. Please try again.' || Session::get('error')=='Something when Wrong. Cannot Delete This Account')
					{{Session::get('error')}}
				@else
					@foreach(Session::get('error') as $e)
					- {{$e}} <br/>
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<?php Session::forget('error'); ?>
@endif

@if(Session::has('success'))
	<div class="m-content" style="margin-bottom:-30px !important">
		<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-success alert-dismissible fade show" role="alert" style="margin-top: -20px; margin-bottom:3rem">
			<div class="m-alert__icon">
				<i class="flaticon-alert-1"></i>
				<span></span>
			</div>
			<div class="m-alert__text">
				<strong>
					Success!
				</strong>
				@foreach(Session::get('success') as $s)
				 - {{$s}} <br/>
				@endforeach
			</div>
		</div>
	</div>
	<?php Session::forget('success'); ?>
@endif

@if(Session::has('warning'))
	<div class="m-content" style="margin-bottom:-30px !important">
		<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: -20px; margin-bottom:3rem">
			<div class="m-alert__icon">
				<i class="flaticon-exclamation-square"></i>
				<span></span>
			</div>
			<div class="m-alert__text">
				<strong>
					Warning!
				</strong>
				@foreach(Session::get('warning') as $s)
				 - {{$s}} <br/>
				@endforeach
			</div>
		</div>
	</div>
	<?php Session::forget('warning'); ?>
@endif
