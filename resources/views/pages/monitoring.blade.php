@extends('layouts.app')

@section('title', 'Performance Monitoring')

@section('content')
<div class="container">
    <div class="row">
        @include('partials._sidebar2')
		<div class="main-content">
			
				<div class="title">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 " >
							<a href=""><span class="btn btn-primary">Grade Monitoring</span></a>
							<a href=""><span class="btn btn-warning">Other Concerns</span></a>
						</div>
					</div>
				</div>
				<br>



	

						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title" style="font-family: 'Josefin Sans', sans-serif;font-size:21px;">Student Information</h3>
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-3 col-lg-3 " align="center"> 
										<div class="well well-lg">
											<img src="/img/pic/stud.png" alt="" height="80px" width="80px">
											<p>image here</p>
										</div>
									</div>

									<div class=" col-md-9 col-lg-9 "> 
										<table class="table table-user-information">
											<tbody>

												<tr class="text-center">
													<td> <h4><b> Personal Information </center></b></h4></td>
												</tr>	
												
												<tr>
													<td>ID number:</td>
													<td> </td>
												</tr>
												<tr>
													<td>Full name:</td>
													<td> </td>
												</tr>
												<tr>
													<td>Date of Birth</td>
													<td></td>
												</tr>

												
													<tr>
														<td>Place of Birth:</td>
														<td></td>
													</tr>
													<tr>
														<td>Nationality</td>
														<td></td>
													</tr>
													<tr>
														<td>Contact Number:</td>
														<td></td>
													</tr>
													<tr>
														<td>E-mail Address:</td>
														<td></td>
													</tr>
													<tr>
														<td>Guardian:</td>
														<td></td>
													</tr>
													<tr>
														<td>Relationship:</td>
														<td></td>
													</tr>
													<tr>
														<td>Number of Guardian:</td>
														<td></td>
													</tr>
													<tr>
														<td>E-mail of Guardian:</td>
														<td></td>
													</tr>
													<tr>
														<td>Home Address:</td>
														<td></td>
													</tr>
													<tr>
														<td>Address while attending at UC:</td>
														<td></td>
													</tr>
													<tr>
														<td>Degree Program & Track:</td>
														<td></td>
													</tr>
													<tr>
														<td>Year Level:</td>
														<td></td>
													</tr>
													<tr>
														<td>Year Started attending in UC:</td>
														<td></td>
													</tr>
													<tr>
														<td>Means of Supporting Studies:</td>
														<td></td>
													</tr>

													<tr>
														<td class="text-center"><h4><b>Medical Information:</b></h4></td>
														
													</tr>
												
										</tr>						
								</tbody>

								
									

								

							
							

	



</table>


<a href="#" class="btn btn-primary" style="width:140px">Edit</a>

<a href="#" class="btn btn-primary" style="width:140px"> Homepage</a>
</div>
</div>
</div>


</div>
</div>
</div>
</div>

        
</div>
@endsection
