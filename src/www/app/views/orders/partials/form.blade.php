	<p>
		{{Form::label('title', 'Title:')}}
	</p>
	<p>
		{{Form::text('title')}}
	</p>

	<p>
		{{Form::label('summary', 'Summary:')}}
	</p>
	<p>
		{{Form::text('summary')}}
	</p>

	<p>
		{{Form::label('more_info', 'More Info:')}}
	</p>
	<p>
		{{Form::textarea('more_info')}}
	</p>

	<p>
		{{Form::label('design_elements', 'Design Elements:')}}
	</p>
	<p>	
		{{Form::file('design_elements')}}
	</p>