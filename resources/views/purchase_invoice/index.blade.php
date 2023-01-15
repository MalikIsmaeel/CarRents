@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Pages</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Empty</span>
						</div>
					
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
<?php $i=0; ?>
				<!-- row -->
				<div class="row">
				<!--div-->
				<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">STRIPED ROWS</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Striped Rows.. <a href="">Learn more</a></p>
							</div>
							<a href="{{route('purchase.create')}}" class="btn btn-primary">Purchase Invoice</a>
								<div class="card-body">
								<div class="table-responsive">
									<table class="table table-striped mg-b-0 text-md-nowrap">
										<thead>



											<tr>
												<th>#</th>
												<th>company name</th>
												
												<th>supplier type</th>
												<th>tax id</th>
												<th>supplier region</th>
											</tr>
										</thead>
										<tbody>
										 @foreach($purchases as $purchase ) 
											 <tr>
											 <th scope="row">{{++$i}}</th>
												<td>{{$purchase->invoice_number }}  </td>
												<td>{{$purchase->supplier->company_name}}</td>
													<td>{{$purchase->invoice_date}}</td>
												<td>{{$purchase->date_due}}</td>
												
												<td>
											
											
												</td>
												<td>
												<a href="{{route('pur_entity',$purchase->id)}}" class="btn btn-primary">entity</a>
													
												<a href="{{route('purchase.edit',$purchase->id)}}" class="btn btn-primary">edit</a>
												<form id="delete" action="{{route('purchase.destroy',$purchase->id)}}" method="post">
														@csrf
														@method('DELETE')
											<button id="btnSend" class="btn btn-danger">مسح</button> 
											</form>	
											</td>
												</tr> 
											@endforeach
										</tbody>
										
									</table>
								</div><!-- bd -->
								
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
					<tfoot>{{ $purchases->links() }}</tfoot>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection