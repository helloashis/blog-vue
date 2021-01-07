<template>
    <div>

		<ul>
			<li v-for="category in categories">
				{{ category }}
			</li>
		</ul>
        
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
