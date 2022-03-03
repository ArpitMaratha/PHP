
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

function seterror(id, error) {
  // element = document.getElementById('id')
  // element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function validateform () {

    // var name = document.forms['myform']["first_name"].value;
    // console.log(name);
    //
    // return false;

//   var returnval = true;
//   var name = document.forms['myform']["first_name"].value;
//
//   if(name.length < 5)
//   seterror("name", "Length of name is too short")
//
//   returnval = false;
// }
//
// return returnval;
}
