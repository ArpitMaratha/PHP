


document.querySelector('.cross').style.display = 'none';

document.querySelector('.hamburger').addEventListener("click", ()=>{
  document.querySelector('.sidebar').classList.toggle('sidebarGo');
if(document.querySelector('.sidebar').classList.contains('sidebarGo')) {
  setTimeout(() => {
  document.querySelector('.ham').style.display = 'inline'
} , 350);
  document.querySelector('.cross').style.display = 'none'
}
else {
  document.querySelector('.ham').style.display = 'none'
  setTimeout(() => {
  document.querySelector('.cross').style.display = 'inline'
} , 350);
}
})




//   var arr;
//   let text;
//   function addelement() {
//     arr = prompt("");
//
//   if (arr == null || arr == "") {
//     text.alert("User cancelled the prompt.");
//   } else {
//     var list= document.getElementById("thelist");
//
//     list.innerHTML += "<li>" + arr + "</li>";
//   }
//
//   // console.log(arr);
//
// }

function addelement() {

  var arr = [];
  for(x=0;x<1;x++) {
    arr[x] = prompt("Enter List tag name:");
    console.log(arr);
  }
  var cont = document.getElementById('thelist');


  var ul = document.createElement('ul');

  var a = document.createElement('a');
  var link = document.createTextNode(arr);

  a.appendChild(link);

  a.title = arr;

  a.href = "http://localhost:8080/Portfolio/index.php";

  for (i = 0; i <= arr.length - 1; i++) {
      var li = document.createElement('li');
      // li.innerHTML = arr[i];
      li.appendChild(a);
      ul.appendChild(li);
  }

  cont.appendChild(ul);
}

function addelement1() {

  var arr = [];
  for(x=0;x<1;x++) {
    arr[x] = prompt("Enter List tag name:");
    console.log(arr);
  }
  var cont = document.getElementById('thelist1');

  var ul = document.createElement('ul');

  for (i = 0; i <= arr.length - 1; i++) {
      var li = document.createElement('li');
      li.innerHTML = arr[i];
      ul.appendChild(li);
  }

  cont.appendChild(ul);
}

function edit() {
var p = prompt("Enter New Details!");
document.getElementById("p1").innerHTML = p;
}
