@extends('layouts.app')

@section('title') Dashboard @endsection

@section('breadcrumbs')

    <ol class="breadcrumb">
        <li class="active">Home</li>
    </ol>

@endsection

@section('content')
	<div class="row">
		<div class="col-md-4">
            <div class="panel panel-default">
            	  <div class="panel-heading">
            			<h3 class="panel-title">Overview</h3>
            	  </div>
            	  <div class="panel-body">
            			<table class="table table-condensed">
            				<tbody>
            					<tr>
            						<td><strong>Keyword Groups</strong></td>
            						<td class="text-right">{!! number_format(\App\Keywordgroup::count()) !!}</td>
            					</tr>
                                <tr>
                                    <td><strong>Keywords</strong></td>
                                    <td class="text-right">{!! number_format(\App\Keyword::count()) !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>Domain Groups</strong></td>
                                    <td class="text-right">{!! number_format(\App\Domaingroup::count()) !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>Domains</strong></td>
                                    <td class="text-right">{!! number_format(\App\Domain::count()) !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>Pages</strong></td>
                                    <td class="text-right">{!! number_format(\App\Page::count()) !!}</td>
                                </tr>
                                <tr>
                                    <td><strong>Templates</strong></td>
                                    <td class="text-right">{!! number_format(\App\Domaintemplate::count()) !!}</td>
                                </tr>
            				</tbody>
            			</table>
            	  </div>
            </div>
		</div>
	</div>
@endsection