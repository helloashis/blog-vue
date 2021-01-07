<template>
    <div>

        <!-- Main content -->
        <section class="content">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-md-8 offset-md-2">
        				<div class="card">
						<div class="card-header">
							<h3 class="card-title">Category List</h3>
							
							<router-link to="/add-category" class="btn btn-primary btn-sm float-right">Add Category</router-link>
						</div>
						<!-- /.card-header -->
						<div class="card-body p-0">
							<table class="table table-sm">
							<thead>
								<tr>
								<th>Category Name</th>
								<th>Status</th>
								<th style="width: 40px">Action</th>
								</tr>
							</thead>
							<tbody>
								
								<tr v-for="items in categories">
								<td>{{ items.cat_name }}</td>
								<td>
									<div class="progress progress-xs">
									<div class="progress-bar progress-bar-danger" style="width: 55%"></div>
									</div>
								</td>
								<td>
									<a href="" class="btn btn-danger btn-sm">Delete</a>
								</td>
								</tr>
							</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						</div>
        			</div>
        		</div>
        	</div>
        </section>
    </div>
</template>


<script>
	export default{
		name: "manage",
		mounted(){
			this.$store.dispatch("getCategories");
		},
		computed:{
			categories(){
				return this.$store.getters.categories;
			}
		}
	}
</script>
