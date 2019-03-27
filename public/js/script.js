function reg() {

var e = document.getElementById("type");
var type = e.options[e.selectedIndex].value;

if (type == 'student'){
    document.getElementById("lvl").style.display = "block";
    document.getElementById("age").style.display = "block";
} else if (type == 'teacher'){
    document.getElementById("lvl").style.display = "none";
    document.getElementById("age").style.display = "none";
}

}