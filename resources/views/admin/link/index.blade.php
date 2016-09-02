@extends('admin.template.main')

@section('title', 'Links')

@section('pageHeader')
    <h1>Links</h1>
@endsection

@section('breadcrumb')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashborad</a></li>
        <li class="active">Link</li>
	</ol>
@endsection

@section('content')
	<div id="links-controller">
        <div class="row">
            <div class="col-sm-6">
                @include('admin.link.create')
            </div>
            <div class="col-sm-6">
                <h3>Links List</h3>
                <table class="table">
                	<thead>
                		<tr>
                			<th>ID</th>
                			<th>Name</th>
                			<th>Actions</th>
                		</tr>
                	</thead>
                    <tbody>
                        <tr v-for="link in links">
                            <td>@{{ link.id  }}</td>
                            <td>@{{ link.name }}</td>
                            <td>
                                <a href="#" @click.prevent="read(link.id)"><i class="fa fa-pencil-square-o"></i></a>
                                <a href="#" @click.prevent="delete(link.id)"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('admin.link.edit')
    </div>
@endsection

@section('js')
    <script src="/js/link.min.js"></script>
@endsection