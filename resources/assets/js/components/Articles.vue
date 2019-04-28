<template>

<h2> Event Factory Task</h2>

</template>

<script>
export default {
data(){
return{
blogs: [],
article: {
id:'',
title:'',
description:'',

},
blog_id:''

}
},
created(){
this.fetchBlogs();
},
method:{
fetchBlogs(){
fetch('api').then(res=> res.json()).then(res=>{ console.log(res.data)

})
}
}

}

</script>
