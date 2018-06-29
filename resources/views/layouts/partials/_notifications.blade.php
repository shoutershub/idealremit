<div class="row">
	<div class="col-md-12">
		@if(session()->has('error'))
			<div class="alert alert-error">
				{!! session()->get('error') !!}
			</div>
		@endif

		@if(session()->has('info'))
			<div class="alert alert-info">
				{!! session()->get('info') !!}
			</div>
		@endif

        @if(session()->has('edit_successful'))
             <div class="alert alert-info">
					{!! session()->get('edit_successful') !!}
			 </div>
		@endif

		@if(session()->has('mail_duplicate_constraint'))
				<div class="alert alert-info">
					{!! session()->get('mail_duplicate_constraint') !!}
				</div>
		@endif
	</div>
</div>