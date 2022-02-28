// document.getElementById('count').innerText = 10

// let count = 0
// console.log(count)

// let myAge = 23
// let humanDogRatio = 7
//
// let myDogAge = myAge * humanDogRatio
//
// console.log(myDogAge)


// let bonuspoint = 50
//
// console.log(bonuspoint)
//
// bonuspoint = bonuspoint + 50
//
// console.log(bonuspoint)
//
// bonuspoint = bonuspoint - 75
//
// console.log(bonuspoint)
//
// bonuspoint = bonuspoint + 45
//
// console.log(bonuspoint)

// let lap1 = 34
//
// let lap2 = 33
//
// let lap3 = 36
//
// function lapcount() {
//   let totaltime = lap1 + lap2 + lap3
//   console.log(totaltime)
// }
//
// lapcount()

// let lapsCompleted = 0
//
// function lapCompleted() {
//   lapsCompleted = lapsCompleted + 1
// }
// lapCompleted()
// lapCompleted()
// lapCompleted()
//
// console.log(lapsCompleted);

welcomeEL = document.getElementById('welcome-el')

let name = "Arpit"
let greeting = "Welcome back, "

welcomeEL.innerText = greeting + name
welcomeEL.innerText += " " + "👋"

let countEL = document.getElementById("count-el")

let count = 0

function increment() {
  count += 1
  countEL.textContent = count
}

saveEL= document.getElementById('save-el')

function save() {
  let countStr = count + " - "
  saveEL.textContent += countStr
  console.log(count)
  count = 0
  countEL.textContent = count
}

// let username = "Arpit"
//
// let message = "You have a new notification"
//
// let messageToUser = username + ", " + message + "!"
//
// console.log(messageToUser)

// let name = "Arpit Maratha"
//
// let message = "Hi, my name is"
//
// let myGreeting = message + " " + name
//
// console.log(myGreeting)
