var Lists;

$( document ).ready(function() {
   getLists();
});

function getLists(){
    axios.get('api/todo-list').then(function (response){

    }).catch(function (e){

    })


}
