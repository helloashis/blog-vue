<template>
    <div>

        <!-- Main content -->
        <section class="content">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-md-8 offset-md-2">
        				<div class="card">
			              <div class="card-header">
			                <h3 class="card-title">Create new category</h3>
			                <router-link to="/categories" class="btn btn-primary btn-sm float-right">Category List</router-link>
			              </div>
			              <!-- /.card-header -->
			              <form class="form-horizontal" @submit.prevent="addCategory">
			                <div class="card-body">
			                  <div class="form-group row">
			                    <label for="category" class="col-sm-3 col-form-label">Category Name</label>
			                    <div class="col-sm-9">
			                      <input type="text" v-model="form.name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" id="category" placeholder="Category name">
			                    	<has-error :form="form" field="name"></has-error>
								</div>
			                  </div>
							  <div class="form-group row">
			                    <label class="col-sm-3 col-form-label">Category Status</label>
			                    <div class="col-sm-6">
									<!-- radio -->
									<div class="form-group clearfix">
										<div class="icheck-success d-inline">
											<input type="radio" v-model="form.status" name="status" value="1" checked="" id="active">
											<label for="active">
												Active
											</label>
										</div>
										<div class="icheck-success d-inline">
											<input type="radio" v-model="form.status" name="status" value="0" id="inactive">
											<label for="inactive">
												Inactive
											</label>
										</div>
									</div>
									<span :class="{ 'is-invalid': form.errors.has('status') }"></span>
									<has-error :form="form" field="status"></has-error>
								</div>
			                  </div>
			                </div>
			                <!-- /.card-body -->
			                <div class="card-footer">
			                  <button type="submit" :disabled="form.busy" class="btn btn-success btn-sm float-right">Submit</button>
			                  <button type="reset" class="btn btn-danger btn-sm ">Cancel</button>
			                </div>
			                <!-- /.card-footer -->
			              </form>
			            </div>
        			</div>
        		</div>
        	</div>
        </section>
    </div>
</template>


<script>

	export default{
		name: "create",
		data : function () {
			return{
				form: new Form({
					name: null,
					status:null,
					
				})
			}
		},
		methods:{
			addCategory :  function(){
				let test = this;
				this.form.post('/add-category')
				.then(function (data) {
					toastr.success('Category added Success!');

					test.form.name=null;
					test.form.status=null;

				})
			}
		}
	
	}
</script>

