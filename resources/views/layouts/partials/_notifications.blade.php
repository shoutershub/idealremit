<div class="row">
	<div class="col-md-12">
		@if(session()->has('error'))
			<div class="alert alert-danger">
				{!! session()->get('error') !!}
			</div>
		@endif

		@if(session()->has('info'))
			<div class="alert alert-info">
				{!! session()->get('info') !!}
			</div>
		@endif
	</div>
</div>