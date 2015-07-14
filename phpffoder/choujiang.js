function getdata() {
    var fso = new ActiveXObject("Scripting.FileSystemObject");
    var f = fso.CreateTextFile("./data.txt", true);
    var str=f.ReadLine();
    alert(str);
//    f.WriteLine();
    f.Close();
}
function choujiang() {
getdata();
}