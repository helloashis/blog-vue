

export default{
    state:{
        
        categoryData: []
    },
    getters: {
        categories(state){
            return state.categoryData;
        }
    },

    actions:{
        getCategories(data){
            axios.get("get-category").then(function(response){
                data.commit("categories", response.data.category);
            }).catch(function(error){
                console.log(error);

            })
        }
    },

    mutations: {
        categories(state, data){
            state.categoryData = data;

        }
    },
}
