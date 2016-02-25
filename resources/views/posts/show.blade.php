@extends('layouts.template')

@section('title', 'View Post | ')

@section('content')
<div>
    <div class="col-md-8">
      <h1>{{ $data->title }}</h1>
      <p class='lead'>{{ $data->body }}</p>
    </div>
    <div class="col-md-4">
	    <div class="well">
	     	<dl class="dl-horizontal">
	     		<dt>Created At:</dt>
	     		<dd>{{ date('M j, Y h:ia', strtotime($data->created_at)) }}</dd>
	     	</dl>
	     	<dl class="dl-horizontal">
	     		<dt>Last Updated:</dt>
	     		<dd>{{ date('M j, Y h:ia', strtotime($data->updated_at)) }}</dd>
	     	</dl>
	     	<hr>
			<div class="row">
				<div class="col-sm-6">
					{{ Html::linkRoute('posts.edit', 'Edit', array($data->id), array('class' => 'btn btn-primary btn-block')) }}
				</div>
				<div class="col-sm-6">
					{{ Html::linkRoute('posts.destroy', 'Delete', array($data->id), array('class' => 'btn btn-danger btn-block')) }}
				</div>
			</div>
	    </div>
    </div>
</div>
@endsection
