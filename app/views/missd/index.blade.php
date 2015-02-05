@extends('layout.missd')

@section('content')
	<style type="text/css">
	.options a {
		color: #fff;
	}

	.options a:hover {
		cursor: pointer;
	}
	</style>
	 <div class="container">
                <div class="row">

                	<div class="span6">
                		
                		<div class="register-info-wraper">
                			<div id="register-info">
                			
                				<h1 id="title-c">Are U Miss D , how sure are U?</h1>

                			
                				<ul dir="rtl" class="options" id="cont-c">
                					<li> <a id="1" class="opt">I'm 100% sure</a></li>
                					<li> <a id="2"class="opt">I'm 100.5% sure</a></li>
                					<li> <a id="3"class="opt">I'm 101% sure</a></li>
                			
                				</ul>
                				
                			</div>
                		</div>

                	</div>

                	<div class="span6" >

                		<div id="register-wraper" >
                			<div id="cont_md">
	                		    <form id="register-form" class="form">
	                		        <legend>Register to <span class="blue">MyApp</span></legend>
	                		    
	                		        <div class="body">
	                		        	<!-- first name -->
	                		        	<div class="control-group control-inline">
	                		        		<label for="name">First name</label>
	                		        		<input name="name" class="input-medium" type="text">
	                		        	</div>
	                		        	<!-- last name -->
	                		        	<div class="control-group control-inline">
	                		        		<label for="surname">Last name</label>
	                		        		<input name="surname" class="input-medium" type="text">
	                		        	</div>
	                		        	<!-- username -->
	                		        	<label>Username</label>
	                		        	<input class="input-huge" type="text">
	                		        	<!-- email -->
	                		        	<label>E-mail</label>
	                		        	<input class="input-huge" type="text">
	                		        	<!-- password -->
	                		        	<label>Password</label>
	                		        	<input class="input-huge" type="text">

	                		        </div>
	                		    
	                		        <div class="footer">
	                		            <label class="checkbox inline">
	                		                <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree to something I will never read
	                		            </label>
	                		            <button type="submit" class="btn btn-success">Register</button>
	                		        </div>
	                		    </form>
	                		  </div>  
                		</div>
                	</div>

                </div>
            </div>
            <input type="hidden" id="val_missD" value="1">
@stop