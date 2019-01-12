@extends('layouts.default')

@section('title', 'Tree View')

@push('css')
    <link href="/assets/plugins/jstree/themes/default/style.min.css" rel="stylesheet" />
@endpush

@section('content')
	<!-- begin breadcrumb -->
	<ol class="breadcrumb pull-right">
		<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
		<li class="breadcrumb-item"><a href="javascript:;">UI Elements</a></li>
		<li class="breadcrumb-item active">Tree View</li>
	</ol>
	<!-- end breadcrumb -->
	<!-- begin page-header -->
	<h1 class="page-header">Tree View <small>header small text goes here...</small></h1>
	<!-- end page-header -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-1">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Default Tree</h4>
				</div>
				<div class="panel-body">
					<div id="jstree-default">
						<ul>
							<li data-jstree='{"opened":true}' >
								Root node 1
								<ul>
									<li data-jstree='{"opened":true, "selected":true }'>Initially Selected</li>
									<li>Folder 1</li>
									<li>Folder 2</li>
									<li>Folder 3</li>
									<li data-jstree='{"opened":true}' >
										Initially open
										<ul>
											<li data-jstree='{"disabled":true}' >Disabled node</li>
											<li>Another node</li>
										</ul>
									</li>
									<li data-jstree='{ "icon" : "fa fa-warning fa-lg text-danger" }'>custom icon class (fontawesome)</li>
									<li data-jstree='{ "icon" : "fa fa-link fa-lg text-primary" }'><a href="http://www.jstree.com">Clickable link node</a></li>
								</ul>
							</li>
							<li>Root node 2</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-2">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Checkable Tree</h4>
				</div>
				<div class="panel-body">
					<div id="jstree-checkable"></div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
	
	<!-- begin row -->
	<div class="row">
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-3">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Contextual Menu with Drag & Drop</h4>
				</div>
				<div class="alert alert-info">
					<i class="fa fa-info-circle fa-fw"></i> All the opened & selected nodes will be saved in the user's browser.
				</div>
				<div class="panel-body">
					<div id="jstree-drag-and-drop">
					</div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
		<!-- begin col-6 -->
		<div class="col-lg-6">
			<!-- begin panel -->
			<div class="panel panel-inverse" data-sortable-id="tree-view-4">
				<div class="panel-heading">
					<div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
					</div>
					<h4 class="panel-title">Ajax Tree with Drag & Drop</h4>
				</div>
				<div class="alert alert-info">
					<i class="fa fa-info-circle fa-fw"></i> The tree nodes are loaded from date_root.json via ajax.
				</div>
				<div class="panel-body">
					<div id="jstree-ajax"></div>
				</div>
			</div>
			<!-- end panel -->
		</div>
		<!-- end col-6 -->
	</div>
	<!-- end row -->
@endsection

@push('scripts')
	<script src="/assets/plugins/jstree/jstree.min.js"></script>
	<script src="/assets/js/demo/ui-tree.demo.js"></script>
	<script>
		$(document).ready(function() {
			TreeView.init();
		});
	</script>
@endpush