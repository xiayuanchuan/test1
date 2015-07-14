/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var obj_storage_table = $('#storage_table');
var oStroage = window.localStorage;
$("#where_to_eat").click(
        function () {
            var str= "西红柿 白萝卜 蛋炒饭 水煮鱼 红烧鱼 金针菇";
            var arr= str.split(' ');
//            var arr = Array("西红柿", "白萝卜", "蛋炒饭");
            var i = arr.length * Math.random() - 1;
            i = Math.ceil(i);
            oStroage.setItem(arr[i],arr[i]);
            alert(arr[i]);
        }
);

//对数据库的操作
//$("#localstorage").click(function () {
//    var oStorage = window.localStorage;
//    var storage_text_obj = document.getElementById('storage_text');
//    if (oStorage.getItem('book1')) {
//        storage_text_obj.innerHTML = oStorage.book;
//    } else {
//        oStorage.setItem('book1', "<b>{bookName}</b>");
//        alert('oStorage.book1正在被创建');
//        //storage_text_obj.innerHTML=oStorage.book;
//    }
//});
function srul(obj) {
//    var val=obj.innerHTML;

    switch (obj) {
        case "修改":
            alert('修改');
            break;
        case "删除":
            alert('删除');
            break;
        case "添加":
            addSt();
            break;
        case '显示列表':
            listSt(oStroage);
            break;
        case "WebSQLDatabase":
            WebSQLDatabase();
            break;
    }
}

function addSt() {
    $("#stroage_text").children().css("display", "none");
    $("#add_st").css("display", "block");
}
$("#add_st_sub").click(function () {
    var key = $("#key_st").val();
    var value = $("#value_st").val();
    oStroage.setItem(key, value);
    alert("操作成功！");
    $("#key_st").val('');
    $("#value_st").val('');
});
function modfySt(key, value) {
    $("#stroage_text").children().css("display", "none");
    $("#add_st").css("display", "block");
    $("#key_st").val(key);
    $("#value_st").val(value);

}
function deleSt(key, i) {
    var conf = confirm('确定要删除吗?');
    if (conf) {
        oStroage.removeItem(key);
        listSt(oStroage);
    }

}
function listSt(oStroage) {
    var le = oStroage.length;
    $("#stroage_text").children().css("display", "none");
    obj_storage_table.css('display', 'block');
//    obj_storage_table.empty();
    $("table tr:gt(0)").remove();
    var str = '';
    var strKey = '';
    for (var i = 0; i < le; i++) {
        strKey = oStroage.key(i);
        str = oStroage.getItem(strKey);
//        var $ss="<tr><th><button ></button></th>"
        str = '<tr><th>' + i + '</th><th>' + strKey + '</th><th>' + str + '</th><th>' + '<button onclick="deleSt(\'' + strKey + '\')">删除' + '</button><button onclick="modfySt(\'' + strKey + '\',\'' + str + '\')">修改</button></th></tr>';
//        str="<tr><th>"+i+"</th><th>"+strKey+"</th><th>"+str+"</th><th><button onclick='deleSt("5")'>删除</button>"+"</th></tr>";
        obj_storage_table.append(str);
    }
    
    /***
     * WebSQLDatabase
     * 操作
     */
    
    var db;
    function WebSQLDatabase(){
        var db= window.openDatabase('mydb','1.0',"my first db",2*1024*1024);
        if(!db){
            alert('数据库连接失败');
            return false;
        }
        
        
    }
    function createShoppingCartTable(){
        db.transaction(function(tx){
            tx.executeSql( 
		"CREATE TABLE IF NOT EXISTS ShoppingCart " + 
        "(Id TEXT PRIMARY KEY, Name TEXT, Price REAL,Count INTEGER,Desc TEXT)", [],
         function(){ console.log('ShoppingCart database created successfully!' ); }, 
		 dbError 
		 ); 
            
        });
    }
}