$(".admin-panel .admin-edit-table #table").on("change",function (){
    var url = $(this).val();
    $(".admin-panel .admin-edit-table .admin-table-columns").removeClass("hidden");
    $.get(url,function (data){
        Object.entries(data).forEach(function (value,index){
            var val = value[1];

            $(".admin-panel .admin-edit-table .admin-table-columns .admin-table-columns-list").append(`
            <div class="form-control">
                <input type="text" name="${val}" placeholder="${val}" class="w-full">
            </div>
            `);
        })
    });
});
